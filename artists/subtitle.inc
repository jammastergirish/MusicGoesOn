<?php

if (file_exists("/home/mgo/musicgoeson-www/images/library/".$artist[id]."/icon.jpg"))
{
 $title = '<img src="/images/library/'.$artist[id].'/icon.jpg" align="left" border="1" width="60" height="60" alt="'.$artist[artist].'"><u>'.$artist[artist].'</u>';
}
else
{
 $title = '<u>'.$artist[artist].'</u>';
}

if ($artist[a]=="g")
{
 $subtitle .= '<b>'.format($artist[names], "006699").'</b>';
}
else
{
 $subtitle .= 'Birth Name: <b>'.$artist[names].'</b>';
}
$subtitle .= '<br>';
if ($artist[a]=="g")
{
 $subtitle .= 'Formed: <b>'.$artist[dob].'</b>';
}
else
{
 $subtitle .= 'DOB: <b>'.$artist[dob].'</b>';
}
$subtitle .= '<br>';
if ($artist[a]=="p")
{
 $subtitle .= 'Group(s): <b>'.format($artist[groups]).'</b>';
}

include("inc/top.inc");

?>