<?php
/* $Id: spanish.inc.php,v 1.62 2001/08/30 18:20:56 swix Exp $ */

$charset = 'iso-8859-1';
$left_font_family = 'verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');


$strAccessDenied = 'Acceso denegado ';
$strAction = 'Acci&oacute;n';
$strAddDeleteColumn = 'A�adir/borrar  columna de criterio';
$strAddDeleteRow = 'A�adir/borrar fila de criterio';
$strAddNewField = 'Insertar nuevo campo';
$strAddPriv = 'Agregar nuevo privilegio'; 
$strAddPrivMessage = 'Ud. ha a�adido un nuevo privilegio.'; 
$strAddSearchConditions = 'Insertar condiciones de b&uacute;squeda (cuerpo de la clausula "where"):';
$strAddUser = 'Agregar nuevo usuario'; 
$strAddUserMessage = 'Ud. ha agregado un nuevo usuario.'; 
$strAffectedRows = 'Filas afectadas: ';
$strAfter = 'Despues'; 
$strAll = 'Todos/as'; 
$strAlterOrderBy = 'Modificar el Order By de la tabla'; 
$strAnalyzeTable = 'Analizar tabla'; 
$strAnd = 'Y';
$strAnIndex = 'Un &iacute;ndice se ha Insertado en ';
$strAny = 'cualquiera'; 
$strAnyColumn = 'Cualquier columna'; 
$strAnyDatabase = 'Cualquier base de datos'; 
$strAnyHost = 'Cualquier host'; 
$strAnyTable = 'Cualquier tabla'; 
$strAnyUser = 'Cualquier usuario'; 
$strAPrimaryKey = 'Se ha insertado una nueva clave primaria en ';
$strAscending = 'Ascendente';
$strAtBeginningOfTable = 'Al comienzo de la tabla'; 
$strAtEndOfTable = 'Al final de la tabla'; 
$strAttr = 'Atributos';

$strBack = 'Volver'; 
$strBinary = ' Binario ';
$strBinaryDoNotEdit = ' Binario - no editar! ';
$strBookmarkLabel = 'Etiqueta'; 
$strBookmarkQuery = 'SQL-query guardado en favoritos';
$strBookmarkThis = 'Guardar este SQL-query en favoritos';
$strBookmarkView = 'Solamente ver';
$strBrowse = 'Examinar';

$strCantLoadMySQL = 'imposible cargar extension MySQL,<br />por favor revise la configuracion de PHP.';
$strCarriage = 'Retorno de carro: \\r';
$strChange = 'Cambiar';
$strCheckAll = 'Revisar todos/as'; 
$strCheckDbPriv = 'Revisar privilegios de la base de datos'; 
$strCheckTable = 'Revisar tabla'; 
$strColumn = 'Columna'; 
$strColumnEmpty = 'Los nombres de columna estan vacios!'; 
$strColumnNames = 'Nombre de columnas';
$strCompleteInserts = 'Completar los Inserts';
$strConfirm = 'Realmente quieres hacerlo?'; 
$strCopyTable = 'Copiar la tabla a';
$strCopyTableOK = 'La tabla %s ha sido copiada a %s.';
$strCreate = 'Crear';
$strCreateNewDatabase = 'Crear nueva base de datos';
$strCreateNewTable = 'Crear nueva tabla en base de datos ';
$strCriteria = 'Criterio';

