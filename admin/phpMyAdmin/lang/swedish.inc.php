<?php
/* $Id: swedish.inc.php,v 1.58 2001/08/30 18:20:56 swix Exp $ */

$charset = 'iso-8859-1';
$left_font_family = 'verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');


$strAccessDenied = '�tkomst nekad';
$strAction = 'Handling';
$strAddDeleteColumn = 'L�gg till/radera f�lt kolumner';
$strAddDeleteRow = 'Add/Delete Criteria Row'; //to translate (tbl_qbe.php)
$strAddNewField = 'L�gg till nytt f�lt';
$strAddPriv = 'L�gg till ett nytt privilegie';
$strAddPrivMessage = 'Du har lagt till ett nytt privilegie.';
$strAddSearchConditions = 'L�gg till s�k-kreterier (body of the "where" clause):';
$strAddUser = 'L�gg till ny anv�ndare';
$strAddUserMessage = 'Du har lagt till en ny anv�ndare.';
$strAffectedRows = 'P�verkade rader:';
$strAfter = 'Efter';
$strAll = 'Alla';
$strAlterOrderBy = 'Alter table order by'; //to translate
$strAnalyzeTable = 'Analysera tabell';
$strAnd = 'And'; //to translate (tbl_qbe.php)
$strAnIndex = 'Ett index har lagts till ';
$strAny = 'Any'; //to translate
$strAnyColumn = 'Any Column'; //to translate
$strAnyDatabase = 'Any database'; //to translate
$strAnyHost = 'Any host'; //to translate
$strAnyTable = 'Any table'; //to translate
$strAnyUser = 'Any user'; //to translate
$strAPrimaryKey = 'En prim�r nyckel har aktiverats ';
$strAscending = 'Ascending'; //to translate (tbl_qbe.php)
$strAtBeginningOfTable = 'I b�rjan av tabellen';
$strAtEndOfTable = 'I slutet av tabellen';
$strAttr = 'Attribut';

$strBack = 'Bak�t';
$strBinary = ' Bin�r ';
$strBinaryDoNotEdit = ' Bin�r - �ndra inte ';
$strBookmarkLabel = 'Label'; //to translate
$strBookmarkQuery = 'Bokm�rkt SQL-fr�ga';
$strBookmarkThis = 'Skapa bokm�rke f�r den h�r SQL-fr�gan';
$strBookmarkView = 'View only'; //to translate
$strBrowse = 'Visa';
$strBzip = '"bzippad"';

$strCantLoadMySQL = 'kan inte ladda MySQL-till�gg,<br />var god och kontrollera din PHP-konfiguration.';
$strCarriage = 'Radbyte: \\r';
$strChange = '�ndra';
$strCheckAll = 'Check All'; //to translate
$strCheckDbPriv = 'Check Database Privileges'; //to translate
$strCheckTable = 'Check table'; //to translate
$strColumn = 'Kolumn';
$strColumnEmpty = 'Kolumn-namnen �r tomma!';
$strColumnNames = 'Kolumn-namn';
$strCompleteInserts = 'Kompletta ins�ttningar';
$strConfirm = 'Vill du verkligen g�ra det?';
$strCopyTable = 'Kopiera tabellen till';
$strCopyTableOK = 'Tabellen %s har kopierats till %s.';
$strCreate = 'Skapa';
$strCreateNewDatabase = 'Skapa ny databas';
$strCreateNewTable = 'Skapa nya tabeller i databas ';
$strCriteria = 'Criteria'; //to translate (tbl_qbe.php)

