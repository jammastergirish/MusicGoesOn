<?php
/* $Id: thai.inc.php,v 1.57 2001/08/30 18:20:56 swix Exp $ */

$charset = 'tis-620';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');


$strAccessDenied = '���͹حҵ�����ҹ';
$strAction = '��зӡ��';
$strAddDeleteColumn = 'Add/Delete Field Columns'; //to translate (tbl_qbe.php)
$strAddDeleteRow = 'Add/Delete Criteria Row'; //to translate (tbl_qbe.php)
$strAddNewField = '���� field ����';
$strAddPriv = 'Add a new Privilege'; //to translate
$strAddPrivMessage = 'You have added a new privilege.'; //to translate
$strAddSearchConditions = '�������͹䢤��� (���ǹ�ͧ where):';
$strAddUser = 'Add a new User'; //to translate
$strAddUserMessage = 'You have added a new user.'; //to translate
$strAfter = '��ѧ';
$strAll = 'All'; //to translate
$strAlterOrderBy = 'Alter table order by'; //to translate
$strAnalyzeTable = 'Analyze table'; //to translate
$strAnd = 'And'; //to translate (tbl_qbe.php)
$strAnIndex = '������ index �������Ѻ ';
$strAny = 'Any'; //to translate
$strAnyColumn = 'Any Column'; //to translate
$strAnyDatabase = 'Any database'; //to translate
$strAnyHost = 'Any host'; //to translate
$strAnyTable = 'Any table'; //to translate
$strAnyUser = 'Any user'; //to translate
$strAPrimaryKey = '������ primary key �������Ѻ ';
$strAscending = 'Ascending'; //to translate (tbl_qbe.php)
$strAtBeginningOfTable = '���ش������鹢ͧ���ҧ';
$strAtEndOfTable = '���ش�ش���¢ͧ���ҧ';
$strAttr = 'Attributes'; //to translate

$strBack = '��͹��Ѻ';
$strBookmarkLabel = 'Label'; //to translate
$strBookmarkQuery = 'Bookmarked SQL-query'; //to translate
$strBookmarkThis = 'Bookmark this SQL-query'; //to translate
$strBookmarkView = 'View only'; //to translate
$strBrowse = '�Դ��';

$strCantLoadMySQL = 'cannot load MySQL extension,<br />please check PHP Configuration.'; //to translate
$strCarriage = 'Carriage return: \\r'; //to translate
$strChange = '����¹';
$strCheckAll = 'Check All'; //to translate
$strCheckDbPriv = 'Check Database Privileges'; //to translate
$strCheckTable = 'Check table'; //to translate
$strColumn = 'Column'; //to translate
$strColumnEmpty = 'The columns names are empty!'; //to translate
$strColumnNames = '���ͤ������';
$strCompleteInserts = 'Complete inserts';
$strConfirm = 'Do you really want to do it?'; //to translate
$strCopyTable = '����ҵ��ҧ��';
$strCopyTableOK = '���ҧ %s ���ҡ���������� %s ���º��������.';
$strCreate = '���ҧ';
$strCreateNewDatabase = '���ҧ�ҹ����������';
$strCreateNewTable = '���ҧ���ҧ㹰ҹ�����Ź�� ';
$strCriteria = 'Criteria'; //to translate (tbl_qbe.php)

$strData = 'Data'; //to translate
$strDatabase = '�ҹ������ ';
$strDatabases = '�ҹ������';
$strDataOnly = 'Data only'; //to translate
$strDbEmpty = 'The database name is empty!'; //to translate
$strDefault = 'Default'; //to translate
$strDelete = 'ź';
$strDeleted = 'ź���͡���º��������';
$strDeleteFailed = 'Deleted Failed!'; //to translate
$strDeletePassword = 'Delete Password'; //to translate
$strDeleteUserMessage = 'You have deleted the user'; //to translate
$strDelPassMessage = 'You have deleted the password for'; //to translate
$strDescending = 'Desending'; //to translate (tbl_qbe.php)
$strDisableMagicQuotes = '<b>Warning:</b> You have enabled magic_quotes_gpc in your PHP configuration. This version of PhpMyAdmin cannot work properly with it. Please have a look at the configuration section of the PHP manual for information on how to disable it.'; //to translate
$strDisplay = '�ʴ���';
$strDoAQuery = 'Do a "query by example" (wildcard: "%")'; //to translate
$strDocu = '�͡���/��������ҧ�ԧ';
$strDoYouReally = '��ͧ��÷��� ';
$strDrop = 'Drop'; //to translate
$strDropDB = 'Drop �ҹ������ ';
$strDumpingData = 'Dump ���ҧ';
$strDynamic = 'dynamic'; //to translate

