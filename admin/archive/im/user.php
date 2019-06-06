<?php

mysql_connect("localhost", "mgo", "h47fh20e");
mysql_select_db(musicgoeson_com);

$result = mysqli_query($link, "SELECT * FROM im WHERE un = '$un'");

$row = mysqli_fetch_array($result);

$ID = explode("-HELLOMYNAMEISGIRISH-", $row[InstantMessage]);

print $row[status];
print "\n";
print "<user>$row[FromUserName]</user><message>$ID[1]</message>";
print "\n";
print "$ID[0]";

?>