<?php

mysql_connect (localhost, mgo, sanibel);

mysql_select_db (musicgoeson_com);

$selectresult = mysql_query ("SELECT * FROM cookie WHERE USERID = '$CookieID'");

$row = mysqli_fetch_array($selectresult);

?>

<table border="0" width="100%" style="table-layout:fixed">
    <tr>
        <td width="125" valign="top"><font color="black" size="2" face="verdana"><b>Name:</b></font></td>
        <td width="100%" valign="top"><font color="black" size="2" face="verdana"><?php print $row[name] ?></font></td>
    </tr>
    <tr>
        <td width="125" valign="top"><font color="black" size="2" face="verdana"><b>E-Mail:</b></font></td>
        <td width="100%" valign="top"><font color="black" size="2" face="verdana"><a href="mailto:<?php print $row[email] ?>"><?php print $row[email] ?></a></font></td>
    </tr>
    <tr>
        <td width="125" valign="top"><font color="black" size="2" face="verdana"><b>Last Visit:</b></font></td>
        <td width="100%" valign="top"><font color="black" size="2" face="verdana"><?php print $row[last_visit] ?></font></td>
    </tr>
    <tr>
        <td width="125" valign="top"><font color="black" size="2" face="verdana"><b>User Agent:</b></font></td>
        <td width="100%" valign="top"><font color="black" size="2" face="verdana"><?php print $row[user_agent] ?></font></td>
    </tr>
    <tr>
        <td width="125" valign="top"><font color="black" size="2" face="verdana"><b>Referrer:</b></font></td>
        <td width="100%" valign="top"><font color="black" size="2" face="verdana"><a href="<?php print $row[referrer] ?>" target="_blank"><?php print $row[referrer] ?></a></font></td>
    </tr>
    <tr>
        <td width="125" valign="top"><font color="black" size="2" face="verdana"><b>CookieID:</b></font></td>
        <td width="100%" valign="top"><font color="black" size="2" face="verdana"><?php print $CookieID ?></font></td>
    </tr>
</table>
