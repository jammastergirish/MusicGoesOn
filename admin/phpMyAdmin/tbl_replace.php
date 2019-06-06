<?php
/* $Id: tbl_replace.php,v 1.30 2001/08/30 21:32:40 loic1 Exp $ */


/**
 * Gets some core libraries
 */
require('./grab_globals.inc.php');
require('./lib.inc.php');


/**
 * Initializes some variables
 */
// Defines the url to return in case of success of the query
if (isset($sql_query)) {
    $sql_query = urldecode($sql_query);
}
if ($goto == 'sql.php') {
    $goto  = 'sql.php?'
           . 'lang=' . $lang
           . '&server=' . $server
           . '&db=' . urlencode($db)
           . '&table=' . urlencode($table)
           . '&pos=' . $pos
           . '&sql_query=' . urlencode($sql_query);
}
// Resets tables defined in the configuration file
reset($fields);
reset($funcs);
// Misc
if (get_magic_quotes_gpc()) {
    $submit_type = stripslashes($submit_type);
}


/**
 * Prepares the update of a row
 */
if (isset($primary_key) && ($submit_type != $strInsertAsNewRow)) {
    // Restore the "primary key" to a convenient format
    $primary_key = urldecode($primary_key);

    // Defines the SET part of the sql query
    $valuelist = '';
    while (list($key, $val) = each($fields)) {
        $encoded_key = $key;
        $key         = urldecode($key);

        switch (strtolower($val)) {
            case 'null':
                break;
            case '$enum$':
                // if we have an enum, then construct the value
                $f = 'field_' . md5($key);
                if (!empty($$f)) {
                    $val     = implode(',', $$f);
                    if ($val == 'null') {
                        // void
                    } else {
                        $val = "'" . sql_addslashes(urldecode($val)) . "'";
                    }
                } else {
                    $val     = "''";
                }
                break;
            case '$set$':
                // if we have a set, then construct the value
                $f = 'field_' . md5($key);
                if (!empty($$f)) {
                    $val = implode(',', $$f);
                    $val = "'" . sql_addslashes(urldecode($val)) . "'";
                } else {
                    $val = "''";
                }
                break;
            default:
                if (get_magic_quotes_gpc()) {
                    $val = "'" . str_replace('\\"', '"', $val) . "'";
                } else {
                    $val = "'" . sql_addslashes($val) . "'";
                }
                break;
        } // end switch

        // No change for this column and no MySQL function is used -> next column
        if (empty($funcs[$encoded_key])
            && isset($fields_prev) && isset($fields_prev[$encoded_key])
            && ("'" . sql_addslashes(urldecode($fields_prev[$encoded_key])) . "'" == $val)) {
            continue;
        }
        else if (!empty($val)) {
            if (empty($funcs[$encoded_key])) {
                $valuelist .= backquote($key) . ' = ' . $val . ', ';
            } else if ($val == '\'\''
                       && (ereg('^(NOW|CURDATE|CURTIME|UNIX_TIMESTAMP|RAND|USER|LAST_INSERT_ID)$', $funcs[$encoded_key]))) {
                $valuelist .= backquote($key) . ' = ' . $funcs[$encoded_key] . '(), ';
            } else {
                $valuelist .= backquote($key) . ' = ' . $funcs[$encoded_key] . "($val), ";
            }
        }
    } // end while

    // Builds the sql upate query
    $valuelist = ereg_replace(', $', '', $valuelist);
    if (!empty($valuelist)) {
        $query = 'UPDATE ' . backquote($table) . ' SET ' . $valuelist . ' WHERE' . $primary_key . ' LIMIT 1';
        $message   = $strAffectedRows . '&nbsp;';
    }
    // No change -> move back to the calling script
    else {
        if (file_exists('./' . $goto)) {
            include('./header.inc.php');
            $message = $strNoModification;
            include('./' . ereg_replace('\.\.*', '.', $goto));
        } else {
            header('Location: ' . $cfgPmaAbsoluteUri . $goto);
        }
        exit();
    }
} // end row update


/**
 *  Prepares the insert of a row
 */
else {
    $fieldlist = '';
    $valuelist = '';
    while (list($key, $val) = each($fields)) {
        $encoded_key = $key;
        $key         = urldecode($key);
        $fieldlist .= backquote($key) . ', ';

        switch (strtolower($val)) {
            case 'null':
                break;
            case '$enum$':
                // if we have a set, then construct the value
                $f = 'field_' . md5($key);
                if (!empty($$f)) {
                    $val     = implode(',', $$f);
                    if ($val == 'null') {
                        // void
                    } else {
                        $val = "'" . sql_addslashes(urldecode($val)) . "'";
                    }
                } else {
                    $val     = "''";
                }
                break;
            case '$set$':
                // if we have a set, then construct the value
                $f = 'field_' . md5($key);
                if (!empty($$f)) {
                    $val = implode(',', $$f);
                    $val = "'" . sql_addslashes(urldecode($val)) . "'";
                } else {
                    $val = "''";
                }
                break;
            default:
                if (get_magic_quotes_gpc()) {
                    $val = "'" . str_replace('\\"', '"', $val) . "'";
                } else {
                    $val = "'" . sql_addslashes($val) . "'";
                }
                break;
        } // end switch

        if (empty($funcs[$encoded_key])) {
            $valuelist .= $val . ', ';
        } else if ($val == '\'\''
                   && (ereg('^(NOW|CURDATE|CURTIME|UNIX_TIMESTAMP|RAND|USER|LAST_INSERT_ID)$', $funcs[$encoded_key]))) {
            $valuelist .= $funcs[$encoded_key] . '(), ';
        } else {
            $valuelist .= $funcs[$encoded_key] . "($val), ";
        }
    } // end while

    // Builds the sql insert query
    $fieldlist = ereg_replace(', $', '', $fieldlist);
    $valuelist = ereg_replace(', $', '', $valuelist);
    $query     = 'INSERT INTO ' . backquote($table) . ' (' . $fieldlist . ') VALUES (' . $valuelist . ')';
    $message   = $strInsertedRows . '&nbsp;';
} // end row insertion


/**
 * Executes the sql query and get the result, then move back to the calling
 * page
 */
mysql_select_db($db);
$sql_query = $query;
$result    = mysqli_query($link, $query);

if (!$result) {
    $error = mysql_error();
    include('./header.inc.php');
    mysql_die($error);
} else {
    if (file_exists('./' . $goto)) {
        if ($goto == 'db_details.php' && !empty($table)) {
            unset($table);
        }
        include('./header.inc.php');
        if (@mysql_affected_rows()) {
            $message .= @mysql_affected_rows();
        } else {
            $message = $strModifications;
        }
        include('./' . ereg_replace('\.\.*', '.', $goto));
    } else {
        header('Location: ' . $cfgPmaAbsoluteUri . $goto);
    }
    exit();
} // end if
?>