$strData = 'Datos'; 
$strDatabase = 'Base De Datos ';
$strDatabases = 'Bases de datos';
$strDatabasesStats = 'Estadisticas de la base';
$strDataOnly = 'Solo datos'; 
$strDbEmpty = 'El nombre de la base de datos esta vacio!'; 
$strDefault = 'Defecto';
$strDelete = 'Borrar';
$strDeleted = 'La fila se ha borrado';
$strDeletedRows = 'Filas Borradas: ';
$strDeleteFailed = 'La operacion de borrado ha fallado!'; 
$strDeletePassword = 'Borrar contrase�a'; 
$strDeleteUserMessage = 'Ud. ha borrado el usuario'; 
$strDelPassMessage = 'Ud. ha borrado la contrase�a para'; 
$strDescending = 'Descendente';
$strDisableMagicQuotes = '<b>Atencion:</b> Ud. ha activado magic_quotes_gpc en su configuracion de PHP. Esta version de PhpMyAdmin no funciona correctamente con ello. Por favor revise la seccion de configuracion en el manual de PHP para informacion de como desactivar dicha opcion.'; 
$strDisplay = 'Mostrar'; 
$strDisplayOrder = 'Mostrar en este orden:';
$strDoAQuery = 'Realizar una "consulta de ejemplo" (wildcard: "%")';
$strDocu = 'Documentaci&oacute;n';
$strDoYouReally = 'Desea realmente hacer  ';
$strDrop = 'Eliminar';
$strDropDB = 'Eliminar base de datos ';
$strDropTable = 'Borrar Tabla';
$strDumpingData = 'Volcar la base de datos para la tabla';
$strDynamic = 'dinamico/a'; 

$strEdit = 'Editar';
$strEditPrivileges = 'Editar Privilegios'; 
$strEffective = 'Efectivo/a'; 
$strEmpty = 'Vaciar';
$strEmptyResultSet = 'MySQL ha devuelto un valor vac&iacute;o (i.e. cero columnas).';
$strEnableMagicQuotes = '<b>Atencion:</b> Ud. no ha activado magic_quotes_gpc en la configuracion de PHP. PhpMyAdmin necesita esta opcion para funcionar correctamente. Por favor revise la seccion de configuracion en el manual de PHP para informacion de como activar dicha opcion.'; 
$strEnclosedBy = 'Encerrado por';
$strEnd = 'Fin';
$strEnglishPrivileges = ' Nota: Los nombres de privilegios de MySQL estan expresados en Ingles ';
$strError = 'Error';
$strEscapedBy = 'Escapado por';
$strExtendedInserts = 'Inserts Extendidos';
$strExtra = 'Extra';

$strField = 'Campo';
$strFields = 'Campos';
$strFieldsEmpty = ' El numero de campos esta vacio! ';
$strFixed = 'fijo';
$strFormat = 'Formato'; 
$strFormEmpty = 'Falta un valor en el form !';
$strFunction = 'Funci&oacute;n';

$strGenTime = 'Tiempo de Generacion'; 
$strGo = 'Siga';
$strGrants = 'Permisos';

$strHasBeenAltered = 'se ha Modificado.';
$strHasBeenCreated = 'se ha creado.';
$strHasBeenDropped = 'se ha eliminado.';
$strHasBeenEmptied = 'se ha vaciado.';
$strHome = 'Home';
$strHomepageOfficial = 'Pagina Oficial de phpMyAdmin'; 
$strHomepageSourceforge = 'Bajar phpMyAdmin de Sourceforge'; 
$strHost = 'Host';
$strHostEmpty = 'El nombre del host esta vacio!!'; 

$strIfYouWish = 'Si deseas cargar solo una de las columnas de la tabla, espedificar una coma separando los campos.';
$strIndex = 'Indice';
$strIndexes = 'Indices'; 
$strInsert = 'Insertar';
$strInsertAsNewRow = 'Insertar como una nueva fila'; 
$strInsertedRows = 'Filas Insertadas:';
$strInsertIntoTable = 'Insertar en tabla';
$strInsertNewRow = 'Insertar nueva fila';
$strInsertTextfiles = 'Insertar archivo de texto en la tabla';
$strInstructions = 'Instrucciones';
$strInUse = 'en uso'; 

$strKeyname = 'Nombre de la clave';
$strKill = 'Matar proceso'; 

$strLength = 'Longitud'; 
$strLengthSet = 'Longitud/Valores*';
$strLimitNumRows = 'registros por pagina'; 
$strLineFeed = 'Retorno de carro: \\n';
$strLines = 'Lineas';
$strLocationTextfile = 'Localizaci&oacute;n del archivo de texto';
$strLogin = ''; //to translate, but its not in use ...
$strLogout = 'Salir';

