<?php
$title = 'Forums';
$description = '';
$keywords = '';
$menu = 'forums';
include("inc/header.inc");
?>

<?php
$title = 'Forums';
include("subtitle.inc");
?>

<?php

echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"300\" valign=\"center\" align=\"left\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>GENERAL</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"center\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>POSTS</b></font></td>\n";
 echo "    </tr>\n";

$GeneralForums = mysqli_query($link, "SELECT * FROM forums WHERE type = 'general' ORDER BY forum");
while ($GeneralForum = mysqli_fetch_array($GeneralForums))
{
 echo "    <tr>\n";
 echo "        <td width=\"300\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\"><a class=\"link_onf7f7f7\" href=\"/forums/forum.php?id=$GeneralForum[id]\">$GeneralForum[forum]</a><br></font></td>\n";
 $GeneralForum_Posts = mysql_num_rows(mysqli_query($link, "SELECT * FROM forum_posts WHERE forum = '$GeneralForum[id]' AND deleted = '0'"));
 echo "        <td width=\"100%\" valign=\"center\" align=\"center\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format($GeneralForum_Posts)."</font></td>\n";
 echo "    </tr>\n";
}

echo "</table>\n\n";



echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"300\" valign=\"center\" align=\"left\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>GENRE</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"center\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>POSTS</b></font></td>\n";
 echo "    </tr>\n";

$GenreForums = mysqli_query($link, "SELECT * FROM forums WHERE type = 'genre' ORDER BY forum");
while ($GenreForum = mysqli_fetch_array($GenreForums))
{
 echo "    <tr>\n";
 echo "        <td width=\"300\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\"><a class=\"link_onf7f7f7\" href=\"/forums/forum.php?id=$GenreForum[id]\">$GenreForum[forum]</a><br></font></td>\n";
 $GenreForum_Posts = mysql_num_rows(mysqli_query($link, "SELECT * FROM forum_posts WHERE forum = '$GenreForum[id]' AND deleted = '0'"));
 echo "        <td width=\"100%\" valign=\"center\" align=\"center\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format($GenreForum_Posts)."</font></td>\n";
 echo "    </tr>\n";
}

echo "</table>\n\n";



$ArtistsForums = mysqli_query($link, "SELECT * FROM artists");
while ($ArtistForum = mysqli_fetch_array($ArtistsForums))
{
 $ArtistForum_Posts = mysql_num_rows(mysqli_query($link, "SELECT * FROM forum_posts WHERE forum = '$ArtistForum[id]' AND deleted = '0'"));
 mysqli_query($link, "UPDATE artists SET forum_posts = '$ArtistForum_Posts' WHERE id = '$ArtistForum[id]'");
}

echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"300\" valign=\"center\" align=\"left\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>ARTIST</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"center\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>POSTS</b></font></td>\n";
 echo "    </tr>\n";

$ArtistsForums = mysqli_query($link, "SELECT * FROM artists ORDER BY forum_posts DESC,artist ASC");
while ($ArtistForum = mysqli_fetch_array($ArtistsForums))
{
 echo "    <tr>\n";
 echo "        <td width=\"300\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\"><a class=\"link_onf7f7f7\" href=\"/forums/forum.php?id=$ArtistForum[id]\">$ArtistForum[artist]</a><br></font></td>\n";
 $ArtistForum_Posts = mysql_num_rows(mysqli_query($link, "SELECT * FROM forum_posts WHERE forum = '$ArtistForum[id]' AND deleted = '0'"));
 echo "        <td width=\"100%\" valign=\"center\" align=\"center\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format($ArtistForum_Posts)."</font></td>\n";
 echo "    </tr>\n";
}

echo "</table>\n\n";

?>

<?php

//include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>