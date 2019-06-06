<?php
/* $Id: norwegian.inc.php,v 1.58 2001/08/30 18:53:30 loic1 Exp $ */

$charset = 'iso-8859-1';
$left_font_family = 'verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');


$strAccessDenied = 'Ingen tilgang';
$strAction = 'Handling';
$strAddDeleteColumn = 'Legg til/Slett kolonne';
$strAddDeleteRow = 'Legg til/Slett kriterie rad';
$strAddNewField = 'Legg til felt';
$strAddPriv = 'Legg til nytt privilegie';
$strAddPrivMessage = 'Du har lagt til ett nytt privilegie.';
$strAddSearchConditions = 'Legg til s�ke-kriterier (innhold i "where"-setningen):';
$strAddUser = 'Legg til en ny bruker';
$strAddUserMessage = 'Du har lagt til en ny bruker.';
$strAffectedRows = 'Ber�rte rader:';
$strAfter = 'Etter';
$strAll = 'Alle';
$strAlterOrderBy = 'Endre tabell rekkef�lge ved';
$strAnalyzeTable = 'Analyser tabell';
$strAnd = 'Og';
$strAnIndex = 'En indeks er lagt til for ';
$strAny = 'Alle';
$strAnyColumn = 'Alle kolonner';
$strAnyDatabase = 'Alle databaser';
$strAnyHost = 'Alle verter';
$strAnyTable = 'Alle tabeller';
$strAnyUser = 'Alle brukere';
$strAPrimaryKey = 'En prim�rn�kkel er lagt til for ';
$strAscending = 'Stigende';
$strAtBeginningOfTable = 'Ved begynnelsen av tabellen';
$strAtEndOfTable = 'Ved slutten av tabellen';
$strAttr = 'Attributter';

$strBack = 'Tilbake';
$strBinary = ' Bin�r ';
$strBinaryDoNotEdit = ' Bin�r - m� ikke redigeres ';
$strBookmarkLabel = 'Navn';
$strBookmarkQuery = 'Lagret SQL-sp�rring';
$strBookmarkThis = 'Lagre denne SQL-sp�rringen';
$strBookmarkView = 'Bare se';
$strBrowse = 'Se p�';
$strBzip = '"bzipped"';

$strCantLoadMySQL = 'kan ikke starte MySQL modulen,<br />vennligst kontroller PHP konfigureringen.';
$strCarriage = 'Carriage return: \\r';
$strChange = 'Endre';
$strCheckAll = 'Kontroller alle';
$strCheckDbPriv = 'Kontroller databse privilegier';
$strCheckTable = 'Kontroller tabell';
$strColumn = 'Kolonne';
$strColumnEmpty = 'Kolonnenavnene er tomme!';
$strColumnNames = 'Kolonnenavn';
$strCompleteInserts = 'Komplette innlegg';
$strConfirm = '�nsker du virkelig � gj�re det?';
$strCopyTable = 'Kopier tabell til';
$strCopyTableOK = 'Tabellen %s er kopiert til %s.';
$strCreate = 'Opprett';
$strCreateNewDatabase = 'Opprett ny database';
$strCreateNewTable = 'Opprett ny tabell i database ';
$strCriteria = 'Kriterier';

$strData = 'Data';
$strDatabase = 'Database ';
$strDatabases = 'databaser';
$strDataOnly = 'Bare data';
$strDbEmpty = 'Databasenavnet er tomt!';
$strDefault = 'Standard';
$strDelete = 'Slett';
$strDeleted = 'Raden er slettet';
$strDeleteFailed = 'Slettingen misslyktes!';
$strDeletePassword = 'Slett passord';
$strDeleteUserMessage = 'Du har slettet brukeren';
$strDelPassMessage = 'Du har slettet passordet til';
$strDescending = 'Synkende';
$strDisableMagicQuotes = '<b>Advarsel:</b> Du har sl�tt p� magic_quotes_gpc i din PHP konfigurasjon. Denne versjonen av PhpMyAdmin vil ikke fungere skikkelig med den. Vennligst se i konfigurasjons delen i PHP manualen for informasjon om hvordan du sl�r den av.';
$strDisplay = 'Vis';
$strDisplayOrder = 'Visningsrekkef�lge:';
$strDoAQuery = 'Utf�r en "query by example" (wildcard: "%")';
$strDocu = 'Dokumentasjon';
$strDoYouReally = 'Vil du virkelig ';
$strDrop = 'Slett';
$strDropDB = 'Slett databasen ';
$strDumpingData = 'Data-ark for tabell';
$strDynamic = 'dynamisk';

