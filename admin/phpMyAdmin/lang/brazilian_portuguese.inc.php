<?php
/* $Id: brazilian_portuguese.inc.php,v 1.58 2001/08/30 18:20:56 swix Exp $ */

$charset = 'iso-8859-1';
$left_font_family = 'verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');


$strAccessDenied = 'Acesso Negado';
$strAction = 'A��es';
$strAddDeleteColumn = 'Add/Delete Field Columns'; //to translate (tbl_qbe.php)
$strAddDeleteRow = 'Add/Delete Criteria Row'; //to translate (tbl_qbe.php)
$strAddNewField = 'Adiciona novo campo';
$strAddPriv = 'Adiciona um novo Privil�gio';
$strAddPrivMessage = 'Privil�gio adicionado.';
$strAddSearchConditions = 'Condi��o de Pesquisa (Complemento da clausula "onde"):';
$strAddUser = 'Adicionar um novo usu�rio';
$strAddUserMessage = 'Usu�rio adcionado.';
$strAfter = 'Depois';
$strAll = 'Todos';
$strAlterOrderBy = 'Alterar tabela ordenada por';
$strAnalyzeTable = 'Analizar tabela';
$strAnd = 'E';
$strAnIndex = 'Um indice foi adicionado na ';
$strAny = 'Qualquer';
$strAnyColumn = 'Qualquer coluna';
$strAnyDatabase = 'Qualquer banco de dados';
$strAnyHost = 'Qualquer servidor';
$strAnyTable = 'Qualquer tabela';
$strAnyUser = 'Qualquer usu�rio';
$strAPrimaryKey = 'Chave prim�ria acrescentada na ';
$strAscending = 'Ascendente';
$strAtBeginningOfTable = 'No come�o da tabela';
$strAtEndOfTable = 'Ao fim da tabela';
$strAttr = 'Atributos';

$strBack = 'Voltar';
$strBinary = ' Bin�rio ';
$strBinaryDoNotEdit = ' Bin�rio - n�o edite ';
$strBookmarkLabel = 'Nome';
$strBookmarkQuery = 'Procura de SQL salva';
$strBookmarkThis = 'Salvar essa procura de SQL';
$strBookmarkView = 'Apenas visualiza';
$strBrowse = 'Visualiza';

$strCantLoadMySQL = 'n�o foi poss�vel carregar extens�o do MySQL,<br />por favor cheque a configura��o do PHP.';
$strCarriage = 'Caracter de retorno: \\r';
$strChange = 'Muda';
$strCheckAll = 'Check All';
$strCheckDbPriv = 'Verifica Privil�gios do Banco de Dados';
$strCheckTable = 'Verifica tabela';
$strColumn = 'Coluna';
$strColumnEmpty = 'Os nomes das colunas est�o vazios!';
$strColumnNames = 'Nome da Colunas';
$strCompleteInserts = 'Inser��es Completas';
$strConfirm = 'Voc� tem certeza?';
$strCopyTable = 'Copia tabela para';
$strCopyTableOK = 'Tabela %s copiada para %s.';
$strCreate = 'Cria';
$strCreateNewDatabase = 'Cria novo banco de dados';
$strCreateNewTable = 'Cria nova tabela no banco de dados ';
$strCriteria = 'Crit�rio';

$strData = 'Dados';
$strDatabase = 'Banco de Dados ';
$strDatabases = 'Banco de Dados';
$strDataOnly = 'Dados apenas';
$strDbEmpty = 'O nome do banco de dados est� vazio!';
$strDefault = 'Padr�o';
$strDelete = 'Remove';
$strDeleted = 'Registro eliminado';
$strDeleteFailed = 'N�o foi poss�vel apagar!';
$strDeletePassword = 'Apagar Senha';
$strDeleteUserMessage = 'Voc� deletou o usu�rio';
$strDelPassMessage = 'Voc� deletou a senha de';
$strDescending = 'Descendente';
$strDisableMagicQuotes = '<b>Aten��o:</b> You have enabled magic_quotes_gpc in your PHP configuration. This version of PhpMyAdmin cannot work properly with it. Please have a look at the configuration section of the PHP manual for information on how to disable it.'; //to translate
$strDisplay = 'Tela';
$strDoAQuery = 'Fa�a uma "procura por exemplo" (coringa: "%")';
$strDocu = 'Documenta��o';
$strDoYouReally = 'Confirma : ';
$strDrop = 'Elimina';
$strDropDB = 'Elimina o banco de dados: ';
$strDumpingData = 'Extraindo dados da tabela';
$strDynamic = 'din�mico';

