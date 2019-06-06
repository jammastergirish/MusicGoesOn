<?
$title = 'Artists - A-Z';
$description = '';
$keywords = '';
$menu = 'artists';
include("inc/header.inc");
?>

<?
$title = 'Artists - A-Z';
$columns = 2;
include("inc/top.inc");
?>

<hr width="30%" align="left">
<b><u><? $letter = '#'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '1%' OR artist LIKE '2%' OR artist LIKE '3%' OR artist LIKE '4%' OR artist LIKE '5%' OR artist LIKE '6%' OR artist LIKE '7%' OR artist LIKE '8%' OR artist LIKE '9%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'A'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'B'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'C'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'D'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'E'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'F'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'G'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'H'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'I'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'J'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'K'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'L'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'M'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'N'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'O'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'P'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'Q'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'R'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'S'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'T'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'U'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'V'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'W'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'X'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'Y'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<hr width="30%" align="left">
<b><u><? $letter = 'Z'; echo $letter; ?></u></b><br><br>
<?

$result = mysql_query("SELECT * FROM artists WHERE artist LIKE '$letter%' ORDER BY artist");
while ($data = mysql_fetch_array($result))
{
 echo "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$data[id]\"><b>$data[artist]</b></a><br>\n";
}

?>

<br>

<?

include("inc/middle.inc");

echo TopXArtists(50);

include("inc/bottom.inc");
include("inc/footer.inc");

?>