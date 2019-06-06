<?php
include_once("../inc/php_header.inc");

$au_vi = mysql_fetch_array(mysql_query("SELECT * FROM au_vi WHERE id = '$id'"));
?>

<html>
<head>
<title>Music Goes On - Audio/Video</title>
</head>

<body bgcolor="#000000">

<CENTER>
<font color="#FFFFFF" face="verdana" size="2"><b><?php echo $au_vi[artist]." - ".$au_vi[title]; ?></b></font>
<br><br>
<OBJECT ID="MediaPlayer1" width=200 height=200
	classid="CLSID:22D6F312-B0F6-11D0-94AB-0080C74C7E95"
	codebase=
	"http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,0,02,0902"
        standby="Loading Microsoft� Windows Media� Player components..." 
        type="application/x-oleobject">
  <PARAM NAME="FileName" VALUE="<?php echo $au_vi[wm_url]; ?>">
</OBJECT>
<br><br>
<font face="verdana" size="1" color="#FFFFFF"><?php echo $au_vi[desc]; ?></font>
<br><br>
<a href="javascript:window.close()"><font face="verdana" size="1" color="#FFFFFF">[CLOSE WINDOW]</font></a>
</CENTER>

</body>

</html>