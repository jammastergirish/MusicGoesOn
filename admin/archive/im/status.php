<?php

mysql_connect("localhost", "mgo", "h47fh20e");
mysql_select_db(musicgoeson_com);

$result = mysqli_query($link, "SELECT * FROM im WHERE un = '$un'");

$row = mysqli_fetch_array($result);

echo $row[status];


?>

