<?php

session_name("SID");

session_register("count");
session_register("name");

$count++;
$name = 'Girish Gupta';

/*

session_start();
session_destroy();

session_unregister("count");

*/

?>

<font face="verdana" size="2">

Hello <?php echo $name; ?>, you have seen this page <?php echo $count; ?> times.<br><br>

<A HREF="3a2.php">3a2.php</A><br>
<A HREF="3a2.php?123=123">3a2.php</A><br><br>

<?php

$session_id = session_id();
echo "<b>session_id</b> ", $session_id;

print "<br>";

$session_name = session_name();
echo "<b>session_name</b> ", $session_name;

?>

<br><br><b>session_unregister("count");</b> cancels the session_register("count"); but only works in the same file as it was registered















<script> 

function addvar(href, variable, value) 
{ 
if(href.indexOf('?') != -1) 
{ 
return href + '&' + variable + '=' + value; 
} 
else 
{ 
return href + '?' + variable + '=' + value; 
} 
} 

for(i = 0; i < document.anchors.length; i++) 
{ 
with(document.anchors[i]) 
{ 
href = addvar(href, 'SID', '<?php echo $SID ?>'); 
} 
} 
for(i = 0; i < document.forms.length; i++) 
{ 
with(document.forms[i]) 
{ 
action = addvar(action, 'SID', '<?php echo $SID ?>'); 
} 
} 

</script>