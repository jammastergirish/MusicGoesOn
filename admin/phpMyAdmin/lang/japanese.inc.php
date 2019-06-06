<?php
/* $Id: japanese.inc.php,v 1.42 2001/08/30 18:20:56 swix Exp $ */

$charset = 'euc-jp';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');


$strAccessDenied = '���������ϵ��ݤ���ޤ�����';
$strAction = '�¹�';
$strAddDeleteColumn = 'Add/Delete Field Columns'; //to translate (tbl_qbe.php)
$strAddDeleteRow = 'Add/Delete Criteria Row'; //to translate (tbl_qbe.php)
$strAddNewField = '�ե�����ɤ��ɲ�';
$strAddPriv = 'Add a new Privilege'; //to translate
$strAddPrivMessage = 'You have added a new privilege.'; //to translate
$strAddSearchConditions = '�������ʸ���ɲä��Ƥ���������("where"����ʸ):';
$strAddUser = 'Add a new User'; //to translate
$strAddUserMessage = 'You have added a new user.'; //to translate
$strAfter = '���-->';
$strAll = 'All'; //to translate
$strAlterOrderBy = 'Alter table order by'; //to translate
$strAnalyzeTable = '�ơ��֥��ʬ�Ϥ��ޤ���';
$strAnd = 'And'; //to translate (tbl_qbe.php)
$strAnIndex = '����ǥå������ɲä��ޤ�����';
$strAny = 'Any'; //to translate
$strAnyColumn = 'Any Column'; //to translate
$strAnyDatabase = 'Any database'; //to translate
$strAnyHost = 'Any host'; //to translate
$strAnyTable = 'Any table'; //to translate
$strAnyUser = 'Any user'; //to translate
$strAPrimaryKey = 'Primary�������ɲä��ޤ����� --> ';
$strAscending = 'Ascending'; //to translate (tbl_qbe.php)
$strAtBeginningOfTable = '�ơ��֥�κǽ�';
$strAtEndOfTable = '�ơ��֥�κǸ�';
$strAttr = 'ɽ��';

$strBack = '���';
$strBookmarkLabel = 'Label'; //to translate
$strBookmarkQuery = 'Bookmarked SQL-query'; //to translate
$strBookmarkThis = 'Bookmark this SQL-query'; //to translate
$strBookmarkView = 'View only'; //to translate
$strBrowse = 'ɽ��';

$strCantLoadMySQL = 'cannot load MySQL extension,<br />please check PHP Configuration.'; //to translate
$strCarriage = '�����å��꥿����: \\r';
$strChange = '�ѹ�';
$strCheckAll = 'Check All'; //to translate
$strCheckDbPriv = 'Check Database Privileges'; //to translate
$strCheckTable = '�ơ��֥������å����ޤ���';
$strColumn = 'Column'; //to translate
$strColumnEmpty = 'The columns names are empty!'; //to translate
$strColumnNames = '��(�����)̾';
$strCompleteInserts = '������INSERTʸ�κ���';
$strConfirm = 'Do you really want to do it?'; //to translate
$strCopyTable = '�ơ��֥�򼡤إ��ԡ����ޤ���-->';
$strCopyTableOK = '%s�ơ��֥��%s�˥��ԡ����ޤ�����';
$strCreate = '����';
$strCreateNewDatabase = '������DB��������ޤ���';
$strCreateNewTable = '���ߤ�DB�˿������ơ��֥��������ޤ��� --> ';
$strCriteria = 'Criteria'; //to translate (tbl_qbe.php)

$strData = 'Data'; //to translate
$strDatabase = '�ǡ����١���';
$strDatabases = '�ǡ����١���';
$strDataOnly = 'Data only'; //to translate
$strDbEmpty = 'The database name is empty!'; //to translate
$strDefault = '������';
$strDelete = '���';
$strDeleted = '���򤷤���������ޤ�����';
$strDeleteFailed = 'Deleted Failed!'; //to translate
$strDeletePassword = 'Delete Password'; //to translate
$strDeleteUserMessage = 'You have deleted the user'; //to translate
$strDelPassMessage = 'You have deleted the password for'; //to translate
$strDescending = 'Desending'; //to translate (tbl_qbe.php)
$strDisableMagicQuotes = '<b>Warning:</b> PHP \'magic_quotes_gpc\'��Enable�����ꤵ��Ƥ��ޤ��������ΥС�������phpMyAdmin�Ǥ���������ư���ޤ���PHP�ޥ˥奢��򻲾Ȥ���disable�����ꤷ�Ƥ���������';
$strDisplay = 'ɽ��';
$strDoAQuery = '"���QUERY"��¹� (wildcard: "%")';
$strDocu = '�إ��';
$strDoYouReally = '�����˼���¹Ԥ��ޤ��� --> ';
$strDrop = '���';
$strDropDB = 'DB�κ�� -->';
$strDumpingData = '�ơ��֥�Υ���ץǡ���';
$strDynamic = 'dynamic'; //to translate

