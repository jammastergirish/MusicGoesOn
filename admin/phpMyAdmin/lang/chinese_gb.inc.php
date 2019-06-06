<?php
/* $Id: chinese_gb.inc.php,v 1.57 2001/08/30 18:20:56 swix Exp $ */

$charset = 'gb2312';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');


$strAccessDenied = '���ʱ��ܾ�';
$strAction = 'ִ�в���';
$strAddDeleteColumn = 'Add/Delete Field Columns'; //to translate (tbl_qbe.php)
$strAddDeleteRow = 'Add/Delete Criteria Row'; //to translate (tbl_qbe.php)
$strAddNewField = '�������ֶ�';
$strAddPriv = 'Add a new Privilege'; //to translate
$strAddPrivMessage = 'You have added a new privilege.'; //to translate
$strAddSearchConditions = '���Ӽ������� ("where" ��������)��';
$strAddUser = 'Add a new User'; //to translate
$strAddUserMessage = 'You have added a new user.'; //to translate
$strAfter = 'After'; //to translate
$strAll = 'All'; //to translate
$strAlterOrderBy = 'Alter table order by'; //to translate
$strAnalyzeTable = 'Analyze table'; //to translate
$strAnd = 'And'; //to translate (tbl_qbe.php)
$strAnIndex = '�Ѿ�������һ�������� ';
$strAny = 'Any'; //to translate
$strAnyColumn = 'Any Column'; //to translate
$strAnyDatabase = 'Any database'; //to translate
$strAnyHost = 'Any host'; //to translate
$strAnyTable = 'Any table'; //to translate
$strAnyUser = 'Any user'; //to translate
$strAPrimaryKey = '�Ѿ�������һ�������� ';
$strAscending = 'Ascending'; //to translate (tbl_qbe.php)
$strAtBeginningOfTable = 'At Beginning of Table'; //to translate
$strAtEndOfTable = 'At End of Table'; //to translate
$strAttr = '����';

$strBack = '����';
$strBookmarkLabel = 'Label'; //to translate
$strBookmarkQuery = 'Bookmarked SQL-query'; //to translate
$strBookmarkThis = 'Bookmark this SQL-query'; //to translate
$strBookmarkView = 'View only'; //to translate
$strBrowse = '���';

$strCantLoadMySQL = 'cannot load MySQL extension,<br />please check PHP Configuration.'; //to translate
$strCarriage = '�س�: \\r';
$strChange = '�ı�';
$strCheckAll = 'Check All'; //to translate
$strCheckDbPriv = 'Check Database Privileges'; //to translate
$strCheckTable = 'Check table'; //to translate
$strColumn = 'Column'; //to translate
$strColumnEmpty = 'The columns names are empty!'; //to translate
$strColumnNames = '�ֶ���';
$strCompleteInserts = 'Complete inserts'; //to translate
$strConfirm = 'Do you really want to do it?'; //to translate
$strCopyTable = '�������ݱ�Ϊ';
$strCopyTableOK = '���ݱ� %s �Ѿ��ɹ�����Ϊ %s��';
$strCreate = '����';
$strCreateNewDatabase = '����һ���µ����ݿ�';
$strCreateNewTable = '����һ���µ����ݱ������ݿ� ';
$strCriteria = 'Criteria'; //to translate (tbl_qbe.php)

$strData = 'Data'; //to translate
$strDatabase = '���ݿ� ';
$strDatabases = '���ݿ�';
$strDataOnly = 'Data only'; //to translate
$strDbEmpty = 'The database name is empty!'; //to translate
$strDefault = 'ȱʡֵ';
$strDelete = 'ɾ��';
$strDeleted = '�ü�¼�Ѿ���ɾ����';
$strDeleteFailed = 'Deleted Failed!'; //to translate
$strDeletePassword = 'Delete Password'; //to translate
$strDeleteUserMessage = 'You have deleted the user'; //to translate
$strDelPassMessage = 'You have deleted the password for'; //to translate
$strDescending = 'Desending'; //to translate (tbl_qbe.php)
$strDisableMagicQuotes = '<b>Warning:</b> You have enabled magic_quotes_gpc in your PHP configuration. This version of PhpMyAdmin cannot work properly with it. Please have a look at the configuration section of the PHP manual for information on how to disable it.'; //to translate
$strDisplay = 'Display'; //to translate
$strDoAQuery = '��ִ�� "��ѯʾ��" (ͨ���: "%")';
$strDocu = '�ĵ�';
$strDoYouReally = '��ȷ��Ҫ ';
$strDrop = '����';
$strDropDB = '�������ݿ� ';
$strDumpingData = '������������ݿ�����';
$strDynamic = 'dynamic'; //to translate

