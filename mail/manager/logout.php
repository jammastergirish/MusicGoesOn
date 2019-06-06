<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

$row = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM mail WHERE SID = '$SID'"));

$SID_ = $SID;

mysql_query ("UPDATE users SET SID = '' WHERE SID = '$SID_'");
header("Location: https://mgo.girish-gupta.com/");

?>