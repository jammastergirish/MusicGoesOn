<?php

mysql_connect ("localhost", "mgo", "h47fh20e");
mysql_select_db (musicgoeson_com);

mysql_query ("DELETE FROM banner WHERE id = '$bannerID' AND userid = '$userID'");
   header("Location: http://www.musicgoeson.com/advertising/controlpanel/controlpanel.php?userID=$userID&SID=$SID");

?>