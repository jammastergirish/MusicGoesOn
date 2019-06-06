<?phpphp
/* $Id: tbl_properties.inc.php,v 1.15 2001/08/29 20:49:00 loic1 Exp $ */


?>
<form method="post" action="<?phpphp echo $action; ?>">
    <input type="hidden" name="server" value="<?phpphp echo $server; ?>" />
    <input type="hidden" name="lang" value="<?phpphp echo $lang; ?>" />
    <input type="hidden" name="db" value="<?phpphp echo $db; ?>" />
    <input type="hidden" name="table" value="<?phpphp echo $table; ?>" />
<?phpphp
if ($action == 'tbl_create.php') {
    ?>
    <input type="hidden" name="reload" value="true" />
    <?phpphp
}
else if ($action == 'tbl_addfield.php') {
    echo "\n";
    ?>
    <input type="hidden" name="after_field" value="<?phpphp echo $after_field; ?>" />
    <?phpphp
}
echo "\n";
$is_backup = ($action != 'tbl_create.php' && $action != 'tbl_addfield.php');
?>

    <table border="<?phpphp echo $cfgBorder; ?>">
    <tr>
        <th><?phpphp echo $strField; ?></th>
        <th><?phpphp echo $strType; ?></th>
        <th><?phpphp echo $strLengthSet; ?></th>
        <th><?phpphp echo $strAttr; ?></th>
        <th><?phpphp echo $strNull; ?></th>
        <th><?phpphp echo $strDefault; ?></th>
        <th><?phpphp echo $strExtra; ?></th>
<?phpphp
if (!$is_backup) {
    if (empty($num_indexes)) {
        echo "        <th>$strPrimary</th>\n";
        echo "        <th>$strIndex</th>\n";
        echo "        <th>$strUnique</th>\n";
    } else {
        for ($i = 0; $i < $num_indexes; $i++) {
            echo "        <th>$strSequence</th>\n";
            echo "        <th>$strLength</th>\n";
        } // end for
    } // end if
}
?>
    </tr>

