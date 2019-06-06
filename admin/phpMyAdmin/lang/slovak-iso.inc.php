<?php
/* $Id: slovak-iso.inc.php,v 1.1 2001/07/24 17:15:00 loic1 Exp */
/* By: lubos klokner <erkac@vault-tec.sk> */

$charset = 'iso-8859-2';
$left_font_family = 'verdana CE, Arial CE, verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'verdana CE, Arial CE, helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = ',';
$byteUnits = array('Bajtov', 'KB', 'MB', 'GB');


$strAccessDenied = 'Pr�stup zamietnut�';
$strAction = 'Akcia';
$strAddDeleteColumn = 'Prida�/Odobra� polia st�pcov';
$strAddDeleteRow = 'Prida�/Odobra� krit�ria riadku';
$strAddNewField = 'Prida� nov� pole';
$strAddPriv = 'Prida� nov� privil�gium';
$strAddPrivMessage = 'Privil�gium bolo pridan�.';
$strAddSearchConditions = 'Prida� vyh�ad�vacie parametre (obsah dotazu po "where" pr�kaze):';
$strAddUser = 'Prida� nov�ho pou��vate�a';
$strAddUserMessage = 'Pou��vate� bol pridan�.';
$strAffectedRows = ' Ovplyvnen� riadky: ';
$strAfter = 'Po';
$strAll = 'V�etko';
$strAlterOrderBy = 'Zmeni� poradie tabu�ky pod�a';
$strAnalyzeTable = 'Analyzova� tabu�ku';
$strAnd = 'a';
$strAnIndex = 'Bol pridan� index na ';
$strAny = 'Ak�ko�vek';
$strAnyColumn = 'Ak�ko�vek st�pec';
$strAnyDatabase = 'Ak�ko�vek datab�za';
$strAnyHost = 'Ak�ko�vek hostite�';
$strAnyTable = 'Ak�ko�vek tabu�ka';
$strAnyUser = 'Akyko�vek pou��vate�';
$strAPrimaryKey = 'Bol pridan� prim�rny k��� na ';
$strAscending = 'Vzostupne'; 
$strAtBeginningOfTable = 'Na za�iatku tabu�ky';
$strAtEndOfTable = 'Na konci tabu�ky';
$strAttr = 'Atrib�ty';

$strBack = 'Sp�';
$strBinary = 'Bin�rny';
$strBinaryDoNotEdit = 'Bin�rny - neupravujte ';
$strBookmarkLabel = 'N�zov';
$strBookmarkQuery = 'Ob��ben� SQL dotaz';
$strBookmarkThis = 'Prida� tento SQL dotaz do ob��ben�ch';
$strBookmarkView = 'Iba prezrie�';
$strBrowse = 'Prech�dza�';
$strBzip = '"bzipped"';

$strCantLoadMySQL = 'nieje mo�n� nahra� roz��renie pre MySQL,<br />pros�m skontrolujte konfigur�ciu PHP.';
$strCarriage = 'N�vrat voz�ku (Carriage return): \\r';
$strChange = 'Zmeni�';
$strCheckAll = 'Ozna�i� v�etko';
$strCheckDbPriv = 'Skontrolova� privil�gia datab�zy';
$strCheckTable = 'Skontrolova� tabu�ku';
$strColumn = 'St�pec';
$strColumnEmpty = 'N�zvy st�pcov s� pr�zdne!';
$strColumnNames = 'N�zvy st�pcov';
$strCompleteInserts = '�pln� vlo�enie';
$strConfirm = 'Skuto�ne si �el�te toto vykona�?';
$strCopyTable = 'Skop�rova� tabu�ku do';
$strCopyTableOK = 'Tabu�ka %s bola skor�rovan� do %s.';
$strCreate = 'Vytvori�';
$strCreateNewDatabase = 'Vytvori� nov� datab�zu';
$strCreateNewTable = 'Vytvori� nov� tabu�ku v datab�ze ';
$strCriteria = 'Krit�ria';

