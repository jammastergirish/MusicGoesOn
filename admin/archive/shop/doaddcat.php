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

<?

if(empty($id))
{
 
 $id = md5(uniqid (rand()));
 $id = strtoupper($id);
 $id = wordwrap($id, 6, "\n", 1);
 $id = nl2br($id);
 $id = explode("<br>", $id);
 $id = $id[0].'-'.$format;

}
else
{
 $id_ = explode("-", $id);
 $id = $id_[0].'-'.$format;
}

$id_ = explode("-", $id);

$title_ = addslashes($title_);
$tracklisting = addslashes($tracklisting);

mysql_query("INSERT INTO shop_cat(id, title, artist, label, cat, release, tracklisting, price) VALUES ('$id', '$title_', '$artist', '$label', '$cat', '$release', '$tracklisting', '$price')");

echo "<b>ID: </b><a href=\"addcat.php?id=$id_[0]&title_=$title_&artist=$artist&label=$label&cat=$cat&release=$release&tracklisting=$tracklisting&price=$price\">$id_[0]</a>";

?>

<? include("/home/mgo/musicgoeson-www/inc/middle.php"); ?>

<? include("/home/mgo/musicgoeson-www/inc/bottom.php"); ?>

<? include("/home/mgo/musicgoeson-www/inc/footer.php"); ?>