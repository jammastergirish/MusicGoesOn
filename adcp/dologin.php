<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

$username = strtolower($username);
$password = strtolower($password);

if ($row = mysql_fetch_array(mysql_query("SELECT * FROM advertisers WHERE id = '$username' AND password = password('$password')")))
{
 mysql_query ("UPDATE advertisers SET SID = '$SID' WHERE id = '$username'");
 header("Location: http://www.musicgoeson.com/adcp/main.php");
}
else
{
 header("Location: http://www.musicgoeson.com/adcp/index.php?login=failed?username=$username&password=$password");
}

?>