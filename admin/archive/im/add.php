<?php

mysql_connect("localhost", "mgo", "h47fh20e");
mysql_select_db(musicgoeson_com);

$result = mysqli_query($link, "SELECT * FROM im WHERE un = '$un'");

$row = mysqli_fetch_array($result);

if (empty($row[contacts]))
{
 mysqli_query($link, "UPDATE im SET contacts = '$add' WHERE un = '$un'");
}
else
{
 mysqli_query($link, "UPDATE im SET contacts = '$row[contacts]|$add' WHERE un = '$un'");
}

print "OK";

?>

