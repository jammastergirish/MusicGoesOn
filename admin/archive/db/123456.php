<?

mysql_connect("localhost", "mgo", "h47fh20e");
mysql_select_db(musicgoeson_com);

$result = mysql_query("SELECT * FROM mgo");

while($data = mysql_fetch_array($result))
{
 $data[headline] = ereg_replace("Albums - ", "", $data[headline]);
 $data[headline] = ereg_replace("Singles - ", "", $data[headline]);
 mysql_query("UPDATE mgo SET headline = '$data[headline]' WHERE id = '$data[id]'");
}

?>