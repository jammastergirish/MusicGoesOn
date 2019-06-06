<?php
/* this script will handle the variables passed from the moreinfo.html file */

PRINT "<CENTER>";
PRINT "Hello, $name.";
PRINT "<BR><BR>";
PRINT "Thank you for your interest.<BR><BR>";
PRINT "We will send information to $email, and have noted that you like $preference.";
PRINT "</CENTER>";

?>

<?php
mail("$email", "Your request for information", "$namen
Thank you for your interest!n
We sell fresh corn daily over the Internet!
Place your order  at http://www.buycorn.com,
and receive a free package of $preference!");

mail("webmaster@musicgoeson.com",
"Visitor request for info.",
"$name requested for information.n
The email address is $email. n 
The visitor prefers $preference.");
?>