<?php
include("/home/mgo/musicgoeson-www/inc/php_header.php");

if (empty($name))
{
 header("Location: http://www.musicgoeson.com/mail/manager/edit.php?email=$email&h_t=$h_t&error=name");
}

if (empty($email))
{
 header("Location: http://www.musicgoeson.com/mail/manager/edit.php?name=$name&h_t=$h_t&error=email");
}

if ($row = mysql_fetch_array(mysql_query("SELECT * FROM mail WHERE email = '$email'")))
{
 header("Location: http://www.musicgoeson.com/mail/manager/edit.php?name=$name&h_t=$h_t&error=email_exists");
}

if (ereg("@", $email))
{
}
else
{
 header("Location: http://www.musicgoeson.com/mail/manager/edit.php?name=$name&h_t=$h_t&error=email");
}

if (ereg(".", $email))
{
}
else
{
 header("Location: http://www.musicgoeson.com/mail/manager/edit.php?name=$name&h_t=$h_t&error=email");
}

if ($pass==$pass2)
{
}
else
{
 header("Location: http://www.musicgoeson.com/mail/manager/edit.php?name=$name&email=$email&h_t=$h_t&error=pass");
}

if (empty($h_t))
{
 header("Location: http://www.musicgoeson.com/mail/manager/edit.php?name=$name&email=$email&error=h_t");
}

$title = 'Mailing Lists - Manager - Edit Details';
$description = '';
$keywords = '';
$menu = 'mail_manager';
$php_header = 'false';
include("inc/header.inc");
include("mail/manager/include.inc");
?>

<?php
$title = 'Mailing Lists - Manager - Edit Details';
include("inc/top.inc");
?>

<?php

mysql_query("UPDATE mail SET name = '$name', email = '$email', h_t = '$h_t' WHERE SID = '$SID'");

?>

Your details have been changed.

<?php

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>