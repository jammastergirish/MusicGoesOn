<?php

if (empty($dir))
{
 $dir = "/";
}

if (ereg("../", $dir))
{
 $dir = "/";
}

include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");
$section = 'fileman';
admin($HTTP_SESSION_VARS["aSID"], $HTTP_COOKIE_VARS["SID"]);
$title = 'Admin - File Manager - '.$dir;
$description = '';
$keywords = '';
$menu = 'admin';
$php_header = 'false';
include("inc/header.inc");
?>

<?php
$title = 'Admin - File Manager - '.$dir;
$subtitle = $aSID;
include("inc/top.inc");
?>

<?php

if (empty($dir))
{
 $directoryname = "/home/mgo/musicgoeson-www";
}
else
{
 $directoryname = "/home/mgo/musicgoeson-www/".$dir;
}

$directory = opendir($directoryname);

$directories = array();
while ($dirname = readdir($directory))
{
 if (is_dir($directoryname."/".$dirname))
 {
  if ($dirname!="." && $dirname!="..")
  {
   $directories[count($directories)] = $dirname;
  }
 }
}

closedir($directory);


if (empty($dir))
{
 $directoryname = "/home/mgo/musicgoeson-www";
}
else
{
 $directoryname = "/home/mgo/musicgoeson-www/".$dir;
}

$directory = opendir($directoryname);

$files = array();
while ($filename = readdir($directory))
{
 if (is_file($directoryname."/".$filename))
 {
  $files[count($files)] = $filename;
 }
}

closedir($directory);


if (array_count_values($directories)!=0)
{
 sort($directories);
}
if (array_count_values($files)!=0)
{
 sort($files);
}

if ($dir=="/")
{
 $dir = "";
}

echo "<table border=\"1\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\" style=\"table-layout:fixed\">\n\n";
 echo "    <tr>\n";
 echo "        <td width=\"16\" valign=\"center\" align=\"center\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>F/D</b></font></td>\n";
 echo "        <td width=\"200\" valign=\"center\" align=\"left\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>DIRECTORY/FILE</b></font></td>\n";
 echo "        <td width=\"30\" valign=\"center\" align=\"left\" bgcolor=\"#006699\"><font face=\"verdana\" size=\"1\" color=\"#FFFFFF\"><b>SIZE (Kb)</b></font></td>\n";
 echo "    </tr>\n";

if (array_count_values($directories)!=0)
{
 foreach ($directories as $dir_)
 {
  echo "    <tr>\n";
  echo "        <td width=\"16\" valign=\"center\" align=\"center\" bgcolor=\"#f7f7f7\"><img src=\"/cp/images/folder.gif\" width=\"16\" height=\"16\"></td>\n";
  echo "        <td width=\"200\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><a href=\"/admin/fileman/index.php/?dir=$dir/"."$dir_\">$dir_</a></font></td>\n";
  echo "        <td width=\"30\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">N/A</font></td>\n";
  echo "    </tr>\n";
 }
}

if (array_count_values($files)!=0)
{
 foreach ($files as $file_)
 {
  echo "    <tr>\n";
  echo "        <td width=\"16\" valign=\"center\" align=\"center\" bgcolor=\"#f7f7f7\"><img src=\"/cp/images/doc.gif\" width=\"16\" height=\"16\"></td>\n";
  echo "        <td width=\"200\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\"><a href=\"/admin/fileman/code.php/?file=$dir/"."$file_\">$file_</a></font></td>\n";
  $filesize = number_format(filesize("/home/mgo/musicgoeson-www/".$dir."/".$file_) / 1000, 3);
  echo "        <td width=\"30\" valign=\"center\" align=\"left\" bgcolor=\"#f7f7f7\"><font face=\"verdana\" size=\"1\" color=\"#000000\">$filesize</font></td>\n";
  echo "    </tr>\n";
 }
}

echo "</table>";

?>

<?php

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>