$strEdit = '����';
$strEditPrivileges = 'Edit Privileges'; //to translate
$strEffective = 'Effective'; //to translate
$strEmpty = '���ˤ���';
$strEmptyResultSet = 'MySQL�������ͤ�꥿���󤷤ޤ�����(i.e. zero rows).';
$strEnableMagicQuotes = '<b>Warning:</b> PHP \'magic_quotes_gpc\'��Enable�����ꤵ��Ƥ��ޤ���phpMyAdmin��Enable�ξ��֤���������ư���ޤ���PHP�ޥ˥奢��򻲾Ȥ�Enable�����ꤷ�Ƥ���������';
$strEnclosedBy = '�Ϥ�ʸ��';
$strEnd = '�Ǹ�';
$strError = '���顼';
$strEscapedBy = '����������ʸ��';
$strExtra = '�ɲ�';

$strField = '�ե������';
$strFields = '�ե������';
$strFixed = 'fixed'; //to translate
$strFormat = 'Format'; //to translate
$strFunction = '�ؿ�';

$strGenTime = 'Generation Time'; //to translate
$strGo = '�¹�';
$strGrants = 'Grants'; //to translate

$strHasBeenAltered = '���ѹ����ޤ�����';
$strHasBeenCreated = '��������ޤ�����';
$strHasBeenDropped = '�������ޤ�����';
$strHasBeenEmptied = '����ˤ��ޤ�����';
$strHome = 'MainPage';
$strHomepageOfficial = 'phpMyAdmin�ۡ���';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Page';
$strHost = '�ۥ���';
$strHostEmpty = 'The host name is empty!'; //to translate

$strIfYouWish = '�ơ��֥�Υ����(��)�˥ǡ������ɲä�����ϡ��ե�����ɥꥹ�Ȥ򥫥�ޤǶ�ʬ���Ƥ���������';
$strIndex = '����ǥå���';
$strIndexes = 'Indexes'; //to translate
$strInsert = '�ɲ�';
$strInsertAsNewRow = 'Insert as new row'; //to translate
$strInsertIntoTable = '�ơ��֥���ɲ�';
$strInsertNewRow = '����������ɲ�';
$strInsertTextfiles = '�ơ��֥�˥ƥ����ȥե�������ɲ�';
$strInUse = 'in use'; //to translate

$strKeyname = 'Key̾';
$strKill = 'Kill'; //to translate

$strLength = 'Length'; //to translate
$strLengthSet = 'Ĺ��/���å�*';
$strLimitNumRows = '�ڡ����Υ쥳���ɿ�';
$strLineFeed = '����ʸ��: \\n';
$strLines = '��';
$strLocationTextfile = 'SQL�Υ���ץǡ�������¸����Ƥ���ƥ����ȥե�����';
$strLogin = ''; //to translate, but its not in use ...
$strLogout = '����������';

$strModifications = '���������������ޤ�����';
$strModify = 'Modify'; //to translate (tbl_qbe.php)
$strMySQLReloaded = 'MySQL�򿷤����ɤ߹��ߤޤ�����';
$strMySQLSaid = 'MySQL�Υ�å����� --> ';
$strMySQLShowProcess = 'MySQL�ץ�������ɽ��';
$strMySQLShowStatus = 'MySQL�Υ�󥿥������';
$strMySQLShowVars = 'MySQL�Υ����ƥ��ѿ�';

$strName = '̾��';
$strNext = '����';
$strNo = '������';
$strNoPassword = 'No Password'; //to translate
$strNoPrivileges = 'No Privileges'; //to translate
$strNoRights = 'You don\'t have enough rights to be here right now!'; //to translate
$strNoTablesFound = '���ߤ�DB�˥ơ��֥�Ϥ���ޤ���';
$strNoUsersFound = 'No user(s) found.'; //to translate
$strNull = '������(Null)';
$strNumberIndexes = ' Number of advanced indexes '; //to translate

$strOftenQuotation = '�������Ǥ������ץ����ϡ�char�ޤ���varchar�ե�����ɤΤ�" "�ǰϤޤ�Ƥ��뤳�Ȥ��̣���ޤ���';
$strOptimizeTable = '�ơ��֥���Ŭ�����ޤ���';
$strOptionalControls = '�ü�ʸ�����ɤ߹���/�񤭹��ߥ��ץ����';
$strOptionally = '���ץ����Ǥ���';
$strOr = '�ޤ���';
$strOverhead = 'Overhead'; //to translate

