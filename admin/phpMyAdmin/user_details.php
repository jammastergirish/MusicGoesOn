<?php
/* $Id: user_details.php,v 1.25 2001/08/29 07:43:41 loic1 Exp $*/


require('./grab_globals.inc.php');
require('./lib.inc.php');

function check_operations()
{
    global $server, $lang;
    global $strBack;
    global $self;
    ?>

    <div align=left>
    <ul>
    <li><a href="<?php echo "$self?server=$server&lang=$lang&db=mysql&table=user"; ?>"><?php echo $strBack; ?></a></li>
    </ul>
    </div>

    <?php
}

function check_db($dbcheck)
{
    $select = "SELECT host, user FROM mysql.user ORDER BY host, user";
    $result = mysqli_query($link, $select);
    $rows = @mysql_num_rows($result);

    # Errors
    if (!isset($rows)) return -1;
    if ($rows == 0) return 0;

    table_grants_header($dbcheck);

    while ($row = mysqli_fetch_array($result))
       table_grants($row['host'], $row['user'], $dbcheck);

    table_grants_tail();
}

function normal_operations()
{
    global $server, $lang, $self;
    global $strReloadMySQL, $strGo;

    global $strHostEmpty, $strUserEmpty, $strPasswordEmpty;
    global $strPasswordNotSame, $strAddUserMessage, $strRememberReload;
    global $strDatabase, $strHost, $strAnyHost, $strUserName;
    global $strAnyUser, $strPassword, $strNoPassword, $strReType;
    global $strPrivileges, $strAddUser, $strCheckDbPriv;

    ?>

    <script language="JavaScript">
    <!--

    function addUser(f) {
        var sql = "INSERT INTO user SET ";

        if (f.anyhost[0].checked) {
           if (f.host.value == "") {
               alert("<?php echo $strHostEmpty; ?>");
               return;
              }
           sql += "host = '" + f.host.value + "'";
        } else sql += "host = '%'"

        if (f.anyuser[0].checked) {
           if (f.user.value == "") {
               alert("<?php echo $strUserEmpty; ?>");
               return;
              }
           sql += ", user = '" + f.user.value + "'";
        } else sql += ", user = ''"

        if (f.nopass[0].checked) {
           if (f.pw.value == "") {
               alert("<?php echo $strPasswordEmpty; ?>");
               return;
              }

           if (f.pw.value != f.pw2.value) {
               alert("<?php echo $strPasswordNotSame; ?>");
               return;
              }
              sql += ", password = PASSWORD('" + f.pw.value + "')";
        }

        sql += ", " + privToString(f);

        url  = "sql.php";
        url += "?sql_query=" + escape(sql);
        url += "&zero_rows=" + escape("<?php echo "$strAddUserMessage<br>$strRememberReload"; ?>");
        url += "<?php echo "&server=$server&lang=$lang&db=mysql&table=user"; ?>";
        url += "&goto=<?php echo $self; ?>";

        location.href = url;
    }

    //-->
    </script>

    <div align=left>
    <ul>

    <li><a href="<?php echo "$self?server=$server&lang=$lang&db=mysql&table=user&mode=reload"; ?>"><?php echo $strReloadMySQL; ?></a> <?php print show_docu("manual_Reference.html#FLUSH"); ?></li>

    <li><form name=userForm1 method="POST" action="<?php echo $self; ?>"><?php echo $strCheckDbPriv; ?>
    <table width="100%"><tr>
    <td><?php echo $strDatabase; ?>:&nbsp;<select name="db">
<?php
    $result = mysqli_query($link, "SHOW DATABASES");
    if (@mysql_num_rows($result))
        while ($row = mysql_fetch_row($result))
            echo "<option>" . $row[0] . "</option>\n";
?>
    </select></td>
    </tr></table>
    <input type="hidden" name="server" value="<?php echo $server; ?>">
    <input type="hidden" name="lang" value="<?php echo $lang; ?>">
    <input type="hidden" name="check" value="1">
    <input type="submit" value="<?php echo $strGo; ?>">
    </form>
    </li>

    <li><form name=userForm2 onsubmit ="return false"><?php echo $strAddUser; ?>
    <table>
    <tr>
    <td><input type="radio" name="anyhost">
    <?php echo $strHost; ?>: <input type="text" name="host" size=10 onchange="anyhost[0].checked = true"></td>
    <td>&nbsp;</td><td><input type="radio" name="anyhost" checked><?php echo $strAnyHost; ?></td>
    </tr>
    </table>
    <table>
    <tr>
    <td><input type="radio" name="anyuser" checked>
    <?php echo $strUserName; ?>: <input type="text" name="user" size=10 onchange="anyuser[0].checked = true"></td>
    <td>&nbsp;</td><td><input type="radio" name="anyuser"><?php echo $strAnyUser; ?></td>
    </tr>
    </table>
    <table>
    <tr>
    <td><input type="radio" name="nopass" checked>
    <?php echo $strPassword; ?>: <input type="password" name="pw" size=10 onchange="nopass[0].checked = true"></td>
    <td><?php echo $strReType; ?>: <input type="password" name="pw2" size=10 onchange="nopass[0].checked = true"></td>
    <td>&nbsp;</td>
    <td><input type="radio" name="nopass"><?php echo $strNoPassword; ?></td></tr>
    <tr><td><br><?php echo $strPrivileges; ?>:<br></td></tr>
    </table>
    <?php table_privileges("userForm2") ?>
    <input type="button" value="<?php echo $strGo; ?>" onclick="addUser(document.userForm2)"></p>
    </form>
    </li>
    </ul>
    </div>
    <?php
}

