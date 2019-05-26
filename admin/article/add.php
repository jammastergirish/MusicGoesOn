<?
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");
$section = 'article';
admin($HTTP_SESSION_VARS["aSID"], $HTTP_COOKIE_VARS["SID"]);
$title = 'Admin - Add Article';
$description = '';
$keywords = '';
$menu = 'admin';
$php_header = 'false';
include("/home/girishgu/public_html/mgo/inc/header.inc");
?>

<?
$title = 'Admin - Add Article';
$subtitle = $aSID;
include("/home/girishgu/public_html/mgo/inc/top.inc");
?>

<?

if (empty($action))
{
 echo "<form action=\"/admin/add.php\" method=\"post\">\n\n"; 

 echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
  echo "    <tr>\n";
  echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">ID:</b></font></td>\n";
  $id = mysql_num_rows(mysql_query("SELECT * FROM mgo")) + 1;
  echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">$id</font></td>\n";
  echo "    </tr>\n";
  echo "    <tr>\n";
  echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Headline:</b></font></td>\n";
  echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"text\" name=\"headline__\" size=\"60\"></td>\n";
  echo "    </tr>\n";
  echo "    <tr>\n";
  echo "        <td width=\"120\" valign=\"center\" align=\"right\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\">Description:</b></font></td>\n";
  $id = mysql_num_rows(mysql_query("SELECT * FROM mgo")) + 1;
  echo "        <td width=\"100%\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><input type=\"text\" name=\"description__\" size=\"60\"></td>\n";
  echo "    </tr>\n";
 echo "</table>\n\n";
 
 echo "<input type=\"hidden\" name=\"action\" value=\"1\">"; 

 echo "</form>";
}
else
{

}

?>

<?

include("/home/girishgu/public_html/mgo/inc/middle.inc");
include("/home/girishgu/public_html/mgo/inc/bottom.inc");
include("/home/girishgu/public_html/mgo/inc/footer.inc");

?>