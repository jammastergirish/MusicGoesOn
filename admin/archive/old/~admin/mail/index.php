<?
$title = 'WebMail - Login';
$description = '';
$keywords = '';
include("/home/mgo/musicgoeson-www/inc/header.php");
?>

<?
$title = 'WebMail - Login';
include("/home/mgo/musicgoeson-www/inc/top.php");
?>

<center>
<table border="0" cellspacing="0" cellpadding="0">
<tr><td>
<form action="login.php" method="post">
<input type="hidden" name="host" value="musicgoeson.com">
<input type="hidden" name="port" value="110">
<tr><td>
<font face="verdana" size="2">Mail Box:</font>
</td><td>
<input size="50" type="text" name="un">
</td></tr>
<tr><td>
<font face="verdana" size="2">Password:</font>
</td><td>
<input size="50" type="password" name="pass">
</td></tr><tr>
<td colspan="2">
<center>
<input type="submit" value="Login">
</center>
</form>
</td></tr></table>
</center>

<? include("/home/mgo/musicgoeson-www/inc/middle.php"); ?>

<? include("/home/mgo/musicgoeson-www/inc/bottom.php"); ?>

<? include("/home/mgo/musicgoeson-www/inc/footer.php"); ?>