<?
$title = 'Live';
$description = '';
$keywords = '';
$menu = 'live';
include("inc/header.inc");
?>

<?
$title = 'Live';
include("inc/top.inc");
?>

<font face="verdana" size="2"><u>Tonight</u></font><br><br>

<?

$date = explode(" ", datetime());
$date = $date[0];

$result = mysql_query("SELECT * FROM live WHERE date = '$date' ORDER BY artist");

while ($data = mysql_fetch_array($result))
{
 $row_location = mysql_fetch_array(mysql_query("SELECT * FROM live_venues WHERE id = '$data[venue]'"));

 $row_location[location] = strtoupper($row_location[location]);

 echo "<font face=\"verdana\" size=\"2\"><a href=\"/live/search.php?artist=$data[artist]&searchby=artist\"><b>$data[artist]</b></a> - $row_location[location] $row_location[name]\n";
 $dateofevent = explode(" | ", datetime_to_text($data[date]));
 $dateofevent = $dateofevent[0];
 echo "<br><font size=\"1\">$dateofevent</font></font><br><br>\n\n";
}

?>

<hr width="80%">

<font face="verdana" size="2"><u>Search</u></font><br><br>

<table border="0" width="100%" style="table-layout:fixed">
    <tr>
        <td width="100" valign="top"><font color="black" size="2" face="verdana"><b>Date:</b></font></td>
        <td width="100%" valign="top""><font color="black" size="2" face="verdana">

<form method="GET" action="/live/search.php">

<?

$date = explode(" | ", datetime_to_text(datetime()));
$date = explode(" ", $date[0]);

?>

<input type="radio" name="searchbydate" value="on" checked style="BACKGROUND-COLOR: #FFFFFF"> On
<input type="radio" name="searchbydate" value="after" style="BACKGROUND-COLOR: #FFFFFF"> After
<input type="radio" name="searchbydate" value="before" style="BACKGROUND-COLOR: #FFFFFF"> Before
<br>

<select name="day">
<option value="1" <? if ($date[0]=="1") { print "selected"; } ?>>1</option>
<option value="2" <? if ($date[0]=="2") { print "selected"; } ?>>2</option>
<option value="3" <? if ($date[0]=="3") { print "selected"; } ?>>3</option>
<option value="4" <? if ($date[0]=="4") { print "selected"; } ?>>4</option>
<option value="5" <? if ($date[0]=="5") { print "selected"; } ?>>5</option>
<option value="6" <? if ($date[0]=="6") { print "selected"; } ?>>6</option>
<option value="7" <? if ($date[0]=="7") { print "selected"; } ?>>7</option>
<option value="8" <? if ($date[0]=="8") { print "selected"; } ?>>8</option>
<option value="9" <? if ($date[0]=="9") { print "selected"; } ?>>9</option>
<option value="10" <? if ($date[0]=="10") { print "selected"; } ?>>10</option>
<option value="11" <? if ($date[0]=="11") { print "selected"; } ?>>11</option>
<option value="12" <? if ($date[0]=="12") { print "selected"; } ?>>12</option>
<option value="13" <? if ($date[0]=="13") { print "selected"; } ?>>13</option>
<option value="14" <? if ($date[0]=="14") { print "selected"; } ?>>14</option>
<option value="15" <? if ($date[0]=="15") { print "selected"; } ?>>15</option>
<option value="16" <? if ($date[0]=="16") { print "selected"; } ?>>16</option>
<option value="17" <? if ($date[0]=="17") { print "selected"; } ?>>17</option>
<option value="18" <? if ($date[0]=="18") { print "selected"; } ?>>18</option>
<option value="19" <? if ($date[0]=="19") { print "selected"; } ?>>19</option>
<option value="20" <? if ($date[0]=="20") { print "selected"; } ?>>20</option>
<option value="21" <? if ($date[0]=="21") { print "selected"; } ?>>21</option>
<option value="22" <? if ($date[0]=="22") { print "selected"; } ?>>22</option>
<option value="23" <? if ($date[0]=="23") { print "selected"; } ?>>23</option>
<option value="24" <? if ($date[0]=="24") { print "selected"; } ?>>24</option>
<option value="25" <? if ($date[0]=="25") { print "selected"; } ?>>25</option>
<option value="26" <? if ($date[0]=="26") { print "selected"; } ?>>26</option>
<option value="27" <? if ($date[0]=="27") { print "selected"; } ?>>27</option>
<option value="28" <? if ($date[0]=="28") { print "selected"; } ?>>28</option>
<option value="29" <? if ($date[0]=="29") { print "selected"; } ?>>29</option>
<option value="30" <? if ($date[0]=="30") { print "selected"; } ?>>30</option>
<option value="31" <? if ($date[0]=="31") { print "selected"; } ?>>31</option>

</select>

<select name="month">
<option value="January" <? if ($date[1]=="January") { print "selected"; } ?>>January</option>
<option value="February" <? if ($date[1]=="February") { print "selected"; } ?>>February</option>
<option value="March" <? if ($date[1]=="March") { print "selected"; } ?>>March</option>
<option value="April" <? if ($date[1]=="April") { print "selected"; } ?>>April</option>
<option value="May" <? if ($date[1]=="May") { print "selected"; } ?>>May</option>
<option value="June" <? if ($date[1]=="June") { print "selected"; } ?>>June</option>
<option value="July" <? if ($date[1]=="July") { print "selected"; } ?>>July</option>
<option value="August" <? if ($date[1]=="August") { print "selected"; } ?>>August</option>
<option value="September" <? if ($date[1]=="September") { print "selected"; } ?>>September</option>
<option value="October" <? if ($date[1]=="October") { print "selected"; } ?>>October</option>
<option value="November" <? if ($date[1]=="November") { print "selected"; } ?>>November</option>
<option value="December" <? if ($date[1]=="December") { print "selected"; } ?>>December</option>
</select>

<select name="year">
<option value="2001" <? if ($date[2]=="2001") { print "selected"; } ?>>2001</option>
</select>

<input type="hidden" name="searchby" value="date">
<br>
<input type="submit" value="Search by Date" align="absmiddle">

</form>


</font></td>
    </tr>
    <tr>
        <td width="100" valign="top"><font color="black" size="2" face="verdana"><b>Artist:</b></font></td>
        <td width="100%" valign="top">

<form method="GET" action="/live/search.php">
<input type="text" name="artist" size="30"></font>
<input type="hidden" name="searchby" value="artist">
<br>
<input type="submit" value="Search by Artist" align="absmiddle">

</form>
</td>
    </tr>
</table>

</form>

<?

include("inc/middle.inc");
include("inc/bottom.inc");
include("inc/footer.inc");

?>