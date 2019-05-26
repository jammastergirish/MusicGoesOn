<form action="<? echo $PHP_SELF; ?>">

<textarea name="text"></textarea>
<input type="submit" value="submit">
</form>

<hr>

<?

$text = addslashes($text);

?>

<textarea name="text"><? echo $text; ?></textarea>