<?php

if ($pass==$pass2)
{
}
else
{
 header("Location: https://mgo.girish-gupta.com/mail/manager/pass.php?error=pass");
}

$title = 'Mailing Lists - Manager - Change Password';
$description = '';
$keywords = '';
$menu = 'mail_manager';
include("inc/header.inc");
include("mail/manager/include.inc");
?>

<?php
$title = 'Mailing Lists - Manager - Change Password';
include("inc/top.inc");
?>

<?php

mysqli_query($link, "UPDATE mail SET pass = password('$pass') WHERE SID = '$SID'");

?>

Your password has been changed.

<?php

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>