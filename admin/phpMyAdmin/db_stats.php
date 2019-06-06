<?phpphp
/* $Id: db_stats.php,v 1.13 2001/08/30 12:52:52 swix Exp $ */

/** 
 * Gets the variables sent to this script, retains the db name that may have
 * been defined as startup option and include a core library
 */
require('./grab_globals.inc.php');
if (!empty($db)) {
    $db_start = $db;
}
// loic1: lib.inc.php will be loaded by header.inc.php
//require('./lib.inc.php');
require('./header.inc.php');


/**
 * Get the list and number of available databases.
 * Skipped if no server selected: in this case no database should be displayed
 * before the user choose among available ones at the welcome screen.
 */
if ($server > 0) {
    // Get the valid databases list
    $num_dbs = count($dblist);
    $dbs     = @mysql_list_dbs() or mysql_die('', 'mysql_list_dbs()');
    while ($a_db = mysql_fetch_object($dbs)) {
        if (!$num_dbs) {
            $dblist[]                     = $a_db->Database;
        } else {
            $true_dblist[$a_db->Database] = '';
        }
    }
    if ($num_dbs && empty($true_dblist)) {
        $dblist = array();
    } else if ($num_dbs) {
        for ($i = 0; $i < $num_dbs; $i++) {
            if (isset($true_dblist[$dblist[$i]])) {
                $dblist_valid[] = $dblist[$i];
            }
        }
        if (isset($dblist_valid)) {
            $dblist = $dblist_valid;
            unset($dblist_valid);
        } else {
            $dblist = array();
        }
        unset($true_dblist);
    }
    // Get the valid databases count
    $num_dbs = count($dblist);
} else {
    $num_dbs = 0;
}


/**
 * Send http headers
 */
// Don't use cache (required for Opera)
$now = gmdate('D, d M Y H:i:s') . ' GMT';
header('Expires: ' . $now);
header('Last-Modified: ' . $now);
header('Cache-Control: no-store, no-cache, must-revalidate'); // HTTP/1.1
header('Cache-Control: pre-check=0, post-check=0, max-age=0'); // HTTP/1.1
header('Pragma: no-cache'); // HTTP/1.0
// Define the charset to be used
header('Content-Type: text/html; charset=' . $charset);


