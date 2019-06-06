<?php

mysql_connect("localhost", "mgo", "h47fh20e");
mysql_select_db(musicgoeson_com);

$result = mysqli_query($link, "SELECT * FROM mgo");

while($data = mysqli_fetch_array($result))
{
 $data[headline] = ereg_replace("Albums - ", "", $data[headline]);
 $data[headline] = ereg_replace("Singles - ", "", $data[headline]);
 mysqli_query($link, "UPDATE mgo SET headline = '$data[headline]' WHERE id = '$data[id]'");
}

?>