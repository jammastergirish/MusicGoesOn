<?
$title = 'Mailing Lists - Manager - Change Password';
$description = '';
$keywords = '';
$menu = 'mail_manager';
include("/home/girishgu/public_html/mgo/inc/header.inc");
include("/home/girishgu/public_html/mgo/mail/manager/include.inc");
?>

<?
$title = 'Mailing Lists - Manager - Change Password';
$subtitle = $row[name]." [".$row[email]."]";
include("/home/girishgu/public_html/mgo/inc/top.inc");
?>

<form action="/mail/manager/pass2.php" method="post">

<?

if ($error=="pas")
{
 echo "<font color=\"red\">Your passwords did not match.</font><br>\n";
}

?>

<b>New password:</b><br><input type="password" name="pass" size="50" maxlength="255" value=""><br><br>
<b>Re-type new password:</b><br><input type="password" name="pass2" size="50" maxlength="255" value=""><br><br>
<br>
<input type="submit" value="Change Password">

</form>

<?

include("/home/girishgu/public_html/mgo/inc/middle.inc");
include("/home/girishgu/public_html/mgo/inc/bottom.inc");
include("/home/girishgu/public_html/mgo/inc/footer.inc");

?>