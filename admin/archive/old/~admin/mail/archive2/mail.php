<?php include("inc/header.inc"); ?>
<?php include("inc/menu.inc"); ?>
<?php include("inc/class.POP3.php"); ?>
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
      include("inc/footer.inc");
      exit;
    }
    while ( list ($lineNum, $line ) = each ($msg) )
    {
       $line = ereg_replace("((ftp://)|(http://))(([[:alnum:]]|[[:punct:]])*)", "<a href=\"\\0\">\\0</a>", $line);
      echo "$line <br>\n";
    }
    include("inc/footer.inc");
    exit;
  }

  elseif ($com == "dele")
  {
    $temp = $accnt->delete($num);

    if ($temp)
    {
      print("Message Deleted successfully");
      include("inc/footer.inc");
      exit;
    }
    else
    {
      print("Error Deleting Message");
      include("inc/footer.inc");
      exit;
    }
  }

  elseif ($com == "list")
  {
    if ($Count < 1 )
    {
      echo "Inbox Empty";
      include("inc/footer.inc");
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
        print("<font face=\"verdana\" size=\"2\"><a href=\"mail.php?com=retr&num=$n\">$subject</a></font><br><font face=\"verdana\" size=\"1\">$fromperson</font><br><font face=\"verdana\" size=\"1\">$maildate</font><br><font face=\"verdana\" size=\"1\"><a href=\"mail.php?com=retr&num=$n\">[READ]</a> <a href=\"mail.php?com=dele&num=$n\">[DELETE]</a></font><br><br>\n\n");
    }
    
    print("</table>");
    include("inc/footer.inc");
    exit;
  }

?>
