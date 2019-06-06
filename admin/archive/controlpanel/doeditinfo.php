<?php

mysql_connect ("localhost", "mgo", "h47fh20e");
mysql_select_db (musicgoeson_com);

mysql_query ("UPDATE advertising set password = '$password', name = '$name', name_site = '$name_site', url_site = '$url_site', email = '$email', address = '$address', town = '$town', county = '$county', postcode = '$postcode', country = '$country' WHERE id = '$b_id'");
   header("Location: http://www.musicgoeson.com/advertising/controlpanel/controlpanel.php?userID=$userID&SID=$SID");

?>
