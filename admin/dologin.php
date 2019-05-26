<?
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

$user = strtolower($user);
$password = strtolower($password);

$date = gmdate("jmY");
$hour = gmdate("G");

if ($row = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE user = '$user' AND password = password('$password')")))
{
 $aSID = $date.'--'.$hour.'--'.$SID;
 session_unregister("aSID");
 mysql_query("UPDATE users SET aSID = '' WHERE user = '$user'");
 session_register("aSID");
 mysql_query("UPDATE users SET aSID = '$aSID' WHERE user = '$user'");
 header("Location: http://www.musicgoeson.com/admin/admin.php");
}
else
{
 header("Location: http://www.musicgoeson.com/admin/index.php?login=failed");
}

?>