$strData = 'D�ta';
$strDatabase = 'Datab�za ';
$strDatabases = 'datab�z(y)';
$strDataOnly = 'Iba d�ta';
$strDbEmpty = 'N�zov datab�zy je pr�zdny!';
$strDefault = 'Predvolen�';
$strDelete = 'Zmaza�';
$strDeleted = 'Riadok bol zmazan�';
$strDeleteFailed = 'Mazanie bolo ne�spe�n�!';
$strDeletePassword = 'Zmaza� heslo';
$strDeleteUserMessage = 'Bol zmazan� pou��vate�';
$strDelPassMessage = 'Bolo zmazan� heslo pre';
$strDescending = 'Zostupne';
$strDisableMagicQuotes = '<b>Varovanie:</b> M�te zapnut� magic_quotes_gpc vo Va�ej konfigur�cii PHP. T�to verzia PhpMyAdmin-a nem��e funguva� spr�vane s t�mto nastaven�m. Pros�m pozrite sa do manu�lu konfigur�cie PHP ako toto nastavenie zmeni�.';
$strDisplay = 'Zobrazi�';
$strDisplayOrder = 'Zobrazi� zoraden�:';
$strDoAQuery = 'Vykona� "dotaz pod�a pr�kladu" (wildcard: "%")';
$strDocu = 'Dokument�cia';
$strDoYouReally = 'Skuto�ne chcete vykona� pr�kaz ';
$strDrop = 'Odstr�ni�';
$strDropDB = 'Odstr�ni� datab�zu ';
$strDumpingData = 'Dampujem d�ta pre tabu�ku';
$strDynamic = 'dynamic';

$strEdit = 'Upravi�';
$strEditPrivileges = 'Upravi� privil�gia';
$strEffective = 'Efekt�vny';
$strEmpty = 'Vypr�zdni�';
$strEmptyResultSet = 'MySQL vr�til pr�zdny v�sledok (tj. nulov� po�et riadkov).';
$strEnableMagicQuotes = '<b>Varovanie:</b> Nem�te zapnut� magic_quotes_gpc vo Va�ej konfigur�cii PHP. PhpMyAdmin to potrebuje pre spr�vnu funk�nos�. Pros�m pozrite sa do manu�lu konfigur�cie PHP ako toto nastavenie zmeni�.';
$strEnclosedBy = 'uzatvoren� do';
$strEnd = 'Koniec';
$strEnglishPrivileges = ' Pozn�mka: n�zvy MySQL privil�gi� s� uv�dzan� v angli�tine. ';
$strError = 'Chyba';
$strEscapedBy = 'uveden� pomocou';
$strExtra = 'Extra';

$strField = 'Pole';
$strFields = 'Polia';
$strFieldsEmpty = ' Po�et pol� je pr�zdny! ';
$strFixed = 'pevn�';
$strFormat = 'Form�t';
$strFormEmpty = 'Ch�baj�ca polo�ka vo formul�ri !';
$strFunction = 'Funkcia';

$strGenTime = 'Vygenerovan�:';
$strGo = 'Vykonaj';
$strGrants = 'Privil�gia';
$strGzip = '"gzip-ovan�"';

$strHasBeenAltered = 'bola zmenen�.';
$strHasBeenCreated = 'bola vytvoren�.';
$strHasBeenDropped = 'bola zmazan�.';
$strHasBeenEmptied = 'bola vypr�zdnen�.';
$strHome = 'Domov';
$strHomepageOfficial = 'Ofici�lne str�nky phpMyAdmin-a';
$strHomepageSourceforge = 'Download str�nka phpMyAdmin-a (Sourceforge)';
$strHost = 'Hostitel';
$strHostEmpty = 'N�zov hostitela je pr�zdny!';

$strIfYouWish = 'Ak si zel�te nahra� iba ur�it� st�pce tabu�ky, �pecifikujte ich ako zoznam pol� oddelen� �iarkou.';
$strIndex = 'Index';
$strIndexes = 'Indexy';
$strInsert = 'Vlo�i�';
$strInsertAsNewRow = 'Vlo�i� ako nov� riadok';
$strInsertIntoTable = 'Vlo�i� do tabu�ky';
$strInsertNewRow = 'Vlo�i� nov� riadok';
$strInsertTextfiles = 'Vlo�i� textov� s�bory do tabu�ky';
$strInUse = 'pr�ve sa pou��va';

$strKeyname = 'K���ov� n�zov';
$strKill = 'Zabi�';

$strLength = 'D�ka';
$strLengthSet = 'D�ka/Nastavi�*';
$strLimitNumRows = 'z�znamov na str�nku';
$strLineFeed = 'Ukon�enie riadku (Linefeed): \\n';
$strLines = 'Riadky';
$strLocationTextfile = 'Lok�cia textov�ho s�boru';
$strLogin = ''; //to translate, but its not in use ...
$strLogout = 'Odhl�si� sa';

