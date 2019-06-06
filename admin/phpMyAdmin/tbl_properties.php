<?phpphp
/* $Id: tbl_properties.php,v 1.77 2001/08/29 18:57:34 loic1 Exp $ */


/**
 * Gets some core libraries and diplays headers
 */
require('./grab_globals.inc.php');
require('./lib.inc.php');
if (!isset($message)) {
    include('./header.inc.php');
} else {
    show_message($message);
}


/**
 * Defines the query to be displayed in the query textarea
 */
if (isset($show_query) && $show_query == 'y') {
    // This script has been called by db_readdump.php
    if (isset($sql_query_cpy)) {
        $query_to_display = $sql_query_cpy;
    }
    // Other cases
    else if (get_magic_quotes_gpc()) {
        $query_to_display = stripslashes($sql_query);
    }
    else {
        $query_to_display = $sql_query;
    }
} else {
    $query_to_display     = '';
}
unset($sql_query);


/**
 * Selects the db that will be used during this script execution
 */
// Not a valid db name -> back to the welcome page
if (!empty($db)) {
    $is_db = @mysql_select_db($db);
}
if (empty($db) || !$is_db) {
    header('Location: ' . $cfgPmaAbsoluteUri . 'main.php?lang=' . $lang . '&server=' . $server . '&reload=true');
    exit();
}
// Not a valid table name -> back to the db_details.php
if (!empty($table)) {
    $is_table = @mysql_query('SHOW TABLES LIKE \'' . sql_addslashes($table, TRUE) . '\'');
}
if (empty($table) || !@mysql_numrows($is_table)) {
    header('Location: ' . $cfgPmaAbsoluteUri . 'db_details.php?lang=' . $lang . '&server=' . $server . '&db=' . urlencode($db) . '&reload=true');
    exit();
}


/**
 * Set parameters for links
 */
$url_query = 'lang=' . $lang
           . '&server=' . $server
           . '&db=' . urlencode($db)
           . '&table=' . urlencode($table)
           . '&goto=tbl_properties.php';


/**
 * Gets table informations
 */
// 1. Get table type and comments ('show table' works correct since 3.23.03)
if (MYSQL_INT_VERSION >= 32303) {
    // Update table type, comment and order if required by the user
    if (isset($submitcomment)) {
        if (get_magic_quotes_gpc()) {
            $comment = stripslashes($comment);
        }
        if (empty($prev_comment) || urldecode($prev_comment) != str_replace('&quot;', '"', $comment)) {
            $local_query = 'ALTER TABLE ' . backquote($table) . ' COMMENT = \'' . sql_addslashes($comment) . '\'';
            $result      = mysql_query($local_query) or mysql_die('', $local_query);
        }
    }
    if (isset($submittype)) {
        $local_query = 'ALTER TABLE ' . backquote($table) . ' TYPE = ' . $tbl_type;
        $result      = mysql_query($local_query) or mysql_die('', $local_query);
    }
    if (isset($submitorderby) && !empty($order_field)) {
        $order_field = backquote(urldecode($order_field));
        $local_query = 'ALTER TABLE ' . backquote($table) . 'ORDER BY ' . $order_field;
        $result      = mysql_query($local_query) or mysql_die('', $local_query);
    }

    // Get table type and comments and displays first browse links
    $local_query = 'SHOW TABLE STATUS LIKE \'' . sql_addslashes($table, TRUE) . '\'';
    $result      = mysql_query($local_query) or mysql_die('', $local_query);
    $showtable   = mysql_fetch_array($result);
    $tbl_type    = strtoupper($showtable['Type']);

    if (isset($showtable['Rows']) && $showtable['Rows'] > 0) {
        echo "\n";
        ?>
<!-- first browse links --> 
<p>
    [ <a href="sql.php?<?phpphp echo $url_query; ?>&sql_query=<?phpphp echo urlencode('SELECT * FROM ' . backquote($table)); ?>&pos=0">
        <b><?phpphp echo $strBrowse; ?></b></a> ]&nbsp;&nbsp;&nbsp;
    [ <a href="tbl_select.php?<?phpphp echo $url_query; ?>">
        <b><?phpphp echo $strSelect; ?></b></a> ]&nbsp;&nbsp;&nbsp;
    [ <a href="tbl_change.php?<?phpphp echo $url_query; ?>">
        <b><?phpphp echo $strInsert; ?></b></a> ]&nbsp;&nbsp;&nbsp;
    [ <a href="sql.php?<?phpphp echo $url_query; ?>&sql_query=<?phpphp echo urlencode('DELETE FROM ' . backquote($table)); ?>&zero_rows=<?phpphp echo urlencode($strTable . ' ' . htmlspecialchars($table) . ' ' . $strHasBeenEmptied); ?>">
         <b><?phpphp echo $strEmpty; ?></b></a> ]
</p>
        <?phpphp
    } else {
        echo "\n";
        ?>
<!-- first browse links -->
<p>
    [ <b><?phpphp echo $strBrowse; ?></b> ]&nbsp;&nbsp;&nbsp;
    [ <b><?phpphp echo $strSelect; ?></b> ]&nbsp;&nbsp;&nbsp;
    [ <a href="tbl_change.php?<?phpphp echo $url_query; ?>">
        <b><?phpphp echo $strInsert; ?></b></a> ]&nbsp;&nbsp;&nbsp;
    [ <b><?phpphp echo $strEmpty; ?></b> ]
</p>
        <?phpphp
    }
    echo "\n";

    if (!empty($showtable['Comment'])) {
        $show_comment = $showtable['Comment'];
        ?>

<!-- Table comment -->
<p><i>
    <?phpphp echo $show_comment . "\n"; ?>
</i></p>
        <?phpphp
    } else {
        $show_comment = '';
    }
}

