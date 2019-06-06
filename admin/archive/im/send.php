<?php

$ID = md5(uniqid (rand()));

mysql_connect("localhost", "mgo", "h47fh20e");
mysql_select_db(musicgoeson_com);

$result = mysqli_query($link, "SELECT * FROM im WHERE un = '$to'");

$row = mysqli_fetch_array($result);

$message = addslashes($message);

mysqli_query($link, "UPDATE im SET FromUserName = '$from', InstantMessage = '$ID-HELLOMYNAMEISGIRISH-$message' WHERE un = '$to'");

print "OK";

?>