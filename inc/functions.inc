<?php

function update_user($CookieID, $datetime)
{
 $referrer = getenv(HTTP_REFERER);
 if (ereg(".musicgoeson.com", $referrer) && ereg("http:\/\/", $referrer))
 {
  $referrer = str_replace("musicgoeson.com", "", $referrer);
  $referrer = str_replace("www.", "", $referrer);
  $referrer = str_replace("http://", "", $referrer);
 }
 mysql_query("INSERT INTO visits (datetime, CookieID, SID, referrer, uri, user_agent, remote_host, remote_addr) VALUES ('$datetime', '$CookieID', '".session_id()."', '$referrer', '".getenv(REQUEST_URI)."', '".getenv(HTTP_USER_AGENT)."', '".getenv(REMOTE_HOST)."', '".getenv(REMOTE_ADDR)."')");
 return $CookieID;
}

function add_user($datetime)
{
 $tmpvar = mysql_fetch_array(mysql_query("SELECT max(CookieID) FROM visits"));
 SetCookie("CookieID", $tmpvar[0] + 1, time()+315360000, "/", ".musicgoeson.com");
 return $tmpvar[0] + 1;
}

function GetUserInfo($CookieID = 0, $function = "", $data = "")
{
 if ($CookieID==0)
 {
  $CookieID = getenv(CookieID);
 }

 if ($function==""  && $data=="") // GetUserInfo(int $CookieID)
 {
  return mysql_fetch_array(mysql_query("SELECT * FROM visits WHERE CookieID = '$CookieID' ORDER BY datetime DESC LIMIT 0,1"));
 }
 else
 {
  if (1+1!=2)
  {
   // No reason for this really, just neatens out the code.
  }
  else if ($function=="datetime" && $data=="") // GetUserInfo(int $CookieID, string "datetime")
  {
   $tmpvar = mysql_fetch_array(mysql_query("SELECT * FROM visits WHERE CookieID = '$CookieID' ORDER BY datetime DESC LIMIT 0,1"));
   return $tmpvar[datetime];
  }
  else if ($function=="CookieID" && $data=="" ) // GetUserInfo(int $CookieID, string "CookieID")
  {
   $tmpvar = mysql_fetch_array(mysql_query("SELECT * FROM visits WHERE CookieID = '$CookieID' ORDER BY datetime DESC LIMIT 0,1"));
   return $tmpvar[CookieID];
  }
  else if ($function=="SID" && $data=="" ) // GetUserInfo(int $CookieID, string "SID")
  {
   $tmpvar = mysql_fetch_array(mysql_query("SELECT * FROM visits WHERE CookieID = '$CookieID' ORDER BY datetime DESC LIMIT 0,1"));
   return $tmpvar[SID];
  }
  else if ($function=="referrer" && $data=="" ) // GetUserInfo(int $CookieID, string "referrer")
  {
   $tmpvar = mysql_fetch_array(mysql_query("SELECT * FROM visits WHERE CookieID = '$CookieID' ORDER BY datetime DESC LIMIT 0,1"));
   return $tmpvar[referrer];
  }
  else if ($function=="uri" && $data=="" ) // GetUserInfo(int $CookieID, string "uri")
  {
   $tmpvar = mysql_fetch_array(mysql_query("SELECT * FROM visits WHERE CookieID = '$CookieID' ORDER BY datetime DESC LIMIT 0,1"));
   return $tmpvar[uri];
  }
  else if ($function=="user_agent" && $data=="" ) // GetUserInfo(int $CookieID, string "user_agent")
  {
   $tmpvar = mysql_fetch_array(mysql_query("SELECT * FROM visits WHERE CookieID = '$CookieID' ORDER BY datetime DESC LIMIT 0,1"));
   return $tmpvar[user_agent];
  }
  else if ($function=="remote_host" && $data=="" ) // GetUserInfo(int $CookieID, string "remote_host")
  {
   $tmpvar = mysql_fetch_array(mysql_query("SELECT * FROM visits WHERE CookieID = '$CookieID' ORDER BY datetime DESC LIMIT 0,1"));
   return $tmpvar[remote_host];
  }
  else if ($function=="remote_addr" && $data=="" ) // GetUserInfo(int $CookieID, string "remote_addr")
  {
   $tmpvar = mysql_fetch_array(mysql_query("SELECT * FROM visits WHERE CookieID = '$CookieID' ORDER BY datetime DESC LIMIT 0,1"));
   return $tmpvar[remote_addr];
  }
  else if ($function=="FirstVisit" && $data=="") // GetUserInfo(int $CookieID, string "FirstVisit")
  {
   $tmpvar = mysql_fetch_array(mysql_query("SELECT * FROM visits WHERE CookieID = '$CookieID' ORDER BY datetime ASC LIMIT 0,1"));
   return $tmpvar[datetime];
  }
  else if ($function=="OriginalReferrer" && $data=="") // GetUserInfo(int $CookieID, string "OriginalReferrer")
  {
   $tmpvar = mysql_fetch_array(mysql_query("SELECT * FROM visits WHERE CookieID = '$CookieID' ORDER BY datetime ASC LIMIT 0,1"));
   return $tmpvar[referrer];
  }
  else if ($function=="OriginalURI" && $data=="") // GetUserInfo(int $CookieID, string "OriginalURI")
  {
   $tmpvar = mysql_fetch_array(mysql_query("SELECT * FROM visits WHERE CookieID = '$CookieID' ORDER BY datetime ASC LIMIT 0,1"));
   return $tmpvar[uri];
  }
  else if ($function=="OriginalUserAgent" && $data=="") // GetUserInfo(int $CookieID, string "OriginalUserAgent")
  {
   $tmpvar = mysql_fetch_array(mysql_query("SELECT * FROM visits WHERE CookieID = '$CookieID' ORDER BY datetime ASC LIMIT 0,1"));
   return $tmpvar[user_agent];
  }
  else if ($function=="OriginalRemoteHost" && $data=="") // GetUserInfo(int $CookieID, string "OriginalRemoteHost")
  {
   $tmpvar = mysql_fetch_array(mysql_query("SELECT * FROM visits WHERE CookieID = '$CookieID' ORDER BY datetime ASC LIMIT 0,1"));
   return $tmpvar[remote_host];
  }
  else if ($function=="OriginalRemoteAddr" && $data=="") // GetUserInfo(int $CookieID, string "OriginalRemoteAddr")
  {
   $tmpvar = mysql_fetch_array(mysql_query("SELECT * FROM visits WHERE CookieID = '$CookieID' ORDER BY datetime ASC LIMIT 0,1"));
   return $tmpvar[remote_addr];
  }
  else if ($function=="HasVisited" && $data!="") // GetUserInfo(int $CookieID, string "HasVisited", string $data)
  {
   if (mysql_query("SELECT * FROM visits WHERE CookieID = '$CookieID' AND uri LIKE '%$data%'"))
   {
    return 1;
   }
  }
  else if ($function=="NumVisits" && $data=="") // GetUserInfo(int $CookieID, string "NumVisits")
  {
   return mysql_num_rows(mysql_query("SELECT * FROM visits WHERE CookieID = '$CookieID'"));
  }
  else if ($function=="NumSessions" && $data=="") // GetUserInfo(int $CookieID, string "NumSessions")
  {
   return mysql_num_rows(mysql_query("SELECT DISTINCT(SID) FROM visits WHERE CookieID = '$CookieID'"));
  }
 }
}

