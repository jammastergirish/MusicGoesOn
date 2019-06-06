<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

mysqli_query($link, "UPDATE banners SET clicks = clicks + 1 WHERE id = '$click'");
$banner = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM banners WHERE id = '$click'"));
header("Location: $banner[url]");
?>