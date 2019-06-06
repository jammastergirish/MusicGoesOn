<?php
session_register ("count");
$count++;
?>

Hello visitor, you have seen this page <?php echo $count; ?> times.<p>

<php?
# the <?php=SID?> is necessary to preserve the session id
# in the case that the user has disabled cookies
?>

To continue, <A HREF="nextpage.php?<?php=SID?>">click here</A>
