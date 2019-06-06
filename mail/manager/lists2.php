<?php
$title = 'Mailing Lists - Manager - Subscribe/Unsubscribe';
$description = '';
$keywords = '';
$menu = 'mail_manager';
include("inc/header.inc");
include("mail/manager/include.inc");
?>

<?php
$title = 'Mailing Lists - Manager - Subscribe/Unsubscribe';
include("inc/top.inc");
?>

You are now subscribed to the following lists:
<br><br>

<?php

$result = mysqli_query($link, "SELECT * FROM artists ORDER BY artist");

$var = '';
$lists = '';

echo "<ul>\n";
while ($data = mysqli_fetch_array($result))
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
 mysqli_query($link, "UPDATE mail SET lists = '--ALL LISTS--' WHERE SID = '$SID'");
}
else
{
 mysqli_query($link, "UPDATE mail SET lists = '$lists' WHERE SID = '$SID'");
}

?>

<?php

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>