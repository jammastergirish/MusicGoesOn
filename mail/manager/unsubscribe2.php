<?
$title = 'Mailing Lists - Manager - Unsubscribe';
$description = '';
$keywords = '';
$menu = 'mail_manager';
include("/home/girishgu/public_html/mgo/inc/header.inc");
include("/home/girishgu/public_html/mgo/mail/manager/include.inc");
?>

<?
$title = 'Mailing Lists - Manager - Unsubscribe';
include("/home/mgo/musicgoeson-www/inc/top.php");
?>

<?

if ($u=="yes")
{
 mysql_query("DELETE FROM mail WHERE SID = '$SID'");
 echo "You have been removed from <i>Music Goes On</i>'s mailing lists.";
}

?>

<? include("/home/mgo/musicgoeson-www/inc/middle.php"); ?>

<? include("/home/mgo/musicgoeson-www/inc/bottom.php"); ?>

<? include("/home/mgo/musicgoeson-www/inc/footer.php"); ?>