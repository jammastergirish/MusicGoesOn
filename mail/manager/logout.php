<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

$row = mysql_fetch_array(mysql_query("SELECT * FROM mail WHERE SID = '$SID'"));

$SID_ = $SID;

mysql_query ("UPDATE users SET SID = '' WHERE SID = '$SID_'");
header("Location: https://mgo.girish-gupta.com/");

?>