<html>
<head>
<title>MusicGoesOn.com - Search</title>
<?php include("http://www.musicgoeson.com/header.php3") ?>

<?php 

mysql_connect (localhost, mgo, sanibel);
   
mysql_select_db (musicgoeson_com);

if ($q == "")
{$q= '%';}

$result = mysql_query ("SELECT * FROM search
                         WHERE title LIKE '$q%'
                         OR description LIKE '$q%'
                       ");

if ($row = mysql_fetch_array($result)) {

do {
  print ("<font face=verdana size=2>\n");
  print ("<a href=\"");
  print $row["url"];
  print ("\">");
  print $row["title"];
  print ("</a><br>\n");
  print $row["description"];
  print ("\n");
  print ("</font><br><br>\n\n");
} while($row = mysql_fetch_array($result));

} else {print "<font face=verdana size=2>Sorry, nothing could be found!</font>";}

?>

<?php include("http://www.musicgoeson.com/footer.php3") ?>

</body>
</html>