<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

$user = strtolower($user);
$password = strtolower($password);

$date = gmdate("jmY");
$hour = gmdate("G");

if ($row = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM users WHERE user = '$user' AND password = password('$password')")))
{
 $aSID = $date.'--'.$hour.'--'.$SID;
 session_unregister("aSID");
 mysqli_query($link, "UPDATE users SET aSID = '' WHERE user = '$user'");
 session_register("aSID");
 mysqli_query($link, "UPDATE users SET aSID = '$aSID' WHERE user = '$user'");
 header("Location: https://mgo.girish-gupta.com/admin/admin.php");
}
else
{
 header("Location: https://mgo.girish-gupta.com/admin/index.php?login=failed");
}

?>