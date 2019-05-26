<?php
/* $Id: danish.inc.php,v 1.59 2001/08/30 18:20:56 swix Exp $ */

$charset = 'iso-8859-1';
$left_font_family = 'verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');


$strAccessDenied = 'Adgang N&aelig;gtet';
$strAction = 'Handling';
$strAddDeleteColumn = 'Add/Delete Field Columns'; //to translate (tbl_qbe.php)
$strAddDeleteRow = 'Add/Delete Criteria Row'; //to translate (tbl_qbe.php)
$strAddNewField = 'Tilf&oslash;j nyt felt';
$strAddPriv = 'Add a new Privilege'; //to translate
$strAddPrivMessage = 'You have added a new privilege.'; //to translate
$strAddSearchConditions = 'Tilf&oslash;j s&oslash;ge kriterier (body of the "where" clause):';
$strAddUser = 'Add a new User'; //to translate
$strAddUserMessage = 'You have added a new user.'; //to translate
$strAfter = 'Efter';
$strAll = 'All'; //to translate
$strAlterOrderBy = 'Alter table order by'; //to translate
$strAnalyzeTable = 'Analyser tabel';
$strAnd = 'And'; //to translate (tbl_qbe.php)
$strAnIndex = 'Der er oprettet et indeks p&aring; feltet ';
$strAny = 'Any'; //to translate
$strAnyColumn = 'Any Column'; //to translate
$strAnyDatabase = 'Any database'; //to translate
$strAnyHost = 'Any host'; //to translate
$strAnyTable = 'Any table'; //to translate
$strAnyUser = 'Any user'; //to translate
$strAPrimaryKey = 'Der er oprettet en prim&aelig;r n&oslash;gle p&aring; feltet ';
$strAscending = 'Ascending'; //to translate (tbl_qbe.php)
$strAtBeginningOfTable = 'I begyndelsen af tabel';
$strAtEndOfTable = 'I slutning af tabel';
$strAttr = 'Attributer';

$strBack = 'Tilbage';
$strBinary = ' Binary ';  //to translate
$strBinaryDoNotEdit = ' Binary - do not edit ';  //to translate
$strBookmarkLabel = 'Label'; //to translate
$strBookmarkQuery = 'Bookmarked SQL-query'; //to translate
$strBookmarkThis = 'Bookmark this SQL-query'; //to translate
$strBookmarkView = 'View only'; //to translate
$strBrowse = 'Vis';
$strBzip = '"bzipped"';

$strCantLoadMySQL = 'cannot load MySQL extension,<br />please check PHP Configuration.'; //to translate
$strCarriage = 'Carriage return: \\r';
$strChange = '&AElig;ndre';
$strCheckAll = 'Check All'; //to translate
$strCheckDbPriv = 'Check Database Privileges'; //to translate
$strCheckTable = 'Tjek tabel';
$strColumn = 'Column'; //to translate
$strColumnEmpty = 'The columns names are empty!'; //to translate
$strColumnNames = 'Kolonne navne';
$strCompleteInserts = 'Lav komplette inserts';
$strConfirm = 'Do you really want to do it?'; //to translate
$strCopyTable = 'Kopier tabel til';
$strCopyTableOK = 'Tabellen %s er nu kopieret til: %s.';
$strCreate = 'Opret';
$strCreateNewDatabase = 'Opret ny database';
$strCreateNewTable = 'Opret ny tabel i database ';
$strCriteria = 'Criteria'; //to translate (tbl_qbe.php)

$strData = 'Data'; //to translate
$strDatabase = 'Database: ';
$strDatabases = 'databaser';
$strDataOnly = 'Data only'; //to translate
$strDbEmpty = 'The database name is empty!'; //to translate
$strDefault = 'Standardv&aelig;rdi';
$strDelete = 'Slet';
$strDeleted = 'R&aelig;kken er slettet!';
$strDeleteFailed = 'Deleted Failed!'; //to translate
$strDeletePassword = 'Delete Password'; //to translate
$strDeleteUserMessage = 'You have deleted the user'; //to translate
$strDelPassMessage = 'You have deleted the password for'; //to translate
$strDescending = 'Desending'; //to translate (tbl_qbe.php)
$strDisableMagicQuotes = '<b>Advarsel:</b> Du har aktiveret funktionen magic_quotes_gpc i din PHP konfiguration. PhpMyAdmin ikke beh&oslash;ver denne funktion for at kunne virke efter hensigten. Tag venligst et kig i kapitlet om konfiguration i PHP manualen for information om hvordan funktionen ikke aktiveres.';
$strDisplay = 'Vis';
$strDoAQuery = 'K&oslash;r en foresp&oslash;rgsel p&aring; felter (wildcard: "%")';
$strDocu = 'Dokumentation';
$strDoYouReally = 'Er du sikker p&aring; at du vil ';
$strDrop = 'Slet';
$strDropDB = 'Slet database ';
$strDumpingData = 'Data dump for tabellen';
$strDynamic = 'dynamic'; //to translate

