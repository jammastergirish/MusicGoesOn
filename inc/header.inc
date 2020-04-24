<?php include_once($_SERVER["DOCUMENT_ROOT"]."/inc/php_header.inc");  ?>
<!-- START: /inc/header.inc -->
<!DOCTYPE html>
<html>
<head>
<title>Music Goes On - <?php echo $title; ?></title>
<META http-equiv="PICS-Label" content='(PICS-1.1 "http://www.icra.org/ratingsv02.html" l gen true for "http://musicgoeson.com/" r (cz 1 lc 1 nz 1 oz 1 vz 1) "http://www.rsac.org/ratingsv01.html" l gen true for "http://musicgoeson.com/" r (n 0 s 0 v 0 l 1))'>
<?php

if (empty($description))
{
}
else
{
 echo "<META NAME=\"Description\" CONTENT=\"$description\">\n";
}

if (empty($keywords))
{
}
else
{
 echo "<META NAME=\"Keywords\" CONTENT=\"$keywords\">\n";
}

if (empty($date_))
{
}
else
{
 echo "<META NAME=\"Date\" CONTENT=\"$date_\">\n";
}

if (empty($icon))
{
}
else
{
 echo "<META NAME=\"Icon\" CONTENT=\"$icon\">\n";
}

?>
<META NAME="Pragma" CONTENT="no-cache">
<META name="Generator" CONTENT="notepad">
<META NAME="revisit-after" CONTENT="7">
<LINK REL="SHORTCUT ICON" HREF="/favicon.ico">

<style>
	
