<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

mysql_query("UPDATE banners SET clicks = clicks + 1 WHERE id = '$click'");
$banner = mysql_fetch_array(mysql_query("SELECT * FROM banners WHERE id = '$click'"));
header("Location: $banner[url]");
?>