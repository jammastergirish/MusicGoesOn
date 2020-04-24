<?php
 include("inc/header.inc");

//$forum = str_replace("/", "", $PATH_INFO);

$forum = $_GET['id'];

if ($forum_data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM artists WHERE id = '$forum'")))
{
 $artist = 1;
}
else
{
 $forum_data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forums WHERE id = '$forum'"));
 $forum_data[artist] = $forum_data[forum];
}

$title = 'Forums - '.$forum_data[artist];
$description = '';
$keywords = '';
$menu = 'forums';
$s_menu = 'forum';
$php_header = 'false';
 include("inc/story.inc");
?>

<?php
if (file_exists("/home/mgo/musicgoeson-www/images/library/".$forum_data[id]."/icon.jpg"))
{
 $image = "<img src=\"/images/library/".$forum_data[id]."/icon.jpg\" width=\"60\" height=\"60\" alt=\"".$forum_data[artist]."\" align=\"left\" border=\"1\">";
}
$title = $image.$forum_data[artist].' Forum';
 include("subtitle.inc");
?>

<?php

echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"50%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font size=\"1\">+ <a class=\"link_onf7f7f7\" href=\"/forums/\">All Forums</a><br><img src=\"/images/pixel.gif\" width=\"10\" height=\"1\">+ <b>$forum_data[artist]</b> Forum</font></td>\n";
 //if ($CurrentForumsUser = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_users WHERE SID = '$SID'")))
 //{
  echo "        <td width=\"50%\" valign=\"center\" align=\"right\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"2\" color=\"#000000\"><a class=\"link_onf7f7f7\" href=\"/forums/add_edit.php?action=add&forum=$forum_data[id]\">Start A New Topic</a></font></td>\n";
 //}
 echo "    </tr>\n";
echo "</table>\n\n<br>";

echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"150\" valign=\"center\" align=\"left\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>TOPIC</b></font></td>\n";
 echo "        <td width=\"100\" valign=\"center\" align=\"center\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>POSTER</b></font></td>\n";
 echo "        <td width=\"65\" valign=\"center\" align=\"center\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>REPLIES</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"center\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>DATE | TIME (GMT)</b></font></td>\n";
 echo "    </tr>\n";

$result = mysqli_query($link, "SELECT * FROM forum_posts WHERE forum = '$forum' AND replyto = '0' AND deleted = '0' ORDER BY id DESC");
while ($data = mysqli_fetch_array($result))
{
 if (preg_match($data[id], $CurrentForumsUser[viewed]))
 {
  $color = 'f7f7f7'; // Read colour (light)
 }
 else
 {
  $color = 'dedfdf'; // Unread colour (dark)
 }

 $query = mysqli_query($link, "SELECT * FROM forum_posts WHERE replyto = '$data[id]' AND deleted = '0'");
 while ($dat = mysqli_fetch_array($query))
 {
  if (preg_match($dat[id], $CurrentForumsUser[viewed]))
  {
   $color = 'f7f7f7'; // Read colour (light)
  }
  else
  {
   $color = 'dedfdf'; // Unread colour (dark)
  }
 }

 echo "    <tr>\n";
 echo "        <td width=\"150\" valign=\"center\" align=\"left\" bgcolor=\"#$color\"><font face=\"verdana\" size=\"1\"><a class=\"link_onf7f7f7\" href=\"/forums/topic.php?id=$data[id]/\">$data[topic]</a><br></font></td>\n";
 if (!preg_match("Guest", $data[poster]))
 {
  echo "        <td width=\"100\" valign=\"center\" align=\"center\" bgcolor=\"#$color\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><a class=\"link_onf7f7f7\" href=\"/forums/profile.php?id=$data[poster]\">$data[poster]</a></font></td>\n";
 }
 else
 {
  echo "        <td width=\"100\" valign=\"center\" align=\"center\" bgcolor=\"#$color\"><font face=\"verdana\" size=\"1\" color=\"#000000\">$data[poster]</font></td>\n";
 }
 echo "        <td width=\"65\" valign=\"center\" align=\"center\" bgcolor=\"#$color\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format(mysql_num_rows(mysqli_query($link, "SELECT * FROM forum_posts WHERE replyto = '$data[id]' AND deleted = '0'")))."</font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"center\" bgcolor=\"#$color\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".str_replace(" \| ", "<br>", datetime_to_text($data[datetime]))."</font></td>\n";
 echo "    </tr>\n";
}

echo "</table>\n\n";

?>

<?php

 include("inc/middle.inc");
 include("inc/bottom.inc");
 include("inc/footer.inc");

?>