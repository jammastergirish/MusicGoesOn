<?php
$title = 'Features - Ash - Shining Light';
$description = '';
$keywords = '';
include("/home/mgo/musicgoeson-www/inc/header.php");
?>

<?php
$title = 'Ash - Shining Light';
include("/home/mgo/musicgoeson-www/inc/top.php");
?>

<img src="/images/features/ash_jan2001/bw_200x135.jpg" width="200" height="135" align="left" border="1">

You have been entered into the draw to win a copy of <b>Ash</b>'s latest single, <i>Shining
Light</i>.  If you are one of the five lucky winners you will be notified by e-mail.<br><br>
Why not listen to and download <i>Shining Light</i> for FREE...

<?php

$id = md5(uniqid (rand()));
 
mysql_query("INSERT INTO mailinglist (id, email, CookieID) VALUES ('$id', '$email', '$CookieID')");

mail("webmaster@musicgoeson.com", "Answer: $answer", "Name: $name\nE-Mail: $email\nAnswer: $answer\nCookieID: $CookieID");

?>

<?php include("/home/mgo/musicgoeson-www/inc/middle.php"); ?>

<br>

<font face="verdana" size="2">

Listen...<b>Ash - Shining Light</b><br>
<a href="http://promo.od2.co.uk/promo.dll?cat=OLPINFECT98CDS-01&quality=28.8&format=asf&length=f&vendor=132">28.8K</a> |
<a href="http://promo.od2.co.uk/promo.dll?cat=OLPINFECT98CDS-01&quality=56&format=asf&length=f&vendor=132">56K</a> |
<a href="https://salesecure.od2.co.uk/sale/sale.asp?od2ref=000000&cat=OLPINFECT98CDS-01&vendor_id=132" target="_blank">Download</a>

</font>

<?php include("/home/mgo/musicgoeson-www/inc/bottom.php"); ?>

<?php include("/home/mgo/musicgoeson-www/inc/footer.php"); ?>