function grant_operations()
{
    global $server, $lang, $user, $host;
    global $dbgrant, $tablegrant;
    global $self;

    global $strBack, $strGo;
    global $strDbEmpty, $strTableEmpty;
    global $strAddPriv, $strAddPrivMessage;
    global $strDatabase, $strAnyDatabase;
    global $strTable, $strAnyTable;
    global $strColumn, $strAnyColumn, $strColumnEmpty;
    global $strPrivileges;

    ?>

    <script language="JavaScript">
    <!--

    function getSelected(field) {
        var f = "";
        for (var i = 0; i < field.options.length; i++)
          if (field.options[i].selected)
              f += field.options[i].text + ", ";

        return f.substring(0, f.length - 2);
    }

    function addGrant(f) {
        var sql;
        var db, table, column = "";

        db = getSelected(f.database);
        table = getSelected(f.table);
        column = getSelected(f.column);

        if (f.anydb[1].checked) {

            if (db == "") {
               alert("<?php echo $strDbEmpty; ?>");
               return;
            }

            if (f.anytable[1].checked) {

               if (table == "") {
                  alert("<?php echo $strTableEmpty; ?>");
                  return;
               }

               if (f.anycolumn[1].checked) {
                  if (column == "") {
                     alert("<?php echo $strColumnEmpty; ?>");
                     return;
                  }
                  column = " (" + column + ")";

               } else column = "";

            } else {table = "*"; column = ""; }

        } else { db = "*"; table = "*"; column = ""; }

        sql = "GRANT " + privGrantToString(f) + "" + column;
        sql += " ON " + protect_name(db) + "." + protect_name(table) 
        sql += " TO '" + "<?php echo $user; ?>" + "'@'" + "<?php echo $host ?>'"
        if (f.Grant_priv.checked) sql += " with grant option";

        url  = "sql.php";
        url += "?sql_query=" + escape(sql);
        url += "&zero_rows=" + escape("<?php echo $strAddPrivMessage; ?>");
        url += "<?php echo "&server=$server&lang=$lang"; ?>&db=mysql";
        url += "&goto=<?php echo $self; ?>";

        location.href = url;
    }

    function protect_name(db_or_table) {
	var js_mysql_version = <?php echo MYSQL_INT_VERSION ?>;

	if (js_mysql_version >= 32306) {
<!--		return "`" + db_or_table + "`"; -->
		return db_or_table;
	}
	else {
		return db_or_table;
	}
    }

    function change(f, param) {
        var l, p;

        l = location.href;
        if (param == "dbgrant") {
           p = l.indexOf("&" + param);
           if ( p >= 0) l = l.substring(0, p);
        }

        location.href = l + "&" + param + "=" + getSelected(f);
    }

    // -->
    </script>

    <div align=left>
    <ul>

    <li><a href="<?php echo "$self?server=$server&lang=$lang&db=mysql&table=user"; ?>"><?php echo $strBack; ?></a></li>

    <li><form name=userForm3 onsubmit ="return false"><?php echo $strAddPriv; ?>
    <table width="100%"><tr>
    <td><input type="radio" name="anydb"<?php echo ($dbgrant) ? "": " checked"; ?>><?php echo $strAnyDatabase; ?></td>
    <td>&nbsp;</td>
    <td><input type="radio" name="anydb"<?php echo ($dbgrant) ? " checked":""; ?>><?php echo $strDatabase; ?>:&nbsp;
    <select name="database" onchange="change(userForm3.database, 'dbgrant')">
<?php
    if (!isset($dbgrant)) echo "<option selected></option>";
    $result = mysqli_query($link, "SHOW DATABASES");
    if (@mysql_num_rows($result))
        while ($row = mysql_fetch_row($result)) {
            $selected = ($row[0] == $dbgrant)? "SELECTED" : "";
            echo "<option $selected>" . $row[0] . "</option>\n";
        }
?>
    </select></td>
    </tr></table>

    <table width="100%"><tr>
    <td><input type="radio" name="anytable"<?php echo ($tablegrant) ? "":" checked"; ?>><?php echo $strAnyTable; ?></td>
    <td>&nbsp;</td>
    <td><input type="radio" name="anytable"<?php echo ($tablegrant) ? " checked":""; ?>><?php echo $strTable; ?>:&nbsp;
    <select name="table" onchange="change(userForm3.table, 'tablegrant')"
    >
<?php
    if (isset($dbgrant)) {
        if (!isset($tablegrant)) echo "<option selected></option>";
        $result = mysqli_query($link, "SHOW TABLES from ".backquote($dbgrant));
        if (@mysql_num_rows($result))
           while ($row = mysql_fetch_row($result)) {
                $selected = ($row[0] == $tablegrant)? "SELECTED" : "";
                echo "<option $selected>" . $row[0] . "</option>\n";
                }
    }
?>
    </select></td>
    </tr></table>

    <table width="100%"><tr>
    <td VALIGN=TOP><input type="radio" name="anycolumn" checked><?php echo $strAnyColumn; ?></td>
    <td>&nbsp;</td>
    <td VALIGN=TOP><input type="radio" name="anycolumn"><?php echo $strColumn; ?>:</td>
    <td>
    <select name="column" onchange="anycolumn[1].checked = true" multiple>
<?php

    if (isset($dbgrant) && isset($tablegrant)) {
       $result = mysqli_query($link, "SHOW COLUMNS FROM ".backquote($dbgrant)."." .
	backquote($tablegrant));
       if (@mysql_num_rows($result))
           while ($row = mysql_fetch_row($result))
               echo "<option>" . $row[0] . "</option>\n";
    }
?>
    </select>
    </td>
    </tr></table>

    <table><tr><td><br><?php echo $strPrivileges; ?>:<br></td></tr></table>
    <?php table_privileges("userForm3") ?>
    <input type="button" value="<?php echo $strGo; ?>" onclick="addGrant(userForm3)"></p>
    </form>
    </li>
    </ul>
    </div>
    <?php
}