$strEdit = '���';
$strEditPrivileges = 'Edit Privileges'; //to translate
$strEffective = 'Effective'; //to translate
$strEmpty = 'ź������';
$strEmptyResultSet = 'MySQL �׹����ҧ���ҡ�Ѻ�� (0 ��).';
$strEnableMagicQuotes = '<b>Warning:</b> You haven\'t enabled magic_quotes_gpc in your PHP configuration. PhpMyAdmin needs this to work properly. Please have a look at the configuration section of the PHP manual for information on how to enable it.'; //to translate
$strEnclosedBy = '��������';
$strEnd = '�����ش';
$strError = '�Դ��Ҵ';
$strEscapedBy = 'escape ����';
$strExtra = 'Extra'; //to translate

$strField = 'Field'; //to translate
$strFields = '�ӹǹ Fields';
$strFixed = 'fixed'; //to translate
$strFormat = 'Format'; //to translate
$strFunction = 'Function'; //to translate

$strGenTime = 'Generation Time'; //to translate
$strGo = 'ŧ���';
$strGrants = 'Grants'; //to translate

$strHasBeenAltered = '������¹�ŧ����';
$strHasBeenCreated = '��١���ҧ����';
$strHasBeenDropped = '��ӡ�� drop ����';
$strHasBeenEmptied = '��������ҧ����';
$strHome = 'Home'; //to translate
$strHomepageOfficial = 'Official phpMyAdmin Homepage'; //to translate
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Page'; //to translate
$strHost = 'Host'; //to translate
$strHostEmpty = 'The host name is empty!'; //to translate

$strIfYouWish = 'If you wish to load only some of a table\'s columns, specify a comma separated field list.'; //to translate
$strIndex = 'Index'; //to translate
$strIndexes = 'Indexes'; //to translate
$strInsert = '�á';
$strInsertAsNewRow = 'Insert as new row'; //to translate
$strInsertIntoTable = '�á����㹵��ҧ';
$strInsertNewRow = '�á������';
$strInsertTextfiles = '�á�����Ũҡ text file ����㹵��ҧ';
$strInUse = 'in use'; //to translate

$strKeyname = '���� key';
$strKill = 'Kill'; //to translate

$strLength = 'Length'; //to translate
$strLengthSet = '�������/૵*';
$strLimitNumRows = '����¹ ���˹��';
$strLineFeed = 'Linefeed: \\n'; //to translate
$strLines = '��÷Ѵ';
$strLocationTextfile = '���˹觢ͧ text file';
$strLogin = ''; //to translate, but its not in use ...
$strLogout = 'Log out'; //to translate

$strModifications = '�ѹ�֡���������º��������';
$strModify = 'Modify'; //to translate (tbl_qbe.php)
$strMySQLReloaded = 'MySQL reloaded.'; //to translate
$strMySQLSaid = 'MySQL said: '; //to translate
$strMySQLShowProcess = '�ʴ� process ��ҧ �';
$strMySQLShowStatus = '�ʴ������� runtime �ͧ MySQL';
$strMySQLShowVars = '�ʴ�������к��ͧ MySQL';

$strName = '����';
$strNext = '����';
$strNo = 'No'; //to translate
$strNoPassword = 'No Password'; //to translate
$strNoPrivileges = 'No Privileges'; //to translate
$strNoRights = 'You don\'t have enough rights to be here right now!'; //to translate
$strNoTablesFound = '��辺���ҧ� � 㹰ҹ������';
$strNoUsersFound = 'No user(s) found.'; //to translate
$strNull = 'Null'; //to translate
$strNumberIndexes = ' Number of advanced indexes '; //to translate