// 2. Get table keys and retains them
$local_query = 'SHOW KEYS FROM ' . backquote($table);
$result      = mysql_query($local_query) or mysql_die('', $local_query);
$primary     = '';
while($row = mysql_fetch_array($result)) {
    $ret_keys[]  = $row;
    if ($row['Key_name'] == 'PRIMARY') {
        $primary .= $row['Column_name'] . ', ';
    }
}

// 3. Get fields
$local_query = 'SHOW FIELDS FROM ' . backquote($table);
$result = mysql_query($local_query) or mysql_die('', $local_query);


/**
 * Displays the table structure ('show table' works correct since 3.23.03)
 */
?>



<!-- TABLE INFORMATIONS -->
<table border="<?phpphp echo $cfgBorder; ?>">
<tr>
    <th><?phpphp echo ucfirst($strField); ?></th>
    <th><?phpphp echo ucfirst($strType); ?></th>
    <th><?phpphp echo ucfirst($strAttr); ?></th>
    <th><?phpphp echo ucfirst($strNull); ?></th>
    <th><?phpphp echo ucfirst($strDefault); ?></th>
    <th><?phpphp echo ucfirst($strExtra); ?></th>
<?phpphp
if (empty($printer_friendly)) {
    ?>
    <th colspan="5"><?phpphp echo ucfirst($strAction); ?></th>
    <?phpphp
}
echo "\n";
?>
</tr>

<?phpphp
$i         = 0;
$aryFields = array();

while ($row = mysql_fetch_array($result)) {
    $i++;
    $bgcolor          = ($i % 2) ? $cfgBgcolorOne : $cfgBgcolorTwo;
    $aryFields[]      = $row['Field'];

    $type             = $row['Type'];
    // reformat mysql query output - staybyte - 9. June 2001
    $shorttype        = substr($type, 0, 3);
    if ($shorttype == 'set' || $shorttype == 'enu') {
        $type         = eregi_replace(',', ', ', $type);
        // Removes automatic MySQL escape format
        $type         = str_replace('\'\'', '\\\'', $type);
        $type_nowrap  = '';
    } else {
        $type_nowrap  = ' nowrap="nowrap"';
    }
    $type             = eregi_replace('BINARY', '', $type);
    $type             = eregi_replace('ZEROFILL', '', $type);
    $type             = eregi_replace('UNSIGNED', '', $type);
    if (empty($type)) {
        $type         = '&nbsp;';
    }

    $binary           = eregi('BINARY', $row['Type'], $test);
    $unsigned         = eregi('UNSIGNED', $row['Type'], $test);
    $zerofill         = eregi('ZEROFILL', $row['Type'], $test);
    $strAttribute     = '&nbsp;';
    if ($binary) {
        $strAttribute = 'BINARY';
    }
    if ($unsigned) {
        $strAttribute = 'UNSIGNED';
    }
    if ($zerofill) {
        $strAttribute = 'UNSIGNED ZEROFILL';
    }
    if (!isset($row['Default'])) {
        if ($row['Null'] != '') {
            $row['Default'] = '<i>NULL</i>';
        }
    } else {
        $row['Default'] = htmlspecialchars($row['Default']);
    }
    echo "\n";
    ?>
<tr bgcolor="<?phpphp echo $bgcolor; ?>">
    <td nowrap="nowrap"><?phpphp echo htmlspecialchars($row['Field']); ?>&nbsp;</td>
    <td<?phpphp echo $type_nowrap; ?>><?phpphp echo $type; ?></td>
    <td nowrap="nowrap"><?phpphp echo $strAttribute; ?></td>
    <td><?phpphp echo (($row['Null'] == '') ? $strNo : $strYes); ?>&nbsp;</td>
    <td nowrap="nowrap"><?phpphp if (isset($row['Default'])) echo $row['Default']; ?>&nbsp;</td>
    <td nowrap="nowrap"><?phpphp echo $row['Extra']; ?>&nbsp;</td>
    <?phpphp
    if (empty($printer_friendly)) {
        echo "\n";
        ?>
    <td>
        <a href="tbl_alter.php?<?phpphp echo $url_query; ?>&field=<?phpphp echo urlencode($row['Field']); ?>">
            <?phpphp echo $strChange; ?></a>
    </td>
    <td>
        <a href="sql.php?<?phpphp echo $url_query; ?>&sql_query=<?phpphp echo urlencode('ALTER TABLE ' . backquote($table) . ' DROP ' . backquote($row['Field'])); ?>&zero_rows=<?phpphp echo urlencode(htmlspecialchars($row['Field']) . ' ' . $strHasBeenDropped); ?>">
            <?phpphp echo $strDrop; ?></a>
    </td>
    <td>
        <a href="sql.php?<?phpphp echo $url_query; ?>&sql_query=<?phpphp echo urlencode('ALTER TABLE ' . backquote($table) . ' DROP PRIMARY KEY, ADD PRIMARY KEY(' . $primary . backquote($row['Field']) . ')'); ?>&zero_rows=<?phpphp echo urlencode($strAPrimaryKey . ' ' . htmlspecialchars($row['Field'])); ?>">
            <?phpphp echo $strPrimary; ?></a>
    </td>
    <td>
        <a href="sql.php?<?phpphp echo $url_query; ?>&sql_query=<?phpphp echo urlencode('ALTER TABLE ' . backquote($table) . ' ADD INDEX(' . backquote($row['Field']) . ')'); ?>&zero_rows=<?phpphp echo urlencode($strAnIndex . ' ' . htmlspecialchars($row['Field'])); ?>">
            <?phpphp echo $strIndex; ?></a>
    </td>
    <td>
        <a href="sql.php?<?phpphp echo $url_query; ?>&sql_query=<?phpphp echo urlencode('ALTER TABLE ' . backquote($table) . ' ADD UNIQUE(' . backquote($row['Field']) . ')'); ?>&zero_rows=<?phpphp echo urlencode($strAnIndex . ' ' . htmlspecialchars($row['Field'])); ?>">
            <?phpphp echo $strUnique; ?></a>
    </td>
        <?phpphp
    }
    echo "\n";
    ?>
</tr>
    <?phpphp
} // end while
echo "\n";
?>
</table>
<br />


