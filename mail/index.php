<?
$title = 'Mailing Lists';
$description = '';
$keywords = '';
$menu = 'mail';
include("inc/header.inc");
?>

<?
$title = 'Mailing Lists';
include("inc/top.inc");
?>

Welcome to <i>Music Goes On</i>'s mailing lists.  All you need to do to subscribe is fill in the following information and select the lists you want to subscribe to.
<br><br>
<form action="/mail/subscribe.php" method="post">

<?

if ($error=="name")
{
 echo "<font color=\"red\">You did not enter a name</font><br>\n";
}

?>
<b>Name:</b><br><input type="text" name="name" size="50" maxlength="255" value="<? echo $name; ?>"><br><br>
<?

if ($error=="email")
{
 echo "<font color=\"red\">You did not enter a valid e-mail address</font><br>\n";
 $email = '';
}

if ($error=="email_exists")
{
 echo "<font color=\"red\">The e-mail address you entered is already subscribed to our mailing lists.</font><br>\n";
 $email = '';
}

?>
<b>E-Mail:</b><br><? if (empty($email)) { echo "<input type=\"text\" name=\"email\" size=\"50\" maxlength=\"255\"><br><br>"; } else { echo "<input type=\"hidden\" name=\"email\" value=\"$email\"> <a class=\"link_onf7f7f7\" href=\"mailto:$email\">$email</a><br><br>"; } ?>
<br>
<?

if ($error=="pass")
{
 echo "<font color=\"red\">Your passwords did not match</font><br>\n";
}

?>
<b>Password:</b><br><input type="password" name="pass" value="<? echo $pass; ?>"><br><br>
<b>Re-type password:</b><br><input type="password" name="pass2" value=""><br><br>
<br>
<b>HTML/Plain Text:</b><br><font size="1">There are two formats you can receive your mail, in either 'HTML' or 'Plain Text'.  Most e-mail clients (including <i>Outlook</i> and <i>Hotmail</i>) support 'HTML' e-mails.</font><br><br><input type="radio" name="h_t" value="h" style="BACKGROUND-COLOR: #f7f7f7" <? if($h_t=="h") { echo "checked=\"true\""; } ?>>HTML  <input type="radio" name="h_t" value="t" style="BACKGROUND-COLOR: #f7f7f7" <? if($h_t=="t") { echo "checked=\"true\""; } ?>>Plain Text<br><br>
<br>
<input type="submit" value="Select Lists...">

</form>

<?

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>