<?php
/* this script will handle the variables passed from the moreinfo.html file */

/* declare some relevant variables */

$hostname = "localhost";
$username = "mgo";
$password = "sanibel";
$dbName = "musicgoeson_com";

/* MySQL table created to store the data */
$userstable = "information";

/* the site administrator's email address */
$adminaddress = "webmaster@musicgoeson.com";

/* make connection to database */
MYSQL_CONNECT($hostname,$username,$password) OR DIE("Unable to connect to database");

@mysql_select_db("$dbName") or die("Unable to select database"); 

PRINT "<CENTER>";
PRINT "Hello, $name.";
PRINT "<BR><BR>";
PRINT "Thank you for your interest.<BR><BR>";
PRINT "We will send information to $email, and have noted that you like $preference";
PRINT "</CENTER><BR><BR>";

/* Send relevant emails */
mail("$email", "Your request for information",
"$name\nThank you for your interest!\n
We sell fresh corn daily over the Internet!
Place your order  at http://www.buycorn.com,
and receive a free package of $preference!");

mail("$adminaddress",
"Visitor request for info.",
"$name requested for information.\n
The email address is $email. \n The visitor prefers $preference.");

/* Insert information into table */
$query = "INSERT INTO $userstable VALUES('$name','$email', '$preference')";

$result = MYSQL_QUERY($query);

PRINT "Your information has also been inserted into our database, for future reference.";

/* Close the database connection */
MYSQL_CLOSE();
?>