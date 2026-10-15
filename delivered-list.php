<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();


$sql = "SELECT cid, cons_no, s_add, s_name, s_phone, s_mail, r_phone, r_add, r_mail, r_name, type, product, origin, destination, qty, weight, mode, freight, pick_date, dept_date,  invoice_no, status
		FROM tbl_courier
		WHERE status = 'Delivered'
		ORDER BY cid DESC 
		LIMIT 0, 20";
$result = dbQuery($sql);		

?>
<!DOCTYPE html>
<html lang="en" class="wf-flaticon-n4-inactive wf-fontawesome5solid-n4-active wf-fontawesome5regular-n4-active wf-fontawesome5brands-n4-active wf-simplelineicons-n4-active wf-lato-n3-active wf-lato-n4-active wf-lato-n7-active wf-lato-n9-active wf-active" style="height: 100%;"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><style type="text/css">.swal-icon--error{border-color:#f27474;-webkit-animation:animateErrorIcon .5s;animation:animateErrorIcon .5s}.swal-icon--error__x-mark{position:relative;display:block;-webkit-animation:animateXMark .5s;animation:animateXMark .5s}.swal-icon--error__line{position:absolute;height:5px;width:47px;background-color:#f27474;display:block;top:37px;border-radius:2px}.swal-icon--error__line--left{-webkit-transform:rotate(45deg);transform:rotate(45deg);left:17px}.swal-icon--error__line--right{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);right:16px}@-webkit-keyframes animateErrorIcon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}to{-webkit-transform:rotateX(0deg);transform:rotateX(0deg);opacity:1}}@keyframes animateErrorIcon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}to{-webkit-transform:rotateX(0deg);transform:rotateX(0deg);opacity:1}}@-webkit-keyframes animateXMark{0%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}to{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}@keyframes animateXMark{0%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}to{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}.swal-icon--warning{border-color:#f8bb86;-webkit-animation:pulseWarning .75s infinite alternate;animation:pulseWarning .75s infinite alternate}.swal-icon--warning__body{width:5px;height:47px;top:10px;border-radius:2px;margin-left:-2px}.swal-icon--warning__body,.swal-icon--warning__dot{position:absolute;left:50%;background-color:#f8bb86}.swal-icon--warning__dot{width:7px;height:7px;border-radius:50%;margin-left:-4px;bottom:-11px}@-webkit-keyframes pulseWarning{0%{border-color:#f8d486}to{border-color:#f8bb86}}@keyframes pulseWarning{0%{border-color:#f8d486}to{border-color:#f8bb86}}.swal-icon--success{border-color:#a5dc86}.swal-icon--success:after,.swal-icon--success:before{content:"";border-radius:50%;position:absolute;width:60px;height:120px;background:#fff;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal-icon--success:before{border-radius:120px 0 0 120px;top:-7px;left:-33px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:60px 60px;transform-origin:60px 60px}.swal-icon--success:after{border-radius:0 120px 120px 0;top:-11px;left:30px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:0 60px;transform-origin:0 60px;-webkit-animation:rotatePlaceholder 4.25s ease-in;animation:rotatePlaceholder 4.25s ease-in}.swal-icon--success__ring{width:80px;height:80px;border:4px solid hsla(98,55%,69%,.2);border-radius:50%;box-sizing:content-box;position:absolute;left:-4px;top:-4px;z-index:2}.swal-icon--success__hide-corners{width:5px;height:90px;background-color:#fff;padding:1px;position:absolute;left:28px;top:8px;z-index:1;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal-icon--success__line{height:5px;background-color:#a5dc86;display:block;border-radius:2px;position:absolute;z-index:2}.swal-icon--success__line--tip{width:25px;left:14px;top:46px;-webkit-transform:rotate(45deg);transform:rotate(45deg);-webkit-animation:animateSuccessTip .75s;animation:animateSuccessTip .75s}.swal-icon--success__line--long{width:47px;right:8px;top:38px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-animation:animateSuccessLong .75s;animation:animateSuccessLong .75s}@-webkit-keyframes rotatePlaceholder{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}to{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@keyframes rotatePlaceholder{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}to{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@-webkit-keyframes animateSuccessTip{0%{width:0;left:1px;top:19px}54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}to{width:25px;left:14px;top:45px}}@keyframes animateSuccessTip{0%{width:0;left:1px;top:19px}54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}to{width:25px;left:14px;top:45px}}@-webkit-keyframes animateSuccessLong{0%{width:0;right:46px;top:54px}65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}to{width:47px;right:8px;top:38px}}@keyframes animateSuccessLong{0%{width:0;right:46px;top:54px}65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}to{width:47px;right:8px;top:38px}}.swal-icon--info{border-color:#c9dae1}.swal-icon--info:before{width:5px;height:29px;bottom:17px;border-radius:2px;margin-left:-2px}.swal-icon--info:after,.swal-icon--info:before{content:"";position:absolute;left:50%;background-color:#c9dae1}.swal-icon--info:after{width:7px;height:7px;border-radius:50%;margin-left:-3px;top:19px}.swal-icon{width:80px;height:80px;border-width:4px;border-style:solid;border-radius:50%;padding:0;position:relative;box-sizing:content-box;margin:20px auto}.swal-icon:first-child{margin-top:32px}.swal-icon--custom{width:auto;height:auto;max-width:100%;border:none;border-radius:0}.swal-icon img{max-width:100%;max-height:100%}.swal-title{color:rgba(0,0,0,.65);font-weight:600;text-transform:none;position:relative;display:block;padding:13px 16px;font-size:27px;line-height:normal;text-align:center;margin-bottom:0}.swal-title:first-child{margin-top:26px}.swal-title:not(:first-child){padding-bottom:0}.swal-title:not(:last-child){margin-bottom:13px}.swal-text{font-size:16px;position:relative;float:none;line-height:normal;vertical-align:top;text-align:left;display:inline-block;margin:0;padding:0 10px;font-weight:400;color:rgba(0,0,0,.64);max-width:calc(100% - 20px);overflow-wrap:break-word;box-sizing:border-box}.swal-text:first-child{margin-top:45px}.swal-text:last-child{margin-bottom:45px}.swal-footer{text-align:right;padding-top:13px;margin-top:13px;padding:13px 16px;border-radius:inherit;border-top-left-radius:0;border-top-right-radius:0}.swal-button-container{margin:5px;display:inline-block;position:relative}.swal-button{background-color:#7cd1f9;color:#fff;border:none;box-shadow:none;border-radius:5px;font-weight:600;font-size:14px;padding:10px 24px;margin:0;cursor:pointer}.swal-button[not:disabled]:hover{background-color:#78cbf2}.swal-button:active{background-color:#70bce0}.swal-button:focus{outline:none;box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(43,114,165,.29)}.swal-button[disabled]{opacity:.5;cursor:default}.swal-button::-moz-focus-inner{border:0}.swal-button--cancel{color:#555;background-color:#efefef}.swal-button--cancel[not:disabled]:hover{background-color:#e8e8e8}.swal-button--cancel:active{background-color:#d7d7d7}.swal-button--cancel:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(116,136,150,.29)}.swal-button--danger{background-color:#e64942}.swal-button--danger[not:disabled]:hover{background-color:#df4740}.swal-button--danger:active{background-color:#cf423b}.swal-button--danger:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(165,43,43,.29)}.swal-content{padding:0 20px;margin-top:20px;font-size:medium}.swal-content:last-child{margin-bottom:20px}.swal-content__input,.swal-content__textarea{-webkit-appearance:none;background-color:#fff;border:none;font-size:14px;display:block;box-sizing:border-box;width:100%;border:1px solid rgba(0,0,0,.14);padding:10px 13px;border-radius:2px;transition:border-color .2s}.swal-content__input:focus,.swal-content__textarea:focus{outline:none;border-color:#6db8ff}.swal-content__textarea{resize:vertical}.swal-button--loading{color:transparent}.swal-button--loading~.swal-button__loader{opacity:1}.swal-button__loader{position:absolute;height:auto;width:43px;z-index:2;left:50%;top:50%;-webkit-transform:translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%);text-align:center;pointer-events:none;opacity:0}.swal-button__loader div{display:inline-block;float:none;vertical-align:baseline;width:9px;height:9px;padding:0;border:none;margin:2px;opacity:.4;border-radius:7px;background-color:hsla(0,0%,100%,.9);transition:background .2s;-webkit-animation:swal-loading-anim 1s infinite;animation:swal-loading-anim 1s infinite}.swal-button__loader div:nth-child(3n+2){-webkit-animation-delay:.15s;animation-delay:.15s}.swal-button__loader div:nth-child(3n+3){-webkit-animation-delay:.3s;animation-delay:.3s}@-webkit-keyframes swal-loading-anim{0%{opacity:.4}20%{opacity:.4}50%{opacity:1}to{opacity:.4}}@keyframes swal-loading-anim{0%{opacity:.4}20%{opacity:.4}50%{opacity:1}to{opacity:.4}}.swal-overlay{position:fixed;top:0;bottom:0;left:0;right:0;text-align:center;font-size:0;overflow-y:auto;background-color:rgba(0,0,0,.4);z-index:10000;pointer-events:none;opacity:0;transition:opacity .3s}.swal-overlay:before{content:" ";display:inline-block;vertical-align:middle;height:100%}.swal-overlay--show-modal{opacity:1;pointer-events:auto}.swal-overlay--show-modal .swal-modal{opacity:1;pointer-events:auto;box-sizing:border-box;-webkit-animation:showSweetAlert .3s;animation:showSweetAlert .3s;will-change:transform}.swal-modal{width:478px;opacity:0;pointer-events:none;background-color:#fff;text-align:center;border-radius:5px;position:static;margin:20px auto;display:inline-block;vertical-align:middle;-webkit-transform:scale(1);transform:scale(1);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;z-index:10001;transition:opacity .2s,-webkit-transform .3s;transition:transform .3s,opacity .2s;transition:transform .3s,opacity .2s,-webkit-transform .3s}@media (max-width:500px){.swal-modal{width:calc(100% - 20px)}}@-webkit-keyframes showSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1)}1%{-webkit-transform:scale(.5);transform:scale(.5)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}@keyframes showSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1)}1%{-webkit-transform:scale(.5);transform:scale(.5)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}</style>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Delivered Consignment</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="css/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="css/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />



	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	 <link href="assets/home/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
	<script src="assets/home/SpryTabbedPanels.js.download" type="text/javascript"></script>
	<link type="text/css" rel="stylesheet" charset="UTF-8" href="assets/home/translateelement.css"><script type="text/javascript" charset="UTF-8" src="assets/home/main.js.download"></script>
	
</head>
<body>


<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="##" class="logo">
					<img src="assets/home/logo.png"  width="150" height="50" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						
						
						
															<!-- GTranslate: https://gtranslate.io/ -->
			
			<style type="text/css">
			<!--
			a.gflag {vertical-align:middle;font-size:16px;padding:1px 0;background-repeat:no-repeat;background-image:url(//gtranslate.net/flags/16.png);}
			a.gflag img {border:0;}
			a.gflag:hover {background-image:url(//gtranslate.net/flags/16a.png);}
			#goog-gt-tt {display:none !important;}
			.goog-te-banner-frame {display:none !important;}
			.goog-te-menu-value:hover {text-decoration:none !important;}
			body {top:0 !important;}
			#google_translate_element2 {display:none!important;}
			-->
			</style>

			 <select onchange="doGTranslate(this);"><option value="">Select Language</option><option value="en|af">Afrikaans</option><option value="en|sq">Albanian</option><option value="en|ar">Arabic</option><option value="en|hy">Armenian</option><option value="en|az">Azerbaijani</option><option value="en|eu">Basque</option><option value="en|be">Belarusian</option><option value="en|bg">Bulgarian</option><option value="en|ca">Catalan</option><option value="en|zh-CN">Chinese (Simplified)</option><option value="en|zh-TW">Chinese (Traditional)</option><option value="en|hr">Croatian</option><option value="en|cs">Czech</option><option value="en|da">Danish</option><option value="en|nl">Dutch</option><option value="en|en">English</option><option value="en|et">Estonian</option><option value="en|tl">Filipino</option><option value="en|fi">Finnish</option><option value="en|fr">French</option><option value="en|gl">Galician</option><option value="en|ka">Georgian</option><option value="en|de">German</option><option value="en|el">Greek</option><option value="en|ht">Haitian Creole</option><option value="en|iw">Hebrew</option><option value="en|hi">Hindi</option><option value="en|hu">Hungarian</option><option value="en|is">Icelandic</option><option value="en|id">Indonesian</option><option value="en|ga">Irish</option><option value="en|it">Italian</option><option value="en|ja">Japanese</option><option value="en|ko">Korean</option><option value="en|lv">Latvian</option><option value="en|lt">Lithuanian</option><option value="en|mk">Macedonian</option><option value="en|ms">Malay</option><option value="en|mt">Maltese</option><option value="en|no">Norwegian</option><option value="en|fa">Persian</option><option value="en|pl">Polish</option><option value="en|pt">Portuguese</option><option value="en|ro">Romanian</option><option value="en|ru">Russian</option><option value="en|sr">Serbian</option><option value="en|sk">Slovak</option><option value="en|sl">Slovenian</option><option value="en|es">Spanish</option><option value="en|sw">Swahili</option><option value="en|sv">Swedish</option><option value="en|th">Thai</option><option value="en|tr">Turkish</option><option value="en|uk">Ukrainian</option><option value="en|ur">Urdu</option><option value="en|vi">Vietnamese</option><option value="en|cy">Welsh</option><option value="en|yi">Yiddish</option></select><div id="google_translate_element2"><div class="skiptranslate goog-te-gadget" dir="ltr" style=""><div id=":0.targetLanguage"><select class="goog-te-combo" aria-label="Language Translate Widget"><option value="">Select Language</option><option value="af">Afrikaans</option><option value="sq">Albanian</option><option value="am">Amharic</option><option value="ar">Arabic</option><option value="hy">Armenian</option><option value="az">Azerbaijani</option><option value="eu">Basque</option><option value="be">Belarusian</option><option value="bn">Bengali</option><option value="bs">Bosnian</option><option value="bg">Bulgarian</option><option value="ca">Catalan</option><option value="ceb">Cebuano</option><option value="ny">Chichewa</option><option value="zh-CN">Chinese (Simplified)</option><option value="zh-TW">Chinese (Traditional)</option><option value="co">Corsican</option><option value="hr">Croatian</option><option value="cs">Czech</option><option value="da">Danish</option><option value="nl">Dutch</option><option value="eo">Esperanto</option><option value="et">Estonian</option><option value="tl">Filipino</option><option value="fi">Finnish</option><option value="fr">French</option><option value="fy">Frisian</option><option value="gl">Galician</option><option value="ka">Georgian</option><option value="de">German</option><option value="el">Greek</option><option value="gu">Gujarati</option><option value="ht">Haitian Creole</option><option value="ha">Hausa</option><option value="haw">Hawaiian</option><option value="iw">Hebrew</option><option value="hi">Hindi</option><option value="hmn">Hmong</option><option value="hu">Hungarian</option><option value="is">Icelandic</option><option value="ig">Igbo</option><option value="id">Indonesian</option><option value="ga">Irish</option><option value="it">Italian</option><option value="ja">Japanese</option><option value="jw">Javanese</option><option value="kn">Kannada</option><option value="kk">Kazakh</option><option value="km">Khmer</option><option value="rw">Kinyarwanda</option><option value="ko">Korean</option><option value="ku">Kurdish (Kurmanji)</option><option value="ky">Kyrgyz</option><option value="lo">Lao</option><option value="la">Latin</option><option value="lv">Latvian</option><option value="lt">Lithuanian</option><option value="lb">Luxembourgish</option><option value="mk">Macedonian</option><option value="mg">Malagasy</option><option value="ms">Malay</option><option value="ml">Malayalam</option><option value="mt">Maltese</option><option value="mi">Maori</option><option value="mr">Marathi</option><option value="mn">Mongolian</option><option value="my">Myanmar (Burmese)</option><option value="ne">Nepali</option><option value="no">Norwegian</option><option value="or">Odia (Oriya)</option><option value="ps">Pashto</option><option value="fa">Persian</option><option value="pl">Polish</option><option value="pt">Portuguese</option><option value="pa">Punjabi</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sm">Samoan</option><option value="gd">Scots Gaelic</option><option value="sr">Serbian</option><option value="st">Sesotho</option><option value="sn">Shona</option><option value="sd">Sindhi</option><option value="si">Sinhala</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="so">Somali</option><option value="es">Spanish</option><option value="su">Sundanese</option><option value="sw">Swahili</option><option value="sv">Swedish</option><option value="tg">Tajik</option><option value="ta">Tamil</option><option value="tt">Tatar</option><option value="te">Telugu</option><option value="th">Thai</option><option value="tr">Turkish</option><option value="tk">Turkmen</option><option value="uk">Ukrainian</option><option value="ur">Urdu</option><option value="ug">Uyghur</option><option value="uz">Uzbek</option><option value="vi">Vietnamese</option><option value="cy">Welsh</option><option value="xh">Xhosa</option><option value="yi">Yiddish</option><option value="yo">Yoruba</option><option value="zu">Zulu</option></select></div>Powered by <span style="white-space:nowrap"><a class="goog-logo-link" href="https://translate.google.com/" target="_blank"><img src="assets/home/googlelogo_color_42x16dp.png" width="37px" height="14px" style="padding-right: 3px" alt="Google Translate">Translate</a></span></div></div>
			<script type="text/javascript">
			function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
			</script>

			<script type="text/javascript" src="assets/home/f.txt"></script>


			<script type="text/javascript">
			/* <![CDATA[ */
			eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
			/* ]]> */
			</script>
				 <div id="news">
				
			  </div>

						
						
					</div>
					
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="scroll-wrapper sidebar-wrapper scrollbar scrollbar-inner" style="position: relative;"><div class="sidebar-wrapper scrollbar scrollbar-inner scroll-content" style="height: 654px; margin-bottom: 0px; margin-right: 0px; max-height: none;">
			 
					<ul class="nav nav-primary">
                                             <!------Side Bar----------->
                                            	   <center>
          <table>
              <tbody><tr>
			  	    <td width="180" height="120">
			                               	   <center>
          <table>
              <tr><td style="text-align: center;"><canvas id="canvas_tt5d7e7de324c9e" width="120" height="120"></canvas></td></tr>
              <tr><td style="text-align: center; font-weight: bold"><a href="//24timezones.com/world_directory/time_in_pago_pago.php" style="text-decoration: none" class="clock24" id="tz24-1568570851-c11033-eyJzaXplIjoiMTUwIiwiYmdjb2xvciI6IkZGOTkwMCIsImxhbmciOiJlbiIsInR5cGUiOiJhIiwiY2FudmFzX2lkIjoiY2FudmFzX3R0NWQ3ZTdkZTMyNGM5ZSJ9" title="Pago Pago clock" target="_blank" rel="nofollow"></a></td></tr>
          </table>
<script type="text/javascript" src="//w.24timezones.com/l.js" async></script>

</center>






	</tr>
          </tbody></table>
		  
		  
<script type="text/javascript" src="assets/home/l.js.download" async=""></script>

</center>


<li class="nav-section"> 
</li>
<li class="nav-item"> <a href="admin.php"><img src="assets/home/1.png"> <p style="color:blue;"> <strong>&nbsp;&nbsp; Main Menu</strong></p> </a> </li>

<li class="nav-item"> <a href="add-courier.php"><img src="assets/home/8.png"> <p style="color:green;"> <strong>&nbsp;&nbsp; Create Shippments</strong></p> </a> </li><li class="nav-item"> <a href="courier-list.php"><img src="assets/home/5.PNG"> <p style="color:brown;"> <strong>&nbsp;&nbsp;List of Shippments</strong></p> </a> </li>
<li class="nav-item  active"> <a href="delivered-list.php"><img src="assets/home/10.png"> <p style="color:red;"> <strong>&nbsp;&nbsp; Delivered Shippments</strong></p> </a> </li>
<li class="nav-item"> <a href="search-edit.php"><img src="assets/home/2.png"><p style="color:brown;"> <strong>&nbsp;&nbsp;Search & Edit</strong></p> </a> </li>
<li class="nav-item"> <a href="change-password.php"><img src="assets/home/4.png"> <p style="color:brown;"> <strong>&nbsp;&nbsp; Change Password</strong></p> </a> </li> 
<li class="nav-item"> <a href="process.php?action=logOut"><img src="assets/home/9.png"> <p style="color:teal;"> <strong>&nbsp;&nbsp; Logout</strong></p> </a> </li> 
	
 
                                              	   
                                            	   <!------Side Bar----------->
						 
					</ul>
				</div><div class="scroll-element scroll-x"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar ui-draggable ui-draggable-handle" style="width: 100px;"></div></div></div><div class="scroll-element scroll-y"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar ui-draggable ui-draggable-handle" style="height: 100px;"></div></div></div></div>
		</div>
		
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				   <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Admin Dashboard</h2>
								<h5 class="text-white op-7 mb-2">
								    <strong>Welcome back:: Administrator</strong><br>
                            logged  User IP: <?php echo $_SERVER['REMOTE_ADDR']; ?>						    
								    
								</h5>
							</div>
							
						</div>
					</div>
				</div>
				
				
	<script language="JavaScript">
var checkflag = "false";

function check(field) {
if (checkflag == "false")
 {
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=true;	
	}
	}
	checkflag = "true";
}
else
{
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=false;
	}
	}
	checkflag = "false";
}

}
function confirmDel(field,msg)
{
	count=0;
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll" && field[i].checked==true)
	{
	count++;
	}
	}
	
	if(count == 0)
	{
		alert("Select any one record to delete!");
		return false;
	}
	else
	{
		return confirm(msg);
	}
}
</script>
	<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                 
                </div>
                <div class="card-body">
				
				
                 <table id="TableTab" class="table-responsive" class="table table-bordered table-striped no-more-tables dataTable no-footer" role="grid" aria-describedby="TableTab_info" style="width: 1040px;">
                            <thead>
                            <tr role="row">
							<th class="sorting" tabindex="0" aria-controls="TableTab" rowspan="1" colspan="1" aria-label="Consign. No.: activate to sort column ascending" style="width: 170px;">Consign. No.</th>
							<th class="sorting" tabindex="0" aria-controls="TableTab" rowspan="1" colspan="1" aria-label="Origin: activate to sort column ascending" style="width: 120px;">Origin</th>
							<th class="sorting" tabindex="0" aria-controls="TableTab" rowspan="1" colspan="1" aria-label="Destination: activate to sort column ascending" style="width: 120px;">Destination</th>
							<th class="sorting" tabindex="0" aria-controls="TableTab" rowspan="1" colspan="1" aria-label="Deptdate: activate to sort column ascending" style="width: 130px;">Dept Date</th>
							<th class="sorting" tabindex="0" aria-controls="TableTab" rowspan="1" colspan="1" aria-label="PickupDate: activate to sort column ascending" style="width: 130px;">Pickup Date</th>
							<th style="display: none; width: 0px;" class="sorting_desc" tabindex="0" aria-controls="TableTab" rowspan="1" colspan="1" aria-sort="descending" aria-label="hidepickupdate: activate to sort column ascending">hidepickupdate</th>
							<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Action" style="width: 318px;">Action</th>
							</tr>
                            </thead>
							
							<?php
	
	while($data = dbFetchAssoc($result)){
	extract($data);	
	?>
                            <tbody>
                            	                                	
                      	<tr role="row" class="odd">
				<td data-title="Consign. No.">
				<button class="btn btn-flat btn-xs btn-link" data-toggle="modal" data-target="" title="View Shipment" style="font-size:14px; font-weight:bold;"><?php echo $cons_no; ?></button></td>
				<td data-title="Origin"><?php echo $origin; ?></td>
				<td data-title="Destination"><?php echo $destination; ?></td>
				<td data-title="Deptdate"><?php echo $dept_date; ?></td>
				<td data-title="PickupDate"><?php echo $pick_date; ?></td>
		
				<td data-title="Action">
				<button class="btn btn-flat btn-xs btn-primary" data-toggle="modal" data-target="#edit-courier.php?cid=<?php echo $cid; ?>" title="View Shipment"><i class="fa fa-eye"></i></button>
				&nbsp; <form method="post" action="edit-courier.php?cid=<?php echo $cid; ?>" style="display:inline;">
				<a href="edit-courier.php?cid=<?php echo $cid; ?>"><button class="btn btn-flat btn-xs btn-success">Update Status</button></a> &nbsp; 
				
				
			<a href="delete.php?cid=<?php echo $cid; ?>"><span class="btn btn-flat btn-xs btn-danger"><i class="fa fa-trash"></i></span></a> 
					
 <?php
	}//while
	?>
