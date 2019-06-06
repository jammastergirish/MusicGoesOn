<?php
include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

if (empty($name))
{
 header("Location: https://mgo.girish-gupta.com/mail/index.php?email=$email&h_t=$h_t&error=name");
}

if (empty($email))
{
 header("Location: https://mgo.girish-gupta.com/mail/index.php?name=$name&h_t=$h_t&error=email");
}

if ($row = mysql_fetch_array(mysql_query("SELECT * FROM mail WHERE email = '$email'")))
{
 header("Location: https://mgo.girish-gupta.com/mail/index.php?name=$name&h_t=$h_t&error=email_exists");
}

if (ereg("@", $email))
{
}
else
{
 header("Location: https://mgo.girish-gupta.com/mail/index.php?name=$name&h_t=$h_t&error=email");
}

if (ereg(".", $email))
{
}
else
{
 header("Location: https://mgo.girish-gupta.com/mail/index.php?name=$name&h_t=$h_t&error=email");
}

if ($pass==$pass2)
{
}
else
{
 header("Location: https://mgo.girish-gupta.com/mail/index.php?name=$name&email=$email&h_t=$h_t&error=pass");
}

if (empty($h_t))
{
 header("Location: https://mgo.girish-gupta.com/mail/index.php?name=$name&email=$email&error=h_t");
}

$title = 'Mailing Lists - Subscribe';
$description = '';
$keywords = '';
$menu = 'mail';
$php_header = 'false';
include("../inc/header.inc");
?>

<?php
$title = 'Mailing Lists - Subscribe';
include("../inc/top.inc");
?>

<?php

$result = mysql_query("SELECT * FROM artists ORDER BY artist");

echo "\n\n";
echo "<SCRIPT LANGUAGE=\"JavaScript\">\n";
echo "<!-- Begin\n";
echo "function CheckAll()\n";
echo "{\n";
while ($data = mysql_fetch_array($result))
{
 echo " document.form.$data[id].checked = true;\n";
}
echo "}\n";
echo "//  End -->\n";
echo "</script>\n\n";

?>

Now, you need to decide which artists you would like to receive information on.  If you <a class="link_onf7f7f7" href="javascript:CheckAll()">Select All Artists</a> you will automatically be subscribed to all new mailing lists.
<br><br>

<input type="button" value="Select All Artists" onClick="CheckAll()">

<form action="/mail/subscribe2.php" method="post" name="form">

<?php

$result = mysql_query("SELECT * FROM artists ORDER BY artist");

while ($data = mysql_fetch_array($result))
{
 echo "<input type=\"checkbox\" name=\"$data[id]\" value=\"1\" style=\"BACKGROUND-COLOR: #f7f7f7\"><a class=\"link_onf7f7f7\" href=\"/artists/artist.php/$data[id]/\">$data[artist]</a><br>\n";
}

?>

<br><br>

<input type="hidden" name="name" value="<?php echo $name; ?>">
<input type="hidden" name="email" value="<?php echo $email; ?>">
<input type="hidden" name="pass" value="<?php echo $pass; ?>">
<input type="hidden" name="h_t" value="<?php echo $h_t; ?>">

<CENTER><input type="submit" value="Subscribe!"></CENTER>

</form>

<?php

include("../inc/middle.inc");
include("../inc/bottom.inc");
include("../inc/footer.inc");

?>