<?
$title = 'Mailing Lists - Manager - Edit Details';
$description = '';
$keywords = '';
$menu = 'mail_manager';
include("inc/header.inc");
include("mail/manager/include.inc");
?>

<?
$title = 'Mailing Lists - Manager - Edit Details';
$subtitle = $row[name]." [".$row[email]."]";
include("inc/top.inc");
?>

<form action="/mail/manager/edit2.php" method="post">

<?

if ($error=="name")
{
 echo "<font color=\"red\">You did not enter a name</font><br>\n";
}

?>
<b>Name:</b><br><input type="text" name="name" size="50" maxlength="255" value="<? echo $row[name]; ?>"><br><br>
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
<b>E-Mail:</b><br><input type="text" name="email" size=50" maxlength="255" value="<? echo $row[email]; ?>"><br><br>
<br>
<b>HTML/Plain Text:</b><br><font size="1">There are two formats you can receive your mail, in either 'HTML' or 'Plain Text'.  Most e-mail clients (including <i>Outlook</i> and <i>Hotmail</i>) support 'HTML' e-mails.</font><br><br><input type="radio" name="h_t" value="h" style="BACKGROUND-COLOR: #f7f7f7" <? if($row[h_t]=="h") { echo "checked=\"true\""; } ?>>HTML  <input type="radio" name="h_t" value="t" style="BACKGROUND-COLOR: #f7f7f7" <? if($row[h_t]=="t") { echo "checked=\"true\""; } ?>>Plain Text<br><br>
<br>
<input type="submit" value="Edit Details">

</form>

<?

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>