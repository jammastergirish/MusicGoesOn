<? include("/home/mgo/musicgoeson-www/inc/php_header.php"); ?>
<?
  setcookie("phpmailapp[host]", $host, time()+1800, "/mail/", ".musicgoeson.com",0);
  setcookie("phpmailapp[pass]", $pass, time()+1800, "/mail/", ".musicgoeson.com",0);
  setcookie("phpmailapp[un]", $un, time()+1800, "/mail/", ".musicgoeson.com",0);
  setcookie("phpmailapp[port]", $port, time()+1800, "/mail/", ".musicgoeson.com",0);
 include("inc/class.POP3.php");
?>
<?
$title = 'WebMail';
$description = '';
$keywords = '';
$menu = 'mail';
$php_header = 'false';
include("/home/mgo/musicgoeson-www/inc/header.php");
?>

<?
$title = 'WebMail';
include("/home/mgo/musicgoeson-www/inc/top.php");
?>

<?

  $accnt = new POP3($host, 60);

  if(!$accnt->connect($host, 110) )
  {
    echo "Problem $accnt->ERROR <br>\n";
    include("/home/mgo/musicgoeson-www/inc/middle.php");
    include("/home/mgo/musicgoeson-www/inc/bottom.php");
    include("/home/mgo/musicgoeson-www/inc/footer.php");
    exit;
  }
  
  $Count = $accnt->login($un, $pass);
  
  $Failed = $accnt->popstat();
  if( (!$Failed) or ($Failed == -1) )
  {
    echo "<b>Login Failed: $accnt->ERROR</b>\n";
    include("/home/mgo/musicgoeson-www/inc/middle.php");
    include("/home/mgo/musicgoeson-www/inc/bottom.php");
    include("/home/mgo/musicgoeson-www/inc/footer.php");
    exit;
  }

  if ($Count < 1)
  {
    echo "<font face=\"verdana\" size=\"2\">No Messages in Inbox</font>\n";
    include("/home/mgo/musicgoeson-www/inc/middle.php");
    include("/home/mgo/musicgoeson-www/inc/bottom.php");
    include("/home/mgo/musicgoeson-www/inc/footer.php");
    exit;
  }
  else {
    echo "<font face=\"verdana\" size=\"2\">You have <b>$Count</b> new messages in your <a href=\"mail.php?com=list\">Inbox</a></font>\n";
    include("/home/mgo/musicgoeson-www/inc/middle.php");
    include("/home/mgo/musicgoeson-www/inc/bottom.php");
    include("/home/mgo/musicgoeson-www/inc/footer.php");
    exit;
  }

?>

<? include("/home/mgo/musicgoeson-www/inc/middle.php"); ?>

<? include("/home/mgo/musicgoeson-www/inc/bottom.php"); ?>

<? include("/home/mgo/musicgoeson-www/inc/footer.php"); ?>