$strModifications = 'Zmeny boli ulo�en�';
$strModify = 'Zmeni�';
$strMySQLReloaded = 'MySQL znovu-na��tan�.';
$strMySQLSaid = 'MySQL hl�si: ';
$strMySQLShowProcess = 'Zobrazi� procesy';
$strMySQLShowStatus = 'Zobrazi� MySQL inform�cie o behu';
$strMySQLShowVars = 'Zobrazi� MySQL syst�mov� premenn�';

$strName = 'N�zov';
$strNbRecords = 'Po�et z�znamov';
$strNext = '�al��';
$strNo = 'Nie';
$strNoPassword = '�iadne heslo';
$strNoPrivileges = '�iadne privil�gia';
$strNoRights = 'Nem�te dostato�n� pr�va na vykonanie tejto akcie!';
$strNoTablesFound = 'Neboli n�jden� �iadne tabu�ky v tejto dat�baze.';
$strNotNumber = 'Toto nieje ��slo!';
$strNotValidNumber = ' nieje platn� ��slo riadku!';
$strNoUsersFound = 'Nebol n�jden� �iadny pou��vate�.';
$strNull = 'Nulov�';
$strNumberIndexes = ' Po�et roz��ren�ch indexov ';

$strOffSet = 'Offset';
$strOftenQuotation = '�asto uvodzuj�ce znaky. Volite�ne znamena, �e iba polia typu char a varchar s� uzatvoren� do "uzatv�rac�ch" znakov.';
$strOptimizeTable = 'Optimalozova� tabu�ku';
$strOptionalControls = 'Voliteln�. Ur�uje ako zapisova� alebo ��ta� �peci�lne znaky.';
$strOptionally = 'Volite�ne';
$strOr = 'alebo';
$strOverhead = 'Naviac';

$strPassword = 'Heslo';
$strPasswordEmpty = 'Heslo je pr�zdne!';
$strPasswordNotSame = 'Hesl� sa nezhoduj�!';
$strPHPVersion = 'Verzia PHP';
$strPos1 = 'Za�iatok';
$strPrevious = 'Predch�dzaj�ci';
$strPrimary = 'Prim�rny';
$strPrimaryKey = 'Prim�rny k���';
$strPrinterFriendly = 'Verzia pre tla�';
$strPrintView = 'N�h�ad k tla�i';
$strPrivileges = 'Privil�gia';
$strProducedAnError = 'vytvoril chybu.';
$strProperties = 'Vlastnosti';

$strQBE = 'Dotaz pod�a pr�kladu';
$strQBEDel = 'Zmaza�';
$strQBEIns = 'Vlo�i�';
$strQueryOnDb = ' SQL dotaz v datab�ze ';

$strReadTheDocs = '��ta� dokument�ciu';
$strRecords = 'Z�znamov';
$strReloadFailed = 'Znovu-na��tanie MySQL bolo ne�spe�n�.';
$strReloadMySQL = 'Znovu-na��ta� MySQL';
$strRememberReload = 'Nezabudnite znovu-na��ta� MySQL server.';
$strRenameTable = 'Premenova� tabu�ku na';
$strRenameTableOK = 'Tabu�ka %s bola premenovan� na %s';
$strRepairTable = 'Opravi� tabu�ku';
$strReplace = 'Nahradi�';
$strReplaceTable = 'Nahradi� d�ta v tabu�ke s�borom';
$strReset = 'P�vodn� (Reset)';
$strReType = 'Nap�sa� znova';
$strRevoke = 'Zrusi�';
$strRevokeGrant = 'Zru�i� polovenie pridelova� privil�gia';
$strRevokeGrantMessage = 'Bolo zru�en� pr�vo pridelova� privil�gia pre';
$strRevokeMessage = 'Boli zru�en� privil�gia pre';
$strRevokePriv = 'Zru�i� privil�gia';
$strRowLength = 'D�ka riadku';
$strRows = 'Riadkov';
$strRowsFrom = 'riadky za��naj� od';
$strRowSize = ' Ve�kos� riadku ';
$strRowsStatistic = '�tatistika riadku';
$strRunning = 'be�i na ';
$strRunQuery = 'Odo�li dotaz';
$strRunSQLQuery = 'Spusti� SQL dotaz(y) v datab�ze ';

