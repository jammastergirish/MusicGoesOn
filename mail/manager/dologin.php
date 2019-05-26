<?
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

$email = strtolower($email);
$pass = strtolower($pass);

if ($row = mysql_fetch_array(mysql_query("SELECT * FROM mail WHERE email = '$email' AND pass = password('$pass')")))
{
 mysql_query ("UPDATE mail SET SID = '$SID', CookieID = '$CookieID' WHERE email = '$email'");
 header("Location: http://www.musicgoeson.com/mail/manager/lists.php");
}
else
{
 header("Location: http://www.musicgoeson.com/mail/manager/index.php?login=failed");
}

?>