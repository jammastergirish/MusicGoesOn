<? include("inc/header.inc"); ?>
<? include("inc/menu.inc"); ?>

<?

	/* mail($to,$subject,$message,"From: $phpmailapp[un]@$phpmailapp[host]\n"); */

$from = 'Mailing Lists' . "<".$phpmailapp[un]@$phpmailapp[host].">";

$headers = "From: ".$from."\nReply-To:".$phpmailapp[un]@$phpmailapp[host]."\n";


mail($to,$subject,$message,$headers);


	print("Mail Message Sent Successfully");
?>

<?php include("inc/footer.inc"); ?>
