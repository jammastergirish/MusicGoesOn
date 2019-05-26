<?
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");
$section = 'php_info';
admin($HTTP_SESSION_VARS["aSID"], $HTTP_COOKIE_VARS["SID"]);
$title = 'Admin - PHP '.phpversion().' Info';
$description = '';
$keywords = '';
$menu = 'admin';
$php_header = 'false';
include("/home/girishgu/public_html/mgo/inc/header.inc");
?>

<?
$title = 'Admin - PHP '.phpversion().' Info';
$subtitle = $aSID;
include("/home/girishgu/public_html/mgo/inc/top.inc");
?>

<? phpinfo(); ?>

<?

include("/home/girishgu/public_html/mgo/inc/middle.inc");
include("/home/girishgu/public_html/mgo/inc/bottom.inc");
include("/home/girishgu/public_html/mgo/inc/footer.inc");

?>