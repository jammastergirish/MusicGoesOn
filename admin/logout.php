<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

$result = mysql_query("SELECT * FROM users WHERE aSID = '$aSID'");

$aSID_ = $aSID;

if ($row = mysql_fetch_array($result))
{
 session_unregister("aSID");
 mysql_query ("UPDATE users SET aSID = '' WHERE aSID = '$aSID_'");
 if (ereg(".delcookie", $row[permissions]))
 {
  mysql_query("DELETE FROM visits WHERE CookieID = '$CookieID'");
 }
 header("Location: http://www.musicgoeson.com/admin/loggedout.php?CookieID=$CookieID");
}
else
{
 header("Location: http://www.musicgoeson.com/");
}

?>