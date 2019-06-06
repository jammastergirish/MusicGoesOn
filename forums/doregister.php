<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

if (mysql_num_rows(mysqli_query($link, "SELECT * FROM forum_users WHERE username = '$username'"))==1)
{
 header("Location: https://mgo.girish-gupta.com/forums/register.php?error=username&name=$name&email=$email&goto=$goto");
 exit;
}

if (strlen($username)>=16)
{
 header("Location: https://mgo.girish-gupta.com/forums/register.php?error=username_len&name=$name&email=$email&goto=$goto");
 exit;
}

if (empty($pass1))
{
 header("Location: https://mgo.girish-gupta.com/forums/register.php?error=emptypass&username=$username&name=$name&email=$email&goto=$goto");
 exit;
}

if ($pass1!=$pass2)
{
 header("Location: https://mgo.girish-gupta.com/forums/register.php?error=pass&username=$username&name=$name&email=$email&goto=$goto");
 exit;
}

if (empty($name))
{
 header("Location: https://mgo.girish-gupta.com/forums/register.php?error=name&username=$username&email=$email&goto=$goto");
 exit;
}

if (ereg("Guest", $name))
{
 header("Location: https://mgo.girish-gupta.com/forums/register.php?error=name_guest&username=$username&email=$email&goto=$goto");
 exit;
}

if (!IsEmail($email))
{
 header("Location: https://mgo.girish-gupta.com/forums/register.php?error=email&username=$username&name=$name&goto=$goto");
 exit;
}

$datetime = datetime();
$forums_row = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_users WHERE username = 'Guest$CookieID'"));
mysqli_query($link, "UPDATE forum_users SET username = '$username', password = password('$pass1'), name = '$name', email = '$email', SID = '$SID', CookieID = '$CookieID', registered = '$datetime', last_loggedin = '$datetime' WHERE username = '$forums_row[username]'");
if ($assign==1)
{
 $query = mysqli_query($link, "SELECT * FROM forum_posts WHERE poster = '$forums_row[username]'");
 while ($row = mysqli_fetch_array($query))
 {
  mysqli_query($link, "UPDATE forum_posts SET poster = '$username' WHERE poster = '$forums_row[username]'");
 }
}
header("Location: https://mgo.girish-gupta.com/forums/".$goto); 

?>