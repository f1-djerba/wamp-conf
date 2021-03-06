<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * phpMyAdmin sample configuration, you can use it as base for
 * manual configuration. For easier setup you can use setup/
 *
 * All directives are explained in Documentation.html and on phpMyAdmin
 * wiki <http://wiki.phpmyadmin.net>.
 *
 * @package phpMyAdmin
 */

/*
 * This is needed for cookie based authentication to encrypt password in
 * cookie
 */
$cfg['blowfish_secret'] = 'wamp'; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */

/*
 * Servers configuration
 */
$i = 0;

/*
 * First server : MySQL
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
// $cfg['Servers'][$i]['user']          = 'phlyper';      // MySQL user
// $cfg['Servers'][$i]['password']      = 'azerty';          // MySQL password (only needed)
/* Server parameters */
$cfg['Servers'][$i]['verbose'] = 'localhost MySQL port 3306';
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['port'] = '3306';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;
/* Select mysql if your server does not have mysqli */
$cfg['Servers'][$i]['extension'] = 'mysqli';
$cfg['Servers'][$i]['AllowNoPassword'] = false;

/*
 * phpMyAdmin configuration storage settings.
 */

/* User used to manipulate with storage */
// $cfg['Servers'][$i]['controlhost'] = '';
// $cfg['Servers'][$i]['controlport'] = '';
$cfg['Servers'][$i]['controluser'] = 'pma';
$cfg['Servers'][$i]['controlpass'] = '';

/* Storage database and tables */
$cfg['Servers'][$i]['pmadb'] = 'phpmyadmin';
$cfg['Servers'][$i]['bookmarktable'] = 'pma_bookmark';
$cfg['Servers'][$i]['relation'] = 'pma_relation';
$cfg['Servers'][$i]['table_info'] = 'pma_table_info';
$cfg['Servers'][$i]['table_coords'] = 'pma_table_coords';
$cfg['Servers'][$i]['pdf_pages'] = 'pma_pdf_pages';
$cfg['Servers'][$i]['column_info'] = 'pma_column_info';
$cfg['Servers'][$i]['history'] = 'pma_history';
$cfg['Servers'][$i]['table_uiprefs'] = 'pma_table_uiprefs';
$cfg['Servers'][$i]['tracking'] = 'pma_tracking';
$cfg['Servers'][$i]['userconfig'] = 'pma_userconfig';
$cfg['Servers'][$i]['recent'] = 'pma_recent';
$cfg['Servers'][$i]['favorite'] = 'pma_favorite';
$cfg['Servers'][$i]['users'] = 'pma_users';
$cfg['Servers'][$i]['usergroups'] = 'pma_usergroups';
$cfg['Servers'][$i]['navigationhiding'] = 'pma_navigationhiding';
$cfg['Servers'][$i]['savedsearches'] = 'pma_savedsearches';
$cfg['Servers'][$i]['central_columns'] = 'pma_central_columns';
$cfg['Servers'][$i]['designer_settings'] = 'pma_designer_settings';
$cfg['Servers'][$i]['export_templates'] = 'pma_export_templates';
/* Contrib / Swekey authentication */
// $cfg['Servers'][$i]['auth_swekey_config'] = '/etc/swekey-pma.conf';

// -----------------------------------------------
/*
 * Second server : MariaDB
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
// $cfg['Servers'][$i]['user']          = 'phlyper';      // MySQL user
// $cfg['Servers'][$i]['password']      = 'azerty';          // MySQL password (only needed)
/* Server parameters */
$cfg['Servers'][$i]['verbose'] = 'localhost MariaDB port 3307';
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['port'] = '3307';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;
/* Select mysql if your server does not have mysqli */
$cfg['Servers'][$i]['extension'] = 'mysqli';
$cfg['Servers'][$i]['AllowNoPassword'] = false;

/*
 * phpMyAdmin configuration storage settings.
 */

/* User used to manipulate with storage */
// $cfg['Servers'][$i]['controlhost'] = '';
// $cfg['Servers'][$i]['controlport'] = '';
$cfg['Servers'][$i]['controluser'] = 'pma';
$cfg['Servers'][$i]['controlpass'] = '';

/* Storage database and tables */
$cfg['Servers'][$i]['pmadb'] = 'phpmyadmin';
$cfg['Servers'][$i]['bookmarktable'] = 'pma_bookmark';
$cfg['Servers'][$i]['relation'] = 'pma_relation';
$cfg['Servers'][$i]['table_info'] = 'pma_table_info';
$cfg['Servers'][$i]['table_coords'] = 'pma_table_coords';
$cfg['Servers'][$i]['pdf_pages'] = 'pma_pdf_pages';
$cfg['Servers'][$i]['column_info'] = 'pma_column_info';
$cfg['Servers'][$i]['history'] = 'pma_history';
$cfg['Servers'][$i]['table_uiprefs'] = 'pma_table_uiprefs';
$cfg['Servers'][$i]['tracking'] = 'pma_tracking';
$cfg['Servers'][$i]['userconfig'] = 'pma_userconfig';
$cfg['Servers'][$i]['recent'] = 'pma_recent';
$cfg['Servers'][$i]['favorite'] = 'pma_favorite';
$cfg['Servers'][$i]['users'] = 'pma_users';
$cfg['Servers'][$i]['usergroups'] = 'pma_usergroups';
$cfg['Servers'][$i]['navigationhiding'] = 'pma_navigationhiding';
$cfg['Servers'][$i]['savedsearches'] = 'pma_savedsearches';
$cfg['Servers'][$i]['central_columns'] = 'pma_central_columns';
$cfg['Servers'][$i]['designer_settings'] = 'pma_designer_settings';
$cfg['Servers'][$i]['export_templates'] = 'pma_export_templates';
/* Contrib / Swekey authentication */
// $cfg['Servers'][$i]['auth_swekey_config'] = '/etc/swekey-pma.conf';


