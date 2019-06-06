<?php

mysql_connect("localhost", "mgo", "h47fh20e");
mysql_select_db(musicgoeson_com);

$query = mysql_query("SELECT * FROM visits WHERE user_agent = 'Mozilla/4.0+(compatible;MSIE+5.01;+Windows+NT+5.0)' AND remote_addr = '195.92.244.174' AND remote_host = 'netser-colo-01.whoc.theplanet.co.uk'"); 

while ($row = mysql_fetch_array($query))
{
 mysql_query("UPDATE visits SET CookieID = '102248' WHERE remote_host = '$row[remote_host]'");
}

?>