function table_grants_header($dbcheck = FALSE) {
    global $cfgBorder;

    global $strAction;
    global $strHost, $strUser, $strDatabase, $strColumn;
    global $strTable, $strPrivileges;

    echo "<table border=$cfgBorder>\n<tr>";

    if ($dbcheck) {
       echo "<th>$strAction</th>";
       echo "<th>$strHost</th>";
       echo "<th>$strUser</th>";
    } else {
      echo "<th colspan=2>$strAction</td>";
    }

    echo "<th>$strDatabase</th>";
    echo "<th>" . UCFirst($strTable) . "</th>";
    echo "<th>$strPrivileges</th>";
    if (!$dbcheck) echo "<th>Grant Option</th>";
    echo "</tr>\n";
}

function table_grants_tail() {
    echo "</table>\n<hr>";
}


function table_grants($host, $user, $dbcheck = FALSE)
{
    global $cfgBgcolorOne, $cfgBgcolorTwo;
    global $server, $lang, $db, $table;
    global $self;

    global $strEdit, $strDelete, $strAny, $strAll, $strYes, $strNo;
    global $strRevoke, $strRevokePriv, $strRevokeGrant;
    global $strRevokeMessage, $strRevokeGrantMessage;
    global $strNoPrivileges;

    $select = "SHOW GRANTS FOR '$user'@'$host'";
    $result = mysqli_query($link, $select);
    $rows = @mysql_num_rows($result);

    # Errors
    if (!isset($rows)) return -1;
    if ($rows == 0) return 0;

    $i = 0;
    while ($row = mysql_fetch_row($result)) {

        if (eregi("GRANT (.*) ON ([^\.]+).([^\.]+) TO .*$", $row[0], $parts)) {
            $priv = $parts[1];
            $db = $parts[2];
            $table = trim($parts[3]);
            $grantopt = eregi("WITH GRANT OPTION$", $row[0]);
        } else {
            $db = "&nbsp";
            $table = "&nbsp";
            $column = "&nbsp";
            $priv = "";
            $grantopt = FALSE;
        }

        if ($priv == "USAGE") $priv = "";

        # Checking the database ...
        if ($dbcheck)
           if (!eregi($dbcheck . "|\*", $db) || (trim($priv) == "")) continue;

        # Password Line
        if ((trim($priv) == "") && !$grantopt) continue;

        if (!$dbcheck && !isset($show_header)) {
            $show_header = TRUE;
            table_grants_header();
        }

        $bgcolor = $cfgBgcolorOne;
        $i % 2  ? 0: $bgcolor = $cfgBgcolorTwo;

        # Revoke
        $query = "server=$server&lang=$lang&db=mysql&table=user";
        $revoke_url  = "sql.php";
//        $revoke_url .= "?sql_query=".urlencode("REVOKE $priv ON " . backquote($db) . "." . backquote($table) . " FROM '$user'@'$host'");
        $revoke_url .= "?sql_query=".urlencode("REVOKE $priv ON " . $db . "." . $table . " FROM '$user'@'$host'");
        $revoke_url .= "&$query";
        $revoke_url .= "&zero_rows=" . urlencode("$strRevokeMessage <font color=#002E80>$user@$host</font>");
        $revoke_url .= "&goto=$self";

        # Revoke GRANT OPTION
        if ($grantopt) {
            $revoke_grant_url  = "sql.php";
//            $revoke_grant_url .= "?sql_query=" . urlencode("REVOKE GRANT OPTION ON " . backquote($db) . "." . backquote($table) . " FROM '$user'@'$host'");
            $revoke_grant_url .= "?sql_query=" . urlencode("REVOKE GRANT OPTION ON " . $db . "." . $table . " FROM '$user'@'$host'");
            $revoke_grant_url .= "&$query";
            $revoke_grant_url .= "&zero_rows=" . urlencode("$strRevokeGrantMessage <font color=#002E80>$user@$host</font>");
            $revoke_grant_url .= "&goto=$self";
        }
        ?>

        <tr bgcolor="<?php echo $bgcolor;?>">

        <?php
        if (!$dbcheck) {
            if ($priv) {
                ?>
            <td<?php if (!$grantopt) echo ' colspan="2"'; ?>><a href="<?php echo $revoke_url; ?>"><?php echo $strRevokePriv; ?></a></td>
                <?php
            }
            if ($grantopt) {
                ?>
            <td<?php if (!$priv) echo ' colspan="2"'; ?>><a href="<?php echo $revoke_grant_url; ?>"><?php echo $strRevokeGrant; ?></a></td>
                <?php
            }
        } else {
            ?>
            <td>
            <?php
            if  ($priv) {
                ?>
                <a href="<?php echo $revoke_url; ?>"><?php echo $strRevoke; ?></a>
                <?php
            }
            ?>
            </td>
            <td><?php echo $host; ?></td>
            <td><?php echo ($user) ? $user : "<font color=\"#FF0000\">$strAny</font>"; ?></td>
            <?php
        }
        ?>

        <td><?php echo ($db == "*") ? "<font color=\"#002E80\">$strAll</font>" : $db; ?></td>
        <td><?php echo ($table == "*") ? "<font color=\"#002E80\">$strAll</font>" : $table; ?></td>
        <td><?php echo ($priv != "") ? $priv : "<font color=\"#002E80\">$strNoPrivileges</font>"; ?></td>
        <?php if (!$dbcheck) { ?>
        <td><?php echo ($grantopt) ? "$strYes" : "$strNo"; ?></td>
        <?php } ?>
        <!-- <td><?php echo $row[0] ?></td> <!-- Debug -->
        </tr>

        <?php
        $i++;
    }

    if (!$dbcheck && isset($show_header)) table_grants_tail();
    return $rows;
}

