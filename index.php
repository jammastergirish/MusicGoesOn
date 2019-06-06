<?
$title = 'Latest music news, reviews, interviews, audio, video...';
$description = 'Visit Music Goes On for the latest music news and reviews; including interviews, features, competitions, audio, video and loads more...';
$keywords = 'music, uk, entertainment, pop, indie, rock, dance, garage, news, reviews, features, promos, live, gig, concert, artists';
$menu = 'home';
include("inc/header.inc");
?>

<?

echo "<table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\" align=\"center\" valign=\"top\">\n\n";
$section = "News";
 echo "    <tr>\n";
 echo "        <td width=\"75%\" valign=\"top\" align=\"left\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>".strtoupper($section)."</b></font></td>\n";
 echo "        <td width=\"25%\" valign=\"top\" align=\"right\" bgcolor=\"#006699\"><img src=\"/images/pixel.gif\" width=\"10\" height=\"10\"></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"75%\" valign=\"top\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><p align=\"justify\">";

$showicon = 1;

$result = mysql_query("SELECT * FROM mgo WHERE section LIKE '%$section%' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 0,4");
while ($data = mysql_fetch_array($result))
{
 $id = $data['id'];
 include("inc/story.inc");
}

$showicon = 0;

$result = mysql_query("SELECT * FROM mgo WHERE section LIKE '%$section%' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 5,0");
while ($data = mysql_fetch_array($result))
{
 $id = $data[id];
 include("inc/story.inc");
}
 echo "</p>";
 echo "<a class=\"link_onf7f7f7\" href=\"/".strtolower($section)."/\"><font face=\"verdana\" size=\"1\">More $section...</font></a>";
 echo "</p></font></td>\n";
 
 echo "        <td width=\"25%\" valign=\"top\" align=\"right\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">";

echo TopXArtists(10);

echo "<br>";

echo JoinMailingList();

 echo "</font></td>\n";
 
 echo "</table>\n\n";




echo "<table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\" align=\"center\" valign=\"top\">\n\n";
$section = "Reviews";
 echo "    <tr>\n";
 echo "        <td width=\"75%\" valign=\"top\" align=\"left\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>".strtoupper($section)."</b></font></td>\n";
 echo "        <td width=\"25%\" valign=\"top\" align=\"right\" bgcolor=\"#006699\"><img src=\"/images/pixel.gif\" width=\"10\" height=\"10\"></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"75%\" valign=\"top\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><p align=\"justify\">";

$showicon = 1;

$result = mysql_query("SELECT * FROM mgo WHERE section LIKE '%$section%' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 0,2");
while ($data = mysql_fetch_array($result))
{
 $id = $data['id'];
 include("inc/story.inc");
}

$showicon = 0;

$result = mysql_query("SELECT * FROM mgo WHERE section LIKE '%$section%' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 2,3");
while ($data = mysql_fetch_array($result))
{
 $id = $data[id];
 include("inc/story.inc");
}
 echo "</p>";
 echo "<a class=\"link_onf7f7f7\" href=\"/".strtolower($section)."/\"><font face=\"verdana\" size=\"1\">More $section...</font></a>";
 echo "</p></font></td>\n";
 
 echo "        <td width=\"25%\" valign=\"top\" align=\"right\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">";

echo "<table width=\"100%\"><tr><td bgcolor=\"#006699\" align=\"center\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>NOW PLAYING</b></font></td></tr><tr><td bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">Here's what we're listening to at <i>Music Goes On</i> right now...<br><br>";
$nowplaying = mysql_fetch_array(mysql_query("SELECT * FROM nowplaying ORDER BY date DESC LIMIT 0,1"));
$nowplaying[playing] = str_replace("|", "<br>", $nowplaying['playing']);
echo format($nowplaying['playing']);
echo "</font></td></tr></table>";

/*
echo "<br>";

echo "<table width=\"100%\"><tr><td bgcolor=\"#006699\" align=\"center\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>SINGLE / WEEK</b></font></td></tr><tr><td bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">";
$oftheweek = mysql_fetch_array(mysql_query("SELECT * FROM oftheweek WHERE _of = 'single' AND date <= '".datetime(date)."' ORDER BY date DESC LIMIT 0,1")); $review = mysql_fetch_array(mysql_query("SELECT * FROM mgo WHERE id = '$oftheweek[review]'")); echo "<CENTER>".icon($oftheweek[review])."<br>"; echo "<i>$oftheweek[title]</i><br><b>$oftheweek[artist]</b><br>[<a class=\"link_onf7f7f7\" href=\"/article.php/$oftheweek[review]/\">REVIEW</a>]</CENTER>\n";
echo "</font></td></tr></table>";
*/

 echo "</font></td>\n";
 
 echo "</table>\n\n";






















echo "<table border=\"0\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\" align=\"center\" valign=\"top\">\n\n";
$section = "Au_Vi";
 echo "    <tr>\n";
 echo "        <td width=\"100%\" valign=\"top\" align=\"left\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>AUDIO/VIDEO</b></font></td>\n";
 echo "    </tr>\n";
 echo "    <tr>\n";
 echo "        <td width=\"100%\" valign=\"top\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><p align=\"justify\">";

$showicon = 1;

$result = mysql_query("SELECT * FROM mgo WHERE section LIKE '%$section%' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 0,1");
while ($data = mysql_fetch_array($result))
{
 $id = $data[id];
 include("inc/story.inc");
}

$showicon = 0;

$result = mysql_query("SELECT * FROM mgo WHERE section LIKE '%$section%' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 1,1");
while ($data = mysql_fetch_array($result))
{
 $id = $data[id];
 include("inc/story.inc");
}
 echo "</p>";
 echo "<a class=\"link_onf7f7f7\" href=\"/".strtolower($section)."/\"><font face=\"verdana\" size=\"1\">More $section...</font></a>";
 echo "</p></font></td>\n";
 
 echo "</table>\n\n";













?>

<? include("inc/footer.inc"); ?>

<CENTER><a href="/site.php"><img src="/images/pixel.gif" width="2" height="2" border="0" alt="Site Index"></a></CENTER>