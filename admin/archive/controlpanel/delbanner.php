<?php include("/home/mgo/musicgoeson-www/advertising/controlpanel/header.php"); ?>

<form action ="http://www.musicgoeson.com/advertising/controlpanel/doaddbanner.php" method="post">

Are you sure you want to delete <b><?php echo $b_name; ?></b><br>
<a href="dodelbanner.php?userID=<?php echo $userID; ?>&SID=<?php echo $SID; ?>&bannerID=<?php echo $bannerID; ?>">Yes</a>
|
<a href="banner.php?userID=<?php echo $userID; ?>&SID=<?php echo $SID; ?>&bannerID=<?php echo $bannerID; ?>">No</a>

<?php include("/home/mgo/musicgoeson-www/advertising/controlpanel/footer.php"); ?>