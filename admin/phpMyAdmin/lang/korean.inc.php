<?php
/* $Id: korean.inc.php,v 1.42 2001/08/30 18:20:56 swix Exp $ */

$charset = 'ks_c_5601-1987';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');


$strAccessDenied = '������ �źεǾ����ϴ�.';
$strAction = '����';
$strAddDeleteColumn = 'Add/Delete Field Columns'; //to translate (tbl_qbe.php)
$strAddDeleteRow = 'Add/Delete Criteria Row'; //to translate (tbl_qbe.php)
$strAddNewField = '�ʵ� �߰��ϱ�';
$strAddPriv = 'Add a new Privilege'; //to translate
$strAddPrivMessage = 'You have added a new privilege.'; //to translate
$strAddSearchConditions = '�˻� ���� ������ �߰��Ͻʽÿ�. ("where" ������):';
$strAddUser = 'Add a new User'; //to translate
$strAddUserMessage = 'You have added a new user.'; //to translate
$strAfter = '������-->';
$strAll = 'All'; //to translate
$strAlterOrderBy = 'Alter table order by'; //to translate
$strAnalyzeTable = '���̺� �м�';
$strAnd = 'And'; //to translate (tbl_qbe.php)
$strAnIndex = '�ε����� �߰��Ͽ����ϴ�. ';
$strAny = 'Any'; //to translate
$strAnyColumn = 'Any Column'; //to translate
$strAnyDatabase = 'Any database'; //to translate
$strAnyHost = 'Any host'; //to translate
$strAnyTable = 'Any table'; //to translate
$strAnyUser = 'Any user'; //to translate
$strAPrimaryKey = 'primary key�� �߰� �Ͽ����ϴ� ';
$strAscending = 'Ascending'; //to translate (tbl_qbe.php)
$strAtBeginningOfTable = '���̺��� ó��';
$strAtEndOfTable = '���̺��� ������';
$strAttr = '����';

$strBack = '�ڷ�';
$strBookmarkLabel = 'Label'; //to translate
$strBookmarkQuery = 'Bookmarked SQL-query'; //to translate
$strBookmarkThis = 'Bookmark this SQL-query'; //to translate
$strBookmarkView = 'View only'; //to translate
$strBrowse = '����';

$strCantLoadMySQL = 'cannot load MySQL extension,<br />please check PHP Configuration.'; //to translate
$strCarriage = 'ĳ���� ����: \\r';
$strChange = '����';
$strCheckAll = 'Check All'; //to translate
$strCheckDbPriv = 'Check Database Privileges'; //to translate
$strCheckTable = '���̺� üũ';
$strColumn = 'Column'; //to translate
$strColumnEmpty = 'The columns names are empty!'; //to translate
$strColumnNames = 'Į��(��) �̸�';
$strCompleteInserts = '������ INSERT�� �ۼ�';
$strConfirm = 'Do you really want to do it?'; //to translate
$strCopyTable = '���̺��� ������ �����մϴ�. -->';
$strCopyTableOK = '%s ���̺��� %s ���� ����Ǿ����ϴ�.';
$strCreate = ' ����� ';
$strCreateNewDatabase = '���ο� ������ ���̽��� ����ϴ�';
$strCreateNewTable = '������ ������ ���̽��� ���ο� ���̺��� ����ϴ�. -->';
$strCriteria = 'Criteria'; //to translate (tbl_qbe.php)

$strData = 'Data'; //to translate
$strDatabase = '������ ���̽� ';
$strDatabases = '������ ���̽� ';
$strDataOnly = 'Data only'; //to translate
$strDbEmpty = 'The database name is empty!'; //to translate
$strDefault = '�⺻��';
$strDelete = '����';
$strDeleted = '������ ���� ���� �Ͽ����ϴ�.';
$strDeleteFailed = 'Deleted Failed!'; //to translate
$strDeletePassword = 'Delete Password'; //to translate
$strDeleteUserMessage = 'You have deleted the user'; //to translate
$strDelPassMessage = 'You have deleted the password for'; //to translate
$strDescending = 'Desending'; //to translate (tbl_qbe.php)
$strDisableMagicQuotes = '<b>Warning:</b> PHP \'magic_quotes_gpc\'�� Enable�� �����Ǿ� �ֽ��ϴٸ�, �� ������ phpMyAdmin������ �۵����� �ʽ��ϴ�. PHP �Ŵ����� �����Ͽ� disable�� ������ �ֽʽÿ�.';
$strDisplay = '����';
$strDoAQuery = '"QUERY ��(��)"�� ���� (wildcard: "%")';
$strDocu = '����';
$strDoYouReally = '������ ������ �����Ͻðڽ��ϱ�? --> ';
$strDrop = '����';
$strDropDB = '������ ���̽� ���� -->';
$strDumpingData = '���̺��� ���� ������';
$strDynamic = 'dynamic'; //to translate

