<!-- START: /inc/story.inc -->
<?php

echo "<table width=\"100%\" border=\"0\"><tr><td><font face=\"verdana\" size=\"1\" color=\"#000000\">";

$article = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM mgo WHERE id = '$id'"));

if ($showicon==0)
{
 $icon = 0;
}
else if ($showicon==1)
{
 if (empty($article['icon']))
 {
  $icon = 0;
 }
 else
 {
  if (strpos("jpg", $article['icon'])!=false)
  {
   if (file_exists("images/library/".$article[icon]))
   {  
    echo "<a href=\"/article.php?id=$article[id]\"><img class=\"linked_img\" src=\"/images/library/$article[icon]\" alt=\"$article[headline]\" width=\"60\" height=\"60\" align=\"left\" border=\"1\"></a>";
    $icon = 1;
   }
   else
   {
    $icon = 0;
   }
  }
  else
  {
   if (file_exists("images/library/".$article['icon']."/icon.jpg"))
   {  
    echo "<a href=\"/article.php?id=$article[id]\"><img class=\"linked_img\" src=\"/images/library/$article[icon]/icon.jpg\" alt=\"$article[headline]\" width=\"60\" height=\"60\" align=\"left\" border=\"1\"></a>";
    $icon = 1;
   }
   else
   {
    $icon = 0;
   }
  }
 }
}
else if ($showicon==2)
{
 if (empty($article[icon]))
 {
  $icon = 0;
 }
 else
 {
  if (strpos("jpg", $article['icon'])!=false)
  {
   $article[icon] = ereg_replace(".jpg", "100.jpg", $article[icon]);
   if (file_exists("images/library/".$article[icon]))
   {  
    echo "<a href=\"/article.php?id=$article[id]\"><img class=\"linked_img\" src=\"/images/library/$article[icon]\" alt=\"$article[headline]\" width=\"100\" height=\"100\" align=\"left\" border=\"1\"></a>";
    $icon = 1;
   }
   else
   {
    $icon = 0;
   }
  }
  else
  {
   if (file_exists("/home/mgo/musicgoeson-www/images/library/".$article[icon]."/icon100.jpg"))
   {  
    echo "<a href=\"/article.php?id=$article[id]\"><img class=\"linked_img\" src=\"/images/library/$article[icon]/icon100.jpg\" alt=\"$article[headline]\" width=\"100\" height=\"100\" align=\"left\" border=\"1\"></a>";
    $icon = 1;
   }
   else
   {
    $icon = 0;
   }
  }
 }
}

$date_time = explode(" | ", $article['date']);
$article['date'] = $date_time[0];
$article['time'] = $date_time[1];

echo "<a class=\"link_onf7f7f7\" href=\"/article.php?id=$article[id]\" title=\"$article[headline]\"><b>$article[headline]</b></a><br>\n";
echo "<font color=\"silver\" size=\"1\">".datetime_to_text($article['datetime'])." GMT/UTC<br></font>\n";

if (!empty($article['description']))
{
 echo $article['description'];
}

echo "</font></td></tr></table>";

?>
<!-- END: /inc/story.inc -->