<?php include("inc/header.inc"); ?>
<?php include("inc/menu.inc"); ?>

<table border="0" cellspacing="0" cellpadding="0"
<tr bgcolor="#aaaaaa">
<td>
<form action="sendmessage.php" method="post">
To:
</td><td>
<input type="text" size="50" name="to"><br>
</tr>
<tr bgcolor="#cccccc"><td>
Subject:&nbsp&nbsp&nbsp
</td><td>
<input type="text" size="50"name="subject"><br>
</td></tr>
<tr><td colspan="2">
Body:
</td></tr>
<tr><td colspan="2">
<textarea name="message" rows=25 cols=71 wrap=physical></textarea>
</td></tr>
<tr><td colspan="2">
<center>
<input type="submit" value="Send">&nbsp&nbsp&nbsp&nbsp
<input type="Reset">
</center>
</form>
</td></tr></table>

<?php include("inc/footer.inc"); ?>