<?phpphp
/**
 * Displays indexes
 */
?>
<!-- Indexes, space usage and row statistics -->
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<?phpphp
$index_count = (isset($ret_keys))
             ? count($ret_keys)
             : 0;
if ($index_count > 0) {
    ?>

    <!-- Indexes -->
    <td valign="top" align="left">
        <?phpphp echo $strIndexes . '&nbsp;:' . "\n"; ?>
        <table border="<?phpphp echo $cfgBorder; ?>">
        <tr>
            <th><?phpphp echo $strKeyname; ?></th>
            <th><?phpphp echo $strUnique; ?></th>
            <th><?phpphp echo $strField; ?></th>
            <th><?phpphp echo $strAction; ?></th>
        </tr>
    <?phpphp
    for ($i = 0; $i < $index_count; $i++) {
        $row = $ret_keys[$i];
        if ($row['Key_name'] == 'PRIMARY') {
            $sql_query = urlencode('ALTER TABLE ' . backquote($table) . ' DROP PRIMARY KEY');
            $zero_rows = urlencode($strPrimaryKey . ' ' . $strHasBeenDropped);
        } else {
            $sql_query = urlencode('ALTER TABLE ' . backquote($table) . ' DROP INDEX ' . backquote($row['Key_name']));
            $zero_rows = urlencode($strIndex . ' ' . htmlspecialchars($row['Key_name']) . ' ' . $strHasBeenDropped);
        }
        echo "\n";
        ?>
        <tr>
            <td><?phpphp echo htmlspecialchars($row['Key_name']) . "\n"; ?></td>
            <td><?phpphp echo (($row['Non_unique'] == '0') ? $strYes : $strNo) . "\n"; ?></td>
            <td><?phpphp echo htmlspecialchars($row['Column_name']) . "\n"; ?></td>
            <td>
                <?phpphp echo "<a href=\"sql.php?$url_query&sql_query=$sql_query&zero_rows=$zero_rows\">$strDrop</a>\n"; ?>
            </td>
        </tr>
        <?phpphp
    }
    echo "\n";
    ?>
        </table>
        <?phpphp echo show_docu('manual_Performance.html#MySQL_indexes') . "\n"; ?>
    </td>
    <?phpphp
}


/**
 * Displays Space usage and row statistics
 */
