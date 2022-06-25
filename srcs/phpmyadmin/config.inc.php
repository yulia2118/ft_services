<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * phpMyAdmin sample configuration, you can use it as base for
 * manual configuration. For easier setup you can use setup/
 *
 * All directives are explained in documentation in the doc/ folder
 * or at <https://docs.phpmyadmin.net/>.
 *
 * @package PhpMyAdmin
 */

/**
 * This is needed for cookie based authentication to encrypt password in
 * cookie. Needs to be 32 chars long.
 */
$cfg['blowfish_secret'] = 'very long frase, 32-chars long....................!!!'; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */

/**
 * Servers configuration
 */
$i = 0;

/**
 * First server
 */
$i++;

/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['user'] = 'admin';
$cfg['Servers'][$i]['password'] = 'admin';
$cfg['Servers'][$i]['host'] = "mysql";
$cfg['Servers'][$i]['port'] = "3306";
/**
 * phpMyAdmin configuration storage settings.
 */

/* User used to manipulate with storage */
// $cfg['Servers'][$i]['controlhost'] = '';
// $cfg['Servers'][$i]['controlport'] = '';
//$cfg['Servers'][$i]['controluser'] = 'root';
//$cfg['Servers'][$i]['controlpass'] = '';

/* Storage database and tables */
// $cfg['Servers'][$i]['phpmyadmindb'] = 'phpmyadmin';
//$cfg['Servers'][$i]['bookmarktable'] = 'phpmyadmin__bookmark';
//$cfg['Servers'][$i]['relation'] = 'phpmyadmin__relation';
//$cfg['Servers'][$i]['table_info'] = 'phpmyadmin__table_info';
//$cfg['Servers'][$i]['table_coords'] = 'phpmyadmin__table_coords';
//$cfg['Servers'][$i]['pdf_pages'] = 'phpmyadmin__pdf_pages';
//$cfg['Servers'][$i]['column_info'] = 'phpmyadmin__column_info';
//$cfg['Servers'][$i]['history'] = 'phpmyadmin__history';
//$cfg['Servers'][$i]['table_uiprefs'] = 'phpmyadmin__table_uiprefs';
//$cfg['Servers'][$i]['tracking'] = 'phpmyadmin__tracking';
//$cfg['Servers'][$i]['userconfig'] = 'phpmyadmin__userconfig';
//$cfg['Servers'][$i]['recent'] = 'phpmyadmin__recent';
//$cfg['Servers'][$i]['favorite'] = 'phpmyadmin__favorite';
//$cfg['Servers'][$i]['users'] = 'phpmyadmin__users';
//$cfg['Servers'][$i]['usergroups'] = 'phpmyadmin__usergroups';
//$cfg['Servers'][$i]['navigationhiding'] = 'phpmyadmin__navigationhiding';
//$cfg['Servers'][$i]['savedsearches'] = 'phpmyadmin__savedsearches';
//$cfg['Servers'][$i]['central_columns'] = 'phpmyadmin__central_columns';
//$cfg['Servers'][$i]['designer_settings'] = 'phpmyadmin__designer_settings';
//$cfg['Servers'][$i]['export_templates'] = 'phpmyadmin__export_templates';

/**
 * End of servers configuration
 */

/**
 * Directories for saving/loading files from server
 */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
$cfg['TempDir'] = '/tmp';
$cfg['AllowThirdPartyFraming'] = true;
$cfg['PmaAbsoluteUri_DisableWarning'] = TRUE;
/**
 * Whether to display icons or text or both icons and text in table row
 * action segment. Value can be either of 'icons', 'text' or 'both'.
 * default = 'both'
 */
//$cfg['RowActionType'] = 'icons';

/**
 * Defines whether a user should be displayed a "show all (records)"
 * button in browse mode or not.
 * default = false
 */
//$cfg['ShowAll'] = true;

/**
 * Number of rows displayed when browsing a result set. If the result
 * set contains more rows, "Previous" and "Next".
 * Possible values: 25, 50, 100, 250, 500
 * default = 25
 */
//$cfg['MaxRows'] = 50;

/**
 * Disallow editing of binary fields
 * valid values are:
 *   false    allow editing
 *   'blob'   allow editing except for BLOB fields
 *   'noblob' disallow editing except for BLOB fields
 *   'all'    disallow editing
 * default = 'blob'
 */
//$cfg['ProtectBinary'] = false;

/**
 * Default language to use, if not browser-defined or user-defined
 * (you find all languages in the locale folder)
 * uncomment the desired line:
 * default = 'en'
 */
//$cfg['DefaultLang'] = 'en';
//$cfg['DefaultLang'] = 'de';

/**
 * How many columns should be used for table display of a database?
 * (a value larger than 1 results in some information being hidden)
 * default = 1
 */
//$cfg['PropertiesNumColumns'] = 2;

/**
 * Set to true if you want DB-based query history.If false, this utilizes
 * JS-routines to display query history (lost by window close)
 *
 * This requires configuration storage enabled, see above.
 * default = false
 */
//$cfg['QueryHistoryDB'] = true;

/**
 * When using DB-based query history, how many entries should be kept?
 * default = 25
 */
//$cfg['QueryHistoryMax'] = 100;

/**
 * Whether or not to query the user before sending the error report to
 * the phpMyAdmin team when a JavaScript error occurs
 *
 * Available options
 * ('ask' | 'always' | 'never')
 * default = 'ask'
 */
//$cfg['SendErrorReports'] = 'always';

/**
 * You can find more configuration options in the documentation
 * in the doc/ folder or at <https://docs.phpmyadmin.net/>.
 */