$strEdit = 'Endre';
$strEditPrivileges = 'Rediger privilegier';
$strEffective = 'Effektiv';
$strEmpty = 'T�m';
$strEmptyResultSet = 'MySQL returnerte tomt resultat (m.a.o. ingen rader).';
$strEnableMagicQuotes = '<b>Advarsel:</b> Du har ikke sl�tt p� magic_quotes_gpc i din PHP konfigurasjon. Denne versjonen av PhpMyAdmin vil ikke fungere skikkelig uten den. Vennligst se i konfigurasjons delen i PHP manualen for informasjon om hvordan du sl�r den p�.';
$strEnclosedBy = 'omfattet av';
$strEnd = 'Slutt';
$strEnglishPrivileges = ' OBS: MySQL privilegie navn er p� engelsk ';
$strError = 'Feil';
$strEscapedBy = '"escaped" av';
$strExtra = 'Ekstra';

$strField = 'Felt';
$strFields = 'Felter';
$strFieldsEmpty = ' Det var ingen felter! ';
$strFixed = 'statisk';
$strFormat = 'Format';
$strFormEmpty = 'Manglende verdi i skjemaet!';
$strFunction = 'Funksjon';

$strGenTime = 'Produsert den';
$strGo = 'Utf�r';
$strGrants = 'Grants';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'er endret.';
$strHasBeenCreated = 'er opprettet.';
$strHasBeenDropped = 'er slettet.';
$strHasBeenEmptied = 'er t�mt.';
$strHome = 'Hjem';
$strHomepageOfficial = 'Offisiell phpMyAdmin Hjemmeside';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin nedlastingsside';
$strHost = 'Vert';
$strHostEmpty = 'Vertsnavnet er tomt!';

$strIfYouWish = 'Hvis du �nsker � kun lese inn enkelte av tabellens kolonner, angi en komme-separert felt-liste.';
$strIndex = 'Indeks';
$strIndexes = 'Indekser';
$strInsert = 'Sett inn';
$strInsertAsNewRow = 'Sett inn som ny rad';
$strInsertIntoTable = 'Sett inn i tabell';
$strInsertNewRow = 'Sett inn ny rad';
$strInsertTextfiles = 'Les tekstfil inn i tabell';
$strInUse = 'i bruk';

$strKeyname = 'N�kkel';
$strKill = 'Avslutt';

$strLength = 'Lengde';
$strLengthSet = 'Lengde/Sett*';
$strLimitNumRows = 'rader per side';
$strLineFeed = 'Linjeskift: \\n';
$strLines = 'Linjer';
$strLocationTextfile = 'Plassering av filen';
$strLogin = ''; //to translate, but its not in use ...
$strLogout = 'Logg ut';

$strModifications = 'Endringene er lagret';
$strModify = 'Endre';
$strMySQLReloaded = 'MySQL omstartet.';
$strMySQLSaid = 'MySQL sa: ';
$strMySQLShowProcess = 'Vis prosesser';
$strMySQLShowStatus = 'Vis MySQL runtime informasjon';
$strMySQLShowVars = 'Vis MySQL systemvariabler';

$strName = 'Navn';
$strNbRecords = 'antall poster';
$strNext = 'Neste';
$strNo = 'Nei';
$strNoPassword = 'Intet passord';
$strNoPrivileges = 'Ingen privilegier';
$strNoRights = 'Du har ikke nok rettigheter til � v�re her n�!';
$strNoTablesFound = 'Ingen tabeller i databasen.';
$strNotNumber = 'Dette er ikke ett tall!';
$strNotValidNumber = ' er ikke et gyldig rad nummer!';
$strNoUsersFound = 'Ingen bruker(e) funnet.';
$strNull = 'Null';
$strNumberIndexes = ' Antall avanserte indekser ';

$strOffSet = 'offset';
$strOftenQuotation = 'Ofte anf�rselstegn. Valgfritt inneb�rer at kun tekstfelter ("char" og "varchar") felter er omfattet av tegnet.';
$strOptimizeTable = 'Optimiser tabell';
$strOptionalControls = 'Valgfritt. Angir hvordan spesialtegn skrives eller leses.';
$strOptionally = 'Valgfritt';
$strOr = 'Eller';
$strOverhead = 'Overheng';

$strPassword = 'Passord';
$strPasswordEmpty = 'Passordet er blankt!';
$strPasswordNotSame = 'Passordene er ikke like!';
$strPHPVersion = 'PHP Versjon';
$strPos1 = 'Start';
$strPrevious = 'Forrige';
$strPrimary = 'Prim�r';
$strPrimaryKey = 'Prim�rn�kkel';
$strPrinterFriendly = 'Skriver-vennlig versjon av ovenst�ende tabell';
$strPrintView = 'Forh�ndsvisning';
$strPrivileges = 'Privilegier';
$strProducedAnError = 'resulterte i en feil.';
$strProperties = 'Egenskaper';

$strQBE = 'Query by Example'; //to translate
$strQBEDel = 'Slett';
$strQBEIns = 'Sett inn';
$strQueryOnDb = 'SQL-sp�rring i database ';

