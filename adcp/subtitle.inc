<?php

if ($advertiser_row = mysql_fetch_array(mysql_query("SELECT * FROM advertisers WHERE SID = '$SID'")))
{
 $subtitle = "Logged in: <b>$advertiser_row[name]</b> [<a href=\"/adcp/dologout.php\">Logout</a>]";
}
else
{
 $subtitle = "NOT LOGGED IN";
}

?>