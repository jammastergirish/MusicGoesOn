<?php

$sid = uniqid(rand());

mysql_connect ("localhost", "mgo", "h47fh20e");
mysql_select_db (musicgoeson_com);

$result = mysql_query ("SELECT * FROM advertising WHERE id = '$userID' AND sid = '$SID'");

if ($row = mysql_fetch_array($result))
{
    mysql_query ("UPDATE advertising set sid = '$sid' WHERE id = '$userID'");
    header("Location: https://mgo.girish-gupta.com/");
}
else
{
    header("Location: https://mgo.girish-gupta.com/?user=girish");
}

?>