/**
 * Displays the frame
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html>

<head>
    <title>phpMyAdmin</title>
    <base target="phpmain" />
</head>

<body bgcolor="#D0DCE0">

<h1>
    <?phpphp echo ucfirst($strDatabasesStats); ?> - 
    <?phpphp echo $strHost . ': ' . $cfgServer['host'] . "\n"; ?>
</h1>   
<h2><?phpphp echo $strGenTime . ': ' . date('F j, Y, H:i'); ?></h2>


<table border="0" cellspacing="0" cellpadding="0">
<tr>
    <td valign="top" align="left">

    <!-- Databases list -->

    <table border="<?phpphp echo $cfgBorder; ?>">
    <tr>
        <th>&nbsp;<?phpphp echo ucfirst($strDatabase); ?>&nbsp;
            <img src="./images/asc_order.gif" border="0" width="7" height="7" alt="ASC" /></th>
        <th>&nbsp;<?phpphp echo ucfirst($strTable); ?>&nbsp;</th>
        <th>&nbsp;<?phpphp echo ucfirst($strData); ?>&nbsp;</th>
        <th>&nbsp;<?phpphp echo ucfirst($strIndexes); ?>&nbsp;</th>
        <th>&nbsp;<?phpphp echo ucfirst($strTotal); ?>&nbsp;</th>
    </tr>

<?phpphp
if ($num_dbs > 1) {
    $selected_db   = 0;
    $tot_tables    = 0;
    $big_tot_all   = 0;
    $big_tot_idx   = 0;
    $big_tot_data  = 0;
    $results_array = array();

    // Gets and displays the tables stats per database
    for ($i = 0; $i < $num_dbs; $i++) {
        $db      = $dblist[$i];
        $j       = $i + 2;
        $bgcolor = ($i % 2) ? $cfgBgcolorOne : $cfgBgcolorTwo;

        if (!empty($db_start) && $db == $db_start) {
            $selected_db  = $j;
        }
        $tables           = @mysql_list_tables($db);
        $num_tables       = @mysql_numrows($tables);
        $tot_tables       += $num_tables;
        $common_url_query = 'lang=' . $lang
                          . '&server=' . $server
                          . '&db=' . urlencode($db);

        // Gets size of data and indexes

        $db_clean    = backquote($db);
        $tot_data    = 0;
        $tot_idx     = 0;
        $tot_all     = 0;
        $local_query = 'SHOW TABLE STATUS FROM ' . $db_clean;
        $result      = @mysql_query($local_query);
        if (@mysql_num_rows($result)) {
             // needs the "@": otherwise, warnings in case of special DB names:
             // Warning: Supplied argument is not a valid MySQL result resource in db_stats.php on line 140
             while ($row = mysql_fetch_array($result)) {
                $tot_data += $row['Data_length'];
                $tot_idx  += $row['Index_length'];
            } 
           $tot_all            = $tot_data + $tot_idx;
           $big_tot_all        += $tot_all;
           $big_tot_idx        += $tot_idx;
           $big_tot_data       += $tot_data;
           $results_array[$db] = $tot_all;
        }

        list($tot_data_format,$unit_data) = format_byte_down($tot_data,3,1);
        list($tot_idx_format,$unit_idx)   = format_byte_down($tot_idx,3,1);
        list($tot_all_format,$unit_all)   = format_byte_down($tot_all,3,1);

        echo '    <tr bgcolor="'. $bgcolor . '">' . "\n";
        echo '        <td>&nbsp;' . htmlentities($db) . '&nbsp;</td>' . "\n";
        echo '        <td align="right">&nbsp;' . $num_tables . '&nbsp;</td>' . "\n";
        echo '        <td align="right">&nbsp;' . $tot_data_format . ' ' . $unit_data . '&nbsp;</td>' . "\n";
        echo '        <td align="right">&nbsp;' . $tot_idx_format . ' ' . $unit_idx . '&nbsp;</td>' . "\n";
        echo '        <td align="right">&nbsp;<b>' . $tot_all_format . ' ' . $unit_all . '<b>&nbsp;</td>' . "\n";
        echo '    </tr>' . "\n";
    } // end for

    // Gets and displays the server stats
    list($tot_data_format,$unit_data) = format_byte_down($big_tot_data,3,1);
    list($tot_idx_format,$unit_idx)   = format_byte_down($big_tot_idx,3,1);
    list($tot_all_format,$unit_all)   = format_byte_down($big_tot_all,3,1);

    echo '    <tr>' . "\n";
    echo '        <th>&nbsp;' . $strSum . ':&nbsp;' . $num_dbs . '</th>' . "\n";
    echo '        <th align="right">&nbsp;' . $tot_tables . '&nbsp;</th>' . "\n";
    echo '        <th align="right">&nbsp;' . $tot_data_format . ' ' . $unit_data . '&nbsp;</th>' . "\n";
    echo '        <th align="right">&nbsp;' . $tot_idx_format . ' ' . $unit_idx . '&nbsp;</th>' . "\n";
    echo '        <th align="right">&nbsp;<b>' . $tot_all_format . ' ' . $unit_all . '<b>&nbsp;</th>' . "\n";
    echo '    </tr>' . "\n";

    echo '    </table>' . "\n";

    // Displays 20 biggest db's
    ?>
    </td>

    <td valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

    <td valign="top">
    <table border="<?phpphp echo $cfgBorder; ?>">
    <tr>
        <th>&nbsp;&nbsp;</th>
        <th>&nbsp;<?phpphp echo ucfirst($strDatabase); ?>&nbsp;</th>
        <th>&nbsp;<?phpphp echo ucfirst($strTotal); ?>&nbsp;
            <img src="./images/asc_order.gif" border="0" width="7" height="7" alt="ASC" />&nbsp;</th>
    </tr> 
    <?phpphp
    echo "\n";
    arsort($results_array);
    $display_max     = 20;
    $j               = 0;
    if (count($results_array) < $display_max) {
        $display_max = count($results_array);
    }

    reset ($results_array);
    while ((list($key, $val) = each($results_array)) && ($j < $display_max)) {
        $j++;

        $bgcolor               = ($j % 2) ? $cfgBgcolorOne : $cfgBgcolorTwo;
        list($disp_val, $unit) = format_byte_down($val, 3, 1);
        echo '    <tr bgcolor="'. $bgcolor . '">' . "\n";
        echo '        <td align="right">&nbsp;' . $j . '&nbsp;</td>' . "\n";
        echo '        <td>&nbsp;' . urlencode($key) . '&nbsp;</td>' . "\n";
        echo '        <td align="right">&nbsp;<b>' . $disp_val . ' ' . $unit . '<b>&nbsp;</td>' . "\n";
        echo '    </tr>' . "\n";
    }
    ?>
    </table>
    </td>

</tr>
</table>
    <?phpphp
} // end if ($num_dbs == 1)

else {
    echo "\n";
    ?>
    </table>
    </td>

</tr>
</table>

<p>&nbsp;&nbsp;<?phpphp echo $strNoDatabases; ?></p>
    <?phpphp
} // end if ($num_dbs == 0)
echo "\n";
?>

</body>
</html>