$strPassword = 'Password'; //to translate
$strPasswordEmpty = 'The password is empty!'; //to translate
$strPasswordNotSame = 'The passwords aren\'t the same!'; //to translate
$strPHPVersion = 'PHP Version'; //to translate
$strPos1 = '�ǽ�';
$strPrevious = '����';
$strPrimary = 'Primary';
$strPrimaryKey = 'Primary����';
$strPrinterFriendly = '�嵭�ơ��֥�ΰ�����ɽ��';
$strPrintView = '������ɽ��';
$strPrivileges = 'Privileges'; //to translate
$strProducedAnError = '���顼��ȯ�����ޤ�����';
$strProperties = '�ץ��ѥƥ�';

$strQBE = '�㤫�饯���꡼�¹�';
$strQBEDel = 'Del';  //to translate (used in tbl_qbe.php)
$strQBEIns = 'Ins';  //to translate (used in tbl_qbe.php)

$strReadTheDocs = 'ʸ����ɤ߹���';
$strRecords = '�쥳���ɿ�';
$strReloadFailed = 'MySQL�Υ�����ɤ˼��Ԥ��ޤ�����';
$strReloadMySQL = 'MySQL�Υ������';
$strRememberReload = 'Remember reload the server.'; //to translate
$strRenameTable = '�ơ��֥�̾���ѹ�';
$strRenameTableOK = '%s��%s��̾�����ѹ����ޤ�����';
$strRepairTable = '�ơ��֥�����줷�ޤ���';
$strReplace = '�֤�������';
$strReplaceTable = '�ե�����ǥơ��֥���֤�������';
$strReset = '�ꥻ�å�';
$strReType = 'Re-type'; //to translate
$strRevoke = 'Revoke'; //to translate
$strRevokeGrant = 'Revoke Grant'; //to translate
$strRevokeGrantMessage = 'You have revoked the Grant privilege for'; //to translate
$strRevokeMessage = 'You have revoked the privileges for'; //to translate
$strRevokePriv = 'Revoke Privileges'; //to translate
$strRowLength = 'Row length'; //to translate
$strRows = 'Rows'; //to translate
$strRowsFrom = '���Ϲ�';
$strRowsStatistic = 'Row Statistic'; //to translate
$strRunning = '���¹���Ǥ���';
$strRunQuery = 'Submit Query'; //to translate (tbl_qbe.php)
$strRunSQLQuery = '���ߤ�DB��SQL�����꡼��¹Ԥ��ޤ��� --> ';

$strSave = '��¸';
$strSelect = '����';
$strSelectFields = '�ե�����ɤ�����(��İʾ�):';
$strSelectNumRows = '�����꡼';
$strSend = '����';
$strSequence = 'Seq.'; //to translate
$strServerVersion = 'Server version'; //to translate
$strShow = 'ɽ��';
$strShowingRecords = '�쥳����ɽ��';
$strSingly = '(singly)'; //to translate
$strSize = 'Size'; //to translate
$strSort = 'Sort'; //to translate (tbl_qbe.php)
$strSpaceUsage = 'Space usage'; //to translate
$strSQLQuery = '�¹Ԥ��줿SQL�����꡼';
$strStatement = 'Statements'; //to translate
$strStrucCSV = 'CSV�ǡ���';
$strStrucData = '��¤�ȥǡ���';
$strStrucDrop = '\'drop table\'���ɲ�';
$strStrucOnly = '��¤�Τ�';
$strSubmit = '�¹�';
$strSuccess = 'SQL�����꡼������˼¹Ԥ���ޤ�����';
$strSum = 'Sum'; //to translate

$strTable = '�ơ��֥� ';
$strTableComments = '�ơ��֥������';
$strTableEmpty = 'The table name is empty!'; //to translate
$strTableMaintenance = 'Table maintenance'; //to translate
$strTableStructure = '�ơ��֥�ι�¤';
$strTableType = '�ơ��֥�Υ�����';
$strTerminatedBy = '��λʸ����';
$strTextAreaLength = ' Because of its length,<br /> this field might not be editable '; //to translate
$strTheContent = '�ե�����Υǡ������������ޤ�����';
$strTheContents = '�ե�����Υǡ����ǡ����򤷤��ơ��֥��Primary�ޤ���Unique�����˰��פ�������֤������ޤ���';
$strTheTerminator = '�ե�����ɤν�λʸ���Ǥ���';
$strTotal = '���';
$strType = '�ե�����ɥ�����';

$strUncheckAll = 'Uncheck All'; //to translate
$strUnique = '��ˡ���������';
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

$strValue = '��';
$strViewDump = '�ơ��֥�Υ����(��������)ɽ��';
$strViewDumpDB = 'DB�Υ����(��������)ɽ��';

$strWelcome = 'Welcome to ';
$strWrongUser = '�桼��̾�ޤ��ϥѥ���ɤ�����������ޤ���<br />���������ϵ��ݤ���ޤ�����';

$strYes = '  �Ϥ�  ';

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
