<?php
include_once($_SERVER["DOCUMENT_ROOT"]."/inc/php_header.inc");

$username = strtolower($username);
$pass = strtolower($pass);

if ($row = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_users WHERE username = '$username' AND password = password('$pass')")))
{
 $datetime = datetime();
 $guest_row = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_users WHERE username = 'Guest$CookieID'"));
 mysqli_query($link, "UPDATE forum_users SET SID = '$SID', CookieID = '$CookieID', last_loggedin = '$datetime', viewed = '$row[viewed]|$guest_row[viewed]' WHERE username = '$username'");
 if ($assign==1)
 {
  $query = mysqli_query($link, "SELECT * FROM forum_posts WHERE poster = 'Guest$CookieID'");
  while ($row = mysqli_fetch_array($query))
  {
   mysqli_query($link, "UPDATE forum_posts SET poster = '$username' WHERE poster = 'Guest$CookieID'");
  }
 }
 mysqli_query($link, "DELETE FROM forum_users WHERE username = 'Guest$CookieID'");
 header("Location: https://mgo.girish-gupta.com/forums/".$goto);
}
else
{
 header("Location: https://mgo.girish-gupta.com/forums/login.php?login=failed&goto=".$goto);
}

?>