function table_privileges($form, $row = FALSE)
{
    global $strDelete;
    global $strCheckAll, $strUncheckAll;

    ?>
    <script language="JavaScript">
    <!--
    function checkForm(f, checked) {
        len = f.elements.length;
        var i=0;
        for( i=0; i<len; i++)
           if (f.elements[i].name.indexOf("_priv") >= 0) {
              f.elements[i].checked=checked;
              }
    }

    function privGrantToString(f) {
        var sql = '';
        var i   = 0;
        var len = f.elements.length;

        for (i = 0; i < len; i++) {
            var whichElt = f.elements[i];
            if (whichElt.name.indexOf('_priv') >= 0) {
                if (whichElt.checked && whichElt.name.indexOf('Grant') == -1) {
                    sql += ', ' + whichElt.name.substring(0, whichElt.name.indexOf('_priv'));
                }
            }
        }
        sql = sql.substring(2);
        if (sql == '') {
            sql = 'Usage';
        }

        return sql;
    }

    function privToString(f) {
        var index = 0;
        var sql   = '';
        var i     = 0;
        var len   = f.elements.length;

        for (i = 0; i < len; i++) {
            var whichElt = f.elements[i];
            if (whichElt.name.indexOf('_priv') >= 0) {
                if (index > 0) {
                    sql += ', ';
                }
                index++;
                if (whichElt.checked) {
                    sql += whichElt.name + ' = \'Y\'';
                } else {
                    sql += whichElt.name + ' = \'N\'';
                }
            }
        }
        if (sql == '') {
            sql = 'Usage';
        }

        return sql;
    }
    //-->
    </script>
    <table>
    <?php
    $list_priv = array("Select", "Insert", "Update", "Delete", "Create", "Drop", "Reload",
		       "Shutdown", "Process", "File", "Grant", "References", "Index", "Alter");

    $item = 0;
    while ((list(,$priv) = each($list_priv)) && ++$item) {
       $priv_priv = $priv . "_priv";
       $checked = ($row && $row[$priv_priv] == "Y") ?  "checked" : "";
       if ($item % 2 == 1) echo "<tr>";
       else echo "<td>&nbsp;</td>";
       echo "<td><input type=\"checkbox\" name=\"$priv_priv\" $checked></td>";
//       echo "<td>" . ${"str$priv"} . "</td>";
       echo "<td>" . $priv . "</td>";
       if ($item % 2 == 0) echo "</tr>\n";
    }
    if ($item % 2 == 1) echo "<td colspan=2>&nbsp;<td></tr>\n";

    ?>
    </table>
    <table>
    <tr><td><a href="javascript:checkForm(document.<?php echo $form; ?>, true)"><?php echo $strCheckAll; ?></a></td>
    <td>&nbsp;</td><td><a href="javascript:checkForm(document.<?php echo $form; ?>, false)"><?php echo $strUncheckAll; ?></a></td></tr>
    </table>
    <?php
}

