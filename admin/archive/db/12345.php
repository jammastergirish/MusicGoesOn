<form action="<?php echo $PHP_SELF; ?>">

<textarea name="text"></textarea>
<input type="submit" value="submit">
</form>

<hr>

<?php

$text = addslashes($text);

?>

<textarea name="text"><?php echo $text; ?></textarea>