<?
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

if (empty($name))
{
 header("Location: http://www.musicgoeson.com/adcp/edit.php/$id/?error=name");
 exit;
}

if (empty($location))
{
 header("Location: http://www.musicgoeson.com/adcp/edit.php/$id/?error=location");
 exit;
}

if (empty($width))
{
 header("Location: http://www.musicgoeson.com/adcp/edit.php/$id/?error=emptywidth");
 exit;
}

if (empty($height))
{
 header("Location: http://www.musicgoeson.com/adcp/edit.php/$id/?error=emptyheight");
 exit;
}

if (is_int($width))
{
 header("Location: http://www.musicgoeson.com/adcp/edit.php/$id/?error=nointwidth");
 exit;
}

if (is_int($height))
{
 header("Location: http://www.musicgoeson.com/adcp/edit.php/$id/?error=nointheight");
 exit;
}

if (empty($url))
{
 header("Location: http://www.musicgoeson.com/adcp/edit.php/$id/?error=hyperlink");
 exit;
}

$name = addslashes($name);
mysql_query("UPDATE banners SET name = '$name', location = '$location', width = '$width', height = '$height', alt = '$alt', url = '$url', keywords = '$keywords', deleted = '$delete' WHERE id = '$id'");
header("Location: http://www.musicgoeson.com/adcp/banner.php/$id/"); 

?>