function edit_operations($host, $user)
{
    global $server, $lang;
    global $self;

    global $strBack, $strGo;
    global $strDelPassMessage, $strRememberReload, $strUpdatePassMessage;
    global $strUpdatePrivMessage;
    global $strPasswordEmpty, $strPasswordNotSame;
    global $strDeletePassword, $strUpdatePassword, $strEditPrivileges;
    global $strPassword, $strReType;

    $result = mysqli_query($link, "SELECT * FROM mysql.user WHERE user = '$user' and host = '$host'");
    $rows = @mysql_num_rows($result);

    # Errors
    if (!isset($rows)) return -1;
    if ($rows == 0) return 0;

    $row = mysqli_fetch_array($result);

    #Delete Password
    $del_url  = "sql.php";
    $del_url .= "?sql_query=" . urlencode("UPDATE user SET password = '' WHERE user = '$user' and host = '$host'");
    $del_url .= "&zero_rows=" . urlencode("$strDelPassMessage <font color=#002E80>$user@$host</font><br>$strRememberReload");
    $del_url .= "&server=$server&lang=$lang&db=mysql&table=user";
    $del_url .= "&goto=$self";
    ?>

    <script language="JavaScript">
    <!--
    function changePrivileges(f) {
        var sql = "UPDATE user SET ";
        var url;

        sql += privToString(f);
        sql += " WHERE user = '<?php echo $user; ?>' and host = '<?php echo $host; ?>'";

        url  = "sql.php";
        url += "?sql_query=" + escape(sql);
        url += "&zero_rows=" + escape("<?php echo $strUpdatePrivMessage; ?> <font color=#002E80><?php echo "$user@$host"; ?></font><br><?php echo $strRememberReload; ?>");
        url += "<?php echo "&server=$server&lang=$lang&db=mysql&table=user"; ?>";
        url += "&goto=<?php echo $self; ?>";
        location.href = url;
    }

    function changePassword(f) {
        if (f.pw.value == "") {
            alert("<?php echo $strPasswordEmpty; ?>");
            return;
           }

        if (f.pw.value != f.pw2.value) {
            alert("<?php echo $strPasswordNotSame ?>");
            return;
           }

        url  = "sql.php";
        url += "?sql_query=" + escape("UPDATE user SET password = PASSWORD('" + f.pw.value + "') WHERE user = '<?php echo $user; ?>' and host = '<?php echo $host; ?>'");
        url += "&zero_rows=" + escape("<?php echo $strUpdatePassMessage; ?> <font color=#002E80><?php echo "$user@$host"; ?></font><br><?php echo $strRememberReload; ?>");
        url += "<?php echo "&server=$server&lang=$lang&db=mysql&table=user"; ?>";
        url += "&goto=<?php echo $self; ?>";
        location.href = url;
    }
    //-->
    </script>

    <div align=left>
    <ul>

    <li><a href="<?php echo "$self?server=$server&lang=$lang&db=mysql&table=user"; ?>"><?php echo $strBack; ?></a></li>

    <?php      if ($row['Password'] != "") { ?>
    <li><td><a href="<?php echo $del_url; ?>"><?php echo $strDeletePassword; ?></a></td></li>
    <?php } ?>

    <li><form name=passForm onsubmit ="return false"><?php echo $strUpdatePassword; ?>
    <table>
    <tr><td><?php echo $strPassword; ?>: <input type="password" name="pw" size=10></td>
    <td>&nbsp;</td>
    <td><?php echo $strReType; ?>: <input type="password" name="pw2" size=10></td></tr>
    </table>
    <input type="button" value="<?php echo $strGo; ?>" onclick="changePassword(document.passForm)"></p>
    </form></li>

    <li><form name=privForm onsubmit ="return false"><?php echo $strEditPrivileges; ?>
    <?php table_privileges("privForm", $row); ?>
    <input type="button" value="<?php echo $strGo; ?>" onclick="changePrivileges(document.privForm)"></p>
    </form>
    </li>
    </ul>
    </div>

    <?php
}