$strEdit = 'Edita';
$strEditPrivileges = 'Edita Privil�gios';
$strEffective = 'Efetivo';
$strEmpty = 'Limpa';
$strEmptyResultSet = 'MySQL retornou um conjunto vazio (ex. zero registros).';
$strEnableMagicQuotes = '<b>Warning:</b> You haven\'t enabled magic_quotes_gpc in your PHP configuration. PhpMyAdmin needs this to work properly. Please have a look at the configuration section of the PHP manual for information on how to enable it.'; //to translate
$strEnclosedBy = 'delimitados por';
$strEnd = 'Fim';
$strEnglishPrivileges = ' Nota: nomes de privil�gios do MySQL s�o expressos em ingl�s ';
$strError = 'Erro';
$strEscapedBy = 'contornados por';
$strExtra = 'Extra';

$strField = 'Campo';
$strFields = 'Campos';
$strFixed = 'fixo';
$strFormat = 'Formato';
$strFunction = 'Fun�oes';

$strGenTime = 'Tempo de Genera��o';
$strGo = 'Executa';
$strGrants = 'Conceder';

$strHasBeenAltered = 'foi alterado.';
$strHasBeenCreated = 'foi criado.';
$strHasBeenDropped = 'foi eliminado.';
$strHasBeenEmptied = 'foi esvaziado.';
$strHome = 'Base';	// Alguem tem alguma palavra melhor para 'Home'?
$strHomepageOfficial = 'P�gina Oficial do phpMyAdmin';
$strHomepageSourceforge = 'Nova P�gina do phpMyAdmin';
$strHost = 'Servidor';
$strHostEmpty = 'O nome do servidor est� vazio!';

$strIfYouWish = 'Para carregar apenas algumas colunas da tabela, fa�a uma lista separada por v�rgula.';
$strIndex = '�ndice';
$strIndexes = '�ndices';
$strInsert = 'Insere';
$strInsertAsNewRow = 'Insere uma nova coluna';
$strInsertIntoTable = 'Insere na tabela';
$strInsertNewRow = 'Insere novo registro';
$strInsertTextfiles = 'Insere arquivo texto na tabela';
$strInUse = 'em uso';

$strKeyname = 'Nome chave';
$strKill = 'Matar';

$strLength = 'Tamanho';
$strLengthSet = 'Tamanho/Definir*';
$strLimitNumRows = 'records per page';
$strLineFeed = 'Caracter de Alimenta��o de Linha: \\n';
$strLines = 'Linhas';
$strLocationTextfile = 'Localiza��o do arquivo texto';
$strLogin = ''; //to translate, but its not in use ...
$strLogout = 'Sair';

$strModifications = 'Modifica��es foram salvas';
$strModify = 'Modificar';
$strMySQLReloaded = 'MySQL reiniciado.';
$strMySQLSaid = 'Mensagens do MySQL : ';
$strMySQLShowProcess = 'Mostra os Processos';
$strMySQLShowStatus = 'Mostra informa��o de runtime do MySQL';
$strMySQLShowVars = 'Mostra vari�veis de sistema do MySQL';

$strName = 'Nome';
$strNext = 'Pr�ximo';
$strNo = 'N�o';
$strNoPassword = 'Sem Senha';
$strNoPrivileges = 'Sem Privil�gios';
$strNoRights = 'Voc� n�o tem direitos suficientes para estar aqui agora!';
$strNoTablesFound = 'Nenhuma tabela encontrada no banco de dados';
$strNoUsersFound = 'Nenhum usu�rio(s) encontrado.';
$strNull = 'Nulo';
$strNumberIndexes = ' N�mero de �ndices avan�ados ';

$strOftenQuotation = 'Em geral aspas. OPCIONAL significa que apenas campos de caracteres s�o delimitados por caracteres "delimitadores"';
$strOptimizeTable = 'Optimizar tabela';
$strOptionalControls = 'Opcional. Controla como ler e escrever caracteres especiais.';
$strOptionally = 'OPCIONAL';
$strOr = 'Ou';
$strOverhead = 'Overhead'; //to translate -> How is this word used in the program?

$strPassword = 'Senha';
$strPasswordEmpty = 'A senhas est� vazia!';
$strPasswordNotSame = 'As senhas n�o s�o a mesma!';
$strPHPVersion = 'Vers�o do PHP';
$strPos1 = 'In�cio';
$strPrevious = 'Anterior';
$strPrimary = 'Prim�ria';
$strPrimaryKey = 'Chave Prim�ria';
$strPrinterFriendly = 'Printer friendly version of above table';
$strPrintView = 'Visualiza��o para Impress�o';
$strPrivileges = 'Privil�gios';
$strProducedAnError = 'produziu um erro.';
$strProperties = 'Propriedades';

$strQBE = 'Procura por Exemplo';
$strQBEDel = 'Del';  //to translate (used in tbl_qbe.php)
$strQBEIns = 'Ins';  //to translate (used in tbl_qbe.php)

