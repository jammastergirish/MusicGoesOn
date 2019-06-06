<?php include("inc/header.inc"); ?>
<?php include("inc/menu.inc"); ?>

<?php

	/* mail($to,$subject,$message,"From: $phpmailapp[un]@$phpmailapp[host]\n"); */

$from = 'Mailing Lists' . "<".$phpmailapp[un]@$phpmailapp[host].">";

$headers = "From: ".$from."\nReply-To:".$phpmailapp[un]@$phpmailapp[host]."\n";


mail($to,$subject,$message,$headers);


	print("Mail Message Sent Successfully");
?>

<?php include("inc/footer.inc"); ?>
