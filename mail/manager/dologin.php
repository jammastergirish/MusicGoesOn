<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

$email = strtolower($email);
$pass = strtolower($pass);

if ($row = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM mail WHERE email = '$email' AND pass = password('$pass')")))
{
 mysql_query ("UPDATE mail SET SID = '$SID', CookieID = '$CookieID' WHERE email = '$email'");
 header("Location: https://mgo.girish-gupta.com/mail/manager/lists.php");
}
else
{
 header("Location: https://mgo.girish-gupta.com/mail/manager/index.php?login=failed");
}

?>