/*
 * End of servers configuration
 */
/*
$evf = "event_scheduler.json";
$cdate = date("Y-m-d");
$vdate = "";
if(file_exists($evf)) {
	$vdate = file_get_contents($evf);
}
if(strlen($vdate) == 0 || $vdate != $cdate) {
	for($k = 1; $k <= $i; $k++) {
		if($dbl = mysqli_connect($cfg['Servers'][$k]['host'], $cfg['Servers'][$k]['controluser'], $cfg['Servers'][$k]['controlpass'], "", $cfg['Servers'][$k]['port'])) {
			if($dbq = mysqli_query($dbl, "SHOW VARIABLES LIKE 'event_scheduler'")) {
				$dba = mysqli_fetch_assoc($dbq);
				if($dba['Value'] === 0 || $dba['Value'] === "OFF") {
					mysqli_query($dbl, "SET GLOBAL event_scheduler = 1");
				}
				file_put_contents($evf, $cdate);
				mysqli_free_result($dba);
			}
			mysqli_close($dbl);
		}
	}
}
*/

//$cfg['AllowArbitraryServer'] = true; //activer la synchronisation a distance
$cfg['DefaultConnectionCollation'] = 'utf8_general_ci';
$cfg['ServerDefault'] = stripos($_SERVER["HTTP_HOST"], 'mariadb') !== false ? 2 : 1;
$cfg['ShowPhpInfo'] = true;
//$cfg['ThemeDefault'] = 'metro';
# Debug
#$cfg['DBG']['sql'] = true;
#$cfg['DBG']['demo'] = true;
#$cfg['Error_Handler']['display'] = true;

# Lien sur la documentation francophone
$cfg['MySQLManualBase'] = 'http://dev.mysql.com/doc/refman/5.0/fr/';


 /*
  * Type:	integer [number of seconds]
  * Default value:	1440
  * Define how long a login cookie is valid. Please note that php configuration option session.gc_maxlifetime might limit session validity and if the session is lost, the login cookie is also invalidated. So it is a good idea to set session.gc_maxlifetime at least to the same value of $cfg['LoginCookieValidity'].
  */
$cfg['LoginCookieValidity'] = 5000;
 
/*
 * The maximum number of recently used tables shown in the left navigation frame.
 * Set this to 0 (zero) to disable the listing of recent tables. 
 */
//$cfg['LeftRecentTable'] = 10;

/*
 * Directories for saving/loading files from server
 */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';

/**
 * Whether to display icons or text or both icons and text in table row
 * action segment. Value can be either of 'icons', 'text' or 'both'.
 */
//$cfg['RowActionType'] = 'both';

/**
 * Defines whether a user should be displayed a "show all (records)"
 * button in browse mode or not.
 * default = false
 */
$cfg['ShowAll'] = true;

/**
 * Number of rows displayed when browsing a result set. If the result
 * set contains more rows, "Previous" and "Next".
 * default = 30
 */
//$cfg['MaxRows'] = 50;

/**
 * Use graphically less intense menu tabs
 * default = false
 */
// $cfg['LightTabs'] = true;

/**
 * disallow editing of binary fields
 * valid values are:
 *   false  allow editing
 *   'blob' allow editing except for BLOB fields
 *   'noblob' disallow editing except for BLOB fields
 *   'all'  disallow editing
 * default = blob
 */
// $cfg['ProtectBinary'] = 'false';

/**
 * Default language to use, if not browser-defined or user-defined
 * (you find all languages in the locale folder)
 * uncomment the desired line:
 * default = 'en'
 */
//$cfg['DefaultLang'] = 'en';
$cfg['DefaultLang'] = 'fr';

/**
 * default display direction (horizontal|vertical|horizontalflipped)
 */
// $cfg['DefaultDisplay'] = 'vertical';


/**
 * How many columns should be used for table display of a database?
 * (a value larger than 1 results in some information being hidden)
 * default = 1
 */
// $cfg['PropertiesNumColumns'] = 2;

/**
 * Set to true if you want DB-based query history.If false, this utilizes
 * JS-routines to display query history (lost by window close)
 *
 * This requires configuration storage enabled, see above.
 * default = false
 */
$cfg['QueryHistoryDB'] = true;

/**
 * When using DB-based query history, how many entries should be kept?
 *
 * default = 25
 */
// $cfg['QueryHistoryMax'] = 100;

/*
 * You can find more configuration options in Documentation.html
 * or here: http://wiki.phpmyadmin.net/pma/Config
 */
 
 /**
 * Should error reporting be enabled for JavaScript errors
 *
 * default = 'ask' 
 */
//$cfg['SendErrorReports'] = 'ask';

/*
 * You can find more configuration options in the documentation
 * in the doc/ folder or at <http://docs.phpmyadmin.net/>.
 */
