<?
$title = 'Reviews';
$description = '';
$keywords = '';
$menu = 'reviews';
include("/home/girishgu/public_html/mgo/inc/header.inc");
?>

<?
$title = 'Reviews';
include("/home/girishgu/public_html/mgo/inc/top.inc");
?>

<hr width="20%" align="left">
<font face="verdana" size="2"><b>ALBUMS</b></font><br><br>

<?

$showicon = 1;

$result_reviews = mysql_query("SELECT * FROM mgo WHERE section LIKE 'Reviews/Album' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 0,3");
while ($data_reviews = mysql_fetch_array($result_reviews))
{
 $id = $data_reviews[id];
 include("/home/girishgu/public_html/mgo/inc/story.inc");
}

$showicon = 0;

$result_reviews = mysql_query("SELECT * FROM mgo WHERE section LIKE 'Reviews/Album' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 3,2");
while ($data_reviews = mysql_fetch_array($result_reviews))
{
 $id = $data_reviews[id];
 include("/home/girishgu/public_html/mgo/inc/story.inc");
}

?>

<br>
<a class="link_onf7f7f7" href="/reviews/albums/"><font size="1">More Album Reviews...</font></a>


<hr width="20%" align="left">
<font face="verdana" size="2"><b>SINGLES</b></font><br><br>


<?

$showicon = 1;

$result_reviews = mysql_query("SELECT * FROM mgo WHERE section LIKE 'Reviews/Single' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 0,3");
while ($data_reviews = mysql_fetch_array($result_reviews))
{
 $id = $data_reviews[id];
 include("/home/girishgu/public_html/mgo/inc/story.inc");
}

$showicon = 0;

$result_reviews = mysql_query("SELECT * FROM mgo WHERE section LIKE 'Reviews/Single' AND datetime <= '".datetime()."' ORDER BY datetime DESC LIMIT 3,2");
while ($data_reviews = mysql_fetch_array($result_reviews))
{
 $id = $data_reviews[id];
 include("/home/girishgu/public_html/mgo/inc/story.inc");
}

?>

<br>
<a class="link_onf7f7f7" href="/reviews/singles/"><font size="1">More Single Reviews...</font></a>

<?

include("/home/girishgu/public_html/mgo/inc/middle.inc");
include("/home/girishgu/public_html/mgo/inc/bottom.inc");
include("/home/girishgu/public_html/mgo/inc/footer.inc");

?>