/**
 * Checks whether the current user is a super-user or not
 *
 * @return  boolean  true as soon as the current user is super-user, no return
 *                   else
 *
 * @access	private
 */
function check_rights()
{
    $result = @mysqli_query($link, 'USE mysql');
    if (mysql_error()) {
        mysql_die($GLOBALS['strNoRights']);
    }
    
    return true;
} // end of the 'check_rights()' function


function table_users($host = FALSE, $user = FALSE)
{
    global $cfgBorder, $cfgBgcolorOne, $cfgBgcolorTwo;
    global $server, $lang, $db, $table;
    global $self;
    global $strDelete;
    global $strEdit, $strGrants;
    global $strAction, $strHost, $strUser, $strPassword, $strPrivileges;
    global $strNoPrivileges, $strDeleteUserMessage, $strRememberReload;
    global $strYes, $strNo, $strAny, $strEnglishPrivileges;

    $select = "SELECT * FROM mysql.user ";
    if ($host || $user) $select = "$select WHERE 1 ";
    if ($host) {
       $select = "$select and host = '$host'";
       $select = "$select and user = '$user'";
       }
    $select .= " ORDER BY host, user";

    $result = mysqli_query($link, $select);
    $rows = @mysql_num_rows($result);

    # Errors
    if (!isset($rows)) return -1;
    if ($rows == 0) return 0;

    echo "<i>" . $strEnglishPrivileges . "</i><br>";
    echo "<table border=$cfgBorder>\n";
    echo "<tr><th colspan=3>$strAction</td>";
    echo "<th>$strHost</th>";
    echo "<th>$strUser</th>";
    echo "<th>$strPassword</th>";
    echo "<th>$strPrivileges</th></tr>";

    $i = 0;
    while ($row = mysqli_fetch_array($result)) {

        $bgcolor = $cfgBgcolorOne;
        $i % 2  ? 0: $bgcolor = $cfgBgcolorTwo;

        $strPriv = "";
        if ($row['Select_priv'] == "Y")  $strPriv .= "Select ";
        if ($row['Insert_priv'] == "Y") $strPriv .= "Insert ";
        if ($row['Update_priv'] == "Y") $strPriv .= "Update ";
        if ($row['Delete_priv'] == "Y") $strPriv .= "Delete ";
        if ($row['Create_priv'] == "Y") $strPriv .= "Create ";
        if ($row['Drop_priv'] == "Y") $strPriv .= "Drop ";
        if ($row['Reload_priv'] == "Y") $strPriv .= "Reload ";
        if ($row['Shutdown_priv'] == "Y") $strPriv .= "Shutdown ";
        if ($row['Process_priv'] == "Y") $strPriv .= "Process ";
        if ($row['File_priv'] == "Y") $strPriv .= "File ";
        if ($row['Grant_priv'] == "Y") $strPriv .= "Grant ";
        if ($row['References_priv'] == "Y") $strPriv .= "References ";
        if ($row['Index_priv'] == "Y") $strPriv .= "Index ";
        if ($row['Alter_priv'] == "Y") $strPriv .= "Alter ";

        if ($strPriv == "") $strPriv  = "<font color=\"#002E80\">$strNoPrivileges</font>";

        $query = "server=$server&lang=$lang&db=mysql&table=user";

        # Edit
        $edit_url  = $self;
        $edit_url .= "?server=$server&lang=$lang";
        $edit_url .= "&edit=1&host=" . urlencode($row['Host']) . "&user=" . urlencode($row['User']);

        # Delete
        $delete_url  = "$self?$query";
        $delete_url .= "&delete=1&confirm=1&delete_host=" . urlencode($row['Host']) . "&delete_user=" . urlencode($row['User']);

        # Grants
        $check_url  = $self;
        $check_url .= "?server=$server&lang=$lang";
        $check_url .= "&grants=1&host=" . urlencode($row['Host']) . "&user=" . urlencode($row['User']);

#        $check_result =  mysqli_query($link, "SHOW GRANTS FOR '" . $row['User'] . "'@'" . $row['Host'] ."'");
#        if (@mysql_num_rows($check_result) == 0) $check_url = ""
        ?>

        <tr bgcolor="<?php echo $bgcolor;?>">
        <td><a href="<?php echo $edit_url; ?>"><?php echo $strEdit; ?></a></td>
        <td><a href="<?php echo $delete_url; ?>"><?php echo $strDelete; ?></a></td>
        <td><a href="<?php echo $check_url; ?>"><?php echo $strGrants; ?></a></td>
<!--        <td><a <?php if ($check_url != "") echo "href = \"" . $check_url . "\""; ?>>Grants</a></td> -->
        <td><?php echo $row['Host']; ?></td>
        <td><?php echo $row['User'] ? "<b>" . $row['User']. "</b>" : "<font color=\"#FF0000\">$strAny</font>"; ?></td>
        <td><?php echo $row['Password'] ? $strYes : "<font color=\"#FF0000\">$strNo</font>"; ?></td>
        <td><?php echo $strPriv; ?></td>
        </tr>

        <?php
        $i++;
    }

    echo "</table>\n<hr>";
	return $rows;
}