function GetStats($numof = "", $starttime = "", $endtime = "", $uri = "")
{
 if ($starttime=="")
 {
  $starttime = gmdate('1970-01-01 00:00:00');
 }
 if ($endtime=="")
 {
  $endtime = gmdate('Y-12-31 23:59:59');
 }

 if ($numof=="uniques" && $uri=="") // GetStats(string "uniques", [datetime $starttime, datetime $endtime])
 {
  return mysql_num_rows(mysql_query("SELECT DISTINCT CookieID FROM visits WHERE datetime >= '$starttime' AND datetime < '$endtime'"));
 }
 if ($numof=="pageviews" && $uri=="") // GetStats(string "pageviews", [datetime $starttime, datetime $endtime])
 {
  return mysql_num_rows(mysql_query("SELECT * FROM visits WHERE datetime >= '$starttime' AND datetime < '$endtime'"));
 }

 if ($numof=="uniques" && $uri!="") // GetStats(string "uniques", [datetime $starttime, datetime $endtime], string $uri)
 {
  return mysql_num_rows(mysql_query("SELECT DISTINCT CookieID FROM visits WHERE datetime >= '$starttime' AND datetime < '$endtime' AND uri LIKE '%$uri%'"));
 }
 if ($numof=="pageviews" && $uri!="") // GetStats(string "pageviews", [datetime $starttime, datetime $endtime], string $uri)
 {
  return mysql_num_rows(mysql_query("SELECT * FROM visits WHERE datetime >= '$starttime' AND datetime < '$endtime' AND uri LIKE '%$uri%'"));
 }
}

