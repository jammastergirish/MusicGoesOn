<?php
$title = 'Mailing Lists - Manager - Unsubscribe';
$description = '';
$keywords = '';
$menu = 'mail_manager';
include("inc/header.inc");
include("mail/manager/include.inc");
?>

<?php
$title = 'Mailing Lists - Manager - Unsubscribe';
include("/home/mgo/musicgoeson-www/inc/top.php");
?>

<?php

if ($u=="yes")
{
 mysqli_query($link, "DELETE FROM mail WHERE SID = '$SID'");
 echo "You have been removed from <i>Music Goes On</i>'s mailing lists.";
}

?>

<?php include("/home/mgo/musicgoeson-www/inc/middle.php"); ?>

<?php include("/home/mgo/musicgoeson-www/inc/bottom.php"); ?>

<?php include("/home/mgo/musicgoeson-www/inc/footer.php"); ?>