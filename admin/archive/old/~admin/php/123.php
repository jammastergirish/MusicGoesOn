<?
if ($page=='1') 
{
 print "1 | ";
}
else
{
 print "<a href=\"showarticle.php?id=$id&page=1\">1</a> | ";
}

if ($page=='2') 
{
 print "2 | ";
}
else
{
 print "<a href=\"showarticle.php?id=$id&page=2\">2</a> | ";
}

if ($page=='3') 
{
 print "3 | ";
}
else
{
 print "<a href=\"showarticle.php?id=$id&page=3\">3</a> | ";
}

if ($page=='4') 
{
 print "4 | ";
}
else
{
 print "<a href=\"showarticle.php?id=$id&page=4\">4</a> | ";
}

if ($page=='5') 
{
 print "5 | ";
}
else
{
 print "<a href=\"showarticle.php?id=$id&page=5\">5</a> | ";
}
?>

<hr>

<?

$date = gmdate("j");

$text1 = "test1";
$text2 = "test2";
$text10 = "test10";

$right_text = $text.$date;

echo $right_text;
?>