<div class="modal fade printcontent" id="edit-courier.php?cid=<?php echo $cid; ?>" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">                                      
            <div class="modal-header">
            
              <h4 class="modal-title">Consignment No. : <strong><?php echo $cons_no; ?></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <span class="pull-right"><button type="button" class="btn bg-purple btn-flat btn-sm"><?php echo $status; ?></button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    </span></h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <h4 style="font-weight:bold;">Shipper Details</h4>
                        <div style="border: solid 1px #ddd; border-radius:4px; padding-left:5px; line-height:24px;">
                            Shipper's Name:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $s_name; ?><br>
                            Shipper's Location:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $s_add; ?><br>
                            Shipper's Email:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $s_mail; ?><br> 
							Shipper's Phone:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $s_phone; ?><br> 
							</div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <h4 style="font-weight:bold;">Receiver Details</h4>
                        <div style="border: solid 1px #ddd; border-radius:4px; padding-left:5px; line-height:24px;">
                           Receiver's Name:&nbsp;&nbsp; <?php echo $r_name; ?><br>
                           Receiver's Location:&nbsp;&nbsp; <?php echo $r_add; ?><br>
                           Receiver's Email:&nbsp;&nbsp; <?php echo $r_mail; ?><br> 
						Receiver's Phone:&nbsp;&nbsp; <?php echo $r_phone; ?><br>
						</div>
						<p>&nbsp;</p>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul class="list-group list-group-bordered col-md-12">
                            <li class="list-group-item">
                              <b>Bill Of Lading:&nbsp;&nbsp;</b> <a class="pull-right"><?php echo $invoice_no; ?> </a>
                            </li>
                            <li class="list-group-item">
                              <b>Type of Shipment:&nbsp;&nbsp;</b> <a class="pull-right"><?php echo $type; ?></a>
                            </li>
                            <li class="list-group-item">
                              <b>Content of Product:&nbsp;&nbsp;</b> <a class="pull-right"><?php echo $product; ?></a>
                            </li>
                            <li class="list-group-item">
                              <b>Pickup Date:&nbsp;&nbsp;</b> <a class="pull-right"><?php echo $pick_date; ?></a>
                            </li>
                            
                        </ul>
                    </div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul class="list-group list-group-bordered col-md-12">
                            <li class="list-group-item">
                              <b>Quantity of Product:&nbsp;&nbsp;</b> <a class="pull-right"><?php echo $qty; ?></a>
                            </li>
                            <li class="list-group-item">
                              <b>Weight of Product:&nbsp;&nbsp;</b> <a class="pull-right"><?php echo $weight; ?>&nbsp;kg</a>
                            </li>
                            <li class="list-group-item">
                              <b>Mode of Transport:&nbsp;&nbsp;</b> <a class="pull-right"><?php echo $mode; ?></a>
                            </li>
                            <li class="list-group-item">
                              <b>Total Due Amount:&nbsp;&nbsp;</b> <a class="pull-right"><?php echo $freight; ?></a>
                            </li>
                                                    </ul>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                </div>
            </div> 
            <div class="modal-footer">
            	 <button type="button" class="close" data-dismiss="modal">close</button>
            </div>                                        
        </div>
    </div>
