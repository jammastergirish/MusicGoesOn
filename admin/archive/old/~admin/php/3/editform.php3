<?php 

trim ($last_name); 
trim ($email); 

mysql_connect (localhost, mgo, sanibel);
   
mysql_select_db (musicgoeson_com);

$result = mysql_query ("SELECT * FROM cookie_db WHERE USERID = '$CookieID'");

if ($row = mysql_fetch_array($result))
{
mysql_query ("DELETE FROM cookie_db WHERE USERID = '$CookieID'");

mysql_query ("INSERT INTO cookie_db (name, email) VALUES ('$name', '$email')");

setcookie("CookieID", mysql_insert_id(), time()+94608000, "/");
}
else
{
    print ("<b>You have not yet registered, <a href=\"submit.html\">click here</a> to register</b>");
}

?>