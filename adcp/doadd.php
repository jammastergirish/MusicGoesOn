<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

if (empty($name))
{
 header("Location: https://mgo.girish-gupta.com/adcp/add.php?error=name");
 exit;
}

if (empty($location))
{
 header("Location: https://mgo.girish-gupta.com/adcp/add.php?error=location");
 exit;
}

if (empty($width))
{
 header("Location: https://mgo.girish-gupta.com/adcp/add.php?error=emptywidth");
 exit;
}

if (empty($height))
{
 header("Location: https://mgo.girish-gupta.com/adcp/add.php?error=emptyheight");
 exit;
}

if (is_int($width))
{
 header("Location: https://mgo.girish-gupta.com/adcp/add.php?error=nointwidth");
 exit;
}

if (is_int($height))
{
 header("Location: https://mgo.girish-gupta.com/adcp/add.php?error=nointheight");
 exit;
}

if (empty($url))
{
 header("Location: https://mgo.girish-gupta.com/adcp/add.php?error=hyperlink");
 exit;
}

$name = addslashes($name);
$id = mysql_num_rows((mysql_query("SELECT * FROM banners"))) + 1;
mysql_query("INSERT INTO banners (id, advertiser, location, width, height, alt, url, keywords, name) VALUES ('$id', '$advertiser', '$location', '$width', '$height', '$alt', '$url', '$keywords', '$name')");
header("Location: https://mgo.girish-gupta.com/adcp/banner.php/$id/"); 

?>