<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");
$section = 'mailinglist';
admin($HTTP_SESSION_VARS["aSID"], $HTTP_COOKIE_VARS["SID"]);
$title = 'Admin - Mailing List - Send Mail';
$description = '';
$keywords = '';
$menu = 'admin';
$php_header = 'false';
include("inc/header.inc");
?>

<?php
$title = 'Admin - Mailing List - Send Mail';
$subtitle = $aSID;
include("inc/top.inc");
?>

<script language="JavaScript">
<!--
function Confirm()
{
 if (confirm("Are you sure you want to send this message?"))
  document.Send.submit();
}
//-->
</script>

<form action="/admin/mailinglist/send.php" method="post" name="Send"> 
<b>Subject:</b><br><input type=text name="subject" size="60" value="<?php echo $subject; ?>"><br>
<b>Message (HTML):</b><br><textarea name="message_html" rows="25" cols="60"><?php echo $message_html; ?></textarea><br><br>
<b>Message (Plain Text):</b><br><textarea name="message_text" rows="25" cols="60"><?php echo $message_text; ?></textarea><br><br>
<select name="to1">
<option></option>
<?php
$result = mysql_query("SELECT * FROM artists ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<option value=\"$data[id]\">$data[artist]</option>";
}
?>
</select>
<br>
<select name="to2">
<option></option>
<?php
$result = mysql_query("SELECT * FROM artists ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<option value=\"$data[id]\">$data[artist]</option>";
}
?>
</select>
<br>
<select name="to3">
<option></option>
<?php
$result = mysql_query("SELECT * FROM artists ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<option value=\"$data[id]\">$data[artist]</option>";
}
?>
</select>
<br>
<select name="to4">
<option></option>
<?php
$result = mysql_query("SELECT * FROM artists ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<option value=\"$data[id]\">$data[artist]</option>";
}
?>
</select>
<br><br>
<input type="checkbox" name="all" value="1" style="BACKGROUND-COLOR: #FFFFFF">Send to ALL
<br><br>
<input type="button" value="Submit" align="absmiddle" onClick="javascript:Confirm()"> 
</form>

<?php

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>