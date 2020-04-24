<?php
$title = 'Artists';
$description = '';
$keywords = '';
$menu = 'artists';
include("inc/header.inc");
?>

<?php
$title = 'Artists';
include("inc/top.inc");
?>

<?php

$query = mysqli_query($link, "SELECT * FROM artists ORDER BY uniques DESC LIMIT 0,10");
echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"30%\" style=\"table-layout:fixed\" align=\"right\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"100%\" valign=\"top\" align=\"left\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>Top Ten Artists</b></font></td>\n";
 echo "    </tr>\n";
while ($data = mysqli_fetch_array($query))
{
 echo "    <tr>\n";
 echo "        <td width=\"100%\" valign=\"top\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><a href=\"/artists/artist.php/$data[id]/\"><b>$data[artist]</b></a></font></td>\n";
 echo "    </tr>\n";
}
echo "</table>\n\n";

?>

<?php

//$query = mysqli_query($link, "SELECT * FROM artists WHERE artistweek LIMIT 0,10");
echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"65%\" style=\"table-layout:fixed\" align=\"left\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"100%\" valign=\"top\" align=\"left\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>Artist of the Week</b></font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"100%\" valign=\"top\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"2\" color=\"#000000\"><p align=\"justify\"><img src=\"/images/library/oasis/icon.jpg\" align=\"left\" border=\"1\" width=\"60\" height=\"60\" alt=\"'.$artist[artist].'\">Oasis are this week's artist of the week because they are great.  They are playing in London, mANCahester and somewhere else. I  jfi sd fbsd jfbsd kjfb sdkjf bsdkjf bsdk jfbsk jdb fksjd bkfj bdskfj bsdk fjsdk fjsdk fjsd fsd fsd fs dfs</font></td>\n";
 echo "    </tr>\n";
echo "</table>\n\n";

?>

<?php

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>