?>
<?phpphp
// BEGIN - Calc Table Space - staybyte - 9 June 2001
$nonisam     = FALSE;
if (!eregi('ISAM|HEAP', $showtable['Type'])) {
    $nonisam = TRUE;
}
if (MYSQL_INT_VERSION >= 32303 && $nonisam == FALSE && isset($showtable)) {
    // Gets some sizes
    $mergetable     = FALSE;
    if (isset($showtable['Type']) && $showtable['Type'] == 'MRG_MyISAM') {
        $mergetable = TRUE;
    }
    list($data_size, $data_unit)       = format_byte_down($showtable['Data_length']);
    if ($mergetable == FALSE) {
        list($index_size, $index_unit) = format_byte_down($showtable['Index_length']);
    }
    if (isset($showtable['Data_free']) && $showtable['Data_free'] > 0) {
        list($free_size, $free_unit)   = format_byte_down($showtable['Data_free']);
    }
    list($effect_size, $effect_unit)   = format_byte_down($showtable['Data_length'] + $showtable['Index_length'] - $showtable['Data_free']);
    list($tot_size, $tot_unit)         = format_byte_down($showtable['Data_length'] + $showtable['Index_length']);
    if (isset($showtable['Rows']) && $showtable['Rows']>0) {
        list($avg_size, $avg_unit)     = format_byte_down(($showtable['Data_length'] + $showtable['Index_length']) / $showtable['Rows'], 6, 1);
    }

    // Displays them
    if ($index_count > 0) {
        echo '    <td width="20">&nbsp;</td>' . "\n";
    }
    ?>

    <!-- Space usage -->
    <td valign="top">
        <?phpphp echo $strSpaceUsage . '&nbsp;:' . "\n"; ?>
        <a name="showusage"></a>
        <table border="<?phpphp echo $cfgBorder; ?>">
        <tr>
            <th><?phpphp echo $strType; ?></th>
            <th colspan="2" align="center"><?phpphp echo $strUsage; ?></th>
        </tr>
        <tr bgcolor="<?phpphp echo $cfgBgcolorTwo; ?>">
            <td style="padding-right: 10px"><?phpphp echo ucfirst($strData); ?></td>
            <td align="right" nowrap="nowrap"><?phpphp echo $data_size; ?></td>
            <td><?phpphp echo $data_unit; ?></td>
        </tr>
    <?phpphp
    echo "\n";
    if (isset($index_size)) {
        ?>
        <tr bgcolor="<?phpphp echo $cfgBgcolorTwo; ?>">
            <td style="padding-right: 10px"><?phpphp echo ucfirst($strIndex); ?></td>
            <td align="right" nowrap="nowrap"><?phpphp echo $index_size; ?></td>
            <td><?phpphp echo $index_unit; ?></td>
        </tr>
        <?phpphp
    }
    echo "\n";
    if (isset($free_size)) {
        ?>
        <tr bgcolor="<?phpphp echo $cfgBgcolorTwo; ?>" style="color: #bb0000">
        <td style="padding-right: 10px"><?phpphp echo ucfirst($strOverhead); ?></td>
            <td align="right" nowrap="nowrap"><?phpphp echo $free_size; ?></td>
            <td><?phpphp echo $free_unit; ?></td>
        </tr>
        <tr bgcolor="<?phpphp echo $cfgBgcolorOne; ?>">
        <td style="padding-right: 10px"><?phpphp echo ucfirst($strEffective); ?></td>
            <td align="right" nowrap="nowrap"><?phpphp echo $effect_size; ?></td>
            <td><?phpphp echo $effect_unit; ?></td>
        </tr>
        <?phpphp
    }
    if (isset($tot_size) && $mergetable == FALSE) {
        echo "\n";
        ?>
        <tr bgcolor="<?phpphp echo $cfgBgcolorOne; ?>">
        <td style="padding-right: 10px"><?phpphp echo ucfirst($strTotal); ?></td>
            <td align="right" nowrap="nowrap"><?phpphp echo $tot_size; ?></td>
            <td><?phpphp echo $tot_unit; ?></td>
        </tr>
        <?phpphp
    }
    // Optimize link if overhead
    if (isset($free_size) && ($tbl_type == 'MYISAM' || $tbl_type == 'BDB')) {
        echo "\n";
        ?>
        <tr>
            <td colspan="3" align="center">
                [<a href="sql.php?<?phpphp echo $url_query; ?>&pos=0&sql_query=<?phpphp echo urlencode('OPTIMIZE TABLE ' . backquote($table)); ?>&display=simple"><?phpphp echo $strOptimizeTable; ?></a>]
            </td>
        <tr>
        <?phpphp
    }
    echo "\n";
    ?>
        </table>
    </td>

    <!-- Rows Statistic -->
    <td width="20">&nbsp;</td>
    <td valign="top">
        <?phpphp echo $strRowsStatistic . '&nbsp;:' . "\n"; ?>
        <table border="<?phpphp echo $cfgBorder; ?>">
        <tr>
            <th><?phpphp echo $strStatement; ?></th>
            <th align="center"><?phpphp echo $strValue; ?></th>
        </tr>
    <?phpphp
    $i = 0;
    if (isset($showtable['Row_format'])) {
        echo (++$i%2)
             ? '    <tr bgcolor="' . $cfgBgcolorTwo . '">'
             : '    <tr bgcolor="' . $cfgBgcolorTwo . '">';
        echo "\n";
        ?>
            <td><?phpphp echo ucfirst($strFormat); ?></td>
            <td align="right" nowrap="nowrap">
        <?phpphp
        echo '        ';
        if ($showtable['Row_format'] == 'Fixed') {
            echo $strFixed;
        }
        else if ($showtable['Row_format'] == 'Dynamic') {
            echo $strDynamic;
        }
        else {
            echo $showtable['Row_format'];
        }
        ?>
            </td>
        </tr>
        <?phpphp
    }
    if (isset($showtable['Rows'])) {
        echo (++$i%2)
             ? '    <tr bgcolor="' . $cfgBgcolorTwo . '">'
             : '    <tr bgcolor="' . $cfgBgcolorOne . '">';
        echo "\n";
        ?>
            <td><?phpphp echo ucfirst($strRows); ?></td>
            <td align="right" nowrap="nowrap">
                <?phpphp echo number_format($showtable['Rows'], 0, $number_decimal_separator, $number_thousands_separator) . "\n"; ?>
            </td>
        </tr>
        <?phpphp
    }
    if (isset($showtable['Avg_row_length']) && $showtable['Avg_row_length'] > 0) {
        echo (++$i%2)
             ? '    <tr bgcolor="' . $cfgBgcolorTwo . '">'
             : '    <tr bgcolor="' . $cfgBgcolorOne . '">';
        echo "\n";
        ?>
            <td><?phpphp echo ucfirst($strRowLength); ?>&nbsp;&oslash;</td>
            <td align="right" nowrap="nowrap">
                <?phpphp echo number_format($showtable['Avg_row_length'], 0, $number_decimal_separator, $number_thousands_separator) . "\n"; ?>
            </td>
        </tr>
        <?phpphp
    }
    if (isset($showtable['Data_length']) && $showtable['Rows'] > 0 && $mergetable == FALSE) {
        echo (++$i%2)
             ? '    <tr bgcolor="' . $cfgBgcolorTwo . '">'
             : '    <tr bgcolor="' . $cfgBgcolorOne . '">';
        echo "\n";
        ?>
            <td><?phpphp echo ucfirst($strRowSize); ?>&nbsp;&oslash;</td>
            <td align="right" nowrap="nowrap">
                <?phpphp echo "$avg_size $avg_unit\n"; ?>
            </td>
        </tr>
        <?phpphp
    }
    if (isset($showtable['Auto_increment'])) {
        echo (++$i%2)
             ? '    <tr bgcolor="' . $cfgBgcolorTwo . '">'
             : '    <tr bgcolor="' . $cfgBgcolorOne . '">';
        echo "\n";
        ?>
            <td><?phpphp echo ucfirst($strNext); ?>&nbsp;Autoindex</td>
            <td align="right" nowrap="nowrap">
                <?phpphp echo number_format($showtable['Auto_increment'], 0, $number_decimal_separator, $number_thousands_separator) . "\n"; ?>
            </td>
        </tr>
        <?phpphp
    }
    echo "\n";
    ?>
        </table>
    </td>
    <?phpphp
}
// END - Calc Table Space
echo "\n";
?>
</tr>
</table>
<hr />



<?phpphp
/**
 * Work on the table
 */
?>
<!-- TABLE WORK -->
<script type="text/javascript" language="javascript">
<!--
var errorMsg0 = '<?phpphp echo(str_replace('\'', '\\\'', $strFormEmpty)); ?>';
var errorMsg1 = '<?phpphp echo(str_replace('\'', '\\\'', $strNotNumber)); ?>';
var errorMsg2 = '<?phpphp echo(str_replace('\'', '\\\'', $strNotValidNumber)); ?>';
//-->
</script>
<script src="functions.js" type="text/javascript" language="javascript"></script>