$strModifications = 'Se han guardado las modificaciones';
$strModify = 'Modificar';
$strMySQLReloaded = 'Reinicio de MySQL.';
$strMySQLSaid = 'MySQL ha dicho: ';
$strMySQLShowProcess = 'Mostrar procesos';
$strMySQLShowStatus = 'Mostrar informaci&oacute;n de marcha de MySQL';
$strMySQLShowVars = 'Mostrar las variables del sistema MySQL';

$strName = 'Nombre';
$strNbRecords = 'No. De filas';
$strNext = 'Pr&oacute;xima';
$strNo = 'No';
$strNoDatabases = 'No hay bases de datos';
$strNoDropDatabases = '"DROP DATABASE" las sentencias estan deshabilitadas.';
$strNoModification = 'Sin cambios';
$strNoPassword = 'Sin Contrase�a'; 
$strNoPrivileges = 'Sin Privilegios'; 
$strNoRights = 'Ud. no tiene suficientes privilegios para estar aqui ahora!'; 
$strNoTablesFound = 'No se han encontrado tablas en la base de datos.';
$strNotNumber = 'Esto no es un numero!';
$strNotValidNumber = ' no es un numero de fila valido!';
$strNoUsersFound = 'Usuario(s) no encontrado(s).'; 
$strNull = 'Null';
$strNumberIndexes = ' Numero de indices avanzados '; 

$strOftenQuotation = 'A menudo comillas. OPCIONALMENTE signif&iacute;ca que &uacute;nicamente los campos char y varchar estan encerrados por el "enclosed by"-character.';
$strOptimizeTable = 'Optimizar tabla'; 
$strOptionalControls = 'Opcional. Controla como escribir o leer caracteres especiales.';
$strOptionally = 'OPCIONALMENTE';
$strOr = 'O';
$strOverhead = 'Overhead'; //to translate

$strPassword = 'Contrase�a'; 
$strPasswordEmpty = 'La Contrase�a esta vac�a!'; 
$strPasswordNotSame = 'Las contrase�as no coinciden!'; 
$strPHPVersion = 'Version del PHP'; 
$strPmaDocumentation = 'Documentacion de phpMyAdmin';
$strPos1 = 'Empezar';
$strPrevious = 'Previo';
$strPrimary = 'Primaria'; 
$strPrimaryKey = 'Clave Primaria'; 
$strPrinterFriendly = 'Version Printer friendly de la tabla de arriba'; 
$strPrintView = 'Vista de Impresion'; 
$strPrivileges = 'Privilegios'; 
$strProducedAnError = 'se produjo un error.';
$strProperties = 'Propiedades';

$strQBE = 'Query de ejemplo';
$strQBEDel = 'Del';  //to translate (used in tbl_qbe.php)
$strQBEIns = 'Ins';  //to translate (used in tbl_qbe.php)
$strQueryOnDb = 'SQL-query en la Base de datos ';

$strReadTheDocs = 'Leer los documentos';
$strRecords = 'Campos';
$strReloadFailed = 'El reinicio de MySQL ha fallado.';
$strReloadMySQL = 'Reinicio de MySQL';
$strRememberReload = 'Recuerde recargar el servidor.'; 
$strRenameTable = 'Renombrar la tabla a';
$strRenameTableOK = 'Tabla %s se ha renombrado a %s';
$strRepairTable = 'Reparar Tabla'; 
$strReplace = 'Reemplazar';
$strReplaceTable = 'Reemplazar datos de tabla con archivo';
$strReset = 'Reset';
$strReType = 'Re-escriba'; 
$strRevoke = 'Revocar'; 
$strRevokeGrant = 'Revocar Grant'; 
$strRevokeGrantMessage = 'Ud. ha revocado el privilegio Grant para '; 
$strRevokeMessage = 'Ud. ha revocado los privilegios para'; 
$strRevokePriv = 'Revocar Privilegios'; 
$strRowLength = 'Logitud de la fila'; 
$strRows = 'Filas'; 
$strRowsFrom = 'filas empezando de';
$strRowSize = ' Tama�o de la fila ';
$strRowsStatistic = 'Estadisticas de la fila'; 
$strRunning = 'ejecutandose on ';
$strRunQuery = 'Ejecutar Query';
$strRunSQLQuery = 'Ejecutar SQL query/queries en la base de datos ';

