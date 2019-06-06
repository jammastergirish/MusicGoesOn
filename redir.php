<?php

include_once($HTTP_SERVER_VARS[DOCUMENT_ROOT]."/inc/php_header.inc");

if ($loc=="mgo")
{
 header("Location: http://musicgoeson.com$uri");
 exit;
}

header("Location: $url");

?>