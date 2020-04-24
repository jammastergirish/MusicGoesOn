<?php
include_once("inc/php_header.inc");

//$topic = str_replace("/", "", $PATH_INFO);
$topic = $_GET['id'];
$topic_data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_posts WHERE id = '$topic' AND deleted = '0'"));

$topic_data[topic] = strip_tags($topic_data[topic]);

if ($forum_data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM artists WHERE id = '$topic_data[forum]'")))
{
 $artist = 1;
}
else
{
 $forum_data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forums WHERE id = '$topic_data[forum]'"));
 $forum_data[artist] = $forum_data[forum];
}

$title = 'Forums - '.$forum_data[artist].' - '.$topic_data[topic];
$description = '';
$keywords = '';
$menu = 'forums';
$s_menu = 'topic';
$php_header = 'false';
include("inc/header.inc");
?>

<?php
if (file_exists("/home/mgo/musicgoeson-www/images/library/".$forum_data[id]."/icon.jpg"))
{
 $image = "<img src=\"/images/library/".$forum_data[id]."/icon.jpg\" width=\"60\" height=\"60\" alt=\"".$forum_data[artist]."\" align=\"left\" border=\"1\">";
}
$title = $image.$forum_data[artist].' - '.$topic_data[topic];
include("forums/subtitle.inc");
?>

<?php

echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"50%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font size=\"1\">+ <a class=\"link_onf7f7f7\" href=\"/forums/\">All Forums</a><br><img src=\"/images/pixel.gif\" width=\"10\" height=\"1\">+ <a class=\"link_onf7f7f7\" href=\"/forums/forum.php?id=$forum_data[id]\"><b>$forum_data[artist]</b> Forum</a><br><img src=\"/images/pixel.gif\" width=\"20\" height=\"1\">+ $topic_data[topic]</font></td>\n";
 //if ($forums_row = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_users WHERE SID = '$SID'")))
 //{
  echo "        <td width=\"50%\" valign=\"center\" align=\"right\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"2\" color=\"#000000\"><a class=\"link_onf7f7f7\" href=\"/forums/add_edit.php?action=add&forum=$forum_data[id]\">Start A New Topic</a><br><a class=\"link_onf7f7f7\" href=\"/forums/add_edit.php?action=reply&replyto=$topic_data[id]\">Reply To This Topic</a></font></td>\n";
 //}
 echo "    </tr>\n";
echo "</table>\n\n<br>";

echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";

$posts = mysqli_query($link, "SELECT * FROM forum_posts WHERE (replyto = '$topic' OR id = '$topic') AND deleted = '0' ORDER BY id ASC");
while ($posts_data = mysqli_fetch_array($posts))
{
 if (!preg_match("Guest", $posts_data[poster]))
 {
  $poster_data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_users WHERE username = '$posts_data[poster]'"));
  if ($forums_row[username]==$poster_data[username]) { $edit = "<br><br><a class=\"link_onf7f7f7\" href=\"/forums/add_edit.php?action=edit&edit=$posts_data[id]\">Edit/Delete Post</a>"; } else { $edit = ""; }
  echo "    <tr>\n";
  echo "        <td width=\"120\" valign=\"top\" align=\"left\" bgcolor=\"#dedfdf\"><font face=\"verdana\" size=\"1\" color=\"#000000\">Posted by:<br><font size=\"1\"><b><a class=\"link_onf7f7f7\" href=\"/forums/profile.php?id=$posts_data[poster]\">$poster_data[username]</a></b></font><br><br>".str_replace(" \| ", " <br> ", datetime_to_text($posts_data[datetime]))." GMT".$edit."</font></td>\n";
 }
 else
 {
  echo "    <tr>\n";
  echo "        <td width=\"120\" valign=\"top\" align=\"left\" bgcolor=\"#dedfdf\"><font face=\"verdana\" size=\"1\" color=\"#000000\">Posted by:<br><font size=\"1\"><b>$posts_data[poster]</b></font><br><br>".str_replace(" \| ", " <br> ", datetime_to_text($posts_data[datetime]))." GMT".$edit."</font></td>\n";
 }
 $posts_data[post] = strip_tags($posts_data[post],"<b>,<i>,<u>,<font>,<center>,<a>");
 $posts_data[post] = preg_replace("/(?<!\S)((https?|ftp):\/\/\S+)/e", "''.MakeLinks('\\1').''", $posts_data[post]);
 $posts_data[post] = MakeLink($posts_data[post], "email");
 $posts_data[post] = str_replace(10, "<br>", $posts_data[post]);
 $poster_data[signature] = strip_tags($poster_data[signature],"<b>,<i>,<u>,<font>,<center>,<a>");
 $poster_data[signature] = str_replace(10, "<br>", $poster_data[signature]);
 $poster_data[signature] = preg_replace("/(?<!\S)((https?|ftp):\/\/\S+)/e", "''.MakeLinks('\\1').''", $poster_data[signature]);
 $poster_data[signature] = MakeLink($poster_data[signature], "email");
 if (preg_match("\[SIGNATURE\]", $posts_data[post]))
 {
  $posts_data[post] = str_replace("\[SIGNATURE\]", "", $posts_data[post]);
  if (!empty($poster_data[signature]))
  {
   $sig = "<br><br><hr width=\"30%\" align=\"left\">$poster_data[signature]";
  }
  else
  {
   $sig = "";
  }
 }
 else
 {
  $sig = "";
 }
 echo "        <td width=\"100%\" valign=\"top\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><p align=\"justify\">$posts_data[post]".$sig."</p></font></td>\n";
 echo "    </tr>\n";

 if ($forums_row = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_users WHERE SID = '$SID'")))
 {
  mysqli_query($link, "UPDATE forum_users SET viewed = '$forums_row[viewed]|$posts_data[id]' WHERE username = '$forums_row[username]'");
 }
 else
 {
  $forums_row = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_users WHERE username = 'Guest$CookieID'"));
  mysqli_query($link, "UPDATE forum_users SET viewed = '$forums_row[viewed]|$posts_data[id]' WHERE username = '$forums_row[username]'");
 }
}

echo "</table>\n\n";

?>

<?php

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>