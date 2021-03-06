<?php
$langues = array(
	'langue' => 'English',
	'locale' => 'english',
	'addVirtual' => 'Add a VirtualHost',
	'backHome' => 'Back to homepage',
	'VirtualSubMenuOn' => 'The <code>VirtualHost sub-menu</code> item must be set to (On) in the <code>Wamp Settings</code> Right-Click menu. Then reload this page',
	'UncommentInclude' => 'Uncomment <small>(Suppress #)</small> the line <code>#Include conf/extra/httpd-vhosts.conf</code><br>in file %s',
	'FileNotExists' => 'The file <code>%s</code> does not exists',
	'FileNotWritable' => 'The file <code>%s</code> is not writable',
	'DirNotExists' => '<code>%s</code> does not exists or is not a directory',
	'NotCleaned' => 'The <code>%s</code> file has not been cleaned.<br>There remain VirtualHost examples like: dummy-host.example.com',
	'NoVirtualHost' => 'There is no VirtualHost defined in <code>%s</code><br>It should at least have the VirtualHost for localhost.',
	'NoFirst' => 'The first VirtualHost must be <code>localhost</code> in <code>%s</code> file',
	'ServerNameInvalid' => 'The ServerName <code>%s</code> is invalid.',
	'VirtualHostName' => 'Name of the <code>Virtual Host</code> No diacritical characters (éçëñ) - No space - No underscore(_)',
	'VirtualHostFolder' => 'Complete absolute <code>path</code> of the VirtualHost <code>folder</code> <i>Examples: C:/wamp/www/projet/ or E:/www/site1/</i>',
	'VirtualAlreadyExist' => 'The ServerName <code>%s</code> already exists',
	'VirtualHostExists' => 'VirtualHost already defined:',
	'Start' => 'Start the creation of the VirtualHost (May take a while...)',
	'GreenErrors' => 'The green framed errors can be corrected automatically.',
	'Correct' => 'Start the automatic correction of errors inside the green borders panel',
	'NoModify' => 'Impossible to modify <code>httpd-vhosts.conf</code> or <code>hosts</code> files',
	'VirtualCreated' => 'The files have been modified. Virtual host <code>%s</code> was created',
	'CommandMessage' => 'Messages from the console to update DNS:',
	'However' => 'You may add another VirtualHost by validate "Add a VirtualHost".<br>However, for these new VirtualHost are taken into account by Apache, you must run item<br><code>Restart DNS</code><br>from Right-Click Tools menu of Wampmanager icon. <i>(This can unfortunately not be done automatically)</i>'
	);
?>