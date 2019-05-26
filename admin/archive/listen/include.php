<?

$ProductData = file('/home/mgo/musicgoeson-www/od2/'.$cat.'/Product/ProductData.txt');
 $ProductData = explode(",", $ProductData[0]);
$PromoURL = file('/home/mgo/musicgoeson-www/od2/'.$cat.'/Product/PromoURL.txt');
$ProductURL = file('/home/mgo/musicgoeson-www/od2/'.$cat.'/Product/ProductURL.txt');

if ($cat==$ProductData[1])
{

 if (file_exists('/home/mgo/musicgoeson-www/od2/'.$cat.'/Product/Banner.jpg')) { $ext = 'jpg'; }
 if (file_exists('/home/mgo/musicgoeson-www/od2/'.$cat.'/Product/Banner.gif')) { $ext = 'gif'; }
 
 $PromoURL[0] = ereg_replace("<vendorID>", "132", $PromoURL[0]);
 $PromoURL[1] = ereg_replace("<vendorID>", "132", $PromoURL[1]);
 $PromoURL[3] = ereg_replace("<vendorID>", "132", $PromoURL[3]);
 $ProductURL[0] = ereg_replace("<vendorID>", "132", $ProductURL[0]);
 
 print "<img src=\"/od2/$cat/Product/Banner.$ext\" width=\"194\" height=\"32\"><br>\n";
 print "<font color=\"black\" size=\"2\" face=\"verdana\"><b>$ProductData[3]</b> - <i>$ProductData[2]</i><br>\n";
 print " <font size=\"1\">$ProductData[4]</font><br>\n";
 print "  <a href=\"$PromoURL[0]\">28.8K</a> |\n";
 print "  <a href=\"$PromoURL[1]\">56K</a> |\n";
 print "  <a href=\"$PromoURL[3]\">128K</a>\n";
 // print "  <a href=\"ProductURL[0]\">Download</a>\n";
 print "</font><br><br>\n\n";
 
}
else
{
 print "<b>ERROR</b>: $cat == $ProductData[1]<br>\n";
}

?>