$strData = 'Data';
$strDatabase = 'Databas ';
$strDatabases = 'databaser';
$strDatabasesStats = 'Databas-statistik';
$strDataOnly = 'Enbart data';
$strDbEmpty = 'Databasen �r tom!';
$strDefault = 'Standard';
$strDelete = 'Radera';
$strDeleted = 'Raden har raderats';
$strDeletedRows = 'Raderade rader';
$strDeleteFailed = 'Raderingen misslyckades!';
$strDeletePassword = 'Radera l�senord';
$strDeleteUserMessage = 'Du har raderat anv�ndaren';
$strDelPassMessage = 'Du har raderat l�senordet f�r';
$strDescending = 'sjunkande';
$strDisableMagicQuotes = '<b>Varning:</b> Du har \'magic_quotes_gpc\' aktiverat i din PHP-konfiguration. Den h�r versionen av PhpMyAdmin fungerar inte korrekt med det tillvalet. L�s i PHP-dokumentationen f�r att se hur du avaktiverar det tillvalet.';
$strDisplay = 'Visa';
$strDisplayOrder = 'Visningsordning:';
$strDoAQuery = 'Utf�r en "query by example" (wildcard: "%")';
$strDocu = 'Dokumentation';
$strDoYouReally = 'Vill du verkligen ';
$strDrop = 'Dumpa';
$strDropDB = 'Dumpa databas ';
$strDropTable = 'Radera tabell';
$strDumpingData = 'Dumpar data i tabell';
$strDynamic = 'dynamisk';

$strEdit = '�ndra';
$strEditPrivileges = 'Redigera privilegier';
$strEffective = 'Effective'; //to translate
$strEmpty = 'T�m';
$strEmptyResultSet = 'MySQL skickade tillbaka ett tomt resultat (t.ex. en tom rad).';
$strEnableMagicQuotes = '<b>Varning:</b> Du har inte aktiverat \'magic_quotes_gpc\' i din PHP konfiguration. Den h�r versionen av PhpMyAdmin fungerar inte korrekt utan det. L�s i din PHP dokumentation hur du aktiverar det.';
$strEnclosedBy = 'omgivet med';
$strEnd = 'Slut';
$strEnglishPrivileges = ' Viktigt: MySQL-privilegienamn anges p� engelska ';
$strError = 'Fel';
$strEscapedBy = 'avslutas med';
$strExtendedInserts = 'Extended inserts';
$strExtra = 'Extra';

$strField = 'F�lt';
$strFields = 'F�lt';
$strFieldsEmpty = ' The field count is empty! ';  //to translate
$strFixed = 'fixed'; //to translate
$strFormat = 'Format'; //to translate
$strFormEmpty = 'Ett v�rde saknas i formul�ret!';
$strFunction = 'Funktion';

$strGenTime = 'Generation Time'; //to translate
$strGo = 'K�r';
$strGrants = 'Grants'; //to translate
$strGzip = '"gzippad"';

$strHasBeenAltered = 'har �ndrats.';
$strHasBeenCreated = 'har skapats.';
$strHasBeenDropped = 'har dumpats.';
$strHasBeenEmptied = 'har t�mts.';
$strHome = 'Hem';
$strHomepageOfficial = 'phpMyAdmin:s officiella hemsida';
$strHomepageSourceforge = 'phpMyAdmin Sourceforge-nedladdnings-sida';
$strHost = 'V�rd';
$strHostEmpty = 'V�rdnamnet �r ej satt!';

$strIfYouWish = 'Om du enbart vill ladda n�gra av tabellens kolumner, ange en \',\' separerad f�lt lista.';
$strIndex = 'Index';
$strIndexes = 'Index';
$strInsert = 'S�tt in';
$strInsertAsNewRow = 'L�gg till som ny rad';
$strInsertedRows = 'Tillagda rader:';
$strInsertIntoTable = 'S�tt in i tabell';
$strInsertNewRow = 'S�tt in ny rad';
$strInsertTextfiles = 'Importera textfil till tabellen';
$strInstructions = 'Instruktioner';
$strInUse = 'anv�nds';

$strKeyname = 'anv�nds';;
$strKill = 'D�da';

$strLength = 'L�ngd';
$strLengthSet = 'L�ngd/V�rden*';
$strLimitNumRows = 'Tabell inl�gg per sida';
$strLineFeed = 'Linefeed: \\n';
$strLines = 'Linjer';
$strLocationTextfile = 'Textfilens plats';
$strLogin = ''; //to translate, but its not in use ...
$strLogout = 'Logga ut';