.input {background-color:#006699; font-family:verdana; color:white; font-size:11px;}
.select {background-color:#006699; font-family:verdana; color:white; font-size:11px;}
.textarea {background-color:#006699; font-family:verdana; color:white; font-size:11px;}

a.link_onFFFFFF {color:#CC3300;text-decoration:none;}
a.link_onFFFFFF:visited {color:#E68164;text-decoration:none;}
a.link_onFFFFFF:hover {color:#006699;text-decoration:underline;}

a.link_onf7f7f7 {color:#CC3300;text-decoration:none;}
a.link_onf7f7f7:visited {color:#E68164;text-decoration:none;}
a.link_onf7f7f7:hover {color:#006699;text-decoration:underline;}

a.link_on006699 {color:#FFFFFF;text-decoration:none;}
a.link_on006699:hover {color:#FFFFFF;text-decoration:underline;}

linked_img {color:#006699; border: #000000; border-style: solid; border-width: 1,4;}

</style>

<SCRIPT LANGUAGE="JavaScript">
<!-- Begin

Home = new Image();
Home.src = "/images/menu/home_.gif";

News = new Image();
News.src = "/images/menu/news_.gif";

Reviews = new Image();
Reviews.src = "/images/menu/reviews_.gif";

Artists = new Image();
Artists.src = "/images/menu/artists_.gif";

Forums = new Image();
Forums.src = "/images/menu/forums_.gif";

Live = new Image();
Live.src = "/images/menu/live_.gif";

AudioVideo = new Image();
AudioVideo.src = "/images/menu/au_vi_.gif";

Interviews = new Image();
Interviews.src = "/images/menu/interviews_.gif";

// FUNCTIONS

function OpenWindow(url, width, height)
{
 window.open(url, 'kr943j509jt', config='height=' + height + ',width=' + width + ',toolbar=no,menubar=no,scrollbars=no,resizable=no,location=no,directories=no,status=no');
}

// End -->
</SCRIPT>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151106067-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151106067-1');
</script>
</head>

<body leftmargin="0" topmargin="0" bgcolor="#FFFFFF">
<?php /*
<table width="100%" border="0" cellpadding="3" cellspacing="0" style="table-layout:fixed">
<tr>
<td bgcolor="#006699" width="100%">
<font color="#FFFFFF" face="verdana" size="1">Welcome to the new-look <i>Music Goes On</i>!</font>
</td>
</tr>
</table>
*/ ?>
<br>
<table border="0" cellpadding="4" cellspacing="0" style="table-layout:fixed" width=700 align=center>
<tr>
<td bgcolor="lightgrey" width="100" valign="top" align="center">
<font face=verdana size=1><p align=justify>I built and ran this website between 2000 and 2001. It was listed by MTV's now defunct MusicNewswire as one of the then nascent web's top twenty sources, alongside Billboard and VH1. The most exciting part of it &mdash; for a 13/14-year-old excited by new music &mdash; was receiving scores of pre-release CDs from record companies. The entire project was written in PHP linking to a MySQL database, with HTML as well as a little CSS and JavaScript for the frontend; the code, which I am still proud of, is available <a href="https://github.com/jammastergirish/MusicGoesOn"><font color=black>here</a></a>.<br><p align=right><i><a href="https://www.girishgupta.com"><font color=black>Girish Gupta</font></a></i></p></p></font>
</td>
</tr>
</table>

<table width="800" border="0" cellspacing="0" cellpadding="0" align=center>
<tr>
<td bgcolor="#FFFFFF" width="100%" align="left">
<img src="/images/pixel.gif" width="1" height="10"><br><a href="/"><img src="/images/logo/musicgoeson/full_160x67.gif" width="160" height="67" align="left" alt="Music Goes On" border="0"></a>
</td>
<td bgcolor="#FFFFFF" width="100%" align="right">
<img src="/images/pixel.gif" width="1" height="10"><br>
<?php
/*
srand((double)microtime()*1000000); 
if (rand(0,2)==0)
{
 $banner = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM ads WHERE network = 'ad.com' AND width = '468' AND height = '60' LIMIT 0,1"));
 echo $banner['html'];
}
else
{
 $banner = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM ads WHERE network = 'vc' AND width = '468' AND height = '60' LIMIT 0,1"));
 echo $banner['html'];
}
*/
?>
</td>
</tr>
</table>


<br>


<table border="0" cellpadding="3" cellspacing="1" style="table-layout:fixed" width=800 align=center>
<tr>
<td bgcolor="#006699" width="100" valign="top" align="right">
<img src="/images/pixel.gif" width="100" height="2"><br>
<?php

echo "<font face=\"verdana\" size=\"1\">";

if ($menu=="home")
{
}
else
{
 echo "<a class=\"link_on006699\" href=\"/\" onMouseOver=\"Home.src='/images/menu/home_.gif';\" onMouseOut=\"Home.src='/images/menu/home.gif';\"><img src=\"/images/menu/home.gif\" width=\"100\" height=\"20\" alt=\"Home\" border=\"0\" name=\"Home\"></a><br>\n";
}

if ($menu=="news")
{
 echo "<a href=\"/news/\"><img src=\"/images/menu/news+.gif\" width=\"100\" height=\"20\" alt=\"News\" border=\"0\"></a><br>\n";
 echo "<a class=\"link_on006699\" href=\"/news/archive.php\" title=\"Archive\">Archive</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 echo "<img src=\"/images/menu/-bottom.gif\" width=\"100\" height=\"8\"><br>\n";
}
else
{
 echo "<a class=\"link_on006699\" href=\"/news/\" onMouseOver=\"News.src='/images/menu/news_.gif';\" onMouseOut=\"News.src='/images/menu/news.gif';\"><img src=\"/images/menu/news.gif\" width=\"100\" height=\"20\" alt=\"News\" border=\"0\" name=\"News\"></a><br>\n";
}

if ($menu=="reviews")
{
 echo "<a class=\"link_on006699\" href=\"/reviews/\"><img src=\"/images/menu/reviews+.gif\" width=\"100\" height=\"20\" alt=\"Reviews\" border=\"0\"></a><br>\n";
 echo "<a class=\"link_on006699\" href=\"/reviews/albums/\" title=\"Reviews - Albums\">Albums</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 echo "<a class=\"link_on006699\" href=\"/reviews/singles/\" title=\"Reviews - Singles\">Singles</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 echo "<img src=\"/images/menu/-bottom.gif\" width=\"100\" height=\"8\"><br>\n";
}
else
{
 echo "<a class=\"link_on006699\" href=\"/reviews/\" onMouseOver=\"Reviews.src='/images/menu/reviews_.gif';\" onMouseOut=\"Reviews.src='/images/menu/reviews.gif';\"><img src=\"/images/menu/reviews.gif\" width=\"100\" height=\"20\" alt=\"Reviews\" border=\"0\" name=\"Reviews\"></a><br>\n";
}

if ($menu=="artists")
{
 echo "<a class=\"link_on006699\" href=\"/artists/az.php\"><img src=\"/images/menu/artists+.gif\" width=\"100\" height=\"20\" alt=\"Artists\" border=\"0\"></a><br>\n";
 echo "<a class=\"link_on006699\" href=\"/artists/az.php\" title=\"Artists - A-Z\">A-Z</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 if ($s_menu=="artist")
 {
  echo "<br>\n";
  $data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM artists WHERE id = '$artist[id]'"));
  echo "<a class=\"link_on006699\" href=\"/artists/artist.php?id=$data[id]\" title=\"$data[artist]\"><b>$data[artist]</b></a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";

  $artists_query = mysqli_query($link, "SELECT * FROM mgo WHERE section = 'Artists/Biographies' AND artists_id = '$data[id]' ORDER BY id DESC LIMIT 0,1");
  if ($row = mysqli_fetch_array($artists_query))
  {
   echo "<a class=\"link_on006699\" href=\"/article.php?id=$row[id]\" title=\"$data[artist] Biography\">Biography</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
  }

  echo "<a class=\"link_on006699\" href=\"/artists/news.php?id=$data[id]\" title=\"$data[artist] News\">News</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
  echo "<a class=\"link_on006699\" href=\"/artists/reviews.php?id=$data[id]\" title=\"$data[artist] Reviews\">Reviews</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
  echo "<a class=\"link_on006699\" href=\"/artists/live.php?id=$data[id]\" title=\"$data[artist] Live\">Live</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
  echo "<a class=\"link_on006699\" href=\"/artists/au_vi.php?id=$data[id]\" title=\"$data[artist] Audio/Video\">Audio/Video</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
  echo "<a class=\"link_on006699\" href=\"/artists/interviews.php?id=$data[id]\" title=\"$data[artist] Interviews\">Interviews</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
  echo "<a class=\"link_on006699\" href=\"/forums/forum.php?id=$data[id]\" title=\"$data[artist] Forum\">Forum</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 }
 echo "<img src=\"/images/menu/-bottom.gif\" width=\"100\" height=\"8\"><br>\n";
}
else
{
 echo "<a class=\"link_on006699\" href=\"/artists/az.php\" onMouseOver=\"Artists.src='/images/menu/artists_.gif';\" onMouseOut=\"Artists.src='/images/menu/artists.gif';\"><img src=\"/images/menu/artists.gif\" width=\"100\" height=\"20\" alt=\"Artists\" border=\"0\" name=\"Artists\"></a><br>\n";
}

if ($menu=="forums")
{
 echo "<a class=\"link_on006699\" href=\"/forums/\"><img src=\"/images/menu/forums+.gif\" width=\"100\" height=\"20\" alt=\"Forums\" border=\"0\"></a><br>\n";
 if ($forums_row = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM forum_users WHERE SID = '$SID'")))
 {
  if ($s_menu=="forum")
  {
   echo "<a class=\"link_on006699\" href=\"/forums/add_edit.php?action=add&forum=$forum_data[id]\" title=\"Start A New Topic\">Start New Topic</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
   echo "<br>\n";
  }
  if ($s_menu=="topic")
  {
   echo "<a class=\"link_on006699\" href=\"/forums/add_edit.php?action=reply&replyto=$topic_data[id]\" title=\"Reply To This Topic\">Reply To Topic</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
   echo "<br>\n";
  }
  echo "<a class=\"link_on006699\" href=\"/forums/edit.php\" title=\"Edit Your Profile\">Edit Profile</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
  echo "<a class=\"link_on006699\" href=\"/forums/dologout.php\" title=\"Logout\">Logout</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
  echo "<img src=\"/images/menu/-bottom.gif\" width=\"100\" height=\"8\"><br>\n";
 }
 else
 {
  echo "<a class=\"link_on006699\" href=\"/forums/login.php\" title=\"Login\">Login</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
  echo "<a class=\"link_on006699\" href=\"/forums/register.php\" title=\"Register\">Register</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
  echo "<img src=\"/images/menu/-bottom.gif\" width=\"100\" height=\"8\"><br>\n";
 }
}
else
{
 echo "<a class=\"link_on006699\" href=\"/forums/forum.php?id=general\" onMouseOver=\"Forums.src='/images/menu/forums_.gif';\" onMouseOut=\"Forums.src='/images/menu/forums.gif';\"><img src=\"/images/menu/forums.gif\" width=\"100\" height=\"20\" alt=\"Forums\" border=\"0\" name=\"Forums\"></a><br>\n";
}

if ($menu=="live")
{
 echo "<a class=\"link_on006699\" href=\"/live/\"><img src=\"/images/menu/live_.gif\" width=\"100\" height=\"20\" alt=\"Live\" border=\"0\"></a><br>\n";
}
else
{
 echo "<a class=\"link_on006699\" href=\"/live/\" onMouseOver=\"Live.src='/images/menu/live_.gif';\" onMouseOut=\"Live.src='/images/menu/live.gif';\"><img src=\"/images/menu/live.gif\" width=\"100\" height=\"20\" alt=\"Live\" border=\"0\" name=\"Live\"></a><br>\n";
}

if ($menu=="au_vi")
{
 echo "<a class=\"link_on006699\" href=\"/au_vi/\"><img src=\"/images/menu/au_vi_.gif\" width=\"100\" height=\"20\" alt=\"AudioVideo\" border=\"0\"></a><br>\n";
}
else
{
 echo "<a class=\"link_on006699\" href=\"/au_vi/\" onMouseOver=\"AudioVideo.src='/images/menu/au_vi_.gif';\" onMouseOut=\"AudioVideo.src='/images/menu/au_vi.gif';\"><img src=\"/images/menu/au_vi.gif\" width=\"100\" height=\"20\" alt=\"AudioVideo\" border=\"0\" name=\"AudioVideo\"></a><br>\n";
}

if ($menu=="interviews")
{
 echo "<a class=\"link_on006699\" href=\"/interviews/\"><img src=\"/images/menu/interviews_.gif\" width=\"100\" height=\"20\" alt=\"Interviews\" border=\"0\"></a><br>\n";
}
else
{
 echo "<a class=\"link_on006699\" href=\"/interviews/\" onMouseOver=\"Interviews.src='/images/menu/interviews_.gif';\" onMouseOut=\"Interviews.src='/images/menu/interviews.gif';\"><img src=\"/images/menu/interviews.gif\" width=\"100\" height=\"20\" alt=\"Interviews\" border=\"0\" name=\"Interviews\"></a><br>\n";
}

if ($menu=="admin")
{
 echo "<a class=\"link_on006699\" href=\"/admin/admin.php\"><img src=\"/images/menu/admin+.gif\" width=\"100\" height=\"20\" alt=\"Admin\" border=\"0\"></a><br>\n";
 echo "<a class=\"link_on006699\" href=\"/admin/stats/\" title=\"Admin - Stats\">Stats</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 echo "<a class=\"link_on006699\" href=\"/admin/article/add.php\" title=\"Admin - Add Article\">Add Article</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 echo "<a class=\"link_on006699\" href=\"/cp/mysqladmin/index.php3?exDomainPackageID=12411&exLanguage=english\" title=\"Admin - phpMyAdmin\" target=\"_blank\">phpMyAdmin</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 echo "<a class=\"link_on006699\" href=\"/admin/mailinglist/\" title=\"Admin - Mailing List\">Mailing List</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 echo "<a class=\"link_on006699\" href=\"/admin/fileman/\" title=\"Admin - File Manager\">File Manager</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 echo "<a class=\"link_on006699\" href=\"/admin/info.php\" title=\"Admin - PHP Info\">PHP Info</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 echo "<a class=\"link_on006699\" href=\"/admin/moreover.php\" title=\"Admin - Moreover\">Moreover</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 echo "<a class=\"link_on006699\" href=\"/admin/password.php\" title=\"Admin - Change Password\">Change Pass</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 echo "<a class=\"link_on006699\" href=\"/admin/logout.php\" title=\"Admin - Logout\">Logout</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 echo "<img src=\"/images/menu/-bottom.gif\" width=\"100\" height=\"8\"><br>\n";
}

if ($menu=="adcp")
{
 echo "<a class=\"link_on006699\" href=\"/adcp/\"><img src=\"/images/menu/adcp+.gif\" width=\"100\" height=\"20\" alt=\"adcp\" border=\"0\"></a><br>\n";
 if ($adcp_row = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM advertisers WHERE SID = '$SID'")))
 {
  echo "<a class=\"link_on006699\" href=\"/adcp/main.php\" title=\"Your Banners\">Your Banners</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
  echo "<a class=\"link_on006699\" href=\"/adcp/add.php\" title=\"Add Banner\">Add Banner</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
  echo "<a class=\"link_on006699\" href=\"/adcp/dologout.php\" title=\"Logout\">Logout</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
  echo "<img src=\"/images/menu/-bottom.gif\" width=\"100\" height=\"8\"><br>\n";
 }
 else
 {
  echo "<a class=\"link_on006699\" href=\"/adcp/\" title=\"Login\">Login</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
  echo "<img src=\"/images/menu/-bottom.gif\" width=\"100\" height=\"8\"><br>\n";
 }
}

if ($menu=="mail_manager")
{
 echo "<a class=\"link_on006699\" href=\"/mail/manager/\"><img src=\"/images/menu/mail+.gif\" width=\"100\" height=\"20\" alt=\"Mail Manager\" border=\"0\"></a><br>\n";
 echo "<a class=\"link_on006699\" href=\"/mail/manager/lists.php\" title=\"Lists\">Lists</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 echo "<a class=\"link_on006699\" href=\"/mail/manager/edit.php\" title=\"Edit Details\">Edit Details</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 echo "<a class=\"link_on006699\" href=\"/mail/manager/pass.php\" title=\"Change Password\">Change Pass</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 echo "<a class=\"link_on006699\" href=\"/mail/manager/unsubscribe.php\" title=\"Unsubscribe\">Unsubscribe</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 echo "<a class=\"link_on006699\" href=\"/mail/manager/logout.php\" title=\"Logout\">Logout</a><img src=\"/images/pixel.gif\" width=\"10\"><br>\n";
 echo "<img src=\"/images/menu/-bottom.gif\" width=\"100\" height=\"8\"><br>\n";
}

echo "</font>";

?>
</td>
<td bgcolor="#FFFFFF" width="100%" valign="top" align="center">
<!-- END: /inc/header.inc -->