<?php
// Database connection config.
// Primary: Render/Heroku-style DATABASE_URL (postgres://user:pass@host:port/dbname).
// Fallback: individual PG* variables, then local defaults.

function _vexo_db_settings()
{
    $url = getenv('DATABASE_URL');
    if ($url && ($p = parse_url($url)) && !empty($p['host'])) {
        return array(
            'host' => $p['host'],
            'port' => isset($p['port']) ? (int)$p['port'] : 5432,
            'user' => isset($p['user']) ? urldecode($p['user']) : 'postgres',
            'pass' => isset($p['pass']) ? urldecode($p['pass']) : '',
            'name' => isset($p['path']) ? ltrim($p['path'], '/') : 'postgres',
        );
    }
    return array(
        'host' => getenv('PGHOST') ?: 'localhost',
        'port' => (int)(getenv('PGPORT') ?: 5432),
        'user' => getenv('PGUSER') ?: 'postgres',
        'pass' => getenv('PGPASSWORD') ?: '',
        'name' => getenv('PGDATABASE') ?: 'vexologistics',
    );
}

$__db = _vexo_db_settings();

// Site settings
$site_title = 'VEXO LOGISTICS';
$site_url   = getenv('SITE_URL') ?: 'https://vexologistics.online';
$site_email = getenv('SITE_EMAIL') ?: 'support@vexologistics.online';

$__dsn = sprintf('pgsql:host=%s;port=%d;dbname=%s', $__db['host'], $__db['port'], $__db['name']);
$__sslmode = getenv('DB_SSLMODE');
if ($__sslmode !== false && $__sslmode !== '') {
    $__dsn .= ';sslmode=' . $__sslmode;
}

try {
    $dbConn = new PDO($__dsn, $__db['user'], $__db['pass'], array(
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ));
} catch (PDOException $e) {
    die('Database connect failed. ' . $e->getMessage());
}

// Compatibility constants (mirror the old mysqli fetch-mode names used by callers).
if (!defined('MYSQL_NUM'))   define('MYSQL_NUM', PDO::FETCH_NUM);
if (!defined('MYSQL_ASSOC')) define('MYSQL_ASSOC', PDO::FETCH_ASSOC);
if (!defined('MYSQL_BOTH'))  define('MYSQL_BOTH', PDO::FETCH_BOTH);
if (!defined('MYSQLI_NUM'))   define('MYSQLI_NUM', PDO::FETCH_NUM);
if (!defined('MYSQLI_ASSOC')) define('MYSQLI_ASSOC', PDO::FETCH_ASSOC);
if (!defined('MYSQLI_BOTH'))  define('MYSQLI_BOTH', PDO::FETCH_BOTH);

// --- Query helpers: same names/signatures the app has always used. ---

function dbQuery($sql)
{
    global $dbConn;
    try {
        return $dbConn->query($sql);
    } catch (PDOException $e) {
        die('Query failed: ' . $e->getMessage());
    }
}

function dbAffectedRows()
{
    // Retained for compatibility; PDO exposes affected rows on the statement.
    return 0;
}

function dbFetchArray($result, $resultType = PDO::FETCH_NUM)
{
    if (!$result) return false;
    return $result->fetch($resultType);
}

function dbFetchAssoc($result)
{
    if (!$result) return false;
    return $result->fetch(PDO::FETCH_ASSOC);
}

function dbFetchRow($result)
{
    if (!$result) return false;
    return $result->fetch(PDO::FETCH_NUM);
}

function dbFreeResult($result)
{
    if ($result instanceof PDOStatement) {
        $result->closeCursor();
    }
    return true;
}

function dbNumRows($result)
{
    if (!$result) return 0;
    return $result->rowCount();
}

function dbInsertId()
{
    global $dbConn;
    return $dbConn->lastInsertId();
}

function dbEscape($value)
{
    // Escapes a value for inclusion inside single quotes in a Postgres
    // statement (standard_conforming_strings is on by default).
    return str_replace("'", "''", (string)$value);
}
?>
