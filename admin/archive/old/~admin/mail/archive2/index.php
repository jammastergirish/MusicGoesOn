<?php include("inc/header.inc"); ?>

<br><br>
<center>
<table border="0" cellspacing="0" cellpadding="0">
<tr><td>
<form action="login.php" method="post">
<input type="hidden" name="host" value="musicgoeson.com">
<input type="hidden" name="port" value="110">
<tr><td>
Mail Box:&nbsp&nbsp&nbsp&nbsp&nbsp
</td><td>
<input size="50" type="text" name="un">
</td></tr>
<tr><td>
Password:
</td><td>
<input size="50" type="password" name="pass">
</td></tr><tr>
<td colspan="2">
<center>
<input type="submit" value="&nbsp&nbsp Login&nbsp&nbsp">&nbsp&nbsp&nbsp&nbsp
<input type="reset">
</center>
</form>
</td></tr></table>
</center>

<?php include("inc/footer.inc"); ?>