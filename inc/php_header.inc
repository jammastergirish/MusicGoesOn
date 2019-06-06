<?php
//20180403 https://training.kalzumeus.com/newsletters/archive/lifecycle_emails_3?__s=masu37fnwbjxsp1ycikb, https://betterexplained.com/articles/how-to-optimize-your-site-with-gzip-compression/, http://www.gidblog.com/compress-your-web-page/, http://www.gidnetwork.com/tools/gzip-test.php
ob_start( 'ob_gzhandler' );

error_reporting(0);

mysql_connect("localhost", "girishgu_mgo", "sanibel");
mysql_select_db("girishgu_mgo");

/*****/

include_once("inc/functions.inc");

/*****/

/*

session_save_path($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/session_data");
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
 if ($tmpvar = mysql_fetch_array(mysql_query("SELECT * FROM visits WHERE user_agent = '$HTTP_SERVER_VARS[HTTP_USER_AGENT]' AND remote_host = '$HTTP_SERVER_VARS[REMOTE_HOST]' AND remote_addr = '$HTTP_SERVER_VARS[REMOTE_ADDR]' ORDER BY datetime DESC LIMIT 0,1")))
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