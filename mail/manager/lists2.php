<?
$title = 'Mailing Lists - Manager - Subscribe/Unsubscribe';
$description = '';
$keywords = '';
$menu = 'mail_manager';
include("/home/girishgu/public_html/mgo/inc/header.inc");
include("/home/girishgu/public_html/mgo/mail/manager/include.inc");
?>

<?
$title = 'Mailing Lists - Manager - Subscribe/Unsubscribe';
include("/home/girishgu/public_html/mgo/inc/top.inc");
?>

You are now subscribed to the following lists:
<br><br>

<?

$result = mysql_query("SELECT * FROM artists ORDER BY artist");

$var = '';
$lists = '';

echo "<ul>\n";
while ($data = mysql_fetch_array($result))
{
 if ($$data[id]=="1")
 {
  echo "<li><a href=\"/artists/artist.php/$data[id]/\">$data[artist]</a></li>\n";
  $lists .= "|".$data[id];
 }
 $var .= "|".$data[id];
}
echo "</ul>\n";

if ($lists==$var)
{
 mysql_query("UPDATE mail SET lists = '--ALL LISTS--' WHERE SID = '$SID'");
}
else
{
 mysql_query("UPDATE mail SET lists = '$lists' WHERE SID = '$SID'");
}

?>

<?

include("/home/girishgu/public_html/mgo/inc/middle.inc");
include("/home/girishgu/public_html/mgo/inc/bottom.inc");
include("/home/girishgu/public_html/mgo/inc/footer.inc");

?>