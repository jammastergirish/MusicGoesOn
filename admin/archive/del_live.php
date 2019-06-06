<?php

mysql_connect ("localhost", "mgo", "h47fh20e");
mysql_select_db (musicgoeson_com);

$query = "SELECT * FROM live";

$result = MYSQL_QUERY($query);

$number = MYSQL_NUMROWS($result);

$i = 0;

IF ($number == 0) :
ELSEIF ($number > 1) :
	WHILE ($i < $number):
		$id = mysql_result($result,$i,"id");
		$date = mysql_result($result,$i,"date");

 $date = explode(" ", $date);
 mysql_query ("UPDATE live SET day = '$date[0]', month = '$date[1]', year = '$date[2]', venue = venue5 WHERE id = '$id'");


		$i++;
	ENDWHILE;
ENDIF;

?>