<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

if (empty($pass1))
{
 header("Location: https://mgo.girish-gupta.com/forums/edit.php?error=emptypass");
 exit;
}

if ($pass1!=$pass2)
{
 header("Location: https://mgo.girish-gupta.com/forums/edit.php?error=pass");
 exit;
}

if (empty($name))
{
 header("Location: https://mgo.girish-gupta.com/forums/edit.php?error=name");
 exit;
}

if (!IsEmail($email))
{
 header("Location: https://mgo.girish-gupta.com/forums/edit.php?error=email");
 exit;
}

$name = addslashes($name);
$email = addslashes($email);
$icq = addslashes($icq);
$msn_messenger = addslashes($msn_messenger);
$aim = addslashes($aim);
$yahoo_im = addslashes($yahoo_im);
$signature = addslashes($signature);

mysql_query("UPDATE forum_users SET password = password('$pass1'), name = '$name', email = '$email', CookieID = '$CookieID', icq = '$icq', msn_messenger = '$msn_messenger', aim = '$aim', yahoo_im = '$yahoo_im', signature = '$signature' WHERE SID = '$SID'");
header("Location: https://mgo.girish-gupta.com/forums/".$goto); 

?>