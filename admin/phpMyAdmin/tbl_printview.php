<?php
/* $Id: tbl_printview.php,v 1.13 2001/08/28 16:10:28 loic1 Exp $ */


/**
 * Gets the variables sent or posted to this script, then displays headers
 */
require('./grab_globals.inc.php');
if (!isset($message)) {
    include('./header.inc.php');
} else {
    show_message($message);
}
unset($sql_query);


/**
 * Selects the database
 */
mysql_select_db($db);


/**
 * Displays the comments of the table is MySQL >= 3.23
 */
if (MYSQL_INT_VERSION >= 32300) {
    $local_query = 'SHOW TABLE STATUS LIKE \'' . sql_addslashes($table, TRUE) . '\'';
    $result      = mysqli_query($link, $local_query) or mysql_die('', $local_query);
    $row         = mysqli_fetch_array($result);
    if (!empty($row['Comment'])) {
        echo $strTableComments . '&nbsp;:&nbsp;' . $row['Comment'];
    }
} // end display comments


/**
 * Displays the table structure
 */
// Gets fields properties
$local_query = 'SHOW FIELDS FROM ' . backquote($table);
$result      = mysqli_query($link, $local_query) or mysql_die('', $local_query);
?>

<!-- TABLE INFORMATIONS -->
<table border="<?php echo $cfgBorder; ?>">
<tr>
    <th><?php echo ucfirst($strField); ?></th>
    <th><?php echo ucfirst($strType); ?></th>
    <th><?php echo ucfirst($strAttr); ?></th>
    <th><?php echo ucfirst($strNull); ?></th>
    <th><?php echo ucfirst($strDefault); ?></th>
    <th><?php echo ucfirst($strExtra); ?></th>
</tr>

<?php
$i = 0;
while ($row = mysqli_fetch_array($result)) {
    $bgcolor = ($i % 2) ?$cfgBgcolorOne : $cfgBgcolorTwo;
    $i++;

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
<tr bgcolor="<?php echo $bgcolor; ?>">
    <td nowrap="nowrap"><?php echo htmlspecialchars($row['Field']); ?>&nbsp;</td>
    <td<?php echo $type_nowrap; ?>><?php echo $type; ?></td>
    <td nowrap="nowrap"><?php echo $strAttribute; ?></td>
    <td><?php echo (($row['Null'] == '') ? $strNo : $strYes); ?>&nbsp;</td>
    <td nowrap="nowrap"><?php if (isset($row['Default'])) echo $row['Default']; ?>&nbsp;</td>
    <td nowrap="nowrap"><?php echo $row['Extra']; ?>&nbsp;</td>
</tr>
    <?php
} // end while
echo "\n";
?>
</table>


<?php
/**
 * Displays indexes
 */
$local_query = 'SHOW KEYS FROM ' . backquote($table);
$result      = mysqli_query($link, $local_query) or mysql_die('', $local_query);
if (mysql_num_rows($result) > 0) {
    ?>

<!-- Indexes -->
<br />
<?php echo $strIndexes . '&nbsp;:' . "\n"; ?>
<table border="<?php echo $cfgBorder; ?>">
<tr>
    <th><?php echo $strKeyname; ?></th>
    <th><?php echo $strUnique; ?></th>
    <th><?php echo $strField; ?></th>
 </tr>
    <?php
    for ($i = 0 ; $i < mysql_num_rows($result); $i++) {
        $row = mysqli_fetch_array($result);
        echo "\n";
        ?>
<tr>
    <td><?php echo htmlspecialchars($row['Key_name']) . "\n"; ?></td>
    <td><?php echo (($row['Non_unique'] == '0') ? $strYes : $strNo) . "\n"; ?></td>
    <td><?php echo htmlspecialchars($row['Column_name']) . "\n"; ?></td>
</tr>
        <?php
    } // end for
    echo "\n";
    ?>
</table>
    <?php
} // end if


/**
 * Displays the footer
 */
echo "\n";
require('./footer.inc.php');
?>
