<?php
/* $Id: index.php,v 1.13 2001/08/29 07:15:40 loic1 Exp $ */


/**
 * Gets core libraries and processes config file to determine default server
 * (if any)
 */
require('./grab_globals.inc.php');
require('./lib.inc.php');

// Get the host name
if (empty($HTTP_HOST)) {
    if (!empty($HTTP_ENV_VARS) && isset($HTTP_ENV_VARS['HTTP_HOST'])) {
        $HTTP_HOST = $HTTP_ENV_VARS['HTTP_HOST'];
    }
    else if (@getenv('HTTP_HOST')) {
        $HTTP_HOST = getenv('HTTP_HOST');
    }
    else {
        $HTTP_HOST = '';
    }
}


/**
 * Defines the frameset
 */
$url_query = 'lang=' . $lang
           . '&server=' . $server
           . (empty($db) ? '' : '&db=' . urlencode($db));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "DTD/xhtml1-frameset.dtd">
<html>
<head>
<title>phpMyAdmin <?php echo PHPMYADMIN_VERSION; ?> - <?php echo $HTTP_HOST; ?></title>
</head>

<frameset cols="<?php echo $cfgLeftWidth; ?>,*"  rows="*" border="0" frameborder="0">
    <frame src="left.php?<?php echo $url_query; ?>" name="nav">
    <frame src="<?php echo (empty($db)) ? 'main.php' : 'db_details.php'; ?>?<?php echo $url_query; ?>" name="phpmain">
</frameset>
<noframes>
    <body bgcolor="#FFFFFF">

    </body>
</noframes>
</html>