<?phpphp
for ($i = 0 ; $i < $num_fields; $i++) {
    if (isset($result)) {
        $row = mysqli_fetch_array($result);
    }
    $bgcolor = ($i % 2) ? $cfgBgcolorOne : $cfgBgcolorTwo;
    ?>
    <tr bgcolor="<?phpphp echo $bgcolor;?>">
        <td>
    <?phpphp
    if ($is_backup) {
        echo "\n";
        ?>
            <input type="hidden" name="field_orig[]" value="<?phpphp if (isset($row) && isset($row['Field'])) echo urlencode($row['Field']); ?>" />
        <?phpphp
    }
    echo "\n";
    ?>
            <input type="text" name="field_name[]" size="10" value="<?phpphp if (isset($row) && isset($row['Field'])) echo str_replace('"', '&quot;', $row['Field']); ?>" />
        </td>
        <td>
            <select name="field_type[]">
    <?phpphp
    echo "\n";
    if (empty($row['Type'])) {
        $row['Type'] = '';
        $type        = '';
    }
    else if (get_magic_quotes_gpc()) {
        $type        = stripslashes($row['Type']);
    }
    else {
        $type        = $row['Type'];
    }
    $type   = eregi_replace('BINARY', '', $type);
    $type   = eregi_replace('ZEROFILL', '', $type);
    $type   = eregi_replace('UNSIGNED', '', $type);
    $length = $type;
    $type   = chop(eregi_replace('\\(.*\\)', '', $type));
    if (!empty($type)) {
        $length = eregi_replace("^$type\(", '', $length);
        $length = eregi_replace('\)$', '', trim($length));
    }
    // Removes automatic MySQL escape format
    $length = str_replace('\'\'', '\\\'', $length);
    if ($length == $type) {
        $length = '';
    }
    for ($j = 0; $j < count($cfgColumnTypes); $j++) {
        echo '                <option value="'. $cfgColumnTypes[$j] . '"';
        if (strtoupper($type) == strtoupper($cfgColumnTypes[$j])) {
            echo ' selected="selected"';
        }
        echo ">$cfgColumnTypes[$j]</option>\n";
    }
    ?>
            </select>
        </td>
        <td>
    <?phpphp
    if ($is_backup) {
        echo "\n";
        ?>
            <input type="hidden" name="field_length_orig[]" value="<?phpphp echo urlencode($length); ?>" />
        <?phpphp
    }
    echo "\n";
    ?>
            <input type="text" name="field_length[]" size="8" value="<?phpphp echo str_replace('"', '&quot;', $length); ?>" />
        </td>
        <td>
            <select name="field_attribute[]">
    <?phpphp
    echo "\n";
    $binary           = eregi('BINARY', $row['Type'], $test_attribute1);
    $unsigned         = eregi('UNSIGNED', $row['Type'], $test_attribute2);
    $zerofill         = eregi('ZEROFILL', $row['Type'], $test_attribute3);
    $strAttribute     = '';
    if ($binary) {
        $strAttribute = 'BINARY';
    }
    if ($unsigned) {
        $strAttribute = 'UNSIGNED';
    }
    if ($zerofill) {
        $strAttribute = 'UNSIGNED ZEROFILL';
    }
    for ($j = 0;$j < count($cfgAttributeTypes); $j++) {
        echo '                <option value="'. $cfgAttributeTypes[$j] . '"';
        if (strtoupper($strAttribute) == strtoupper($cfgAttributeTypes[$j])) {
            echo ' selected="selected"';
        }
        echo ">$cfgAttributeTypes[$j]</option>\n";
    }
    ?>
            </select>
        </td>
        <td>
            <select name="field_null[]">
    <?phpphp
    if (!isset($row) || empty($row['Null'])) {
        echo "\n";
        ?>
                <option value="NOT NULL">not null</option>
                <option value="">null</option>
        <?phpphp
    } else {
        echo "\n";
        ?>
                <option value="">null</option>
                <option value="NOT NULL">not null</option>
        <?phpphp
    }
    echo "\n";
    ?>
            </select>
        </td>
    <?phpphp
    if (isset($row)
        && !isset($row['Default']) && !empty($row['Null'])) {
        $row['Default'] = 'NULL';
    }
    echo "\n";
    ?>
        <td>
    <?phpphp
    if ($is_backup) {
        echo "\n";
        ?>
            <input type="hidden" name="field_default_orig[]" size="8" value="<?phpphp if(isset($row) && isset($row['Default'])) echo urlencode($row['Default']); ?>" />
        <?phpphp
    }
    echo "\n";
    ?>
            <input type="text" name="field_default[]" size="8" value="<?phpphp if(isset($row) && isset($row['Default'])) echo str_replace('"', '&quot;', $row['Default']); ?>" />
        </td>
        <td>
            <select name="field_extra[]">
    <?phpphp
    if(!isset($row) || empty($row['Extra'])) {
        echo "\n";
        ?>
                <option value=""></option>
                <option value="AUTO_INCREMENT">auto_increment</option>
        <?phpphp
    } else {
        echo "\n";
        ?>
                <option value="AUTO_INCREMENT">auto_increment</option>
                <option value=""></option>
        <?phpphp
    }
    echo "\n";
    ?>
            </select>
        </td>
    <?phpphp
    if (!$is_backup) {
        if (empty($num_indexes)) {
            if (isset($row) && isset($row['Key']) && $row['Key'] == 'PRI') {
                $checked_primary = ' checked="checked"';
            } else {
                $checked_primary = '';
            }
            if (isset($row) && isset($row['Key']) && $row['Key'] == 'MUL') {
                $checked_index = ' checked="checked"';
            } else {
                $checked_index = '';
            }
            if (isset($row) && isset($row['Key']) && $row['Key'] == 'UNI') {
                $checked_unique = ' checked="checked"';
            } else {
                $checked_unique = '';
            }
            echo "\n";
            ?>
        <td align="center">
            <input type="checkbox" name="field_primary[]" value="<?phpphp echo $i; ?>"<?phpphp echo $checked_primary; ?> />
        </td>
        <td align="center">
            <input type="checkbox" name="field_index[]" value="<?phpphp echo $i; ?>"<?phpphp echo $checked_index; ?> />
        </td>
        <td align="center">
            <input type="checkbox" name="field_unique[]" value="<?phpphp echo $i; ?>"<?phpphp echo $checked_unique; ?> />
        </td>
            <?phpphp
        } // end if (empty($num_indexes))
    } // end if ($action ==...)
    echo "\n";
    ?>
    </tr>
    <?phpphp
    echo "\n";
} // end for
?>
    </table>
    <br />

