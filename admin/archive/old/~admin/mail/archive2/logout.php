<?php
  setcookie("phpmailapp[host]", "", time()+1800, "/PHPMailApp/", "overdoseinc.sourceforge.net",0);
  setcookie("phpmailapp[pass]", "", time()+1800, "/PHPMailApp/", "overdoseinc.sourceforge.net",0);
  setcookie("phpmailapp[un]", "", time()+1800, "/PHPMailApp/", "overdoseinc.sourceforge.net",0);
  setcookie("phpmailapp[port]", "", time()+1800, "/PHPMailApp/", "overdoseinc.sourceforge.net",0);

  header("Location: https://mgo.girish-gupta.com/mail/");
?>

