<?php
$title = 'Artists - A-Z';
$description = '';
$keywords = '';
$menu = 'artists';
include("../inc/header.inc");
?>

<?php
$title = 'Artists - A-Z';
$columns = 2;
include("../inc/top.inc");
?>

<hr width="30%" align="left">
<b><u><?php $letter = '#'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '1%' OR artist LIKE '2%' OR artist LIKE '3%' OR artist LIKE '4%' OR artist LIKE '5%' OR artist LIKE '6%' OR artist LIKE '7%' OR artist LIKE '8%' OR artist LIKE '9%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'A'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'B'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'C'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'D'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'E'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'F'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'G'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'H'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'I'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'J'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'K'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'L'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'M'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'N'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'O'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'P'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'Q'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'R'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'S'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'T'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'U'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'V'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'W'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'X'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'Y'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><?php $letter = 'Z'; echo $letter; ?></u></b><br><br>
<?php

$result = mysqli_query($link, "SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysqli_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<?php

include("../inc/middle.inc");

echo TopXArtists(50);

include("../inc/bottom.inc");
include("../inc/footer.inc");

?>