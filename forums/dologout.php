<?
include("inc/php_header.inc");

if (empty($goto))
{
 $goto = str_replace("http://www.musicgoeson.com/forums/", "", $HTTP_REFERER);
}

if ($CurrentForumsUser = mysql_fetch_array(mysql_query("SELECT * FROM forum_users WHERE SID = '$SID'")))
{
 mysql_query("UPDATE forum_users SET SID = '0' WHERE SID = '$SID'");
 header("Location: http://mgo.girish-gupta.com/forums/".$goto);
}
else
{
 header("Location: http://mgo.girish-gupta.com/forums/".$goto);
}

?>