<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

$result = mysqli_query($link, "SELECT * FROM users WHERE aSID = '$aSID'");

$aSID_ = $aSID;

if ($row = mysqli_fetch_array($result))
{
 session_unregister("aSID");
 mysql_query ("UPDATE users SET aSID = '' WHERE aSID = '$aSID_'");
 if (ereg(".delcookie", $row[permissions]))
 {
  mysqli_query($link, "DELETE FROM visits WHERE CookieID = '$CookieID'");
 }
 header("Location: https://mgo.girish-gupta.com/admin/loggedout.php?CookieID=$CookieID");
}
else
{
 header("Location: https://mgo.girish-gupta.com/");
}

?>