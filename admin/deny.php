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
$subtitle = $aSID;
include("inc/top.inc");
?>

<CENTER>
<font color="red">You do not have permission to access this <b><? echo $from; ?></b> section.  If you believe you should have access please send an e-mail to <a href="mailto:admin@musicgoeson.com">admin@musicgoeson.com</a></font>
</CENTER>

<?

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>