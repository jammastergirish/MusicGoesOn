<?
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");
admin($HTTP_SESSION_VARS["aSID"], $HTTP_COOKIE_VARS["SID"]);
$title = 'Admin - Change Password';
$description = '';
$keywords = '';
$menu = 'admin';
$php_header = 'false';
include("/home/girishgu/public_html/mgo/inc/header.inc");
?>

<?
$title = 'Admin - Change Password';
$subtitle = $aSID;
include("/home/mgo/musicgoeson-www/inc/top.php");
?>

<?

if ($ent==1)
{
 if ($pass1==$pass2)
 {
  mysql_query("UPDATE users SET password = password('$pass1') WHERE aSID = '$aSID'");
  echo "<b>Your password has been changed</b>";
 }
 else
 {
  echo "<b>The passwords did not match, please try again:</b>";
  $ent = '';
 }
}

if (empty($ent))
{
 echo "<form action=\"/admin/password.php\" method=\"post\">\n";
 echo "New password:<br><input type=\"password\" name=\"pass1\"><br><br>\n";
 echo "Re-type new password<br><input type=\"password\" name=\"pass2\"><br><br>\n";
 echo "<input type=\"hidden\" name=\"ent\" value=\"1\">\n";
 echo "<input type=\"submit\" value=\"Change Password\">\n";
 echo "</form>";
}

?>

<?

include("/home/girishgu/public_html/mgo/inc/middle.inc");
include("/home/girishgu/public_html/mgo/inc/bottom.inc");
include("/home/girishgu/public_html/mgo/inc/footer.inc");

?>