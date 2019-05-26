<?
$title = 'Mailing Lists - Manager - Login';
$description = '';
$keywords = '';
$menu = 'mail';
include("/home/girishgu/public_html/mgo/inc/header.inc");
?>

<?
$title = 'Mailing Lists - Manager - Login';
include("/home/girishgu/public_html/mgo/inc/top.inc");
?>

<? if ($login=="failed") { ?>
<font color="red">Your e-mail/password has not been recognised, please try again:</font><br>
<? } else { ?><? } ?>

<form action="/mail/manager/dologin.php" method="post"> 
<b>E-Mail:</b> <input type="text" name="email" size="50" value="<? echo $email; ?>">
<br>
<b>Password:</b> <input type="password" name="pass" size="50" value="<? echo $pass; ?>">
<br><br>
<br>
<input type="submit" value="Login" align="absmiddle">
</form>

<?

include("/home/girishgu/public_html/mgo/inc/middle.inc");
include("/home/girishgu/public_html/mgo/inc/bottom.inc");
include("/home/girishgu/public_html/mgo/inc/footer.inc");

?>