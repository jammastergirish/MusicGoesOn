<html>
<head>
<title>MusicGoesOn.com - Advertising Control Panel</title>
<body bgcolor="#FFFFFF" topmargin="0" leftmargin="0">
</head>

<link rel="stylesheet" href="stylesheet.css" type="text/css">

<table border="0" width="100%" cellspacing="0">
<tr>
<td valign="top" width="140" bgcolor="#0E96A9">
<CENTER><font size="2" face="verdana" color="#FFFFFF">Advertising<br>Control Panel</font></CENTER>
</td>

<td valign="top">

<CENTER><img src="/images/pixel.gif" height="20"></CENTER><p>

<blockquote>
<font face="verdana" size="2" color="#0E96A9">

<?php if ($login=="failed") { ?>
<font color="red">Your userID/password has not been recognised, please try again:</font><br>
<?php } else { ?><?php } ?>

<form action ="http://www.musicgoeson.com/advertising/controlpanel/dologin.php" method="post"> 
<b>UserID:</b><br><input type="text" name="userID" size="50" value=""><br>
<b>Password:</b><br><input type="password" name="password" size="50" value=""><br><br>
<br><input type="submit" value="Submit" align="absmiddle">
</form>

</font>
</blockquote>

</body>
</html>