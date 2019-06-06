<?php

if ($CurrentForumsUser = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_users WHERE SID = '$SID'")))
{
 $subtitle = "Logged in: <b>$CurrentForumsUser[name]</b> ($CurrentForumsUser[username]) [<a href=\"/forums/dologout.php\">Logout</a>]";
 $datetime = datetime();
 mysqli_query($link, "UPDATE forum_users SET last_loggedin = '$datetime' WHERE username = '$CurrentForumsUser[username]'");
}
else
{
 $subtitle = "If you have previously registered to use these forums please <a href=\"/forums/login.php\">login</a>.  If you have not registered you may still post messages, however you will be unable to do some things that <a href=\"/forums/register.php\">registered</a> users can do. [<a href=\"/forums/login.php\">Login</a>] [<a href=\"/forums/register.php\">Register</a>]";
 if ($CurrentForumsUser = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_users WHERE username = 'Guest$CookieID'")))
 {
  $datetime = datetime();
  mysqli_query($link, "UPDATE forum_users SET last_loggedin = '$datetime' WHERE username = '$CurrentForumsUser[username]'");
 }
 else
 {
  $datetime = datetime();
  mysqli_query($link, "INSERT INTO forum_users(username, CookieID, registered, last_loggedin) VALUES ('Guest$CookieID', '$CookieID', '$datetime', '$datetime')");
 }
}

$subtitle = format($subtitle, "006699");

include("../inc/top.inc");

?>