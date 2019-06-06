<?
$title = 'Mailing Lists - Manager';
$description = '';
$keywords = '';
$menu = 'mail_manager';
include("inc/header.inc");
include("mail/manager/include.inc");
?>

<?
$title = 'Mailing Lists - Manager';
$subtitle = $row[name]." [".$row[email]."]";
include("inc/top.inc");
?>

<?

if (empty($row[pass]))
{
 echo "<CENTER><font color=\"red\">You need to change your PASSWORD, as it is currently blank<br><a class=\"link_onf7f7f7\" href=\"pass.php\"><b>CLICK HERE TO CHANGE YOUR PASSWORD</b></a></font></CENTER>";
 echo "<hr><br>";
}

if (empty($row[name]))
{
 echo "You need to click on <a class=\"link_onf7f7f7\" href=\"edit.php\">Edit Details</a> and enter your name.  You will probably want to change the format you receive your e-mails as well.";
 echo "<hr><br>";
}

?>

Here is a list of all of <i>Music Goes On</i>'s mailing lists.  The lists that you are
subscribed to are checked.  To join a mailing list check the box, to be removed from a list
uncheck the box.
<br><br>

<form action="/mail/manager/lists2.php" method="post" name="form">

<?

$result = mysql_query("SELECT * FROM artists ORDER BY artist");

echo "\n\n";
echo "<SCRIPT LANGUAGE=\"JavaScript\">\n";
echo "<!-- Begin\n";
echo "function CheckAll()\n";
echo " {\n";
while ($data = mysql_fetch_array($result))
{
 echo " document.form.$data[id].checked = true;\n";
}
echo " }\n";
echo "//  End -->\n";
echo "</script>\n\n";

?>

<input type="button" value="Select All Artists" onClick="CheckAll()"><br><br>

<?

$result = mysql_query("SELECT * FROM artists ORDER BY artist");

while ($data = mysql_fetch_array($result))
{
 if (ereg($data[id], $row[lists]))
 {
  echo "<input type=\"checkbox\" name=\"$data[id]\" value=\"1\" style=\"BACKGROUND-COLOR: #f7f7f7\" checked=\"true\"><a class=\"link_onf7f7f7\" href=\"/artists/artist.php/$data[id]/\">$data[artist]</a><br>\n";
 }
 else
 {
  if ($row[lists]=="--ALL LISTS--")
  {
   echo "<input type=\"checkbox\" name=\"$data[id]\" value=\"1\" style=\"BACKGROUND-COLOR: #f7f7f7\" checked=\"true\"><a class=\"link_onf7f7f7\" href=\"/artists/artist.php/$data[id]/\">$data[artist]</a><br>\n";
  }
  else
  {
   echo "<input type=\"checkbox\" name=\"$data[id]\" value=\"1\" style=\"BACKGROUND-COLOR: #f7f7f7\"><a class=\"link_onf7f7f7\" href=\"/artists/artist.php/$data[id]/\">$data[artist]</a><br>\n";
  }
 }
}

?>

<br><br>

<input type="submit" value="Subscribe/Unsubscribe">

<?

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>