$strEdit = 'Ret';
$strEditPrivileges = 'Edit Privileges'; //to translate
$strEffective = 'Effective'; //to translate
$strEmpty = 'T&oslash;m';
$strEmptyResultSet = 'MySQL returnerede ingen data (fx ingen r&aelig;kker).';
$strEnableMagicQuotes = '<b>Advarsel:</b> Du har ikke aktiveret funktionen magic_quotes_gpc i din PHP konfiguration. PhpMyAdmin beh&oslash;ver denne funktion for at kunne virke efter hensigten. Tag venligst et kig i kapitlet om konfiguration i PHP manualen for information om hvordan funktionen aktiveres.';
$strEnclosedBy = 'har denne tekstkvalifikator';
$strEnd = 'Slut';
$strEnglishPrivileges = ' Note: MySQL privilege names are expressed in English ';  //to translate
$strError = 'Fejl';
$strEscapedBy = 'afsluttes med';
$strExtra = 'Ekstra';

$strField = 'Feltnavn';
$strFields = 'Felter';
$strFixed = 'fixed'; //to translate
$strFormat = 'Format'; //to translate
$strFunction = 'Funktion';

$strGenTime = 'Generation Time'; //to translate
$strGo = 'Udf&oslash;r';
$strGrants = 'Grants'; //to translate
$strGzip = '"gzipped"';  //to translate

$strHasBeenAltered = 'er &aelig;ndret.';
$strHasBeenCreated = 'er oprettet.';
$strHasBeenDropped = 'er slettet.';
$strHasBeenEmptied = 'er t&oslash;mt.';
$strHome = 'Hjem';
$strHomepageOfficial = 'Officiel phpMyAdmin hjemmeside ';
$strHomepageSourceforge = 'Ny phpMyAdmin hjemmeside ';
$strHost = 'Host';
$strHostEmpty = 'The host name is empty!'; //to translate

$strIfYouWish = 'Hvis du kun &oslash;nsker at importere nogle af tabellens kolonner, angives de med en kommasepereret felt liste.';
$strIndex = 'Indekseret';
$strIndexes = 'Indexes'; //to translate
$strInsert = 'Inds&aelig;t';
$strInsertAsNewRow = 'Insert as new row'; //to translate
$strInsertIntoTable = 'Importer til tabel';
$strInsertNewRow = 'Inds&aelig;t ny r&aelig;kke';
$strInsertTextfiles = 'Importer tekstfil til tabellen';
$strInUse = 'in use'; //to translate

$strKeyname = 'N&oslash;gle';
$strKill = 'Kill'; //to translate

$strLength = 'Length'; //to translate
$strLengthSet = 'L&aelig;ngde/V&aelig;rdi*';
$strLimitNumRows = 'poster pr. side';
$strLineFeed = 'Linefeed: \\n';
$strLines = 'Linier';
$strLocationTextfile = 'Tekstfilens placering';
$strLogin = ''; //to translate, but its not in use ...
$strLogout = 'Log af';

$strModifications = 'Rettelserne er gemt!';
$strModify = 'Modify'; //to translate (tbl_qbe.php)
$strMySQLReloaded = 'MySQL genstartet.';
$strMySQLSaid = 'MySQL returnerede: ';
$strMySQLShowProcess = 'Vis tr&aring;de';
$strMySQLShowStatus = 'Vis MySQL runtime information';
$strMySQLShowVars = 'Vis MySQL system variable';

$strName = 'Navn';
$strNbRecords = 'No. Of records';
$strNext = 'N&aelig;ste';
$strNo = 'Nej';
$strNoPassword = 'No Password'; //to translate
$strNoPrivileges = 'No Privileges'; //to translate
$strNoRights = 'You don\'t have enough rights to be here right now!'; //to translate
$strNoTablesFound = 'Ingen tabeller fundet i databasen.';
$strNotNumber = 'This is not a number!';  //to translate
$strNotValidNumber = ' is not a valid row number!';  //to translate
$strNoUsersFound = 'No user(s) found.'; //to translate
$strNull = 'Nulv&aelig;rdi';
$strNumberIndexes = ' Number of advanced indexes '; //to translate

$strOffSet = 'Offset';
$strOftenQuotation = 'Ofte anf&oslash;relsestegn. OPTIONALLY betyder at kun char og varchar felter er omsluttet med det valgte "tekstkvalifikator"-tegn.';
$strOptimizeTable = 'Optimer tabel';
$strOptionalControls = 'Optional. Kontrollerer hvordan specialtegn skrives eller l&aelig;ses.';
$strOptionally = 'OPTIONALLY';
$strOr = 'Eller';
$strOverhead = 'Overhead'; //to translate

$strPassword = 'Password'; //to translate
$strPasswordEmpty = 'The password is empty!'; //to translate
$strPasswordNotSame = 'The passwords aren\'t the same!'; //to translate
$strPHPVersion = 'PHP Version'; //to translate
$strPos1 = 'Start';
$strPrevious = 'Forrige';
$strPrimary = 'Prim&aelig;r';
$strPrimaryKey = 'Prim&aelig;r n&oslash;gle';
$strPrinterFriendly = 'Udskrift venlig version af ovenst&aring;ende tabel';
$strPrintView = 'Vis (udskriftvenlig)';
$strPrivileges = 'Privileges'; //to translate
$strProducedAnError = 'forsagede en fejl.';
$strProperties = 'Egenskaber';

