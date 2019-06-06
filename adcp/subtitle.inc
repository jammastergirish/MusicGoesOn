<?php

if ($advertiser_row = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM advertisers WHERE SID = '$SID'")))
{
 $subtitle = "Logged in: <b>$advertiser_row[name]</b> [<a href=\"/adcp/dologout.php\">Logout</a>]";
}
else
{
 $subtitle = "NOT LOGGED IN";
}

?>