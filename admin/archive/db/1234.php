<?php

mysql_connect("localhost", "mgo", "h47fh20e");
mysql_select_db(musicgoeson_com);

$result = mysqli_query($link, "SELECT * FROM mgo WHERE id = '$id'");

$data = mysqli_fetch_array($result);

echo $data[headline];
echo "<br><br>";
echo $data[html];

?>