$strQBE = 'Query by Example';
$strQBEDel = 'Del';  //to translate (used in tbl_qbe.php)
$strQBEIns = 'Ins';  //to translate (used in tbl_qbe.php)

$strReadTheDocs = 'L&aelig;s dokumentationen';
$strRecords = 'Poster';
$strReloadFailed = 'Genstart af MySQL fejlede.';
$strReloadMySQL = 'Genstart MySQL';
$strRememberReload = 'Remember reload the server.'; //to translate
$strRenameTable = 'Omd&oslash;b tabel til';
$strRenameTableOK = 'Tabellen %s er nu omd&oslash;bt til: %s';
$strRepairTable = 'Reparer tabel';
$strReplace = 'Erstat';
$strReplaceTable = 'Erstat data i tabellen med filens data';
$strReset = 'Nulstil';
$strReType = 'Re-type'; //to translate
$strRevoke = 'Revoke'; //to translate
$strRevokeGrant = 'Revoke Grant'; //to translate
$strRevokeGrantMessage = 'You have revoked the Grant privilege for'; //to translate
$strRevokeMessage = 'You have revoked the privileges for'; //to translate
$strRevokePriv = 'Revoke Privileges'; //to translate
$strRowLength = 'Row length'; //to translate
$strRows = 'Rows'; //to translate
$strRowsFrom = 'r&aelig;kker startende fra';
$strRowSize = ' Row size ';  //to translate
$strRowsStatistic = 'Row Statistic'; //to translate
$strRunning = 'k&oslash;rer p&aring; ';
$strRunQuery = 'Submit Query'; //to translate (tbl_qbe.php)
$strRunSQLQuery = 'K&oslash;r en/flere SQL foresp&oslash;rgsler p&aring; database ';

$strSave = 'Gem';
$strSelect = 'V&aelig;lg';
$strSelectFields = 'V&aelig;lg mindst eet felt:';
$strSelectNumRows = 'i foresp&oslash;rgsel';
$strSend = 'send';
$strSequence = 'Seq.'; //to translate
$strServerVersion = 'Server version'; //to translate
$strShow = 'Vis';
$strShowingRecords = 'Viser poster ';
$strShowThisQuery = ' Show this query here again ';  //to translate
$strSingly = '(singly)'; //to translate
$strSize = 'Size'; //to translate
$strSort = 'Sort'; //to translate (tbl_qbe.php)
$strSpaceUsage = 'Space usage'; //to translate
$strSQLQuery = 'SQL-foresp&oslash;rgsel';
$strStatement = 'Statements'; //to translate
$strStrucCSV = 'CSV data';
$strStrucData = 'Struturen og data';
$strStrucDrop = 'Tilf&oslash;j \'drop table\'';
$strStrucOnly = 'Kun strukturen';
$strSubmit = 'Send';
$strSuccess = 'Din SQL-foresp&oslash;rgsel blev eksekveret korrekt';
$strSum = 'Sum'; //to translate

$strTable = 'Tabel: ';
$strTableComments = 'Tabel kommentarer';
$strTableEmpty = 'The table name is empty!'; //to translate
$strTableMaintenance = 'Table maintenance'; //to translate
$strTableStructure = 'Struktur dump for tabellen';
$strTableType = 'Tabel type';
$strTerminatedBy = 'er afgr&aelig;nset af';
$strTextAreaLength = ' Because of its length,<br /> this field might not be editable '; //to translate
$strTheContent = 'Filens indhold er importeret.';
$strTheContents = 'Filens indhold erstatter den valgte tabels r&aelig;kker for r&aelig;kker med identisk prim&aelig;r eller unik n&oslash;gle.';
$strTheTerminator = 'Felterne afgr&aelig;nses af dette tegn.';
$strTotal = 'total';
$strType = 'Datatype';

$strUncheckAll = 'Uncheck All'; //to translate
$strUnique = 'Unik';
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

$strValue = 'V&aelig;rdi';
$strViewDump = 'Vis dump (skema) over tabel';
$strViewDumpDB = 'Vis dump (skema) af database';

$strWelcome = 'Velkommen til ';
$strWrongUser = 'Forkert brugernavn/kodeord. Adgang N&aelig;gtet.';

$strYes = 'Ja';

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
$strNoDatabases = 'No databases';
$strNoDropDatabases = '"DROP DATABASE" statements are disabled.';
$strNoModification = 'No change';
$strQueryOnDb = 'SQL-query on database ';
$strSetEnumVal = 'If field type is "enum" or "set", please enter the values using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';
$strShowPHPInfo = 'Show PHP information';  // To translate
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strTables = '%s table(s)';  //to translate
$strUseBackquotes = 'Use backquotes with tables and fields\' names';
$strServerChoice = 'Server Choice';//to translate 
$strPmaDocumentation = 'phpMyAdmin Documentation';//to translate 
$strFullText = 'Full Texts';//to translate
$strPartialText = 'Partial Texts';//to translate
?>
