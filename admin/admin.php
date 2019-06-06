<?
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");
admin($HTTP_SESSION_VARS["aSID"], $HTTP_COOKIE_VARS["SID"]);
$title = 'Admin';
$description = '';
$keywords = '';
$menu = 'admin';
$php_header = 'false';
include("inc/header.inc");
?>

<?
$title = 'Admin';
$subtitle = $HTTP_SESSION_VARS["aSID"];
include("inc/top.inc");
?>

Welcome to the 'Admin' section of <i>Music Goes On</i>...

<?

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>