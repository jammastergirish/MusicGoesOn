<html>
<body>
<?php 

mysql_connect (localhost, mgo, sanibel);
   
mysql_select_db (musicgoeson_com);

mysql_query ("INSERT INTO tablename (first_name, last_name)


                VALUES ('$first_name', '$last_name')
             ");

print ($first_name);

print (" ");

print ($last_name);

print ("<p>");

print ("Thanks for submitting your name.");

?>
</body>
</html>