$strEdit = '����';
$strEditPrivileges = 'Edit Privileges'; //to translate
$strEffective = 'Effective'; //to translate
$strEmpty = '����';
$strEmptyResultSet = 'MySQL �� ���� �����Ͽ����ϴ�.';
$strEnableMagicQuotes = '<b>Warning:</b> PHP \'magic_quotes_gpc\'�� Enable�� �����Ǿ� �ֽ��� �ʽ��ϴ�. phpMyAdmin�� Enable���¿��� ���� �۵��մϴ�. PHP �Ŵ����� �����Ͽ� Enable�� ������ �ֽʽÿ�.';
$strEnclosedBy = '�ο� ��ȣ';
$strEnd = '������';
$strError = '����';
$strEscapedBy = '���������� ��ȣ';
$strExtra = '�߰�';

$strField = '�ʵ�';
$strFields = '�ʵ�';
$strFixed = 'fixed'; //to translate
$strFormat = 'Format'; //to translate
$strFunction = '�Լ�';

$strGenTime = 'Generation Time'; //to translate
$strGo = '����';
$strGrants = 'Grants'; //to translate

$strHasBeenAltered = '��(��) �����Ͽ����ϴ�.';
$strHasBeenCreated = '��(��) �ۼ��Ͽ����ϴ�.';
$strHasBeenDropped = '��(��) �����Ͽ����ϴ�.';
$strHasBeenEmptied = '��(��) ������ϴ�.';
$strHome = 'MainPage';
$strHomepageOfficial = 'phpMyAdmin Ȩ ������';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Page';
$strHost = 'ȣ��Ʈ';
$strHostEmpty = 'The host name is empty!'; //to translate

$strIfYouWish = '���̺� ��(�ݷ�)�� �����͸� �߰��� ���� �ʵ� ����Ʈ�� �޸��� ������ �ֽʽÿ�. ';
$strIndex = '�ε���';
$strIndexes = 'Indexes'; //to translate
$strInsert = '�߰�';
$strInsertAsNewRow = 'Insert as new row'; //to translate
$strInsertIntoTable = '���̺��� �߰�';
$strInsertNewRow = '�� ���� �߰�';
$strInsertTextfiles = '���̺��� �ؽ�Ʈ ���� �߰�';
$strInUse = 'in use'; //to translate

$strKeyname = 'Ű �̸�';
$strKill = 'Kill'; //to translate

$strLength = 'Length'; //to translate
$strLengthSet = '����/��Ʈ*';
$strLimitNumRows = '�������� ���ڵ� ��';
$strLineFeed = '���� ����: \\n';
$strLines = '��(��)';
$strLocationTextfile = 'SQL ���� ������ �ؽ�Ʈ ����';
$strLogin = ''; //to translate, but its not in use ...
$strLogout = '�α� �ƿ�';

$strModifications = '�� �ٸ��� �����Ͽ����ϴ�.';
$strModify = 'Modify'; //to translate (tbl_qbe.php)
$strMySQLReloaded = 'MySQL�� ���� �о� �鿴���ϴ�.';
$strMySQLSaid = 'MySQL �޼���: ';
$strMySQLShowProcess = 'MySQL ���μ��� ����';
$strMySQLShowStatus = 'MySQL ��Ÿ�� ���� ����';
$strMySQLShowVars = 'MySQL �ý��� ���� ����';

$strName = '�̸�';
$strNext = '��������';
$strNo = ' �ƴϿ� ';
$strNoPassword = 'No Password'; //to translate
$strNoPrivileges = 'No Privileges'; //to translate
$strNoRights = 'You don\'t have enough rights to be here right now!'; //to translate
$strNoTablesFound = '������ DB���� ���̺��� �����ϴ�.';
$strNoUsersFound = 'No user(s) found.'; //to translate
$strNull = 'Null';
$strNumberIndexes = ' Number of advanced indexes '; //to translate

$strOftenQuotation = '�ο� ��ȣ�Դϴ�. �ɼ���, char Ȥ�� varchar �ʵ常�� " "�� ���ο��� ���� �ǹ��մϴ�.';
$strOptimizeTable = '���̺� ����ȭ';
$strOptionalControls = 'Ư������ �б�/���� �ɼ�';
$strOptionally = '�ɼ��Դϴ�.';
$strOr = 'Ȥ��';
$strOverhead = 'Overhead'; //to translate

