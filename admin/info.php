<?
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");
$section = 'php_info';
admin($HTTP_SESSION_VARS["aSID"], $HTTP_COOKIE_VARS["SID"]);
$title = 'Admin - PHP '.phpversion().' Info';
$description = '';
$keywords = '';
$menu = 'admin';
$php_header = 'false';
include("inc/header.inc");
?>

<?
$title = 'Admin - PHP '.phpversion().' Info';
$subtitle = $aSID;
include("inc/top.inc");
?>

<? phpinfo(); ?>

<?

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>