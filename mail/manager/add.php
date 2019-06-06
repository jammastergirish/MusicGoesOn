<?php

$artist = ereg_replace("/", "", $PATH_INFO);

$title = 'Mailing Lists - Manager';
$description = '';
$keywords = '';
$menu = 'mail_manager';
include("inc/header.inc");
include("mail/manager/include.inc");
?>

<?php
$data = mysqli_fetch_array(mysqli_query($link, "SELECT * FROM artists WHERE id = '$artist' LIMIT 0,1"));

$title = 'Mailing Lists - Manager - Add '.$data[artist].' To Your Mailing List';
$subtitle = $row[name]." [".$row[email]."]";
include("inc/top.inc");
?>

<?php

mysqli_query($link, "UPDATE mail SET lists = '$row[lists]|$data[id]' WHERE SID = '$SID'");

?>

<a class="link_onf7f7f7" href="/artists/artist.php/<?php echo $data[id]; ?>/"><b><?php echo $data[artist]; ?></b></a> has been added to your mailing lists.<br><br>

<a class="link_onf7f7f7" href="<?php echo $HTTP_REFERER; ?>">Click here to go back...</a>

<?php

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>