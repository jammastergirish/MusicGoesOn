<?php

mysql_connect("localhost", "mgo", "h47fh20e");
mysql_select_db(musicgoeson_com);

$result = mysqli_query($link, "SELECT * FROM mailinglist");

while ($row = mysqli_fetch_array($result))
{

$recipient = "";
$headers = "";

 $recipient = $row["email"];
 
 $subject = $subject;
 
 $message_to_send = "$message\n--\r\nTo unsubscribe from the MusicGoesOn.com Mailing List visit http://www.musicgoeson.com/mailinglist/unsubscribe.php?id=" . $row["id"];
 
 $headers .= "From: MusicGoesOn.com <mgo@musicgoeson.com>\n";
 $headers .= "Reply-To: mgo@musicgoeson.com\n";
 $headers .= "X-Mailer: MusicGoesOn.com\n"; // mailer
 /* $headers .= "Content-Type: text/html; charset=iso-8859-1\n"; */
  $headers .= "bcc:backup@musicgoeson.com\n";
 
 mail($recipient, $subject, $message_to_send, $headers);
 
}
mysql_free_result($result);

?>