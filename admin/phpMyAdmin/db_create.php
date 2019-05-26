<?php
/* $Id: db_create.php,v 1.8 2001/08/22 20:42:51 loic1 Exp $ */


/**
 * Gets some core libraries
 */
require('./grab_globals.inc.php');
require('./header.inc.php');


/**
 * Executes the db creation sql query
 */
$local_query = 'CREATE DATABASE ' . backquote($db);
$result       = mysql_query('CREATE DATABASE ' . backquote($db)) or mysql_die('', $local_query, FALSE);


/**
 * Displays the result and moves back to the calling page
 */
$message = $strDatabase . ' ' . htmlspecialchars($db) . ' ' . $strHasBeenCreated;
require('./db_details.php');

?>