$strEdit = '�༭';
$strEditPrivileges = 'Edit Privileges'; //to translate
$strEffective = 'Effective'; //to translate
$strEmpty = '���';
$strEmptyResultSet = 'MySQL ���صĲ�ѯ���Ϊ�ա� (ԭ�����Ϊ��û���ҵ����������ļ�¼��)';
$strEnableMagicQuotes = '<b>Warning:</b> You haven\'t enabled magic_quotes_gpc in your PHP configuration. PhpMyAdmin needs this to work properly. Please have a look at the configuration section of the PHP manual for information on how to enable it.'; //to translate
$strEnclosedBy = '�ɺ��ַ�������';
$strEnd = '����';
$strError = '����';
$strEscapedBy = 'ת���';
$strExtra = '����';

$strField = '�ֶ�';
$strFields = '�ֶ�';
$strFixed = 'fixed'; //to translate
$strFormat = 'Format'; //to translate
$strFunction = '����';

$strGenTime = 'Generation Time'; //to translate
$strGo = '��ʼ';
$strGrants = 'Grants'; //to translate

$strHasBeenAltered = '�Ѿ����޸ġ�';
$strHasBeenCreated = '�Ѿ�������';
$strHasBeenDropped = '�Ѿ���������';
$strHasBeenEmptied = '�Ѿ�����ա�';
$strHome = '��Ŀ¼';
$strHomepageOfficial = 'Official phpMyAdmin Homepage'; //to translate
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Page'; //to translate
$strHost = '����';
$strHostEmpty = 'The host name is empty!'; //to translate

$strIfYouWish = '�����Ҫָ��������ֶΣ���ô������ö��Ÿ������ֶ��б���';
$strIndex = '����';
$strIndexes = 'Indexes'; //to translate
$strInsert = '����';
$strInsertAsNewRow = 'Insert as new row'; //to translate
$strInsertIntoTable = '���������ݱ�';
$strInsertNewRow = '�����¼�¼';
$strInsertTextfiles = '���ı��ļ�����ȡ���ݣ����뵽���ݱ���';
$strInUse = 'in use'; //to translate

$strKeyname = '����';
$strKill = 'Kill'; //to translate

$strLength = 'Length'; //to translate
$strLengthSet = '����/Set*';
$strLimitNumRows = 'records per page'; //to translate
$strLineFeed = '���У�\\n';
$strLines = '���� ';
$strLocationTextfile = '�ı��ļ���λ��';
$strLogin = ''; //to translate, but its not in use ...
$strLogout = '�˳�ϵͳ';

$strModifications = '�޸ĺ�������Ѿ����̡�';
$strModify = 'Modify'; //to translate (tbl_qbe.php)
$strMySQLReloaded = 'MySQL ����������ɡ�';
$strMySQLSaid = 'MySQL ���أ�';
$strMySQLShowProcess = '��ʾ����';
$strMySQLShowStatus = '��ʾ MySQL ��������Ϣ';
$strMySQLShowVars = '��ʾ MySQL ��ϵͳ����';

$strName = '����';
$strNext = '��һ��';
$strNo = '��';
$strNoPassword = 'No Password'; //to translate
$strNoPrivileges = 'No Privileges'; //to translate
$strNoRights = 'You don\'t have enough rights to be here right now!'; //to translate
$strNoTablesFound = '���ݿ���û�����ݱ���';
$strNoUsersFound = 'No user(s) found.'; //to translate
$strNull = 'Null';
$strNumberIndexes = ' Number of advanced indexes '; //to translate

$strOftenQuotation = 'ͨ��Ϊ���š� ��ѡ�С� ��ʾʹ�����š���Ϊֻ�� char �� varchar ���͵�������Ҫ��������������';
$strOptimizeTable = 'Optimize table'; //to translate
$strOptionalControls = '��ѡ�����ڶ�ȡ��д��������ַ���';
$strOptionally = 'ѡ��';
$strOr = 'Or'; //to translate
$strOverhead = 'Overhead'; //to translate

$strPassword = 'Password'; //to translate
$strPasswordEmpty = 'The password is empty!'; //to translate
$strPasswordNotSame = 'The passwords aren\'t the same!'; //to translate
$strPHPVersion = 'PHP Version'; //to translate
$strPos1 = '��ʼ';
$strPrevious = 'ǰһ��';
$strPrimary = '����';
$strPrimaryKey = '����';
$strPrinterFriendly = 'Printer friendly version of above table'; //to translate
$strPrintView = 'Print view'; //to translate
$strPrivileges = 'Privileges'; //to translate
$strProducedAnError = '����һ������';
$strProperties = '����';

$strQBE = '��ѯģ��';
$strQBEDel = 'Del';  //to translate (used in tbl_qbe.php)
$strQBEIns = 'Ins';  //to translate (used in tbl_qbe.php)