$strPassword = 'Password'; //to translate
$strPasswordEmpty = 'The password is empty!'; //to translate
$strPasswordNotSame = 'The passwords aren\'t the same!'; //to translate
$strPHPVersion = 'PHP Version'; //to translate
$strPos1 = 'ó��';
$strPrevious = '��������';
$strPrimary = 'Primary';
$strPrimaryKey = 'Primary Ű';
$strPrinterFriendly = '�� ���̺� �μ�� ����';
$strPrintView = '�μ�� ����';
$strPrivileges = 'Privileges'; //to translate
$strProducedAnError = '������ �߻��Ͽ����ϴ�';
$strProperties = '������Ƽ';

$strQBE = '��(��)���� ���� ����';
$strQBEDel = 'Del';  //to translate (used in tbl_qbe.php)
$strQBEIns = 'Ins';  //to translate (used in tbl_qbe.php)

$strReadTheDocs = '���� �о� ���̱�';
$strRecords = '��ϼ�';
$strReloadFailed = 'MySQL�� �о� ���̱⿡ �����Ͽ����ϴ�.';
$strReloadMySQL = 'MySQL �ٽ� �о� ���̱�';
$strRememberReload = 'Remember reload the server.'; //to translate
$strRenameTable = '���̺� �̸� �����ϱ�';
$strRenameTableOK = '%s��(��) %s(��)�� �����Ͽ����ϴ�.';
$strRepairTable = '���̺� ����';
$strReplace = '��ġ(����)�ϱ�';
$strReplaceTable = '���Ϸ� ���̺� ��ġ�ϱ�';
$strReset = '����Ʈ';
$strReType = 'Re-type'; //to translate
$strRevoke = 'Revoke'; //to translate
$strRevokeGrant = 'Revoke Grant'; //to translate
$strRevokeGrantMessage = 'You have revoked the Grant privilege for'; //to translate
$strRevokeMessage = 'You have revoked the privileges for'; //to translate
$strRevokePriv = 'Revoke Privileges'; //to translate
$strRowLength = 'Row length'; //to translate
$strRows = 'Rows'; //to translate
$strRowsFrom = '������';
$strRowsStatistic = 'Row Statistic'; //to translate
$strRunning = '�� �������Դϴ�. ';
$strRunQuery = 'Submit Query'; //to translate (tbl_qbe.php)
$strRunSQLQuery = '������ ������ ���̽��� SQL ������ �����մϴ�. -->';

$strSave = '����';
$strSelect = '����';
$strSelectFields = '�ʵ� ���� (�ϳ� �̻�):';
$strSelectNumRows = '����';
$strSend = '�۽�';
$strSequence = 'Seq.'; //to translate
$strServerVersion = 'Server version'; //to translate
$strShow = '����';
$strShowingRecords = '��� ����';
$strSingly = '(singly)'; //to translate
$strSize = 'Size'; //to translate
$strSort = 'Sort'; //to translate (tbl_qbe.php)
$strSpaceUsage = 'Space usage'; //to translate
$strSQLQuery = '����� SQL����';
$strStatement = 'Statements'; //to translate
$strStrucCSV = 'CSV ������';
$strStrucData = '������ ������';
$strStrucDrop = '\'drop table\' �߰�';
$strStrucOnly = '������';
$strSubmit = '����';
$strSuccess = 'SQL-query�� �ٸ��� ����Ǿ����ϴ�.';
$strSum = 'Sum'; //to translate

$strTable = '���̺� ';
$strTableComments = '���̺� ����';
$strTableEmpty = 'The table name is empty!'; //to translate
$strTableMaintenance = 'Table maintenance'; //to translate
$strTableStructure = '���̺� ����';
$strTableType = '���̺� Ÿ��';
$strTerminatedBy = '���� ��ȣ';
$strTextAreaLength = ' Because of its length,<br /> this field might not be editable '; //to translate
$strTheContent = '������ �����͸� �����Ͽ����ϴ�.';
$strTheContents = '������ �����ͷ� ������ ���̺��� primary Ȥ�� unique Ű�� ��ġ�ϴ� ���� ��ġ(����)��Ű�ڽ��ϴ�.';
$strTheTerminator = '�ʵ��� ���� ��ȣ �Դϴ�.';
$strTotal = '�հ�';
$strType = '�ʵ� Ÿ����';

$strUncheckAll = 'Uncheck All'; //to translate
$strUnique = '����ũ Ÿ����';
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
$strViewDump = '���̺��� ����(��Ű��) ������ ����';
$strViewDumpDB = 'DB�� ����(��Ű��) ������ ����';

$strWelcome = 'Welcome to ';
$strWrongUser = '������ Ȥ�� �н����尡 �ٸ��� �ʽ��ϴ�. <br /> ������ �źεǾ����ϴ�.';

$strYes = ' �� ';

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