function banner($width = 468, $height = 60, $banner_keywords = "", $banner = 0)
{
 if ($banner!=0)
 {
  $banner_details = mysql_fetch_array(mysql_query("SELECT * FROM banners WHERE id = '$banner'"));
  $bannershow = 1;
 } 
 else 
 {
  srand((double)microtime()*1000000); 
  if (rand(0,3)>=1)
  {
   $b = md5(uniqid(rand()));
   return "<a href=\"http://kansas.valueclick.com/redirect?host=hs0201789&size=468x60&b=$b&v=0\" target=\"_blank\"><img border=\"0\" width=\"468\" height=\"60\" src=\"http://kansas.valueclick.com/cycle?host=hs0201789&size=468x60&b=$b&noscript=1\" alt=\"\"></a>";
   $bannershow = 0;
  }
  else
  {

   if ($banner_keywords=="")
   {
    $banner_details = mysql_fetch_array(mysql_query("SELECT *, id*0+rand() as rand_col FROM banners WHERE width = '$width' AND height = '$height' AND deleted = '0' ORDER BY rand_col"));
    $bannershow = 1;

   }
   else
   {
    $banner_row = mysql_query("SELECT *, id*0+rand() as rand_col FROM banners WHERE width = '$width' AND height = '$height' AND deleted = '0' AND keywords LIKE '%$banner_keywords%' ORDER BY rand_col");
    $banner_details = mysql_fetch_array($banner_row);

    if (mysql_num_rows($banner_row)==0)
    {
     $banner_details = mysql_fetch_array(mysql_query("SELECT *, id*0+rand() as rand_col FROM banners WHERE width = '$width' AND height = '$height' AND deleted = '0' ORDER BY rand_col"));
    }
    $bannershow = 1;
   }
  }
 }

 if ($bannershow!=0)
 {
  if (ereg("http\:\/\/", $banner_details[location]))
  {
   mysql_query("UPDATE banners SET impressions = impressions + 1 WHERE id = '$banner_details[id]'");
   return "<a href=\"/banner.php?click=$banner_details[id]\" target=\"_blank\"><img src=\"$banner_details[location]\" width=\"$banner_details[width]\" height=\"$banner_details[height]\" alt=\"$banner_details[alt]\" border=\"0\"></a>";
  }
  else
  {
   mysql_query("UPDATE banners SET impressions = impressions + 1 WHERE id = '$banner_details[id]'");
   return "<a href=\"/banner.php?click=$banner_details[id]\" target=\"_blank\"><img src=\"/images/banners/advertiser/$banner_details[id].$banner_details[location]\" width=\"$banner_details[width]\" height=\"$banner_details[height]\" alt=\"$banner_details[alt]\" border=\"0\"></a>";
  }
 }
}

function format($text, $linkcolor = "FFFFFF")
{
 $query = mysql_query("SELECT * FROM artists");

 while ($artist = mysql_fetch_array($query))
 {
  $text = str_replace("[\"".$artist[artist]."\"]", "<a href=\"/artists/artist.php?id=".$artist[id]."\"><b>$artist[artist]</b></a>", $text);
 }

 $text = str_replace("<artist=\"", "<b><a href=\"/artists/artist.php?id=", $text);
 $text = str_replace("</artist>", "</a></b>", $text);

 $text = str_replace("<article=\"", "<a href=\"/article.php?id=", $text);
 $text = str_replace("</article>", "</a>", $text);

 $text = str_replace("<a", "<a class=\"link_on$linkcolor\"", $text);

 // http://ccc.commnet.edu/grammar/marks/dash.htm
 $text = str_replace(" -- ", " &#151; ", $text);

 //$text = strip_tags($text,"<b>,<i>,<u>,<a>,<br>,<ul>,<li>,<blockquote>,<p>");

 return $text;
}

function datetime($only = "")
{
 if (empty($only))
 {
  return gmdate('Y-m-d H:i:s');
 }
 else if ($only=="date")
 {
  return gmdate('Y-m-d');
 }
 else if ($only=="time")
 {
  return gmdate('H:i:s');
 }
}

