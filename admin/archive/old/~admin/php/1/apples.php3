<?
/* script to output to screen all users preferring Apples to Oranges */

/* declare some relevant variables */
$hostname = "localhost";
$username = "mgo";
$password = "sanibel";
$userstable = "information";
$dbName = "musicgoeson_com";

/* make connection to database */
MYSQL_CONNECT($hostname, $username, $password) OR DIE("Unable to connect to database");

@mysql_select_db( "$dbName") or die( "Unable to select database"); 

/* Select all users with the preference Apples */
$query = "SELECT * FROM $userstable WHERE choice = 'Apples'";

$result = MYSQL_QUERY($query);

/* How many of these users are there? */
$number = MYSQL_NUMROWS($result);

/* Print these results to the screen in a nice format */
$i = 0;

IF ($number == 0) :
	PRINT "<CENTER><P>Nobody in the database prefers Apples!</CENTER>";
ELSEIF ($number > 0) :
	PRINT "<CENTER><P>Users preferring Apples: $number<BR><BR>";
	WHILE ($i < $number):
		$name = mysql_result($result,$i,"name");
		$email = mysql_result($result,$i,"email");
		PRINT "Visitor $name likes Apples.<BR>";
		PRINT "Email address: $email.";
		PRINT "<BR><BR>";
		$i++;
	ENDWHILE;
		PRINT "</CENTER>";
ENDIF;
?>