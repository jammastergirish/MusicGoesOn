<?
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");
$section = 'fileman';
admin($HTTP_SESSION_VARS["aSID"], $HTTP_COOKIE_VARS["SID"]);
$title = 'Admin - File Manager - '.$file;
$description = '';
$keywords = '';
$menu = 'admin';
$php_header = 'false';
include("/home/girishgu/public_html/mgo/inc/header.inc");
?>

<?
$title = 'Admin - File Manager - '.$file;
$subtitle = $aSID;
include("/home/girishgu/public_html/mgo/inc/top.inc");
?>

<?

ob_start(); 
highlight_file("/home/mgo/musicgoeson-www/".$file);
$buffer = ob_get_contents(); 
ob_end_clean();
$buffer = ereg_replace("h47fh20e", "********", $buffer);
echo $buffer;

?>

<br><br>
<font face="verdana" size="1"><a href="<? echo $HTTP_REFERER; ?>"><-- BACK</a></font>
<CENTER><br><font face="verdana" size="1"><b>&copy; Girish Gupta</b></font></CENTER>

<?

include("/home/girishgu/public_html/mgo/inc/middle.inc");
include("/home/girishgu/public_html/mgo/inc/bottom.inc");
include("/home/girishgu/public_html/mgo/inc/footer.inc");

?>