function datetime_to_text($datetime)
{
 $datetime = explode(" ", $datetime);
 $date = explode("-", $datetime[0]);
 $time = explode(":", $datetime[1]);

 return date("j F Y \| G\:i\:s", mktime($time[0], $time[1], $time[2], $date[1], $date[2], $date[0]));
}

function text_to_datetime($text)
{
 $text = explode(" | ", $text);
 $date = explode(" ", $text[0]);
 $time = explode(":", $text[1]);


 if ($date[0]<=9) { $date[0] = '0'.$date[0]; }

 if ($date[1]=="January") { $date[1] = '01'; }
 if ($date[1]=="February") { $date[1] = '02'; }
 if ($date[1]=="March") { $date[1] = '03'; }
 if ($date[1]=="April") { $date[1] = '04'; }
 if ($date[1]=="May") { $date[1] = '05'; }
 if ($date[1]=="June") { $date[1] = '06'; }
 if ($date[1]=="July") { $date[1] = '07'; }
 if ($date[1]=="August") { $date[1] = '08'; }
 if ($date[1]=="September") { $date[1] = '09'; }
 if ($date[1]=="October") { $date[1] = '10'; }
 if ($date[1]=="November") { $date[1] = '11'; }
 if ($date[1]=="December") { $date[1] = '12'; }


 if ($time[0]<=9) { $time[0] = '0'.$time[0]; }
 if (empty($time[0])) { $time[0] = '00'; }

 if (empty($time[1])) { $time[1] = '00'; }

 if (empty($time[2])) { $time[2] = '00'; }

 return date("Y-m-d H:i:s", mktime($time[0], $time[1], $time[2], $date[1], $date[0], $date[2]));
}

function timestamp_to_text($timestamp)
{
 return date("j F Y \| G\:i\:s", $timestamp);
}

function delete_from_visits()
{
 $delete = "DELETE FROM visits WHERE ";
 mysql_query($delete." remote_host = 'musicgoeson.com'");
 mysql_query($delete." user_agent LIKE '%cosmos/%(robot@xyleme.com)%' AND remote_host LIKE '%xyleme.com%'");
 mysql_query($delete." user_agent LIKE '%Scooter%' AND remote_host LIKE '%sv.av.com%'");
 mysql_query($delete." remote_host LIKE '%crawl%.googlebot.com%'");
 mysql_query($delete." user_agent LIKE '%almaden.ibm.com/cs/crawler%'");
 mysql_query($delete." user_agent LIKE '%FAST-WebCrawler%'");
 mysql_query($delete." user_agent LIKE '%libwww-perl%'");
}