$strOftenQuotation = 'Often quotation marks. OPTIONALLY means that only char and varchar fields are enclosed by the "enclosed by"-character.'; //to translate
$strOptimizeTable = 'Optimize table'; //to translate
$strOptionalControls = 'Optional. Controls how to write or read special characters.'; //to translate
$strOptionally = 'OPTIONALLY'; //to translate
$strOr = '����';
$strOverhead = 'Overhead'; //to translate

$strPassword = 'Password'; //to translate
$strPasswordEmpty = 'The password is empty!'; //to translate
$strPasswordNotSame = 'The passwords aren\'t the same!'; //to translate
$strPHPVersion = 'PHP Version'; //to translate
$strPos1 = '�ش�������';
$strPrevious = '��͹˹��';
$strPrimary = 'Primary'; //to translate
$strPrimaryKey = 'Primary key'; //to translate
$strPrinterFriendly = 'Printer friendly version of above table'; //to translate
$strPrintView = 'Print view'; //to translate
$strPrivileges = 'Privileges'; //to translate
$strProducedAnError = 'produced an error.'; //to translate
$strProperties = '�س���ѵ�';

$strQBE = 'Query by Example'; //to translate
$strQBEDel = 'Del';  //to translate (used in tbl_qbe.php)
$strQBEIns = 'Ins';  //to translate (used in tbl_qbe.php)

$strReadTheDocs = '��ҹ������';
$strRecords = '����¹';
$strReloadFailed = 'MySQL reload failed.'; //to translate
$strReloadMySQL = 'Reload MySQL'; //to translate
$strRememberReload = 'Remember reload the server.'; //to translate
$strRenameTable = '����¹���͵��ҧ��';
$strRenameTableOK = '���ҧ %s ��١����¹������ %s';
$strRepairTable = 'Repair table'; //to translate
$strReplace = '᷹���';
$strReplaceTable = '᷹�������Ŵ������';
$strReset = 'Reset'; //to translate
$strReType = 'Re-type'; //to translate
$strRevoke = 'Revoke'; //to translate
$strRevokeGrant = 'Revoke Grant'; //to translate
$strRevokeGrantMessage = 'You have revoked the Grant privilege for'; //to translate
$strRevokeMessage = 'You have revoked the privileges for'; //to translate
$strRevokePriv = 'Revoke Privileges'; //to translate
$strRowLength = 'Row length'; //to translate
$strRows = 'Rows'; //to translate
$strRowsFrom = '�� ������ҡ�Ƿ��';
$strRowsStatistic = 'Row Statistic'; //to translate
$strRunning = 'running on '; //to translate
$strRunQuery = 'Submit Query'; //to translate (tbl_qbe.php)
$strRunSQLQuery = '�ӧҹ������ SQL query/queries �Ѻ�ҹ�����Ź�� ';

$strSave = '�纺ѹ�֡';
$strSelect = '���͡';
$strSelectFields = '���͡ field (���ҧ����˹��):';
$strSelectNumRows = 'in query'; //to translate
$strSend = 'Send'; //to translate
$strSequence = 'Seq.'; //to translate
$strServerVersion = 'Server version'; //to translate
$strShow = '�ʴ�';
$strShowingRecords = '�ʴ�����¹��� ';
$strSingly = '(singly)'; //to translate
$strSize = 'Size'; //to translate
$strSort = 'Sort'; //to translate (tbl_qbe.php)
$strSpaceUsage = 'Space usage'; //to translate
$strSQLQuery = 'SQL-query'; //to translate
$strStatement = 'Statements'; //to translate
$strStrucCSV = '������ CSV';
$strStrucData = '����ç���ҧ��Т�����';
$strStrucDrop = '���� \'drop table\'';
$strStrucOnly = '੾���ç���ҧ';
$strSubmit = 'Submit'; //to translate
$strSuccess = '�ӧҹ SQL-query �������º��������';
$strSum = 'Sum'; //to translate

