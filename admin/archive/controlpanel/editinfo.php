<? include("/home/mgo/musicgoeson-www/advertising/controlpanel/header.php"); ?>

<?

mysql_connect ("localhost", "mgo", "h47fh20e");
mysql_select_db (musicgoeson_com);

$result_user = mysql_query ("SELECT * FROM advertising WHERE id = '$userID'");

if ($row_user = mysql_fetch_array($result_user))
{
    print "Name: <input type=\"text\" name=\"name\" value=\"$row_user[name]\" size=\"50\" maxlength=\"255\"><br><br>";

    print "Name of Site: <input type=\"text\" name=\"name\" value=\"$row_user[name_site]\" size=\"50\" maxlength=\"255\"><br>";
    print "URL: <input type=\"text\" name=\"url_site\" value=\"$row_user[url_site]\" size=\"50\" maxlength=\"255\"><br>";
    print "E-Mail: <input type=\"text\" name=\"email\" value=\"$row_user[email]\" size=\"50\" maxlength=\"255\"><br><br>";

    print "Address: <input type=\"text\" name=\"address\" value=\"$row_user[address]\" size=\"50\" maxlength=\"255\"><br>";
    print "Town: <input type=\"text\" name=\"town\" value=\"$row_user[town]\" size=\"50\" maxlength=\"255\"><br>";
    print "County: <input type=\"text\" name=\"county\" value=\"$row_user[county]\" size=\"50\" maxlength=\"255\"><br>";
    print "Postcode: <input type=\"text\" name=\"postcode\" value=\"$row_user[postcode]\" size=\"50\" maxlength=\"255\"><br>";
    print "Country: <input type=\"text\" name=\"country\" value=\"$row_user[country]\" size=\"50\" maxlength=\"255\"><br><br>";

    print "Password: <input type=\"password\" name=\"password\" value=\"$row_user[password]\" size=\"30\" maxlength=\"30\"><br>";

    print "<input type=\"hidden\" name=\"userID\" value=\"$userID\">";
    print "<input type=\"hidden\" name=\"SID\" value=\"$SID\">";
    print "<br><input type=\"submit\" value=\"Edit Info\" align=\"absmiddle\">";

    print "</form>";
}
else
{
    print "Error";
}

?>

<?php include("/home/mgo/musicgoeson-www/advertising/controlpanel/footer.php"); ?>