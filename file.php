<?php

mysql_connect("localhost", "mgo", "h47fh20e");
mysql_select_db(musicgoeson_com);

/*****/

include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/functions.inc");


echo GetStats("uniques", "2001-11-07 00:00:00", "2001-11-07 23:59:59");

?>