<?phpphp
if ($action == 'tbl_create.php' && MYSQL_INT_VERSION >= 32300) {
    echo "\n";
    ?>
    <table>
    <tr valign="top">
        <td><?phpphp echo $strTableComments; ?>&nbsp;:</td>
    <?phpphp
    if ($action == 'tbl_create.php') {
        echo "\n";
        ?>
        <td width="25">&nbsp;</td>
        <td><?phpphp echo $strTableType; ?>&nbsp;:</td>
        <?phpphp
    }
    echo "\n";
    ?>
    </tr>
    <tr>
        <td>
            <input type="text" name="comment" size="40" maxlength="80" />
        </td>
    <?phpphp
    // BEGIN - Table Type - 2 May 2001 - Robbat2
    // change by staybyte - 11 June 2001
    if ($action == 'tbl_create.php') {
        // find mysql capability - staybyte - 11. June 2001
        $query = 'SHOW VARIABLES LIKE \'have_%\'';
        $result = mysqli_query($link, $query);
        if ($result != FALSE && mysql_num_rows($result) > 0) {
            while ($tmp = mysqli_fetch_array($result)) {
                if (isset($tmp['Variable_name'])) {
                    switch ($tmp['Variable_name']) {
                        case 'have_bdb':
                            if (isset($tmp['Variable_name']) && $tmp['Value'] == 'YES') {
                                $tbl_bdb    = TRUE;
                            }
                            break;
                        case 'have_gemini':
                            if (isset($tmp['Variable_name']) && $tmp['Value'] == 'YES') {
                                $tbl_gemini = TRUE;
                            }
                            break;
                        case 'have_innodb':
                            if (isset($tmp['Variable_name']) && $tmp['Value'] == 'YES') {
                                $tbl_innodb = TRUE;
                            }
                            break;
                        case 'have_isam':
                            if (isset($tmp['Variable_name']) && $tmp['Value'] == 'YES') {
                                $tbl_isam   = TRUE;
                            }
                            break;
                    } // end switch
                }
            }
        }
        echo "\n";
        ?>
        <td width="25">&nbsp;</td>
        <td>
            <select name="tbl_type">
                <option value="Default"><?phpphp echo $strDefault; ?></option>
                <option value="MYISAM">MyISAM</option>
                <option value="HEAP">Heap</option>
                <option value="MERGE">Merge</option>
                <?phpphp if (isset($tbl_bdb)) { ?><option value="BDB">Berkeley DB</option><?phpphp }?> 
                <?phpphp if (isset($tbl_gemini)) { ?><option value="GEMINI">Gemini</option><?phpphp }?> 
                <?phpphp if (isset($tbl_innodb)) { ?><option value="InnoDB">INNO DB</option><?phpphp }?> 
                <?phpphp if (isset($tbl_isam)) { ?><option value="ISAM">ISAM</option><?phpphp }?> 
            </select>
        </td>
        <?phpphp
    }
    echo "\n";
    ?>
        </tr>
    </table>
    <br />
    <?phpphp
}
echo "\n";
// END - Table Type - 2 May 2001 - Robbat2
?>

<input type="submit" name="submit" value="<?phpphp echo $strSave; ?>" />
</form>

<table>
<tr>
    <td valign="top">*&nbsp;</td>
    <td>
        <?phpphp echo $strSetEnumVal . "\n"; ?>
    </td>
</tr>
</table>
<br />

<center><?phpphp echo show_docu('manual_Reference.html#CREATE_TABLE'); ?></center>
