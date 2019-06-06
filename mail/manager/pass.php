<?php
$title = 'Mailing Lists - Manager - Change Password';
$description = '';
$keywords = '';
$menu = 'mail_manager';
include("inc/header.inc");
include("mail/manager/include.inc");
?>

<?php
$title = 'Mailing Lists - Manager - Change Password';
$subtitle = $row[name]." [".$row[email]."]";
include("inc/top.inc");
?>

<form action="/mail/manager/pass2.php" method="post">

<?php

if ($error=="pas")
{
 echo "<font color=\"red\">Your passwords did not match.</font><br>\n";
}

?>

<b>New password:</b><br><input type="password" name="pass" size="50" maxlength="255" value=""><br><br>
<b>Re-type new password:</b><br><input type="password" name="pass2" size="50" maxlength="255" value=""><br><br>
<br>
<input type="submit" value="Change Password">

</form>

<?php

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>