function confirm() {
    global $self, $server, $lang;
    global $strYes, $strNo, $strConfirm;

?>
    <script language="JavaScript">
    <!--

    function clickNo() {
       location = "<?php echo "$self?server=$server&lang=$lang&db=mysql&table=user"; ?>";
    }

    function clickYes() {
       location += "&clickyes=1";
    }

    // -->
    </script>

    <?php echo $strConfirm; ?>

    <form action="users_details.php" onsubmit="return false">
    <input type="button" name="btnDrop" value="<?php echo $strYes; ?>" onclick="clickYes();">
    <input type="button" name="btnDrop" value="<?php echo $strNo; ?>" onclick="clickNo();">
    </form>

<?php
}

# Main Program

if(!isset($message))
{
    include('./header.inc.php');
}
else
{
    show_message($message);
}

$self = "user_details.php";
check_rights();

if (!empty($host)) {
    echo "<h1>";
    if ($host) echo "$strHost $host - $strUser ";
    echo ($user) ?  $user : "$strAny";
    echo "</h1>";
}

# Confirm the action ...
if (isset($confirm) && $confirm && (!isset($clickyes) || !$clickyes)) {
   confirm();
   exit();
}

if (($server > 0) && isset($mode) && ($mode == "reload"))
   {
     $result = mysqli_query($link, "FLUSH PRIVILEGES");
     if ($result != 0) {
       echo "<b>$strMySQLReloaded</b>";
     } else {
       echo "<b>$strReloadFailed</b>";
     }
   }

