<? 
$metatags = get_meta_tags($url);

$file = fopen ($url, "r");
if (!$file) {
    echo "<p>Unable to open remote file.\n";
    exit;
}
while (!feof ($file)) {
    $line = fgets ($file, 1024);
    if (eregi ("<title>(.*)</title>", $line, $out)) {
        $title = $out[1];
        break;
    }
}
fclose($file);


echo "<b>Title</b><br>", $title;
print "<br><br>";
echo "<b>Description</b><br>", $metatags[description];
print "<br><br>";
echo "<b>Keywords</b><br>", $metatags[keywords]; 

?>