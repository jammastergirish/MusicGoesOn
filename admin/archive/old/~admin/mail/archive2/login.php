<?php
  setcookie("phpmailapp[host]", $host, time()+1800, "/mail/", ".musicgoeson.com",0);
  setcookie("phpmailapp[pass]", $pass, time()+1800, "/mail/", ".musicgoeson.com",0);
  setcookie("phpmailapp[un]", $un, time()+1800, "/mail/", ".musicgoeson.com",0);
  setcookie("phpmailapp[port]", $port, time()+1800, "/mail/", ".musicgoeson.com",0);
?>

<?php include("inc/header.inc"); ?>
<?php include("inc/menu.inc"); ?>
<?php include("inc/class.POP3.php"); ?>
<?php

  $accnt = new POP3($host, 60);

  if(!$accnt->connect($host, 110) )
  {
    echo "Problem $accnt->ERROR <br>\n";
    include("inc/footer.inc");
    exit;
  }
  
  $Count = $accnt->login($un, $pass);
  
  $Failed = $accnt->popstat();
  if( (!$Failed) or ($Failed == -1) )
  {
    echo "<b>Login Failed: $accnt->ERROR</b>\n";
    include("inc/footer.inc");
    exit;
  }

  if ($Count < 1)
  {
    echo "<font face=\"verdana\" size=\"2\">No Messages in Inbox</font>\n";
    include("inc/footer.inc");
    exit;
  }
  else {
    echo "<font face=\"verdana\" size=\"2\">You have <b>$Count</b> new messages in your <a href=\"mail.php?com=list\">Inbox</a></font>\n";
    include("inc/footer.inc");
    exit;
  }

?>