$strReadTheDocs = '���������ĵ� ';
$strRecords = '��¼';
$strReloadFailed = 'MySQL ����ʧ�ܡ�';
$strReloadMySQL = '���� MySQL';
$strRememberReload = 'Remember reload the server.'; //to translate
$strRenameTable = '�����ݱ�����Ϊ';
$strRenameTableOK = '���ݱ� %s �����Ѿ����ó� %s��';
$strRepairTable = 'Repair table'; //to translate
$strReplace = '�滻';
$strReplaceTable = '�����ݱ��������������ı��ļ��滻��';
$strReset = '����';
$strReType = 'Re-type'; //to translate
$strRevoke = 'Revoke'; //to translate
$strRevokeGrant = 'Revoke Grant'; //to translate
$strRevokeGrantMessage = 'You have revoked the Grant privilege for'; //to translate
$strRevokeMessage = 'You have revoked the privileges for'; //to translate
$strRevokePriv = 'Revoke Privileges'; //to translate
$strRowLength = 'Row length'; //to translate
$strRows = 'Rows'; //to translate
$strRowsFrom = 'rows starting from'; //to translate
$strRowsStatistic = 'Row Statistic'; //to translate
$strRunning = '������ ';
$strRunQuery = 'Submit Query'; //to translate (tbl_qbe.php)
$strRunSQLQuery = '������ָ�������ݿ������� SQL ��䣺 ';

$strSave = '�洢';
$strSelect = 'ѡ��';
$strSelectFields = '����ѡ��һ���ֶΣ�';
$strSelectNumRows = 'in query'; //to translate
$strSend = '����';
$strSequence = 'Seq.'; //to translate
$strServerVersion = 'Server version'; //to translate
$strShow = 'Show'; //to translate
$strShowingRecords = '��ʾ��¼ ';
$strSingly = '(singly)'; //to translate
$strSize = 'Size'; //to translate
$strSort = 'Sort'; //to translate (tbl_qbe.php)
$strSpaceUsage = 'Space usage'; //to translate
$strSQLQuery = 'SQL ���';
$strStatement = 'Statements'; //to translate
$strStrucCSV = 'CSV ����';
$strStrucData = '�ṹ������';
$strStrucDrop = '���� \'drop table\'';
$strStrucOnly = 'ֻѡ��ṹ';
$strSubmit = '����';
$strSuccess = '�����е� SQL ����Ѿ��ɹ������ˡ�';
$strSum = 'Sum'; //to translate

$strTable = '���ݱ� ';
$strTableComments = 'Table comments'; //to translate
$strTableEmpty = 'The table name is empty!'; //to translate
$strTableMaintenance = 'Table maintenance'; //to translate
$strTableStructure = '���ݱ��Ľṹ';
$strTableType = 'Table type'; //to translate
$strTerminatedBy = '����������';
$strTextAreaLength = ' Because of its length,<br /> this field might not be editable '; //to translate
$strTheContent = '�ļ��е������Ѿ����뵽���ݱ��С�';
$strTheContents = '�ļ��е����ݽ���ȡ�� ��ѡ�������ݱ��о��� ��ͬ��������Ψһ���� ��¼��';
$strTheTerminator = '��Щ�ֶεĽ�����';
$strTotal = '�ܼ�';
$strType = '����';

$strUncheckAll = 'Uncheck All'; //to translate
$strUnique = 'Ψһ';
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

$strValue = 'ֵ';
$strViewDump = '�鿴���ݱ��Ľṹ��ժҪ��Ϣ��';
$strViewDumpDB = '�鿴���ݿ�Ľṹ��ժҪ��Ϣ��';

$strWelcome = '��ӭʹ�� ';
$strWrongUser = '������󣬷��ʱ��ܾ���';

$strYes = '��';

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
$strDisplayOrder = 'Display order';
$strDropTable = 'Drop table';
$strExtendedInserts = 'Extended inserts';
$strFieldsEmpty = ' The field count is empty! ';  //to translate
$strFormEmpty = 'Missing value in the form !';
$strInsertedRows = 'Inserted rows:';
$strInstructions = 'Instructions';//to translate
$strNbRecords = 'no. of records';
$strNoDatabases = 'No databases';
$strNoDropDatabases = '"DROP DATABASE" statements are disabled.';
$strNoModification = 'No change';
$strOffSet = 'offset';
$strQueryOnDb = 'SQL-query on database ';
$strRowSize = ' Row size ';  //to translate
$strSetEnumVal = 'If field type is "enum" or "set", please enter the values using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';
$strShowPHPInfo = 'Show PHP information';  // To translate
$strShowThisQuery = ' Show this query here again ';
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strTables = '%s table(s)';  //to translate
$strUseBackquotes = 'Use backquotes with tables and fields\' names';
$strServerChoice = 'Server Choice';//to translate 
$strPmaDocumentation = 'phpMyAdmin Documentation';//to translate 
$strFullText = 'Full Texts';//to translate
$strPartialText = 'Partial Texts';//to translate
?>
