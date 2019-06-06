<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

$username = strtolower($username);
$pass = strtolower($pass);

if ($row = mysql_fetch_array(mysql_query("SELECT * FROM forum_users WHERE username = '$username' AND password = password('$pass')")))
{
 $datetime = datetime();
 $guest_row = mysql_fetch_array(mysql_query("SELECT * FROM forum_users WHERE username = 'Guest$CookieID'"));
 mysql_query("UPDATE forum_users SET SID = '$SID', CookieID = '$CookieID', last_loggedin = '$datetime', viewed = '$row[viewed]|$guest_row[viewed]' WHERE username = '$username'");
 if ($assign==1)
 {
  $query = mysql_query("SELECT * FROM forum_posts WHERE poster = 'Guest$CookieID'");
  while ($row = mysql_fetch_array($query))
  {
   mysql_query("UPDATE forum_posts SET poster = '$username' WHERE poster = 'Guest$CookieID'");
  }
 }
 mysql_query("DELETE FROM forum_users WHERE username = 'Guest$CookieID'");
 header("Location: http://www.musicgoeson.com/forums/".$goto);
}
else
{
 header("Location: http://www.musicgoeson.com/forums/login.php?login=failed&goto=".$goto);
}

?>