</div>                                        </td>
                                    </tr>
									</tbody>
                          </table>
				  
				  
				  
				  
				  
				  
			 </div>	  
				  
				  
                </div>
              </div>
            </div>
          
          </div>
        </div>

 

 
													
	 
		 	<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="##">
									Secured
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="##">
									Reliable
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="##">
									Easy
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						 Copyright &copy;
             <script>
              document.write(new Date().getFullYear())
            </script>, Global Express Logistics. All Rights Reserved <img src="assets/home/secure.gif"> 
					</div>				
				</div>
			</footer
			
			
			</div>
	</div>
	<!--   Core JS Files   -->
	<script src="assets/home/jquery.3.2.1.min.js.download"></script>
	<script src="assets/home/popper.min.js.download"></script>
	<script src="assets/home/bootstrap.min.js.download"></script>

	<!-- jQuery UI -->
	<script src="assets/home/jquery-ui.min.js.download"></script>
	<script src="assets/home/jquery.ui.touch-punch.min.js.download"></script>

	<!-- jQuery Scrollbar -->
	<script src="assets/home/jquery.scrollbar.min.js.download"></script>


	<!-- Chart JS -->
	<script src="assets/home/chart.min.js.download"></script>

	<!-- jQuery Sparkline -->
	<script src="assets/home/jquery.sparkline.min.js.download"></script>

	<!-- Chart Circle -->
	<script src="assets/home/circles.min.js.download"></script>

	<!-- Datatables -->
	<script src="assets/home/datatables.min.js.download"></script>

	<!-- Bootstrap Notify -->
	<script src="assets/home/bootstrap-notify.min.js.download"></script>

	<!-- jQuery Vector Maps -->
	<script src="assets/home/jquery.vmap.min.js.download"></script>
	<script src="assets/home/jquery.vmap.world.js.download"></script>

	<!-- Sweet Alert -->
	<script src="assets/home/sweetalert.min.js.download"></script>

	<!-- Atlantis JS -->
	<script src="assets/home/atlantis.min.js.download"></script>

	

</body></html>