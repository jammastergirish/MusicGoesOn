<?php

mysql_connect("localhost", "mgo", "h47fh20e");
mysql_select_db(musicgoeson_com);

/*****/

include_once("inc/functions.inc");

/*****/

echo "<b>Visitors</b><br>";

echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"200\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Average Unique Visitors Per Minute (this hour):</b></font></td>\n";
 $number_uniques = GetStats("uniques", datetime(date)." ".gmdate("H:00:00"), datetime(date)." ".gmdate("H:59:59"));
 $number_perminute = $number_uniques /  gmdate("i");
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format($number_perminute, 1)."</font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"200\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Average Pageviews Per Minute (this hour):</b></font></td>\n";
 $number_pageviews = GetStats("pageviews", datetime(date)." ".gmdate("H:00:00"), datetime(date)." ".gmdate("H:59:59"));
 $number_perminute = $number_pageviews / gmdate("i");
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format($number_perminute, 1)."</font></td>\n";
 echo "    </tr>\n";
echo "</table>\n\n";
echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"200\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Unique Visitors This Hour:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format($number_uniques)."</font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"200\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Pageviews This Hour:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format($number_pageviews)."</font></td>\n";
 echo "    </tr>\n";
echo "</table>\n\n";
echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"200\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Unique Visitors Today:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format(GetStats("uniques", datetime(date)." 00:00:00", datetime(date)." 23:59:59"))."</font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"200\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Pageviews Today:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format(GetStats("pageviews", datetime(date)." 00:00:00", datetime(date)." 23:59:59"))."</font></td>\n";
 echo "    </tr>\n";
echo "</table>\n\n";
echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"200\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Unique Visitors This Month:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format(GetStats("uniques", gmdate("Y-m-01"), gmdate("Y-m-31")))."</font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"200\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Pageviews This Month:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format(GetStats("pageviews", gmdate("Y-m-01"), gmdate("Y-m-31")))."</font></td>\n";
 echo "    </tr>\n";
echo "</table>\n\n";
echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"200\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Unique Visitors This Year:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format(GetStats("uniques", gmdate("Y-01-01"), gmdate("Y-12-31")))."</font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"200\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Pageviews This Year:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format(GetStats("pageviews", gmdate("Y-01-01"), gmdate("Y-12-31")))."</font></td>\n";
 echo "    </tr>\n";
echo "</table>\n\n";
echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"200\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Total Unique Visitors:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format(GetStats("uniques"))."</font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"200\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Total Pageviews:</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format(GetStats("pageviews"))."</font></td>\n";
 echo "    </tr>\n";
echo "</table>\n\n";

?>

<br>

<?php

echo "<b>Top Five Articles</b><br>";

$tmpvar = mysqli_query($link, "SELECT * FROM mgo ORDER BY datetime");

while ($article = mysqli_fetch_array($tmpvar))
{
 mysqli_query($link, "UPDATE mgo SET uniques = '".GetStats("uniques", "", "", "/article.php/".$article[id]."")."' WHERE id = '$article[id]'");
}

$tmpvar = mysqli_query($link, "SELECT * FROM mgo ORDER BY uniques DESC LIMIT 0,5");

echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
while ($row = mysqli_fetch_array($tmpvar))
{
 echo "    <tr>\n";
 echo "        <td width=\"300\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><a href=\"/article.php/$row[id]/\"><font color=\"#FFFFFF\"><b>$row[headline]</b></font></a><br>".datetime_to_text($row[datetime])." ($row[section])</b></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format($row[uniques])."</font></td>\n";
 echo "    </tr>\n";
}
echo "</table>\n\n";

?>

<br>

<?php

echo "<b>Top Five Artists</b><br>";

$tmpvar = mysqli_query($link, "SELECT * FROM artists ORDER BY artist");

while ($artist = mysqli_fetch_array($tmpvar))
{
 mysqli_query($link, "UPDATE artists SET uniques = '".GetStats("uniques", "", "", "/artists/artist.php/".$artist[id]."")."' WHERE id = '$artist[id]'");
}

$tmpvar = mysqli_query($link, "SELECT * FROM artists ORDER BY uniques DESC LIMIT 0,5");

echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
while ($row = mysqli_fetch_array($tmpvar))
{
 echo "    <tr>\n";
 echo "        <td width=\"300\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><a href=\"/artists/artist.php/$row[id]/\"><font color=\"#FFFFFF\"><b>$row[artist]</b></font></a></font></td>\n";
 echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">".number_format($row[uniques])."</font></td>\n";
 echo "    </tr>\n";
}
echo "</table>\n\n";

?>