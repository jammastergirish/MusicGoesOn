<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

if ($row = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM advertisers WHERE SID = '$SID'")))
{
 mysql_query ("UPDATE advertisers SET SID = '0' WHERE SID = '$SID'");
 header("Location: https://mgo.girish-gupta.com/?loggedout=true");
}
else
{
 header("Location: https://mgo.girish-gupta.com/");
}

?>