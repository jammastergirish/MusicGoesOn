<?php
//20180403 https://training.kalzumeus.com/newsletters/archive/lifecycle_emails_3?__s=masu37fnwbjxsp1ycikb, https://betterexplained.com/articles/how-to-optimize-your-site-with-gzip-compression/, http://www.gidblog.com/compress-your-web-page/, http://www.gidnetwork.com/tools/gzip-test.php
ob_start( 'ob_gzhandler' );

error_reporting(E_ALL);

$DB_host = null;
$DB_username = "readonly";
require_once("password.inc"); // contains nothing but $DB_password = "XXX";
$DB_name = "mgo";
$DB_instance_name = "girishgupta:europe-west1:music-goes-on";

$link = mysqli_connect($DB_host, $DB_username, $DB_password, $DB_name, 0, "/cloudsql/".$DB_instance_name);

if (!$link)
{
 echo "Unable to connect to database." . PHP_EOL;
 echo "<br>Debugging error: " . mysqli_connect_errno()." ".mysqli_connect_error() . PHP_EOL;
 exit;
}

/*****/

include_once($_SERVER["DOCUMENT_ROOT"]."/inc/functions.inc");

/*****/

/*

session_save_path($_SERVER["DOCUMENT_ROOT"]."/session_data");
session_name("SID");
session_start();
$SID = session_id();

if (!empty($HTTP_COOKIE_VARS[CookieID]) || $HTTP_COOKIE_VARS[CookieID]!=0)
{
 $CookieID = update_user($HTTP_COOKIE_VARS[CookieID], datetime());
}
else
{
 // AND SID = '".session_id()."'
 if ($tmpvar = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM visits WHERE user_agent = '$HTTP_SERVER_VARS[HTTP_USER_AGENT]' AND remote_host = '$HTTP_SERVER_VARS[REMOTE_HOST]' AND remote_addr = '$HTTP_SERVER_VARS[REMOTE_ADDR]' ORDER BY datetime DESC LIMIT 0,1")))
 {
  $CookieID = update_user($tmpvar[CookieID], datetime());
  SetCookie("CookieID", $CookieID, time()+315360000, "/", ".musicgoeson.com");
 }
 else
 {
  $CookieID = add_user(datetime());
  update_user($CookieID, datetime());
 }
}

*/

/*****/

delete_from_visits();
live(datetime());
forum_users();

?>