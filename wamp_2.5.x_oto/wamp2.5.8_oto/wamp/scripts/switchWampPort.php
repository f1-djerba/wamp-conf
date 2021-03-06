<?php
// [modif oto] - script ajout� apr�s Wampserver 2.5 pour changer le port d'�coute de Wampserver

require ('wampserver.lib.php');
require 'config.inc.php';

//Replace Used Port by New port ($_SERVER['argv'][1])
$portToUse = intval(trim($_SERVER['argv'][1]));
//Check validity
$goodPort = true;
if($portToUse < 80 || ($portToUse > 81 && $portToUse < 1025) || $portToUse > 65535)
	$goodPort = false;

if($goodPort) {
	//-- into httpd.conf
	$httpdFileContents = @file_get_contents($c_apacheConfFile ) or die ("httpd.conf file not found");
	
	$findTxtRegex = array(
	'/^(Listen 0.0.0.0).*$/m',
	'/^(Listen \[::0\]).*$/m',
	'/^(ServerName localhost).*$/m',
	);
	$httpdFileContents = preg_replace($findTxtRegex,"$1:".$portToUse, $httpdFileContents);

	$fphttpd = fopen($c_apacheConfFile ,"w");
	fwrite($fphttpd,$httpdFileContents);
	fclose($fphttpd);
	
	//into httpd-vhosts.conf
	$c_vhostConfFile = $c_apacheVersionDir.'/apache'.$wampConf['apacheVersion'].'/'.$wampConf['apacheConfDir'].'/extra/httpd-vhosts.conf';
	$myVhostsContents = file_get_contents($c_vhostConfFile) or die ("httpd-vhosts.conf file not found");
	
	$myVhostsContents = preg_replace("/^([ \t]*<VirtualHost).*$/m","$1 *:".$portToUse.">", $myVhostsContents);
	
	$fphttpdVhosts = fopen($c_vhostConfFile ,"w");
	fwrite($fphttpdVhosts,$myVhostsContents);
	fclose($fphttpdVhosts);
	
	$apacheConf['apachePortUsed'] = $portToUse;
	if($portToUse == $c_DefaultPort)
		$apacheConf['apacheUseOtherPort'] = "off";
	else
		$apacheConf['apacheUseOtherPort'] = "on";
	wampIniSet($configurationFile, $apacheConf);
}
else {
	echo "The port number you give: ".$portToUse."\n\n";
	echo "is not valid\n";
	echo "\nPress ENTER to continue...";
  trim(fgets(STDIN));
}

?>
