<?php

mysql_connect ("localhost", "mgo", "h47fh20e");
mysql_select_db (musicgoeson_com);

mysql_query ("INSERT INTO banner (userid, name, image_url, link_url, width, height, alt) VALUES ('$userID', '$name', '$image_url', '$link_url', '$width', '$height', '$alt')");
   header("Location: http://www.musicgoeson.com/advertising/controlpanel/controlpanel.php?userID=$userID&SID=$SID");

?>