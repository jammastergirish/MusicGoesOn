<?
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");
admin($HTTP_SESSION_VARS["aSID"], $HTTP_COOKIE_VARS["SID"]);
$title = 'Admin';
$description = '';
$keywords = '';
$menu = 'admin';
$php_header = 'false';
include("/home/girishgu/public_html/mgo/inc/header.inc");
?>

<?
$title = 'Admin';
$subtitle = $aSID;
include("/home/girishgu/public_html/mgo/inc/top.inc");
?>

<CENTER>
<font color="red">You do not have permission to access this <b><? echo $from; ?></b> section.  If you believe you should have access please send an e-mail to <a href="mailto:admin@musicgoeson.com">admin@musicgoeson.com</a></font>
</CENTER>

<?

include("/home/girishgu/public_html/mgo/inc/middle.inc");
include("/home/girishgu/public_html/mgo/inc/bottom.inc");
include("/home/girishgu/public_html/mgo/inc/footer.inc");

?>