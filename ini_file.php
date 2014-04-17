<?php

define("PROJECT_ROOT", "/projects/sms/");
define("ERROR_LOG_FILE",PROJECT_ROOT."log/error.log");
define("SESSION_PATH", PROJECT_ROOT."session/");
define("PHP_FIREWALL_LOG_FILE", PROJECT_ROOT."log/firewall.log");
define("ADMIN_MAIL", "admin@neowutran.net");


ob_start( "ob_gzhandler" );
ini_set( "log_errors", "1" );
ini_set( "track_errors", "1" );
ini_set( "session.save_path", SESSION_PATH );
ini_set( "session_set_cookie_params", 300 );
ini_set( "session.gc_maxlifetime", 300 );
set_time_limit( 300 );
//ini_set("error_reporting", E_ALL & ~E_NOTICE & ~E_DEPRECATED);
ini_set( "error_reporting", E_ALL );
ini_set( "allow_url_include", "0" );
ini_set( "register_globals", "0" );
ini_set( "magic_quotes_gpc", "0" );
ini_set( "ignore_repeated_errors", "1" );
ini_set( "display_errors", "1" );
ini_set( "display_startup_errors", "1" );
ini_set( "error_log",  ERROR_LOG_FILE);
ini_set( "session.use_cookies", "1" );
ini_set( "session.use_trans_sid", "0" );
ini_set( "session.use_only_cookies", "1" );
ini_set( "session.cookie_httponly", "1" );
//Si https utilisé, decommenter la ligne qui suis
ini_set("session.cookie_secure", "1");

ini_set( "session.hash_function", "whirlpool" );
ini_set( "session.auto_start", "1" );
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, x-requested-with, content-type, accept');
//date_default_timezone_set("Europe/Paris");
session_start();
session_cache_limiter( "private" );
error_reporting(-1);

