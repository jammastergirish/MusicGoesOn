<?phpphp
/* $Id: tbl_select.php,v 1.17 2001/08/29 12:00:07 loic1 Exp $ */


/**
 * Gets some core libraries
 */
require('./grab_globals.inc.php');
require('./lib.inc.php');


/**
 * Not selection yet required -> displays the selection form
 */
if (!isset($param) || $param[0] == '') {
    include('./header.inc.php');
    $result = @mysql_list_fields($db, $table);
    if (!$result) {
        mysql_die('', 'mysql_list_fields(' . $db . ', ' . $table . ')');
    }
    else {
        // Gets the list and number of fields
        $fields_count = mysql_num_fields($result);
        for ($i = 0; $i < $fields_count; $i++) {
            $fields_list[] = mysql_field_name($result, $i);
            $fields_type[] = mysql_field_type($result, $i);
            $fields_len[]  = mysql_field_len($result, $i);
        }
        ?>
<form method="post" action="tbl_select.php">
    <input type="hidden" name="server" value="<?phpphp echo $server; ?>" />
    <input type="hidden" name="lang" value="<?phpphp echo $lang; ?>" />
    <input type="hidden" name="db" value="<?phpphp echo $db; ?>" />
    <input type="hidden" name="table" value="<?phpphp echo $table; ?>" />
    <input type="hidden" name="goto" value="<?phpphp echo $goto; ?>" />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <?phpphp echo $strSelectFields; ?>&nbsp;:<br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="param[]" size="10" multiple="multiple">
        <?phpphp
        echo "\n";
        // Displays the list of the fields
        for ($i = 0 ; $i < $fields_count; $i++) {
            echo '        <option value="' . urlencode($fields_list[$i]) . '" selected="selected">' . htmlspecialchars($fields_list[$i]) . '</option>' . "\n";
        }
        ?>
    </select><br />
    <ul>
        <li>
            <div style="margin-bottom: 10px">
            <?phpphp echo $strDisplay; ?>&nbsp;
            <input type="text" size="4" name="sessionMaxRows" value="<?phpphp echo $cfgMaxRows; ?>" />
            <?phpphp echo $strLimitNumRows . "\n"; ?>
            </div>
        </li>
        <li>
            <?phpphp echo $strAddSearchConditions; ?><br />
            <input type="text" name="where" />&nbsp;
            <?phpphp print show_docu("manual_Reference.html#Functions") . "\n"; ?>
            <br /><br />
            <?phpphp echo '<i>' . $strOr . '</i> ' . $strDoAQuery; ?><br />
            <table border="<?phpphp echo $cfgBorder; ?>">
            <tr>
                <th><?phpphp echo $strField; ?></th>
                <th><?phpphp echo $strType; ?></th>
                <th><?phpphp echo $strValue; ?></th>
            </tr>
        <?phpphp
        for ($i = 0; $i < $fields_count; $i++) {
            echo "\n";
            $bgcolor   = ($i % 2) ? $cfgBgcolorOne : $cfgBgcolorTwo;
            $fieldsize = (($fields_len[$i] > 40) ? 40 : $fields_len[$i]);
            $maxlength = (($fields_len[$i] < 8)  ? 8  : $fields_len[$i]);
            ?>
            <tr bgcolor="<?phpphp echo $bgcolor; ?>">
                <td><?phpphp echo htmlspecialchars($fields_list[$i]); ?></td>
                <td><?phpphp echo $fields_type[$i]; ?></td>
                <td>
                    <input type="text" name="fields[]" size="<?phpphp echo $fieldsize; ?>" maxlength="<?phpphp echo $maxlength; ?>" />
                    <input type="hidden" name="names[]" value="<?phpphp echo urlencode($fields_list[$i]); ?>" />
                    <input type="hidden" name="types[]" value="<?phpphp echo $fields_type[$i]; ?>" />
                </td>
            </tr>
            <?phpphp
        } // end for
        echo "\n";
        ?>
            </table><br />
        </li>
        <li>
            <?phpphp echo $strDisplayOrder; ?><br />
            <select name="orderField" style="vertical-align: middle">
                <option value="--nil--"></option>
        <?phpphp
        echo "\n";
        for ($i = 0; $i < mysql_num_fields($result); $i++) {
            $field = mysql_field_name($result, $i);
            echo '                ';
            echo '<option value="' . urlencode($field) . '">' . htmlspecialchars($field) . '</option>' . "\n";
        } // end for
        ?>
            </select>
            <input type="radio" name="order" value="ASC" checked="checked" />
            <?phpphp echo $strAscending; ?>&nbsp;
            <input type="radio" name="order" value="DESC" />
            <?phpphp echo $strDescending; ?><br /><br />
        </li>
    </ul>

    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="submit" value="<?phpphp echo $strGo; ?>" />
</form>
        <?phpphp
    } // end if
    echo "\n";
    include('./footer.inc.php');
}


/**
 * Selection criteria have been submitted -> do the work
 */
else {
    // Builds the query
    $sql_query = 'SELECT ' . backquote(urldecode($param[0]));
    $i         = 0;
    $c         = count($param);
    while ($i < $c) {
        if ($i > 0) {
            $sql_query .= ',' . backquote(urldecode($param[$i]));
        }
        $i++;
    }
    $sql_query .= ' FROM ' . backquote($table);
    // The where clause
    if ($where != '') {
        $sql_query .= ' WHERE ' . ((get_magic_quotes_gpc()) ? stripslashes($where) : $where);
    }
    else {
        $sql_query .= ' WHERE 1';
        for ($i = 0; $i < count($fields); $i++) {
            if (!empty($fields) && $fields[$i] != '') {
                if (strtoupper($fields[$i]) == 'NULL' || strtoupper($fields[$i]) == 'NOT NULL') {
                    $quot = '';
                    $cmp  = 'IS';
                }
                else if ($types[$i] == 'string' || $types[$i] == 'blob') {
                    $quot = '\'';
                    $cmp  = 'LIKE';
                    if (get_magic_quotes_gpc()) {
                        $fields[$i] = stripslashes($fields[$i]);
                    }
                    $fields[$i]     = sql_addslashes($fields[$i], TRUE);
                }
                else if ($types[$i] == 'date' || $types[$i] == 'time') {
                    $quot = '\'';
                    $cmp  = '=';
                }
                else if (strstr($fields[$i], '%')) {
                    $quot = '\'';
                    $cmp  = 'LIKE';
                }
                else if (substr($fields[$i], 0, 1) == '<' || substr($fields[$i], 0, 1) == '>') {
                    $quot = '';
                    $cmp  = '';
                }
                else {
                    $quot = '';
                    $cmp  = '=';
                } // end if
                $sql_query .= ' AND ' . backquote(urldecode($names[$i])) . " $cmp $quot$fields[$i]$quot";
            } // end if
        } // end for
    } // end if
    if ($orderField != '--nil--') {
        $sql_query .= ' ORDER BY ' . backquote(urldecode($orderField)) . ' ' . $order;
    } // end if

    $url_query = 'lang=' . $lang
               . '&server=' . $server
               . '&db=' . urlencode($db)
               . '&table=' . urlencode($table)
               . '&sql_query=' . urlencode($sql_query)  
               . '&pos=0'
               . '&sessionMaxRows=' . $sessionMaxRows
               . '&goto='. $goto;
    header('Location: ' . $cfgPmaAbsoluteUri . 'sql.php?' . $url_query);
}

?>