<ul>

    <!-- Printable view of the table -->
    <li>
        <div style="margin-bottom: 10px"><a href="tbl_printview.php?<?phpphp echo $url_query; ?>"><?phpphp echo $strPrintView; ?></a></div>
    </li>

    <!-- Query box and bookmark support -->
    <li>
        <form method="post" action="db_readdump.php"
            onsubmit="return emptySqlQuery(this)">
            <input type="hidden" name="server" value="<?phpphp echo $server; ?>" />
            <input type="hidden" name="lang" value="<?phpphp echo $lang; ?>" />
            <input type="hidden" name="pos" value="0" />
            <input type="hidden" name="db" value="<?phpphp echo $db; ?>" />
            <input type="hidden" name="table" value="<?phpphp echo $table; ?>" />
            <input type="hidden" name="goto" value="tbl_properties.php" />
            <input type="hidden" name="zero_rows" value="<?phpphp echo $strSuccess; ?>" />
            <input type="hidden" name="prev_sql_query" value="<?phpphp echo ((!empty($query_to_display)) ? urlencode($query_to_display) : ''); ?>" />
            <?phpphp echo $strRunSQLQuery . htmlspecialchars($db) . ' ' . show_docu('manual_Reference.html#SELECT'); ?>&nbsp;:<br />
            <div style="margin-bottom: 5px">
<textarea name="sql_query" rows="<?phpphp echo $cfgTextareaRows; ?>" cols="<?phpphp echo $cfgTextareaCols; ?>" wrap="virtual">
<?phpphp echo ((!empty($query_to_display)) ? htmlspecialchars($query_to_display) : 'SELECT * FROM ' . backquote($table) . ' WHERE 1'); ?>
</textarea><br />
            <input type="checkbox" name="show_query" value="y" checked="checked" />&nbsp;
                <?phpphp echo $strShowThisQuery; ?><br />
            </div>
<?phpphp
// Bookmark Support
if ($cfgBookmark['db'] && $cfgBookmark['table'])  {
    if (($bookmark_list = list_bookmarks($db, $cfgBookmark)) && count($bookmark_list) > 0) {
        echo "            <i>$strOr</i> $strBookmarkQuery&nbsp;:<br />\n";
        echo '            <div style="margin-bottom: 5px">' . "\n";
        echo '            <select name="id_bookmark" style="vertical-align: middle">' . "\n";
        echo '                <option value=""></option>' . "\n";
        while (list($key, $value) = each($bookmark_list)) {
            echo '                <option value="' . $value . '">' . htmlentities($key) . '</option>' . "\n";
        }
        echo '            </select>' . "\n";
        echo '            <input type="radio" name="action_bookmark" value="0" checked="checked" style="vertical-align: middle" />' . $strSubmit . "\n";
        echo '            &nbsp;<input type="radio" name="action_bookmark" value="1" style="vertical-align: middle" />' . $strBookmarkView . "\n";
        echo '            &nbsp;<input type="radio" name="action_bookmark" value="2" style="vertical-align: middle" />' . $strDelete . "\n";
        echo '            <br />' . "\n";
        echo '            </div>' . "\n";
    }
}
?>
            <input type="submit" name="SQL" value="<?phpphp echo $strGo; ?>" />
        </form>
    </li>

    <!-- Display, select, insert and empty -->
    <li>
        <div style="margin-bottom: 10px">
        <a href="sql.php?<?phpphp echo $url_query; ?>&sql_query=<?phpphp echo urlencode('SELECT * FROM ' . backquote($table)); ?>&pos=0">
            <b><?phpphp echo $strBrowse; ?></b></a>&nbsp;-&nbsp;
        <a href="tbl_select.php?<?phpphp echo $url_query; ?>">
            <b><?phpphp echo $strSelect; ?></b></a>&nbsp;-&nbsp;
        <a href="tbl_change.php?<?phpphp echo $url_query; ?>">
            <b><?phpphp echo $strInsert; ?></b></a>&nbsp;-&nbsp;
        <a href="sql.php?<?phpphp echo $url_query; ?>&sql_query=<?phpphp echo urlencode('DELETE FROM ' . backquote($table)); ?>&zero_rows=<?phpphp echo urlencode($strTable . ' ' . htmlspecialchars($table) . ' ' . $strHasBeenEmptied); ?>">
            <b><?phpphp echo $strEmpty; ?></b></a>
        <br />
        </div>
    </li>

    <!-- Add some new fields -->
    <li>
        <form method="post" action="tbl_addfield.php"
            onsubmit="return checkFormElementInRange(this, 'num_fields', 1, 99)">
            <input type="hidden" name="server" value="<?phpphp echo $server; ?>" />
            <input type="hidden" name="lang" value="<?phpphp echo $lang; ?>" />
            <input type="hidden" name="db" value="<?phpphp echo $db; ?>" />
            <input type="hidden" name="table" value="<?phpphp echo $table; ?>" />
            <?phpphp echo $strAddNewField; ?>&nbsp;:
            <input name="num_fields" size="2" maxlength="2" value="1" style="vertical-align: middle" />
            <select name="after_field" style="vertical-align: middle">
                <option value="--end--"><?phpphp echo $strAtEndOfTable; ?></option>
                <option value="--first--"><?phpphp echo $strAtBeginningOfTable; ?></option>
<?phpphp
reset($aryFields);
while (list($junk, $fieldname) = each($aryFields)) {
    echo '                <option value="' . urlencode($fieldname) . '">' . $strAfter . ' ' . htmlspecialchars($fieldname) . '</option>' . "\n";
}
?>
            </select>
            <input type="submit" value="<?phpphp echo $strGo; ?>" style="vertical-align: middle" />
        </form>
    </li>