$strModifications = '�ndringarna har sparats';
$strModify = '�ndra';
$strMySQLReloaded = 'MySQL har laddats om.';
$strMySQLSaid = 'MySQL sa: ';
$strMySQLShowProcess = 'Visa processer';
$strMySQLShowStatus = 'Visa MySQL-k�rningsinformation';
$strMySQLShowVars = 'Visa MySQL:s systemvariabler';

$strName = 'Namn';
$strNbRecords = 'antal poster';
$strNext = 'N�sta';
$strNo = 'Nej';
$strNoDatabases = 'Inga databaser';
$strNoDropDatabases = '"DROP DATABASE"-instruktioner �r avst�ngda.';
$strNoModification = 'Ingen f�r�ndring';
$strNoPassword = 'Inget l�senord';
$strNoPrivileges = 'Inga privilegier';
$strNoRights = 'Du har inte nog med beh�righet f�r att vara h�r!';
$strNoTablesFound = 'Fann inga tabeller i databasen.';
$strNotNumber = 'Det �r inte ett nummer!';
$strNotValidNumber = ' �r inte ett giltigt radnummer!';
$strNoUsersFound = 'Fann ingen anv�ndare.';
$strNull = 'Noll';
$strNumberIndexes = ' Antal avancerade index ';

$strOffSet = 'offset';
$strOftenQuotation = 'Ofta citattecken. Frivilligt betyder att bara \'char\' och \'varchar\' f�lten omgivs av "enclosed by"-tecken.';
$strOptimizeTable = 'Optimisera tabell';
$strOptionalControls = 'Tillval. Styr hur l�sning och skrivning av \'special\'-tecken utf�rs.';
$strOptionally = 'Tillval';
$strOr = 'Eller';
$strOverhead = 'Overhead'; //to translate

$strPassword = 'L�senord';
$strPasswordEmpty = 'L�senordet �r tomt!';
$strPasswordNotSame = 'L�senorden �r inte lika!';
$strPHPVersion = 'PHP-version';
$strPmaDocumentation = 'phpMyAdmin Dokumentation';
$strPos1 = 'B�rja';
$strPrevious = 'F�reg�ende';
$strPrimary = 'Prim�r';
$strPrimaryKey = 'Prim�rnyckel';
$strPrinterFriendly = 'Utskrifts-v�nlig-visning av tabellen';
$strPrintView = 'Skriv ut detta';
$strPrivileges = 'Privilegier';
$strProducedAnError = '�tergav ett fel.';
$strProperties = 'Inst�llningar';

$strQBE = 'Fr�ga som exemplet';
$strQBEDel = 'Del';  //to translate (used in tbl_qbe.php)
$strQBEIns = 'Ins';  //to translate (used in tbl_qbe.php)
$strQueryOnDb = 'SQL-query on database ';

$strReadTheDocs = 'L�s manualen';
$strRecords = 'Ins�ttning';
$strReloadFailed = 'MySQL omladdning fungerade inte.';
$strReloadMySQL = 'Ladda om MySQL';
$strRememberReload = 'Remember reload the server.'; //to translate
$strRenameTable = 'D�p om tabell till';
$strRenameTableOK = 'Tabell %s har d�pts om till %s';
$strRepairTable = 'Laga tabell';
$strReplace = 'Ers�tt';
$strReplaceTable = 'Ers�tt tabell med fil';
$strReset = 'Nollst�ll';
$strReType = 'Skriv om';
$strRevoke = 'Revoke'; //to translate
$strRevokeGrant = 'Revoke Grant'; //to translate
$strRevokeGrantMessage = 'You have revoked the Grant privilege for'; //to translate
$strRevokeMessage = 'You have revoked the privileges for'; //to translate
$strRevokePriv = 'Revoke Privileges'; //to translate
$strRowLength = 'Radl�ngd';
$strRows = 'Rader';
$strRowsFrom = 'rader med b�rjan fr�n';
$strRowsStatistic = 'Radstatistik';
$strRowSize = ' radstorlek ';
$strRunning = 'k�rs p� ';
$strRunQuery = 'Submit Query'; //to translate (tbl_qbe.php)
$strRunSQLQuery = 'Utf�r SQL fr�ga/fr�gor i databas ';

