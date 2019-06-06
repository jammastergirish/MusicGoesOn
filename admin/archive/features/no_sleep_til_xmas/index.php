<?php include("/home/mgo/musicgoeson-www/inc/php_header.php"); ?>
<?php

if ($r=="") { $r = $HTTP_REFERER; }

mysql_query ("INSERT INTO no_sleep_til_xmas (date_time, ref, CookieID) VALUES ('$date | $time GMT', '$r', '$CookieID')");
header("Location: http://the-raft.com/downloads/goeson/");

?>