<?phpphp
if (MYSQL_INT_VERSION >= 32334) {
    ?>
    <!-- Order the table -->
    <li>
        <form method="post" action="tbl_properties.php">
            <input type="hidden" name="server" value="<?phpphp echo $server; ?>" />
            <input type="hidden" name="lang" value="<?phpphp echo $lang; ?>" />
            <input type="hidden" name="db" value="<?phpphp echo $db; ?>" />
            <input type="hidden" name="table" value="<?phpphp echo $table; ?>" />
            <?phpphp echo $strAlterOrderBy; ?>&nbsp;:
            <select name="order_field" style="vertical-align: middle">
    <?phpphp
    echo "\n";
    reset($aryFields);
    while (list($junk, $fieldname) = each($aryFields)) {
        echo '                <option value="' . urlencode($fieldname) . '">' . htmlspecialchars($fieldname) . '</option>' . "\n";
    }
    ?>
            </select>
            <input type="submit" name="submitorderby" value="<?phpphp echo $strGo; ?>" style="vertical-align: middle" />
            &nbsp;<?phpphp echo $strSingly . "\n"; ?>
        </form>
    </li>
    <?phpphp
}
echo "\n";
?>

    <!-- Insert a text file -->
    <li>
        <div style="margin-bottom: 10px"><a href="ldi_table.php?<?phpphp echo $url_query; ?>"><?phpphp echo $strInsertTextfiles; ?></a></div>
    </li>

    <!-- Dump of a database -->
    <li>
        <form method="post" action="tbl_dump.php" name="tbl_dump">
            <input type="hidden" name="server" value="<?phpphp echo $server; ?>" />
            <input type="hidden" name="lang" value="<?phpphp echo $lang; ?>" />
            <input type="hidden" name="db" value="<?phpphp echo $db; ?>" />
            <input type="hidden" name="table" value="<?phpphp echo $table; ?>" />
            <?phpphp echo $strViewDump; ?><br />
            <table cellpadding="5" border="2">
            <tr>
                <td nowrap="nowrap">
                    <input type="radio" name="what" value="structure" checked="checked" />
                    <?phpphp echo $strStrucOnly; ?>&nbsp;&nbsp;<br />
                    <input type="radio" name="what" value="data" />
                    <?phpphp echo $strStrucData; ?>&nbsp;&nbsp;<br />
                    <input type="radio" name="what" value="dataonly" />
                    <?phpphp echo $strDataOnly; ?>&nbsp;&nbsp;<br />
                    <input type="radio" name="what" value="excel" />
                    <?phpphp echo $strStrucExcelCSV; ?>&nbsp;&nbsp;<br />
                    <input type="radio" name="what" value="csv" />
                    <?phpphp echo $strStrucCSV;?>&nbsp;:<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?phpphp echo $strFields . ' '. $strTerminatedBy; ?>&nbsp;
                    <input type="text" name="separator" size="2" value=";" />&nbsp;&nbsp;<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?phpphp echo $strFields . ' '. $strEnclosedBy; ?>&nbsp;
                    <input type="text" name="enclosed" size="1" value="&quot;" />&nbsp;&nbsp;<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?phpphp echo $strFields . ' '. $strEscapedBy; ?>&nbsp;
                    <input type="text" name="escaped" size="2" value="\" />&nbsp;&nbsp;<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?phpphp echo $strLines . ' '. $strTerminatedBy; ?>&nbsp;
                    <input type="text" name="add_character" size="2" value="<?phpphp echo ((which_crlf() == "\n") ? '\n' : '\r\n'); ?>" />&nbsp;&nbsp;
                </td>
                <td valign="middle">
                    <input type="checkbox" name="drop" value="1" />
                    <?phpphp echo $strStrucDrop; ?><br />
                    <input type="checkbox" name="showcolumns" value="yes" />
                    <?phpphp echo $strCompleteInserts; ?><br />
                    <input type="checkbox" name="extended_ins" value="yes" />
                    <?phpphp echo $strExtendedInserts; ?><br />
<?phpphp
// Add backquotes checkbox
if (MYSQL_INT_VERSION >= 32306) {
    ?>
                    <input type="checkbox" name="use_backquotes" value="1" />
                    <?phpphp echo $strUseBackquotes; ?><br />
    <?phpphp
} // end backquotes feature
echo "\n";
?>
                    <br />
                    <input type="checkbox" name="asfile" value="sendit" onclick="return checkTransmitDump(this.form, 'transmit')" />
                    <?phpphp echo $strSend . "\n"; ?>
