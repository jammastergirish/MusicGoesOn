<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

if (mysql_num_rows(mysql_query("SELECT * FROM forum_users WHERE username = '$username'"))==1)
{
 header("Location: http://www.musicgoeson.com/forums/register.php?error=username&name=$name&email=$email&goto=$goto");
 exit;
}

if (empty($pass1))
{
 header("Location: http://www.musicgoeson.com/forums/register.php?error=emptypass&username=$username&name=$name&email=$email&goto=$goto");
 exit;
}

if ($pass1!=$pass2)
{
 header("Location: http://www.musicgoeson.com/forums/register.php?error=pass&username=$username&name=$name&email=$email&goto=$goto");
 exit;
}

if (empty($name))
{
 header("Location: http://www.musicgoeson.com/forums/register.php?error=name&username=$username&email=$email&goto=$goto");
 exit;
}

if (ereg("@", $email))
{
}
else
{
 header("Location: http://www.musicgoeson.com/forums/register.php?error=email&username=$username&name=$name&goto=$goto");
 exit;
}

mysql_query("INSERT INTO forum_users(username, password, name, email, SID, CookieID) VALUES ('$username', password('$pass1'), '$name', '$email', '$SID', '$CookieID')");
header("Location: http://www.musicgoeson.com/forums/".$goto); 

?>