$strSave = 'Ulo�i�';
$strSelect = 'Vybra�';
$strSelectFields = 'Zvoli� pole (najmenej jedno):';
$strSelectNumRows = 'v dotaze';
$strSend = 'Po�li';
$strSequence = 'Seq.';
$strServerVersion = 'Verzia serveru';
$strShow = 'Uk�za�';
$strShowingRecords = 'Uk�za� z�znamy ';
$strShowThisQuery = ' Zobrazi� tento dotaz znovu ';
$strSingly = '(po jednom)';
$strSize = 'Ve�kos�';
$strSort = 'Triedi�';
$strSpaceUsage = 'Zabran� miesto';
$strSQLQuery = 'SQL dotaz';
$strStatement = '�daj';
$strStrucCSV = 'CSV d�ta';
$strStrucData = '�trukt�ru a d�ta';
$strStrucDrop = 'Pridaj \'vyma� tabu�ku\'';
$strStrucOnly = 'Iba �trukt�ru';
$strSubmit = 'Odo�li';
$strSuccess = 'SQL dotaz bol �spe�ne vykonan�';
$strSum = 'Celkom';

$strTable = 'tabu�ka ';
$strTableComments = 'Koment�r k tabu�ke';
$strTableEmpty = 'Tabu�ka je pr�zdna!';
$strTableMaintenance = '�dr�ba tabu�ky';
$strTableStructure = '�trukt�ra tabu�ky pre tabu�ku';
$strTableType = 'Typ tabu�ky';
$strTerminatedBy = 'ukon�en�';
$strTextAreaLength = ' Toto mo�no nepojde upravi�,<br /> k�li svojej d�ke ';
$strTheContent = 'Obsah V�ho s�boru bol vlo�en�.';
$strTheContents = 'Obsah s�boru prep��e obsah vybranej tabu�ky v riadkoch s identick�m prim�rnym alebo unik�tnym k���om.';
$strTheTerminator = 'Ukon�enie pol�.';
$strTotal = 'celkovo';
$strType = 'Typ';

$strUncheckAll = 'Odzna�i� v�etko';
$strUnique = 'Unik�tny';
$strUpdatePassMessage = 'Bolo zmenen� heslo pre pou��vate�a';
$strUpdatePassword = 'Zmeni� heslo';
$strUpdatePrivMessage = 'Boli zmenen� privil�gia pre pou��vate�a';
$strUpdateQuery = 'Aktualizova� dotaz';
$strUsage = 'Vyu�itie';
$strUseBackquotes = ' Pou�i� opa�n� apostrof pri n�zvoch tabuliek a pol� ';
$strUser = 'Pou��vate�';
$strUserEmpty = 'Meno pou��vate�a je pr�zdne!';
$strUserName = 'Meno pou��vate�a';
$strUsers = 'Pou��vatelia';
$strUseTables = 'Pou�i� tabu�ky';

$strValue = 'Hodnota';
$strViewDump = 'Zobrazi� dump (sch�mu) tabu�ky';
$strViewDumpDB = 'Zobrazi� dump (sch�mu) datab�zy';

$strWelcome = 'Vitajte v ';
$strWrongUser = 'Zl� pou��vate�sk� meno alebo heslo. Pr�stup zamietnut�.';

$strYes = '�no';

// To translate
$strDatabasesStats = 'Databases statistics';//to translate
$strDeletedRows = 'Deleted rows:';
$strDropTable = 'Drop table';
$strExtendedInserts = 'Extended inserts';
$strInsertedRows = 'Inserted rows:';
$strInstructions = 'Instructions';//to translate
$strNoDatabases = 'No databases';
$strNoDropDatabases = '"DROP DATABASE" statements are disabled.';
$strNoModification = 'No change'; // To translate
$strSetEnumVal = 'If field type is "enum" or "set", please enter the values using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';
$strShowPHPInfo = 'Show PHP information';  // To translate
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strTables = '%s table(s)';  //to translate
$strServerChoice = 'Server Choice';//to translate 
$strPmaDocumentation = 'phpMyAdmin Documentation';//to translate 
$strFullText = 'Full Texts';//to translate
$strPartialText = 'Partial Texts';//to translate
?>
