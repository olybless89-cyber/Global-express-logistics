-- VEXO LOGISTICS — PostgreSQL schema
-- Imported on first boot by docker/entrypoint.sh when tbl_courier_officers is absent.

CREATE TABLE IF NOT EXISTS tbl_courier (
  cid          SERIAL PRIMARY KEY,
  cons_no      varchar(20)  NOT NULL DEFAULT '',
  s_name       varchar(100) NOT NULL DEFAULT '',
  s_mail       varchar(100) NOT NULL DEFAULT '',
  s_phone      varchar(20)  NOT NULL DEFAULT '',
  s_add        varchar(200) NOT NULL DEFAULT '',
  r_name       varchar(100) NOT NULL DEFAULT '',
  r_mail       varchar(100) NOT NULL DEFAULT '',
  r_phone      varchar(20)  NOT NULL DEFAULT '',
  r_add        varchar(200) NOT NULL DEFAULT '',
  type         varchar(40)  NOT NULL DEFAULT '',
  weight       varchar(10)  NOT NULL DEFAULT '',
  invoice_no   varchar(20)  NOT NULL DEFAULT '',
  qty          integer      NOT NULL DEFAULT 0,
  freight      varchar(30)  NOT NULL DEFAULT '',
  mode         varchar(20)  NOT NULL DEFAULT '',
  pmode        varchar(30)  NOT NULL DEFAULT '',
  pick_date    varchar(100) NOT NULL DEFAULT '',
  dept_date    varchar(100) NOT NULL DEFAULT '',
  status       varchar(100) NOT NULL DEFAULT '',
  product      varchar(100) NOT NULL DEFAULT '',
  origin       varchar(100) NOT NULL DEFAULT '',
  destination  varchar(100) NOT NULL DEFAULT '',
  lat          varchar(255) NOT NULL DEFAULT '',
  lon          varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE IF NOT EXISTS tbl_courier_officers (
  cid          SERIAL PRIMARY KEY,
  officer_name varchar(40)  NOT NULL DEFAULT '',
  off_pwd      varchar(255) NOT NULL DEFAULT '',
  address      varchar(250) NOT NULL DEFAULT '',
  email        varchar(100) NOT NULL DEFAULT '',
  ph_no        varchar(12)  NOT NULL DEFAULT '',
  office       varchar(100) NOT NULL DEFAULT '',
  reg_date     timestamp    NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS tbl_courier_track (
  id               SERIAL PRIMARY KEY,
  cid              integer      NOT NULL DEFAULT 0,
  cons_no          varchar(20)  NOT NULL DEFAULT '',
  update_date      varchar(50)  NOT NULL DEFAULT '',
  current_city     varchar(100) NOT NULL DEFAULT '',
  new_status       varchar(300) NOT NULL DEFAULT '',
  comments         varchar(255) NOT NULL DEFAULT '',
  current_location varchar(300) NOT NULL DEFAULT '',
  bk_time          varchar(50)  NOT NULL DEFAULT '',
  r_name           varchar(255) NOT NULL DEFAULT '',
  r_phone          varchar(255) NOT NULL DEFAULT '',
  r_mail           varchar(255) NOT NULL DEFAULT '',
  r_add            varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE IF NOT EXISTS tbl_offices (
  id             SERIAL PRIMARY KEY,
  off_name       varchar(100) NOT NULL DEFAULT '',
  address        varchar(230) NOT NULL DEFAULT '',
  city           varchar(100) NOT NULL DEFAULT '',
  ph_no          varchar(20)  NOT NULL DEFAULT '',
  office_time    varchar(100) NOT NULL DEFAULT '',
  contact_person varchar(100) NOT NULL DEFAULT ''
);

-- Seed admin officer. The entrypoint replaces this hash with a random,
-- unusable one on boot, so admin login must come from the ADMIN_* env vars.
INSERT INTO tbl_courier_officers (officer_name, off_pwd, address, email, ph_no, office, reg_date)
VALUES ('admin', '$2y$10$0mgFszz0uUHSgEJUWn76UeNXO4SSsbwR9cnSSw41Qah9z86URmYhu',
        'VEXO LOGISTICS', 'support@vexologistics.online', '000000000000', 'VEXO LOGISTICS',
        '2011-01-30 09:25:21');
