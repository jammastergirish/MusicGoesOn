<?php
$title = 'WebMail - Compose Message';
$description = '';
$keywords = '';
include("/home/mgo/musicgoeson-www/inc/header.php");
?>
MENU

<?php
$title = 'WebMail - Compose Message';
include("/home/mgo/musicgoeson-www/inc/top.php");
?>

<form action="sendmessage.php" method="post">
<b>To:</b><br><input type="text" name="to" size="88" value=""><br>
<b>Subject:</b><br><input type="text" name="subject" size="88" value=""><br>
<b>Message:</b><br><textarea name="message" rows="15" cols="76"></textarea><br><br>
<input type="submit" value="Send Mail" align="absmiddle">

<?php include("/home/mgo/musicgoeson-www/inc/middle.php"); ?>

<?php include("/home/mgo/musicgoeson-www/inc/bottom.php"); ?>

<?php include("/home/mgo/musicgoeson-www/inc/footer.php"); ?>