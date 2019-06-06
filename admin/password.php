<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");
admin($HTTP_SESSION_VARS["aSID"], $HTTP_COOKIE_VARS["SID"]);
$title = 'Admin - Change Password';
$description = '';
$keywords = '';
$menu = 'admin';
$php_header = 'false';
include("../inc/header.inc");
?>

<?php
$title = 'Admin - Change Password';
$subtitle = $aSID;
include("../inc/top.php");
?>

<?php

if ($ent==1)
{
 if ($pass1==$pass2)
 {
  mysqli_query($link, "UPDATE users SET password = password('$pass1') WHERE aSID = '$aSID'");
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

<?php

include("../inc/middle.inc");
include("../inc/bottom.inc");
include("../inc/footer.inc");

?>