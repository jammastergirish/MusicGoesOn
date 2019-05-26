<?

$ID = md5(uniqid (rand()));

mysql_connect("localhost", "mgo", "h47fh20e");
mysql_select_db(musicgoeson_com);

$result = mysql_query("SELECT * FROM im WHERE un = '$to'");

$row = mysql_fetch_array($result);

$message = addslashes($message);

mysql_query("UPDATE im SET FromUserName = '$from', InstantMessage = '$ID-HELLOMYNAMEISGIRISH-$message' WHERE un = '$to'");

print "OK";

?>