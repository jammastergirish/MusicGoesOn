<?
include("/home/mgo/musicgoeson-www/inc/php_header.php");
include("/home/mgo/musicgoeson-www/admin/check.php");
$title = 'Admin - Shop - Add to Catalogue';
$description = '';
$keywords = '';
$menu = 'admin';
$php_header = 'false';
include("/home/mgo/musicgoeson-www/inc/header.php");
?>

<?
$title = 'Admin - Shop - Add to Catalogue';
$subtitle = $aSID;
include("/home/mgo/musicgoeson-www/inc/top.php");
?>

<form action="https://musicgoeson.com/admin/shop/doaddcat.php" method="POST">

<b>ID:</b><br><input type=text name="id" size="60" value="<? echo $id; ?>"><br><br>

<b>Format:</b><br>
<select name="format">

<option value="CD">CD/CD</option>
 <option value="CDS">-CDS/CD Single</option>
  <option value="CDS1">-CDS1/CD Single (1)</option>
  <option value="CDS2">-CDS1/CD Single (2)</option>
<option value="MD">MD/MiniDisc</option>
<option value="MC">MC/Cassette</option>
 <option value="MCS">-MCS/Cassette Single</option>
<option value="LP">LP/Vinyl</option>
 <option value="LPS12">-LPS12/12" Single</option>
 <option value="LPS10">-LPS10/10" Single</option>
 <option value="LPS7">-LPS7/7" Single</option>

</select><br><br>

<b>Title:</b><br><input type=text name="title_" size="60" value="<? echo $title_; ?>"><br><br>

<b>Artist:</b><br><input type=text name="artist" size="60" value="<? echo $artist; ?>"><br><br>

<b>Label:</b><br><input type=text name="label" size="60" value="<? echo $label; ?>"><br><br>

<b>Cat. Number:</b><br><input type=text name="cat" size="60" value="<? echo $cat; ?>"><br><br>

<b>Release:</b><br><input type=text name="release" size="60" value="<? echo $release; ?>"><br><br>

<b>Tracklisting:</b><br><textarea name="tracklisting" rows="25" cols="60"><? echo $tracklisting; ?></textarea><br><br>

<b>Price:</b><br>£ <input type=text name="price" size="60" value="<? echo $price; ?>"><br><br>

<input type="submit" value="Add To Catalogue" align="absmiddle">

</form>

<? include("/home/mgo/musicgoeson-www/inc/middle.php"); ?>

<? include("/home/mgo/musicgoeson-www/inc/bottom.php"); ?>

<? include("/home/mgo/musicgoeson-www/inc/footer.php"); ?>