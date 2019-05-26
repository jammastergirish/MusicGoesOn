<title>Overdose Incorporated</title>
<?php $pagetext= "Login"; ?>
<?php include("inc/header.inc"); ?>
<?php include("inc/menui.inc"); ?>

<br><br>
<center>
<table border="0" cellspacing="0" cellpadding="0">
<tr bgcolor="#aaaaaa"><td>
<form action="login.php" method="post">
Host:
</td><td>
<input size="50" type="text" name="host">
</td></tr>
<tr bgcolor="#cccccc"><td>
Port:
</td><td>
<input size="50" type="text" name="port" value="110">
</td></tr>
<tr bgcolor="#aaaaaa"><td>
User Name:&nbsp&nbsp&nbsp&nbsp&nbsp
</td><td>
<input size="50" type="text" name="un">
</td></tr>
<tr bgcolor="#cccccc"><td>
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
