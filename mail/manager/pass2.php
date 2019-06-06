<?

if ($pass==$pass2)
{
}
else
{
 header("Location: http://www.musicgoeson.com/mail/manager/pass.php?error=pass");
}

$title = 'Mailing Lists - Manager - Change Password';
$description = '';
$keywords = '';
$menu = 'mail_manager';
include("inc/header.inc");
include("mail/manager/include.inc");
?>

<?
$title = 'Mailing Lists - Manager - Change Password';
include("inc/top.inc");
?>

<?

mysql_query("UPDATE mail SET pass = password('$pass') WHERE SID = '$SID'");

?>

Your password has been changed.

<?

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>