function admin($aSID, $SID)
{
 $date = gmdate("jmY");
 $hour = gmdate("G");

 $aSID_split = explode("--", $aSID);

 if ($row = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE aSID = '$aSID'")))
 {
 }
 else
 {
   session_unregister("aSID");
   mysql_query("UPDATE users SET aSID = '' WHERE user = '$user'");
   header("Location: http://www.musicgoeson.com/admin/index.php?error=1");
 }

 if ($aSID_split[0]!=$date)
 {
  session_unregister("aSID");
  mysql_query("UPDATE users SET aSID = '' WHERE user = '$user'");
  header("Location: http://www.musicgoeson.com/admin/index.php?error=2");
 } 

 if ($aSID_split[1]!=$hour)
 {
  session_unregister("aSID");
  mysql_query("UPDATE users SET aSID = '' WHERE user = '$user'");
  header("Location: http://www.musicgoeson.com/admin/index.php?error=3");
 }   

 if ($aSID_split[2]!=$SID)
 {
  session_unregister("aSID");
  mysql_query("UPDATE users SET aSID = '' WHERE user = '$user'");
  header("Location: http://www.musicgoeson.com/admin/index.php?error=4&asid=$aSID_split[2]&sid=$SID");
 }  



 if ($row = mysql_fetch_array(mysql_query("SELECT * FROM users WHERE aSID = '$aSID'")))
 {
  if (empty($section))
  {
  }
  else
  {
   if (ereg($section, $row[permissions]))
   {
   }
   else
   {
    header("Location: http://www.musicgoeson.com/admin/deny.php?from=$section");
   }
  }
 }
} 

/*
function adcp()
{
 if ($menu=="adcp")
 {
  if ($REQUEST_URI!="/adcp/")
  {
   if ($advertiser_row = mysql_fetch_array(mysql_query("SELECT * FROM advertisers WHERE SID = '$SID'")))
   {
    
   }
   else
   {
    header ("Location: http://www.musicgoeson.com/adcp/");
   }
  }
 }
}
*/

function live($datetime)
{
 $date = explode(" ", $datetime);
 mysql_query("DELETE FROM live WHERE date < '$date[0]'");
}

function forum_users()
{
 //mysql_query("DELETE FROM forum_users WHERE viewed = '' AND username LIKE 'Guest%' AND ");
}

function icon($id)
{
 $article = mysql_fetch_array(mysql_query("SELECT * FROM mgo WHERE id = '$id'"));

 if (ereg(".jpg", $article[icon]))
 {
  if (file_exists("/home/mgo/musicgoeson-www/images/library/".$article[icon]))
  {  
   return "<a href=\"/article.php?id=$article[id]\"><img class=\"linked_img\" src=\"/images/library/$article[icon]\" alt=\"$article[headline]\" width=\"60\" height=\"60\"></a>";
  }
 }
 else
 {
  if (file_exists("/home/mgo/musicgoeson-www/images/library/".$article[icon]."/icon.jpg"))
  {  
   return "<a href=\"/article.php?id=$article[id]\"><img class=\"linked_img\" src=\"/images/library/$article[icon]/icon.jpg\" alt=\"$article[headline]\" width=\"60\" height=\"60\"></a>";
  }
 }
}

function IsEmail($email)
{
 if (ereg("(([a-z0-9_]|\\-|\\.)+@([^[:space:]]*)([[:alnum:]-]))", $email))
 {
  return 1;
 }
 else
 {
  return 0;
 }
}

function MakeLink($text, $what = "both")
{
 if (($what=="coslsl") || ($what=="both"))
 {
  $text = str_replace("([[:alnum:]]+)://([^[:space:]]*)([[:alnum:]#?/&=])", "<a class=\"link_onf7f7f7\" href=\"\\1://\\2\\3\" target=\"_blank\" target=\"_blank\">\\1://\\2\\3</a>", $text);
 }

 if (($what=="email") || ($what=="both"))
 {
  $text = str_replace("(([a-z0-9_]|\\-|\\.)+@([^[:space:]]*)([[:alnum:]-]))",  "<a class=\"link_onf7f7f7\" href=\"mailto:\\1\">\\1</a>", $text);
 }
return $text;
}

function MakeLinks($link)
{
 if (strlen($link)>50) 
 {        
  $linktext = substr($link,0,47)."..."; 
 } 
 else 
 {   
  $linktext = $link;
 }
return "<a class=\"link_onf7f7f7\" href=\"$link\" target=\"_blank\">$linktext</a>";
}

/****** DISPLAY FUNCTIONS ******/

function TopXArtists($x = 10)
{
 $var = "<table width=\"100%\"><tr><td bgcolor=\"#006699\" align=\"center\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>TOP $x ARTISTS</b></font></td></tr><tr><td bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">";
 $results = mysql_query("SELECT * FROM artists ORDER BY uniques DESC LIMIT 0,$x"); while ($row = mysql_fetch_array($results)) { $var .= "<a class=\"link_onf7f7f7\" href=\"/artists/artist.php?id=$row[id]\">$row[artist]</a><br>\n"; }
 $var .= "</font></td></tr></table>";
 return $var;
}

function JoinMailingList()
{
 $var = "<table width=\"100%\"><tr><td bgcolor=\"#006699\" align=\"center\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>MAILING LIST</b></font></td></tr><tr><td bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><CENTER>Join <i>Music Goes On</i>'s mailing list for the latest news on your favourite artists...<form method=\"post\" action=\"/mail/\"><input name=\"email\" type=\"text\" value=\"E-Mail Address\" onfocus=\"value=''\" size=\"13\" maxlength=\"255\" alt=\"email\" style=\"BACKGROUND-COLOR: #FFFFFF; FONT-FAMILY:verdana; color:#000000; FONT-SIZE:11px;\"><br><img src=\"/images/pixel.gif\" height=\"5\"><br><input type=\"submit\" value=\"Subscribe...\" style=\"BACKGROUND-COLOR: #FFFFFF; FONT-FAMILY:verdana; color:#000000; FONT-SIZE:11px;\"></form></CENTER></font></td></tr></table>";
 return $var;
}

?>