<? include("/home/mgo/musicgoeson-www/advertising/controlpanel/header.php"); ?>

<form action ="http://www.musicgoeson.com/advertising/controlpanel/doaddbanner.php" method="post">

Are you sure you want to delete <b><? echo $b_name; ?></b><br>
<a href="dodelbanner.php?userID=<? echo $userID; ?>&SID=<? echo $SID; ?>&bannerID=<? echo $bannerID; ?>">Yes</a>
|
<a href="banner.php?userID=<? echo $userID; ?>&SID=<? echo $SID; ?>&bannerID=<? echo $bannerID; ?>">No</a>

<?php include("/home/mgo/musicgoeson-www/advertising/controlpanel/footer.php"); ?>