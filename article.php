<?php

include_once("inc/php_header.inc");

//$id = str_replace("/", "", $PATH_INFO);

$id = (int)$_GET['id'];

if ($show!=1)
{
 $data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM mgo WHERE id = '$id' AND datetime <= '".datetime()."'"));
}
else
{
 $data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM mgo WHERE id = '$id'"));
}

$section = explode("/", $data[section]);
$main_section = $section[0];
$sub_section = $section[1];

if (strtolower($main_section)=="artists")
{
 $data[headline] = $data[headline]." Biography";
}

$title = $main_section.' - '.$data[headline];
$description = $data[description];
$keywords = $data[META_keywords];
$menu = strtolower($main_section);
$php_header = 'false';
$bk = explode("|", $data[related]);
$bk = $bk[0];
if (strtolower($main_section)=="artists")
{
 $artist[id] = $data[artists_id];
 $s_menu = 'artist';
}
include("inc/header.inc");
?>

<?php

if (strtolower($main_section)=="artists")
{
 $data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM mgo WHERE id = '$id'"));

 $data[headline] = $data[headline]." Biography";
}

$title = $data[headline];
$subtitle = datetime_to_text($data[datetime])." GMT/UTC";
if ($data[review_release]!="0000-00-00")
{
 $subtitle .= "<br>Release: ".str_replace(" \| 0\:00\:00", "", datetime_to_text($data[review_release]));
}
if ($data[review_label]!="")
{
 $subtitle .= " (".$data[review_label].")";
}

$headline = $data[headline];
$subtitle = $subtitle;
$columns = 2;
include("inc/top.inc");

 if (!empty($data[image]))
 {
  if (!empty($data[image_desc]))
  {
   $desc = $data[image_desc];
  }
  else
  {
   $desc = $data[description];
  }
  $size = GetImageSize($HTTP_SERVER_VARS[DOCUMENT_ROOT].$data[image]);
  echo "<img src=\"$data[image]\" $size[3] alt=\"$desc\" align=\"left\" class=\"linked_img\">";
 }

 echo format($data[html]);

 if(!empty($data[review_mark]))
 {
  echo "<CENTER><br><img src=\"/images/reviews/$data[review_mark].gif\" width=\"200\" height=\"34\" alt=\"$data[review_mark]/10\" border=\"0\"></CENTER>\n";
 }

include("inc/middle.inc");

if (!empty($data[review_amazonasin]))
{
 echo "<table width=\"100%\"><tr><td bgcolor=\"#006699\" align=\"center\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>BUY</b></font></td></tr><tr><td bgcolor=\"#f7f7f7\"><CENTER><font face=\"verdana\" size=\"1\" color=\"#000000\"><a href=\"http://www.amazon.co.uk/exec/obidos/ASIN/$data[review_amazonasin]/musicgoeson-21\" target=\"_blank\" class=\"link_onFFFFFF\">Purchase this ".strtolower($sub_section)." from <i>Amazon.co.uk</i><br><br><img src=\"/images/reviews/amazon_110x27.gif\" class=\"linked_img\" alt=\"Amazon.co.uk\" width=\"110\" height=\"27\"></a>";
 echo "</font></CENTER></td></tr></table>";

 echo "<br>";
}

if (!empty($data[related]))
{
 $related = explode("|", $data[related]);

 foreach($related AS $relatedto)
 {
  echo "<table width=\"100%\"><tr><td bgcolor=\"#006699\" align=\"center\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>RELATED: $relatedto</b></font></td></tr><tr><td bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">";
  include("inc/related.inc");
  echo "</font></td></tr></table>";

  echo "<br>";
 }
}

?>

<?php

include("inc/bottom.inc");
include("inc/footer.inc");

?>