$strSave = 'Spara';
$strSelect = 'V�lj';
$strSelectFields = 'V�lj f�lt (minst ett):';
$strSelectNumRows = 'i fr�ga';
$strSend = 'Skicka';
$strSequence = 'Sekv.';
$strServerChoice = 'Serverval';
$strServerVersion = 'Serverversion';
$strSetEnumVal = 'Om en f�lttyp �r "enum" eller "set", var god och ange v�rden enligt f�ljande format: \'a\',\'b\',\'c\'...<br />Om du beh�ver l�gga till ett bak�tstreck ("\") eller ett enkelcitat ("\'") i v�rdena, l�gg ett bak�tstreck f�re v�rdet (till exempel \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Visa';
$strShowingRecords = 'Visar ins�ttningar ';
$strShowPHPInfo = 'Visa PHP-information';
$strShowThisQuery = ' Visa den h�r fr�gan igen ';
$strSingly = '(singly)'; //to translate
$strSize = 'Storlek';
$strSort = 'Sortering';
$strSpaceUsage = 'Utrymmesanv�ndning';
$strSQLQuery = 'SQL-fr�ga';
$strStatement = 'Statements'; //to translate
$strStrucExcelCSV = 'CSV f�r Ms Excel-data';
$strStrucCSV = 'CSV-data';
$strStrucData = 'Struktur och data';
$strStrucDrop = 'L�gg till \'dumpa tabell\'';
$strStrucOnly = 'Bara struktur';
$strSubmit = 'S�nd';
$strSuccess = 'Din SQL-fr�ga utf�rdes korrekt';
$strSum = 'Summa';

$strTable = 'tabell ';
$strTableComments = 'Tabellkommentarer';
$strTableEmpty = 'Tabellnamnet �r tomt!';
$strTableMaintenance = 'Tabellunderh�ll';
$strTables = '%s tabell(er)';
$strTableStructure = 'Tabellstruktur f�r tabell';
$strTableType = 'Tabelltyp';
$strTerminatedBy = 'avslutad av';
$strTextAreaLength = ' p�grund av dess l�ngd,<br /> kanske inte detta f�lt kan redigeras ';
$strTheContent = 'Filens inneh�ll har satts in.';
$strTheContents = 'Filens inneh�ll ers�tter den valda tabellens rader av prim�ra- och identiskanycklar.';
$strTheTerminator = 'F�lt-avslutare.';
$strTotal = 'totalt';
$strType = 'Typ';

$strUncheckAll = 'Nollst�ll alla';
$strUnique = 'Unik';
$strUpdatePassMessage = 'Du har uppdaterat l�senordet f�r';
$strUpdatePassword = 'Uppdatera l�senord';
$strUpdatePrivMessage = 'Du har uppdaterat privilegierna f�r';
$strUpdateQuery = 'Uppdatera fr�ga';
$strUsage = 'Usage'; //to translate
$strUseBackquotes = 'Anv�nd bak�tcitat i tabeller och f�ltnamn';
$strUser = 'Anv�ndare';
$strUserEmpty = 'Anv�ndarnamnet �r tomt!';
$strUserName = 'Anv�ndarnamn';
$strUsers = 'Anv�ndare';
$strUseTables = 'Anv�nd tabeller';

$strValue = 'V�rde';
$strViewDump = 'Visa dump(-schema) av tabellen';
$strViewDumpDB = 'Visa dump(-schema) av databas';

$strWelcome = 'V�lkommen till ';
$strWrongUser = 'Fel anv�ndarnamn/l�senord. �tkomst nekad.';

$strYes = 'Ja';
$strFullText = 'Full Texts';//to translate
$strPartialText = 'Partial Texts';//to translate
?>