# Delete an user
if (isset($delete) && $delete && isset($delete_host) && isset($delete_user)) {

   # Delete Grants First!
   mysqli_query($link, "DELETE FROM mysql.columns_priv WHERE host = '$delete_host' and user = '$delete_user'");
   mysqli_query($link, "DELETE FROM mysql.db WHERE host = '$delete_host' and user = '$delete_user'");
   mysqli_query($link, "DELETE FROM mysql.tables_priv WHERE host = '$delete_host' and user = '$delete_user'");

   $result = mysqli_query($link, "DELETE FROM mysql.user WHERE host = '$delete_host' and user = '$delete_user'");
   if ($result != 0) {
      echo "<b>$strDeleteUserMessage <font color=#002E80>$delete_user@$delete_host</font><br>$strRememberReload</b>";
   } else {
      echo "<b>$strDeleteFailed</b>";
   }
}

if (isset($edit) && $edit) { # Edit an user
  table_users($host, $user);
  edit_operations($host, $user);

} elseif (isset($grants) && $grants) { # Revoke/Grant Privileges
  table_grants($host, $user);
  grant_operations();

} elseif (isset($check) && $check) { # Check Database Privileges
  check_db($db);
  check_operations();

} else {            # Users actions
  if (!isset($host)) $host = FALSE;
  if (!isset($user)) $user = FALSE;
  table_users($host, $user) || mysql_die($strNoUsersFound);
  normal_operations();
}

require('./footer.inc.php');

?>