<?phpphp
// gzip and bzip2 encode features
if (PHP_INT_VERSION >= 40004) {
    $is_gzip = (isset($cfgGZipDump) && $cfgGZipDump && @function_exists('gzencode'));
    $is_bzip = (isset($cfgBZipDump) && $cfgBZipDump && @function_exists('bzcompress'));
    if ($is_gzip || $is_bzip) {
        echo "\n" . '                    (' . "\n";
        if ($is_gzip) {
            ?>
                    <input type="checkbox" name="gzip" value="gzip" onclick="return checkTransmitDump(this.form, 'gzip')" /><?phpphp echo $strGzip . (($is_bzip) ? '&nbsp;' : '') . "\n"; ?>
            <?phpphp
        }
        if ($is_bzip) {
            echo "\n"
            ?>
                    <input type="checkbox" name="bzip" value="bzip" onclick="return checkTransmitDump(this.form, 'bzip')" /><?phpphp echo $strBzip . "\n"; ?>
            <?phpphp
        }
        echo "\n" . '                    )';
    }
}
echo "\n";
?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    &nbsp;<?phpphp echo $strData . '&nbsp;:&nbsp;' . $strOffSet; ?>&nbsp;
                    <input type="text" name="limit_from" value="0" size="5" style="vertical-align: middle" />
                    &nbsp;--&nbsp;<?phpphp echo $strNbRecords; ?>&nbsp;
                    <input type="text" name="limit_to" size="5" value="<?phpphp echo count_records($db, $table, TRUE); ?>" style="vertical-align: middle" />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="<?phpphp echo $strGo; ?>" />
                </td>
            </tr>
            </table>
        </form>
    </li>

    <!-- Change table name and copy table -->
    <li style="vertical-align: top">
        <div style="margin-bottom: 10px">
        <table border="0" cellspacing="0" cellpadding="0" style="vertical-align: top">
        <tr>
            <td valign="top">
            <form method="post" action="tbl_rename.php"
                onsubmit="return emptyFormElements(this, 'new_name')">
                <input type="hidden" name="server" value="<?phpphp echo $server; ?>" />
                <input type="hidden" name="lang" value="<?phpphp echo $lang; ?>" />
                <input type="hidden" name="db" value="<?phpphp echo $db; ?>" />
                <input type="hidden" name="table" value="<?phpphp echo $table; ?>" />
                <input type="hidden" name="reload" value="true" />
                <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <?phpphp echo $strRenameTable; ?>&nbsp;:
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" style="width: 100%" name="new_name" />
                    </td>
                </tr>
                <tr>
                    <td align="right" valign="bottom">
                        <input type="submit" value="<?phpphp echo $strGo; ?>" />
                    </td>
                </tr>
                </table>
            </form>
            </td>
            <td width="25">&nbsp;</td>
            <td valign="top">
            <form method="post" action="tbl_copy.php"
                onsubmit="return emptyFormElements(this, 'new_name')">
                <input type="hidden" name="server" value="<?phpphp echo $server; ?>" />
                <input type="hidden" name="lang" value="<?phpphp echo $lang; ?>" />
                <input type="hidden" name="db" value="<?phpphp echo $db; ?>" />
                <input type="hidden" name="table" value="<?phpphp echo $table; ?>" />
                <input type="hidden" name="reload" value="true" />
                <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td colspan="2">
                        <?phpphp echo $strCopyTable . ' (' . trim($strDatabase) . '<b>.</b>' . trim($strTable) . ')'; ?>&nbsp;:
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="text" size="10" name="target_db" value="<?phpphp echo $db; ?>" />
                        &nbsp;<b>.</b>&nbsp;
                        <input type="text" size="25" name="new_name" />
                    </td>
                </tr>
                <tr>
                    <td nowrap="nowrap">
                        <input type="radio" name="what" value="structure" checked="checked" />
                        <?phpphp echo $strStrucOnly; ?>&nbsp;&nbsp;<br />
                        <input type="radio" name="what" value="data" />
                        <?phpphp echo $strStrucData; ?>&nbsp;&nbsp;
                    </td>
                    <td align="right" valign="top">
                        <input type="submit" value="<?phpphp echo $strGo; ?>" />
                    </td>
                </tr>
                </table>
            </form>
        </td>
    </tr>
    </table>
    </div>
    </li>

