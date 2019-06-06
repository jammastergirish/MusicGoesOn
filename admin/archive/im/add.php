<?php

mysql_connect("localhost", "mgo", "h47fh20e");
mysql_select_db(musicgoeson_com);

$result = mysql_query("SELECT * FROM im WHERE un = '$un'");

$row = mysql_fetch_array($result);

if (empty($row[contacts]))
{
 mysql_query("UPDATE im SET contacts = '$add' WHERE un = '$un'");
}
else
{
 mysql_query("UPDATE im SET contacts = '$row[contacts]|$add' WHERE un = '$un'");
}

print "OK";

?>

