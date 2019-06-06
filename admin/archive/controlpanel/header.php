<?php

mysql_connect ("localhost", "mgo", "h47fh20e");
mysql_select_db (musicgoeson_com);

$result_login = mysql_query ("SELECT * FROM advertising WHERE id = '$userID' AND sid = '$SID'");

if ($row_login = mysql_fetch_array($result_login))
{
}
else
{
    header("Location: http://www.musicgoeson.com/advertising/controlpanel/login.php?login=failed");
}

?>
<html>
<head>
<title>MusicGoesOn.com - Advertising Control Panel</title>
<body bgcolor="#FFFFFF" topmargin="0" leftmargin="0">
</head>

<link rel="stylesheet" href="stylesheet.css" type="text/css">

<table border="0" width="100%" cellspacing="0">
<tr>
<td valign="top" width="160" bgcolor="#0E96A9">
<CENTER><font size="2" face="verdana" color="#FFFFFF">Advertising<br>Control Panel</font></CENTER>
<br>
<font size="2" face="verdana">

<img src="/images/pixel.gif" width="3"><a href="controlpanel.php<?php include("/home/mgo/musicgoeson-www/advertising/controlpanel/link.inc"); ?>"><font color="#FFFFFF"><b>Home</b></font></a><br>
<br>

<?php

mysql_connect ("localhost", "mgo", "h47fh20e");
mysql_select_db (musicgoeson_com);

/*****/

$query = "SELECT * FROM banner WHERE userid = '$userID'";

$result = MYSQL_QUERY($query);

$number = MYSQL_NUMROWS($result);

$i = 0;

IF ($number == 0) :
ELSEIF ($number > 0) :
                print "<img src=\"/images/pixel.gif\" width=\"3\"><font color=\"#FFFFFF\"><b>Banners</b></font><br>";
	WHILE ($i < $number):
		$name = mysql_result($result,$i,"name");
		$id = mysql_result($result,$i,"id");
		print "<img src=\"/images/pixel.gif\" width=\"10\"><a href=\"banner.php?userID=$userID&SID=$SID&bannerID=$id\" title=\"$name\"><font color=\"#FFFFFF\">$name</font></a><br>";
		$i++;
	ENDWHILE;
ENDIF;

?>

<br>
<img src="/images/pixel.gif" width="3"><a href="addbanner.php<?php include("/home/mgo/musicgoeson-www/advertising/controlpanel/link.inc"); ?>"><font color="#FFFFFF"><b>Add A Banner</b></font></a><br><br>
<img src="/images/pixel.gif" width="3"><a href="stats.php<?php include("/home/mgo/musicgoeson-www/advertising/controlpanel/link.inc"); ?>"><font color="#FFFFFF"><b>Statistics</b></font></a><br><br>
<img src="/images/pixel.gif" width="3"><a href="dologout.php<?php include("/home/mgo/musicgoeson-www/advertising/controlpanel/link.inc"); ?>"><font color="#FFFFFF"><b>Logout</b></font></a><br><br>

</font>

<br><br><br><br><br>

</td>

<td valign="top">

<CENTER><img src="/images/pixel.gif" height="20"></CENTER><p>

<blockquote>
<font face="verdana" size="2" color="#0E96A9">