$strSave = 'Grabar';
$strSelect = 'Seleccionar';
$strSelectFields = 'Seleccionar campos (al menos uno):';
$strSelectNumRows = 'en la consulta';
$strSend = 'enviar';
$strSequence = 'Seq.'; //to translate
$strServerChoice = 'Eleccion de Server';
$strServerVersion = 'Version del Servidor'; 
$strSetEnumVal = 'Si el tipo de campo es "enum" o "set", por favor ingrese los valores usando este formato: \'a\',\'b\',\'c\'...<br />Si alguna vez necesita poner una barra invertida("\") o una comilla simple ("\'") entre esos valores, siempre ponga una barra invertida. (Por Ejemplo \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Mostrar';
$strShowingRecords = 'Mostrando campos ';
$strShowPHPInfo = 'Mostrar informacion de PHP';
$strShowThisQuery = ' Mostrar esta consulta otra vez ';
$strSingly = '(singly)'; //to translate
$strSize = 'Tama�o'; 
$strSort = 'Ordenar';
$strSpaceUsage = 'Espacio utilizado'; 
$strSQLQuery = 'SQL-query';
$strStatement = 'Sentencias'; 
$strStrucCSV = 'Datos CSV ';
$strStrucData = 'Estructura y datos';
$strStrucDrop = 'A�adir \'drop table\'';
$strStrucOnly = 'Unicamente estructura ';
$strSubmit = 'Enviar';
$strSuccess = 'Su query-SQL ha sido ejecutado con exito';
$strSum = 'Tama�o de las tablas';

$strTable = 'tabla ';
$strTableComments = 'Comentarios de la Tabla'; 
$strTableEmpty = 'El nombre de la tabla esta vacio!'; 
$strTableMaintenance = 'Mantenimiento de la tabla'; 
$strTables = '%s tabla(s)';
$strTableStructure = 'Estructura de tabla para tabla';
$strTableType = 'Tipo de tabla'; 
$strTerminatedBy = 'terminado por';
$strTextAreaLength = ' Debido a su longitud,<br /> este campo puede no ser editable '; 
$strTheContent = 'El contenido de su archivo ha sido insertado.';
$strTheContents = 'El contenido del archivo reemplaza el contenido de la tabla seleccionada para las columnas identicas primarias o unicas.';
$strTheTerminator = 'El terminador de los campos.';
$strTotal = 'total';
$strType = 'Tipo';

$strUncheckAll = 'Desmarcar todos'; 
$strUnique = 'Unico';
$strUpdatePassMessage = 'Ud. ha actualizado la contrase�a para'; 
$strUpdatePassword = 'Actualizar Contrase�a'; 
$strUpdatePrivMessage = 'Ud. a actualizado los privilegios para'; 
$strUpdateQuery = 'Modificar la Consulta';
$strUsage = 'Uso'; 
$strUseBackquotes = 'Usar backquotes con tablas y nombres de campo';
$strUser = 'Usuario'; 
$strUserEmpty = 'El nombre de usuario esta vacio!'; 
$strUserName = 'Nombre de Usuario'; 
$strUsers = 'Usuarios'; 
$strUseTables = 'Usar tablas';

$strValue = 'Valor';
$strViewDump = 'Mostrar volcado esquema de la tabla';
$strViewDumpDB = 'Ver volcado esquema de la base de datos';

$strWelcome = 'Bienvenido a ';
$strWrongUser = 'Usuario/password equivocado. Accesso denegado.';

$strYes = 'Si';

// To translate
$strBzip = '"bzipped"';  //to translate
$strGzip = '"gzipped"';  //to translate
$strOffSet = 'offset';  //to translate
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strFullText = 'Full Texts';//to translate
$strPartialText = 'Partial Texts';//to translate
?>