<?phpphp
if (MYSQL_INT_VERSION >= 32322) {
    if ($tbl_type == 'MYISAM' or $tbl_type == 'BDB') {
        ?>
    <!-- Table maintenance -->
    <li style="vertical-align: top">
        <div style="margin-bottom: 10px">
        <table border="0" cellspacing="0" cellpadding="0" style="vertical-align: top">
        <tr>
            <td><?phpphp echo $strTableMaintenance; ?>&nbsp;:&nbsp;</td>
        <?phpphp
        echo "\n";
        if ($tbl_type == 'MYISAM') {
            ?>
            <td>
                <a href="sql.php?<?phpphp echo $url_query; ?>&sql_query=<?phpphp echo urlencode('CHECK TABLE ' . backquote($table)); ?>&display=simple">
                    <?phpphp echo $strCheckTable; ?></a>&nbsp;
                <?phpphp echo show_docu('manual_Reference.html#CHECK_TABLE') . "\n"; ?>
            </td>
            <td>&nbsp;-&nbsp;</td>
            <?phpphp
        }
        echo "\n";
        if ($tbl_type == 'MYISAM' || $tbl_type == 'BDB') {
            ?>
            <td>
                <a href="sql.php?<?phpphp echo $url_query; ?>&sql_query=<?phpphp echo urlencode('ANALYZE TABLE ' . backquote($table)); ?>&display=simple">
                    <?phpphp echo $strAnalyzeTable; ?></a>&nbsp;
                <?phpphp echo show_docu('manual_Reference.html#ANALYZE_TABLE') . "\n";?>
            </td>
            <?phpphp
        }
        echo "\n";
        ?>
        </tr>
        <tr>
            <td>&nbsp;</td>
        <?phpphp
        echo "\n";
        if ($tbl_type == 'MYISAM') {
            ?>
            <td>
                <a href="sql.php?<?phpphp echo $url_query; ?>&sql_query=<?phpphp echo urlencode('REPAIR TABLE ' . backquote($table)); ?>&display=simple">
                    <?phpphp echo $strRepairTable; ?></a>&nbsp;
                <?phpphp echo show_docu('manual_Reference.html#REPAIR_TABLE') . "\n"; ?>
            </td>
            <td>&nbsp;-&nbsp;</td>
            <?phpphp
        }
        echo "\n";
        if ($tbl_type == 'MYISAM' || $tbl_type == 'BDB') {
            ?>
            <td>
                <a href="sql.php?<?phpphp echo $url_query; ?>&sql_query=<?phpphp echo urlencode('OPTIMIZE TABLE ' . backquote($table)); ?>&display=simple">
                    <?phpphp echo $strOptimizeTable; ?></a>&nbsp;
                <?phpphp echo show_docu('manual_Reference.html#OPTIMIZE_TABLE') . "\n"; ?>
            </td>
            <?phpphp
        }
        echo "\n";
        ?>
        </tr>
        </table><br />
        </div>
    </li>
        <?phpphp
    } // end MYISAM or BDB case
    echo "\n";
    ?>

    <!-- Table comments -->
    <li>
        <form method="post" action="tbl_properties.php">
            <input type="hidden" name="server" value="<?phpphp echo $server; ?>" />
            <input type="hidden" name="lang" value="<?phpphp echo $lang; ?>" />
            <input type="hidden" name="db" value="<?phpphp echo $db; ?>" />
            <input type="hidden" name="table" value="<?phpphp echo $table; ?>" />
            <?phpphp echo $strTableComments; ?>&nbsp;:&nbsp;
            <input type="hidden" name="prev_comment" value="<?phpphp echo urlencode($show_comment); ?>" />&nbsp;
            <input type="text" name="comment" maxlength="60" size="30" value="<?phpphp echo str_replace('"', '&quot;', $show_comment); ?>" style="vertical-align: middle" />&nbsp;
            <input type="submit" name="submitcomment" value="<?phpphp echo $strGo; ?>" style="vertical-align: middle" />
        </form>
    </li>

    <!-- Table type -->
    <?phpphp
    // modify robbat2 code - staybyte - 11. June 2001
    $query  = "SHOW VARIABLES LIKE 'have_%'";
    $result = mysql_query($query);
    if ($result != FALSE && mysql_num_rows($result) > 0) {
        while ($tmp = mysql_fetch_array($result)) {
            if (isset($tmp['Variable_name'])) {
                switch ($tmp['Variable_name']) {
                    case 'have_bdb':
                        if ($tmp['Value'] == 'YES') {
                            $tbl_bdb    = TRUE;
                        }
                        break;
                    case 'have_gemini':
                        if ($tmp['Value'] == 'YES') {
                            $tbl_gemini = TRUE;
                        }
                        break;
                    case 'have_innodb':
                        if ($tmp['Value'] == 'YES') {
                            $tbl_innodb = TRUE;
                        }
                        break;
                    case 'have_isam':
                        if ($tmp['Value'] == 'YES') {
                            $tbl_isam   = TRUE;
                        }
                        break;
                } // end switch
            } // end if isset($tmp['Variable_name'])
        } // end while
    } // end if $result
    echo "\n";
    ?>
    <li>
        <form method="post" action="tbl_properties.php">
            <input type="hidden" name="server" value="<?phpphp echo $server; ?>" />
            <input type="hidden" name="lang" value="<?phpphp echo $lang; ?>" />
            <input type="hidden" name="db" value="<?phpphp echo $db; ?>" />
            <input type="hidden" name="table" value="<?phpphp echo $table; ?>" />
            <?phpphp echo $strTableType; ?>&nbsp;:&nbsp;
            <select name="tbl_type" style="vertical-align: middle">
                <option value="MYISAM"<?phpphp if ($tbl_type == 'MYISAM') echo ' selected="selected"'; ?>>MyISAM</option>
                <option value="HEAP"<?phpphp if ($tbl_type == 'HEAP') echo ' selected="selected"'; ?>>Heap</option>
                <?phpphp if (isset($tbl_bdb)) { ?><option value="BDB"<?phpphp if ($tbl_type == 'BERKELEYDB') echo ' selected="selected"'; ?>>Berkeley DB</option><?phpphp } ?> 
                <?phpphp if (isset($tbl_gemini)) { ?><option value="GEMINI"<?phpphp if ($tbl_type == 'GEMINI') echo ' selected="selected"'; ?>>Gemini</option><?phpphp } ?> 
                <?phpphp if (isset($tbl_innodb)) { ?><option value="INNODB"<?phpphp if ($tbl_type == 'INNODB') echo ' selected="selected"'; ?>>INNO DB</option><?phpphp } ?> 
                <?phpphp if (isset($tbl_isam)) { ?><option value="ISAM"<?phpphp if ($tbl_type == 'ISAM') echo ' selected="selected"'; ?>>ISAM</option><?phpphp } ?> 
                <option value="MERGE"<?phpphp if ($tbl_type == 'MRG_MYISAM') echo ' selected="selected"'; ?>>Merge</option>
            </select>&nbsp;
            <input type="submit" name="submittype" value="<?phpphp echo $strGo; ?>" style="vertical-align: middle" />
        </form>
    </li>
    <?phpphp
    echo "\n";
} // end MySQL >= 3.23

else { // MySQL < 3.23
    // FIXME: find a way to know the table type, then let OPTIMIZE if MYISAM or
    // BDB
    ?>
    <!-- Table maintenance -->
    <li>
        <?phpphp echo $strTableMaintenance; ?>&nbsp;:&nbsp;
        <a href="sql.php?<?phpphp echo $url_query; ?>&sql_query=<?phpphp echo urlencode('OPTIMIZE TABLE ' . backquote($table)); ?>&display=simple">
            <?phpphp echo $strOptimizeTable; ?></a>&nbsp;
        <?phpphp echo show_docu('manual_Reference.html#OPTIMIZE_TABLE') . "\n"; ?>
    </li>
    <?phpphp
    echo "\n";
} // end MySQL < 3.23
?>

    <!-- Deletes the table -->
    <li>
        <a href="sql.php?<?phpphp echo ereg_replace('tbl_properties.php$', 'db_details.php', $url_query); ?>&back=tbl_properties.php&reload=true&sql_query=<?phpphp echo urlencode('DROP TABLE ' . backquote($table)); ?>&zero_rows=<?phpphp echo urlencode($strTable . ' ' . htmlspecialchars($table) . ' ' . $strHasBeenDropped); ?>">
            <?phpphp echo $strDropTable . ' ' . htmlspecialchars($table); ?></a> 
    </li> 

</ul>

<?phpphp
/**
 * Displays the footer
 */
echo "\n";
require('./footer.inc.php');
?>
