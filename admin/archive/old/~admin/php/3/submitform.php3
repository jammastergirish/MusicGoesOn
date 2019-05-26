<?php 

trim ($name); 
trim ($email); 

mysql_connect (localhost, mgo, sanibel);
   
mysql_select_db (musicgoeson_com);

$result = mysql_query ("SELECT * FROM cookie_db WHERE USERID = '$CookieID'");

if ($row = mysql_fetch_array($result))
{
    print ("<b>You have already registered</b>");
}
else
{
mysql_query ("INSERT INTO cookie_db (name, email) VALUES ($name', '$email')");

setcookie("CookieID", mysql_insert_id(), time()+94608000, "/");
}

?>