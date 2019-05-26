<?
$title = 'Mailing Lists - Subscribe';
$description = '';
$keywords = '';
$menu = 'mail';
include("/home/girishgu/public_html/mgo/inc/header.inc");
?>

<?
$title = 'Mailing Lists - Subscribe';
include("/home/girishgu/public_html/mgo/inc/top.inc");
?>

You have been added to the following lists: <font size="1">(More information below)</font>

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
 mysql_query("INSERT INTO mail (email, pass, name, h_t, lists, CookieID) VALUES ('$email', password('$pass'), '$name', '$h_t', '--ALL LISTS--', '$CookieID')");
 $all = 1;
}
else
{
 mysql_query("INSERT INTO mail (email, pass, name, h_t, lists, CookieID) VALUES ('$email', password('$pass'), '$name', '$h_t', '$lists', '$CookieID')");
 $all = 0;
}

echo "<p align=\"justify\">\n\n";

if ($all==1)
{
 echo "You selected all of our mailing lists, you will automatically be added to new mailing lists.  You have been sent an e-mail confirming your subscription.";
}
else
{
 echo "You did not select all of our mailing lists, please check back regularly to view new lists which may interest you.  You have been sent an e-mail confirming your subscription.";
}

if ($h_t=="h")
{
 $message = "<STYLE type=\"text/css\">\n<!--\na {color:\"#CC3300\"; text-decoration:\"none\";}\na:visited {color:\"#E68164\"; text-decoration:\"none\";}\na:hover {color:\"#006699\"; text-decoration:\"underline\";}\ninput {background-color:\"#006699\"; font-family:\"verdana\"; color:\"white\"; font-size:\"11px\";}\nselect {background-color:\"#006699\"; font-family:\"verdana\"; color:\"white\"; font-size:\"11px\";}\ntextarea {background-color:\"#006699\"; font-family:\"verdana\"; color:\"white\"; font-size:\"11px\";}\n.linked_img {border: \"#000000\"; border-style: \"solid\"; border-width: \"1,4\";}\n-->\n</STYLE>\n\n<base href=\"http://www.musicgoeson.com/\">\n\n<p align=\"justify\">\n\n<font face=\"verdana\" size=\"2\">";
 $message .= "Thank you for subscribing to <i>Music Goes On</i>'s Mailing Lists.  You have been added to the following lists: <font size=\"1\">(More information below)</font>\n\n<ul>";
 $result = mysql_query("SELECT * FROM artists ORDER BY artist");
 while ($data = mysql_fetch_array($result))
 {
  if ($$data[id]=="1")
  {
   $message .= "<li><a href=\"/artists/artist.php/$data[id]/\">$data[artist]</a></li>\n";
  }
 }
 $message .= "</ul>\n\n";

 if ($all==1)
 {
  $message.= "You selected all of our mailing lists, you will automatically be added to new mailing lists.";
 }
 else
 {
  $message .= "You did not select all of our mailing lists, please check back regularly to view new lists which may interest you.";
 }

 $message .= "<hr align=\"left\" width=\"25%\"><font size=\"1\">To change your subscription details/lists or to unsubscribe, please visit <a href=\"/mail/manager/\">www.musicgoeson.com/mail/manager/</a></font></font>\n\n</p>";

 mail("".$name." <".$email.">", "Music Goes On - Mailing Lists", $message, "From: Music Goes On <mgo@musicgoeson.com>\nContent-Type: text/html; charset=iso-8859-1");
}

if ($h_t=="t")
{
 $message = "Thank you for subscribing to Music Goes On's Mailing Lists.  You have been added to the following lists: (More information below)\n\n";
 $result = mysql_query("SELECT * FROM artists ORDER BY artist");
 while ($data = mysql_fetch_array($result))
 {
  if ($$data[id]=="1")
  {
   $message .= "- $data[artist]\n";
  }
 }
 $message .= "\n\n";

 if ($all==1)
 {
  $message.= "You selected all of our mailing lists, you will automatically be added to new mailing lists.";
 }
 else
 {
  $message .= "You did not select all of our mailing lists, please check back regularly to view new lists which may interest you.";
 }

 $message .= "-------------------\nTo change your subscription details/lists or to unsubscribe, please visit http://www.musicgoeson.com/mail/manager/";

 mail("".$name." <".$email.">", "Music Goes On - Mailing Lists", $message, "From: Music Goes On <mgo@musicgoeson.com>");
}


?>
</ul>

<?

include("/home/girishgu/public_html/mgo/inc/middle.inc");
include("/home/girishgu/public_html/mgo/inc/bottom.inc");
include("/home/girishgu/public_html/mgo/inc/footer.inc");

?>