$strReadTheDocs = 'Leia a documenta��o';
$strRecords = 'Registros';
$strReloadFailed = 'Reinicializa��o do MySQL falhou.';
$strReloadMySQL = 'Reinicializa o MySQL';
$strRememberReload = 'Lembre-se recarregar o servidor.';
$strRenameTable = 'Renomeia a tabela para ';
$strRenameTableOK = 'Tabela %s renomeada para %s';
$strRepairTable = 'Reparar tabela';
$strReplace = 'Substituir';
$strReplaceTable = 'Substituir os dados da tabela pelos do arquivo';
$strReset = 'Resetar';
$strReType = 'Re-type'; //to translate -> In what context is this used? Re-Type the Password?
$strRevoke = 'Revogar';
$strRevokeGrant = 'Revogar Privil�gio de Conceder';
$strRevokeGrantMessage = 'Voc� revogou o privil�gio de conceder para';
$strRevokeMessage = 'Voc� revogou os privil�gios para';
$strRevokePriv = 'Revogar Privil�gios';
$strRowLength = 'Tamanho da Coluna';
$strRows = 'Colunas';
$strRowsFrom = 'colunas come�ando de';
$strRowsStatistic = 'Estatist�cas da Coluna';
$strRunning = 'Rodando em ';
$strRunQuery = 'Submit Query'; //to translate (tbl_qbe.php)
$strRunSQLQuery = 'Executa comando SQL no banco de dados ';

$strSave = 'Salva';
$strSelect = 'Procura';
$strSelectFields = 'Selecione os campos (no m�nimo 1)';
$strSelectNumRows = 'in query';
$strSend = 'Envia';
$strSequence = 'Sequ�ncia';
$strServerVersion = 'Vers�o do Servidor';
$strShow = 'Mostrar';
$strShowingRecords = 'Mostrando registros ';
$strSingly = '(singly)'; //to translate
$strSize = 'Tamanho';
$strSort = 'Sort'; //to translate (tbl_qbe.php)
$strSpaceUsage = 'Uso do espa�o';
$strSQLQuery = 'comando SQL';
$strStatement = 'Statements'; //to translate
$strStrucCSV = 'Dados CSV';
$strStrucData = 'Estrutura e dados';
$strStrucDrop = 'Adiciona \'Sobrescrever\'';
$strStrucOnly = 'Somente estrutura';
$strSubmit = 'Submete';
$strSuccess = 'Seu comando SQL foi executado com sucesso';
$strSum = 'Soma';

$strTable = 'tabela ';
$strTableComments = 'Coment�rios da tabela';
$strTableEmpty = 'O Nome da Tabela est� vazio!';
$strTableMaintenance = 'Tabela de Manuten��o';
$strTableStructure = 'Estrutura da tabela';
$strTableType = 'Tipo da Tabela';
$strTerminatedBy = 'terminados por';
$strTextAreaLength = ' Por causa da sua largura,<br /> esse campo pode n�o ser edit�vel ';
$strTheContent = 'O conte�do do seu arquivo foi inserido';
$strTheContents = 'O conte�do do arquivo substituiu o conte�do da tabela que tinha a mesma chave prim�ria ou �nica';
$strTheTerminator = 'Terminador de campos.';
$strTotal = 'total';
$strType = 'Tipo';

$strUncheckAll = 'Uncheck All'; //to translate
$strUnique = '�nico';
$strUpdatePassMessage = 'Voc� mudou a senha para';
$strUpdatePassword = 'Mudar Senha';
$strUpdatePrivMessage = 'Voc� mudou os privil�ios para';
$strUpdateQuery = 'Update Query'; //to translate (tbl_qbe.php)
$strUsage = 'Uso';
$strUser = 'Usu�rio';
$strUserEmpty = 'O nome do usu�rio est� vazio!';
$strUserName = 'Nome do usu�rio';
$strUsers = 'Usu�rios';
$strUseTables = 'Use Tables'; //to translate (tbl_qbe.php)

$strValue = 'Valor';
$strViewDump = 'Ver o esquema da tabela';
$strViewDumpDB = 'Ver o esquema do banco de dados';

$strWelcome = 'Bem vindo ao ';
$strWrongUser = 'Usu�rio ou Senha errado. Acesso Negado.';

$strYes = 'Sim';

// automatic generated by langxlorer.php (June 27, 2001, 6:53 pm)
// V0.11 - experimental (Steve Alberty - alberty@neptunlabs.de)
$strNotNumber = 'This is not a number!';  //to translate
$strNotValidNumber = ' is not a valid row number!';  //to translate

// export Zip (July 07, 2001, 19:48am)
$strBzip = '"bzipped"';
$strGzip = '"gzipped"';  //to translate

// To translate
$strAffectedRows = 'Affected rows:';
$strDisplayOrder = 'Display order:';
$strDatabasesStats = 'Databases statistics';//to translate
$strDeletedRows = 'Deleted rows:';
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
$strShowThisQuery = ' Show this query here again ';  //to translate
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strTables = '%s table(s)';  //to translate
$strUseBackquotes = 'Use backquotes with tables and fields\' names';
$strServerChoice = 'Server Choice';//to translate 
$strPmaDocumentation = 'phpMyAdmin Documentation';//to translate 
$strFullText = 'Full Texts';//to translate
$strPartialText = 'Partial Texts';//to translate
?>