$strTable = '���ҧ ';
$strTableComments = '�����˵آͧ���ҧ���';
$strTableEmpty = 'The table name is empty!'; //to translate
$strTableMaintenance = 'Table maintenance'; //to translate
$strTableStructure = '�ç���ҧ���ҧ ����Ѻ���ҧ';
$strTableType = 'Table type'; //to translate
$strTerminatedBy = '����ش��������ͧ����';
$strTextAreaLength = ' Because of its length,<br /> this field might not be editable '; //to translate
$strTheContent = '�á�����Ũҡ���ͧ�س����';
$strTheContents = 'The contents of the file replaces the contents of the selected table for rows with identical primary or unique key.'; //to translate
$strTheTerminator = '�ش����ش�ͧ field.';
$strTotal = '������';
$strType = 'Type'; //to translate

$strUncheckAll = 'Uncheck All'; //to translate
$strUnique = 'Unique'; //to translate
$strUpdatePassMessage = 'You have updated the password for'; //to translate
$strUpdatePassword = 'Update Password'; //to translate
$strUpdatePrivMessage = 'You have updated the privileges for'; //to translate
$strUpdateQuery = 'Update Query'; //to translate (tbl_qbe.php)
$strUsage = 'Usage'; //to translate
$strUser = 'User'; //to translate
$strUserEmpty = 'The user name is empty!'; //to translate
$strUserName = 'User name'; //to translate
$strUsers = 'Users'; //to translate
$strUseTables = 'Use Tables'; //to translate (tbl_qbe.php)

$strValue = 'Value'; //to translate
$strViewDump = '���ç���ҧ�ͧ���ҧ';
$strViewDumpDB = '���ç���ҧ�ͧ�ҹ������';

$strWelcome = '�Թ�յ�͹�Ѻ��� ';
$strWrongUser = 'Wrong username/password. Access denied.'; //to translate

$strYes = 'Yes'; //to translate

// automatic generated by langxlorer.php (June 27, 2001, 6:53 pm)
// V0.11 - experimental (Steve Alberty - alberty@neptunlabs.de)
$strBinary = ' Binary ';  //to translate
$strBinaryDoNotEdit = ' Binary - do not edit ';  //to translate
$strEnglishPrivileges = ' Note: MySQL privilege names are expressed in English ';  //to translate
$strNotNumber = 'This is not a number!';  //to translate
$strNotValidNumber = ' is not a valid row number!';  //to translate

// export Zip (July 07, 2001, 19:48am)
$strBzip = '"bzipped"';
$strGzip = '"gzipped"';  //to translate

// To translate
$strAffectedRows = 'Affected rows:';
$strDatabasesStats = 'Databases statistics';//to translate
$strDeletedRows = 'Deleted rows:';
$strDisplayOrder = 'Display order:';
$strDropTable = 'Drop table';
$strExtendedInserts = 'Extended inserts';
$strFieldsEmpty = ' The field count is empty! ';  //to translate
$strFormEmpty = 'Missing value in the form !';
$strInsertedRows = 'Inserted rows:';
$strInstructions = 'Instructions';//to translate
$strNbRecords = 'no. of records';
$strNoDatabases = 'No databases';
$strNoDropDatabases = '"DROP DATABASE" statements are disabled.';
$strNoModification = 'No change'; // To translate
$strOffSet = 'offset';
$strQueryOnDb = 'SQL-query on database ';
$strRowSize = ' Row size ';  //to translate
$strSetEnumVal = 'If field type is "enum" or "set", please enter the values using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';
$strShowPHPInfo = 'Show PHP information';  // To translate
$strShowThisQuery = ' Show this query here again ';  //to translate
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strTables = '%s table(s)';  //to translate
$strUseBackquotes = 'Use backquotes with tables and fields\' names';
$strServerChoice = 'Server Choice';//to translate 
$strPmaDocumentation = 'phpMyAdmin Documentation';//to translate 
$strFullText = 'Full Texts';//to translate
$strPartialText = 'Partial Texts';//to translate
?>
