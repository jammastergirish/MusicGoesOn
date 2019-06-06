<?php

mysql_connect ("localhost", "mgo", "h47fh20e");
mysql_select_db (musicgoeson_com);

session_start();
session_name("SID");
$session_id = session_id();

$result_session = mysql_query("SELECT * FROM sessions WHERE id = '$session_id'");

if ($row_session = mysql_fetch_array($result_session))
{
 session_register("PID");
 mysql_query ("UPDATE sessions set ref = '$PID' WHERE id = '$session_id'");
 mysql_query ("UPDATE affiliates set clicks = clicks +1 WHERE id = '$PID'");
 header("Location: http://www.musicgoeson.com$target");
}
else
{
 session_register("PID");
 mysql_query ("INSERT INTO sessions (id, ref) VALUES ('$session_id', '$PID')");
 mysql_query ("UPDATE affiliates set clicks = clicks +1 WHERE id = '$PID'");
 header("Location: http://www.musicgoeson.com$target");
}

?>