<?php

mysql_connect ("localhost", "mgo", "h47fh20e");
mysql_select_db (musicgoeson_com);

$query = "SELECT * FROM cookie";

$result = mysqli_query($link, $query);

$number = MYSQL_NUMROWS($result);

$i = 0;

IF ($number == 0) :
ELSEIF ($number > 1) :
	WHILE ($i < $number):
		$id = mysql_result($result,$i,"id");
		$first_visit = mysql_result($result,$i,"first_visit");
		$last_visit = mysql_result($result,$i,"last_visit");

$first_visit = ereg_replace("Monday ", "", $first_visit);
$first_visit = ereg_replace("Tuesday ", "", $first_visit);
$first_visit = ereg_replace("Wednesday ", "", $first_visit);
$first_visit = ereg_replace("Thursday ", "", $first_visit);
$first_visit = ereg_replace("Friday ", "", $first_visit);
$first_visit = ereg_replace("Saturday ", "", $first_visit);
$first_visit = ereg_replace("Sunday ", "", $first_visit);

$first_visit = ereg_replace("th", "", $first_visit);
$first_visit = ereg_replace("rd", "", $first_visit);
$first_visit = ereg_replace("st", "", $first_visit);
$first_visit = ereg_replace("nd", "", $first_visit);


$last_visit = ereg_replace("Monday ", "", $last_visit);
$last_visit = ereg_replace("Tuesday ", "", $last_visit);
$last_visit = ereg_replace("Wednesday ", "", $last_visit);
$last_visit = ereg_replace("Thursday ", "", $last_visit);
$last_visit = ereg_replace("Friday ", "", $last_visit);
$last_visit = ereg_replace("Saturday ", "", $last_visit);
$last_visit = ereg_replace("Sunday ", "", $last_visit);

$last_visit = ereg_replace("th", "", $last_visit);
$last_visit = ereg_replace("rd", "", $last_visit);
$last_visit = ereg_replace("st", "", $last_visit);
$last_visit = ereg_replace("nd", "", $last_visit);



mysql_query ("UPDATE cookie SET first_visit = '$first_visit', last_visit = '$last_visit' WHERE id = '$id'");


		$i++;
	ENDWHILE;
ENDIF;

?>