$strReadTheDocs = 'Les dokumentasjonen';
$strRecords = 'Rader';
$strReloadFailed = 'Omstart av MySQL feilet.';
$strReloadMySQL = 'Omstart av MySQL';
$strRememberReload = 'Husk � re-starte serveren.';
$strRenameTable = 'Endre tabellens navn';
$strRenameTableOK = 'Tabellen %s har f�tt nytt navn %s';
$strRepairTable = 'Reparer tabell';
$strReplace = 'Erstatt';
$strReplaceTable = 'Erstatt tabell med filen';
$strReset = 'T�m skjema';
$strReType = 'Gjenta';
$strRevoke = 'Tilbakekall';
$strRevokeGrant = 'Tilbakekall Grant';
$strRevokeGrantMessage = 'Du har tilbakekalt Grant privileget til';
$strRevokeMessage = 'Du har tilbakekalt privilegiene til';
$strRevokePriv = 'Tibakekall privilegier';
$strRowLength = 'Rad lengde';
$strRows = 'Rader';
$strRowsFrom = 'rader fra';
$strRowSize = ' rad st�relse ';
$strRowsStatistic = 'Rad statistikk';
$strRunning = 'som kj�rer p� ';
$strRunQuery = 'Kj�r sp�rring';
$strRunSQLQuery = 'Kj�r SQL-sp�rring mot database ';

$strSave = 'Lagre';
$strSelect = 'Sp�rring';
$strSelectFields = 'Velg felt (minst ett):';
$strSelectNumRows = 'i sp�rring';
$strSend = 'Kj�r';
$strSequence = 'Rekkef�lge';
$strServerVersion = 'Server versjon';
$strShow = 'Vis';
$strShowingRecords = 'Viser rader ';
$strShowThisQuery = ' Vis denne sp�rring her igjen ';
$strSingly = '(enkeltvis)';
$strSize = 'St�relse';
$strSort = 'Sorter';
$strSpaceUsage = 'Plass bruk';
$strSQLQuery = 'SQL-sp�rring';
$strStatement = 'Statements'; //to translate
$strStrucCSV = 'CSV data';
$strStrucData = 'Struktur og data';
$strStrucDrop = 'Legg til \'drop table\'';
$strStrucOnly = 'Kun struktur';
$strSubmit = 'Send';
$strSuccess = 'Kommandoen/sp�rringen er utf�rt';
$strSum = 'Sum';

$strTable = 'tabell ';
$strTableComments = 'Tabell kommentarer';
$strTableEmpty = 'Tabellnavnet er tomt!';
$strTableMaintenance = 'Tabell vedlikehold';
$strTableStructure = 'Tabell-struktur for tabell';
$strTableType = 'Tabell type';
$strTerminatedBy = 'avsluttet med';
$strTextAreaLength = ' P� grunn av sin lengde,<br /> s� vil muligens dette feltet ikke v�re redigerbar ';
$strTheContent = 'Innholdet av filen er lagt inn.';
$strTheContents = 'Innholdet av filen erstatter valgt tabell for rader med lik identifikator eller unikt felt';
$strTheTerminator = 'Tegn som angir slutt p� felter.';
$strTotal = 'totalt';
$strType = 'Type';

$strUncheckAll = 'Fjern avmerking';
$strUnique = 'Unik';
$strUpdatePassMessage = 'Du har oppdatert passordet til';
$strUpdatePassword = 'Oppdater passord';
$strUpdatePrivMessage = 'Du har oppdatert privilegiene til';
$strUpdateQuery = 'Oppdater sp�rring';
$strUsage = 'Bruk';
$strUseBackquotes = 'Bruk venstre anf�rselstegn med tabell og felt navn';
$strUser = 'Bruker';
$strUserEmpty = 'Brukernavnet er tomt!';
$strUserName = 'Brukernavn';
$strUsers = 'Brukere';
$strUseTables = 'Bruk tabell';

$strValue = 'Verdi';
$strViewDump = 'Vis dump (skjema) av tabell';
$strViewDumpDB = 'Vis dump (skjema) av database';

$strWelcome = 'Velkommen til ';
$strWrongUser = 'Ugyldig brukernavn/passord. Ingen tilgang.';

$strYes = 'Ja';

// To translate
$strDatabasesStats = 'Databases statistics'; //to translate
$strDeletedRows = 'Deleted rows:'; //to translate
$strDropTable = 'Drop table'; //to translate
$strFullText = 'Full Texts'; //to translate
$strInsertedRows = 'Inserted rows:'; //to translate
$strInstructions = 'Instructions'; //to translate
$strNoDatabases = 'No databases'; //to translate
$strNoDropDatabases = '"DROP DATABASE" statements are disabled.'; //to translate
$strNoModification = 'No change'; // To translate
$strPartialText = 'Partial Texts'; //to translate
$strPmaDocumentation = 'phpMyAdmin Documentation'; //to translate
$strServerChoice = 'Server Choice'; //to translate
$strSetEnumVal = 'If field type is "enum" or "set", please enter the values using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').'; //to translate
$strShowPHPInfo = 'Show PHP information';  // To translate
$strStrucExcelCSV = 'CSV for Ms Excel data'; //to translate
$strTables = '%s table(s)';  //to translate
?>
