<?php

mysql_connect ("localhost", "mgo", "h47fh20e");
mysql_select_db (musicgoeson_com);

mysql_query ("UPDATE banner set name = '$name', image_url = '$image_url', link_url = '$link_url', width = '$width', height = '$height', alt = '$alt' WHERE id = '$bannerID'");
   header("Location: https://mgo.girish-gupta.com/advertising/controlpanel/banner.php?userID=$userID&bannerID=$bannerID&SID=$SID");

?>
