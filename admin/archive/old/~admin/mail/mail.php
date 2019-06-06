<?php include("/home/mgo/musicgoeson-www/inc/php_header.php"); ?>
<?php include("inc/class.POP3.php"); ?>
<?php
$title = 'WebMail';
$description = '';
$keywords = '';
$menu = 'mail';
$php_header = 'false';
include("/home/mgo/musicgoeson-www/inc/header.php");
?>

<script language="JavaScript">
<!--
function DoDel(params)
	{
	if (confirm("Are you sure you want to delete this e-mail?"))
		window.location = "http://www.musicgoeson.com/mail/mail.php?com=dele&num=" + params;
	}
//-->
</script>

<?php
if ($subject=="")
{
 $title = 'WebMail';
 include("/home/mgo/musicgoeson-www/inc/top.php");
}
else
{
 $title = 'WebMail - ' . $subject;
 $subtitle = $from . '<br>' . $date_time;
 include("/home/mgo/musicgoeson-www/inc/top.php");
}
?>

<?php

  $accnt = new POP3($host, 60);
  
  if(!$accnt->connect($phpmailapp[host], 110) )
  {
    echo "Problem $accnt->ERROR <br>\n";
    exit;
  }
  
  $Count = $accnt->login($phpmailapp[un], $phpmailapp[pass]);
  
  $Failed = $accnt->popstat();
  if( (!$Failed) or ($Failed == -1) )
  {
    echo "<H1>Login Failed: $accnt->ERROR</H1>\n";
    exit;
  }
  
  if ($com == "retr")
  {
    $msg = $accnt->get($num);
    if( (!$msg) or (gettype($msg) != "array") )
    {
      echo "Problem: $accnt->ERROR<br>\n";
      include("/home/mgo/musicgoeson-www/inc/middle.php");
      include("/home/mgo/musicgoeson-www/inc/bottom.php");
      include("/home/mgo/musicgoeson-www/inc/footer.php");
      exit;
    }
    while ( list ($lineNum, $line ) = each ($msg) )
    {
       $line = ereg_replace("((ftp://)|(http://))(([[:alnum:]]|[[:punct:]])*)", "<a href=\"\\0\">\\0</a>", $line);
       $line = wordwrap($line, 2);
      print "<font face=\"verdana\" size=\"1\">$line</font><br>\n";
    }
    include("/home/mgo/musicgoeson-www/inc/middle.php");
     print "<font face=\"verdana\" size=\"1\"><a href=\"javascript:DoDel($num)\">[DELETE]</a></font>";
    include("/home/mgo/musicgoeson-www/inc/bottom.php");
    include("/home/mgo/musicgoeson-www/inc/footer.php");
    exit;
  }

  elseif ($com == "dele")
  {
    $temp = $accnt->delete($num);

    if ($temp)
    {
      print("Message Deleted successfully");
      include("/home/mgo/musicgoeson-www/inc/middle.php");
      include("/home/mgo/musicgoeson-www/inc/bottom.php");
      include("/home/mgo/musicgoeson-www/inc/footer.php");
      exit;
    }
    else
    {
      print("Error Deleting Message");
      include("/home/mgo/musicgoeson-www/inc/middle.php");
      include("/home/mgo/musicgoeson-www/inc/bottom.php");
      include("/home/mgo/musicgoeson-www/inc/footer.php");
      exit;
    }
  }

  elseif ($com == "list")
  {
    if ($Count < 1 )
    {
      echo "Inbox Empty";
      include("/home/mgo/musicgoeson-www/inc/middle.php");
      include("/home/mgo/musicgoeson-www/inc/bottom.php");
      include("/home/mgo/musicgoeson-www/inc/footer.php");
      exit;
    }
    
    print("");

    
    for($n=1; $n<=$Count; $n+=1)
    {
      $msg=$accnt->get($n);
      while ( list ($lineNum, $buffer ) = each ($msg) )
      {
        if(strcasecmp(substr($buffer,0,5),"Date:")==0) 
        {
          $maildate=substr($buffer,6,strlen($buffer)-6);
        }
        if(strcasecmp(substr($buffer,0,5),"From:")==0) 
        {
          $fromperson=substr($buffer,6,strlen($buffer)-6);
          $fromperson=htmlspecialchars($fromperson);
        }
        if(strcasecmp(substr($buffer,0,3),"To:")==0) 
        {
          $toperson=substr($buffer,4,strlen($buffer)-4);
	  $toperson=htmlspecialchars($toperson);
        }
        if(strcasecmp(substr($buffer,0,8),"Subject:")==0) 
        { 
          $subject=substr($buffer,9,strlen($buffer)-9);
	  $subject=htmlspecialchars($subject);
        }
      }
        print("<font face=\"verdana\" size=\"2\"><a href=\"mail.php?com=retr&num=$n&subject=$subject&from=$fromperson&date_time=$maildate\">$subject</a></font><br><font face=\"verdana\" size=\"1\">$fromperson</font><br><font face=\"verdana\" size=\"1\">$maildate</font><br><font face=\"verdana\" size=\"1\"><a href=\"mail.php?com=retr&num=$n&subject=$subject&from=$fromperson&date_time=$maildate\">[READ]</a> <a href=\"javascript:DoDel($n)\">[DELETE]</a></font><br><br>\n\n");
    }
    
    include("/home/mgo/musicgoeson-www/inc/middle.php");
    include("/home/mgo/musicgoeson-www/inc/bottom.php");
    include("/home/mgo/musicgoeson-www/inc/footer.php");
    exit;
  }

?>

<?php include("/home/mgo/musicgoeson-www/inc/middle.php"); ?>

<?php include("/home/mgo/musicgoeson-www/inc/bottom.php"); ?>

<?php include("/home/mgo/musicgoeson-www/inc/footer.php"); ?>