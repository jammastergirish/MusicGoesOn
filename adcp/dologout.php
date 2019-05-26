<?
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

if ($row = mysql_fetch_array(mysql_query("SELECT * FROM advertisers WHERE SID = '$SID'")))
{
 mysql_query ("UPDATE advertisers SET SID = '0' WHERE SID = '$SID'");
 header("Location: http://www.musicgoeson.com/?loggedout=true");
}
else
{
 header("Location: http://www.musicgoeson.com/");
}

?>