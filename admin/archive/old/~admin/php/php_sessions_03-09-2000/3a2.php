<?

session_name("SID");

session_start();



?>

<font face="verdana" size="2">

Hello <? echo $name; ?>, you have seen this page <? echo $count; ?> times.<br><br>

<A HREF="3a.php">3a.php</A><br><br>

<?

$session_id = session_id();
echo "<b>session_id</b> ", $session_id;

print "<br>";

$session_name = session_name();
echo "<b>session_name</b> ", $session_name;

?>