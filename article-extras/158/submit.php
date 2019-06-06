<?
$title = 'Competitions - Win Limp Bizkit VIP Passes';
$description = '';
$keywords = '';
$date_ = '';
$menu = 'Competitions';
include("inc/header.inc");
?>

<?
$title = 'Win Limp Bizkit VIP Passes';
include("inc/top.inc");
?>


<?

$id = md5(uniqid (rand()));
mysql_query("INSERT INTO mailinglist (id, email, CookieID) VALUES ('$id', '$email', '$CookieID')");

mysql_query ("INSERT INTO limp_bizkit (name, email, age, ans, CookieID) VALUES ('$name', '$email', '$age', '$ans', '$CookieID')");

?>

Thank you.  You have been entered into our <b>Limp Bizkit</b> competition, if you are a winner
you will be notified by 16 June 2001.

<?

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>