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
include("/home/girishgu/public_html/mgo/inc/header.inc");
include("/home/girishgu/public_html/mgo/mail/manager/include.inc");
?>

<?
$title = 'Mailing Lists - Manager - Change Password';
include("/home/girishgu/public_html/mgo/inc/top.inc");
?>

<?

mysql_query("UPDATE mail SET pass = password('$pass') WHERE SID = '$SID'");

?>

Your password has been changed.

<?

include("/home/girishgu/public_html/mgo/inc/middle.inc");
include("/home/girishgu/public_html/mgo/inc/bottom.inc");
include("/home/girishgu/public_html/mgo/inc/footer.inc");

?>