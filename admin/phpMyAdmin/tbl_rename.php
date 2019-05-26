<?php
/* $Id: tbl_rename.php,v 1.7 2001/08/22 20:42:51 loic1 Exp $ */


/**
 * Gets some core libraries
 */
require('./grab_globals.inc.php');
require('./lib.inc.php');


/**
 * A new name has been submitted -> do the work
 */
if (isset($new_name) && trim($new_name) != '') { 
    $old_name = $table;
    $table    = $new_name;
    include('./header.inc.php');
    mysql_select_db($db);
    $local_query = 'ALTER TABLE ' . backquote($old_name) . ' RENAME ' . backquote($new_name);
    $result      = mysql_query($local_query) or mysql_die('', $local_query);
    $message     = sprintf($strRenameTableOK, $old_name, $table);
    $reload      = 'true';
} 


/**
 * No new name for the table!
 */
else { 
    include('./header.inc.php');
    mysql_die($strTableEmpty); 
} 


/**
 * Back to the calling script
 */
require('./tbl_properties.php');
?>
