<title>Overdose Incorporated</title>
<?php $pagetext= "Confirmation"; ?>
<?php include("inc/header.inc"); ?>
<?php include("inc/menu.inc"); ?>

<?php

	mail($to,$subject,$message . "\n\n -- Sent with PHPMailApp 0.05 --\n-- Get yours at http://overdoseinc.sourceforge.net --\n" ,"From: $phpmailapp[un]@$phpmailapp[host]\n");
	print("Mail Message Sent Successfully");
?>

<?php include("inc/footer.inc"); ?>
