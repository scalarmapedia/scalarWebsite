<?php

define("PATH",'/srv/www/htdocs/scalar/zip/'); 		// Folder to download .Zip file too
define("SCALAR",'/srv/www/htdocs/scalar/scalar/');	// Live SCALAR GIT repo, required for checking current project version


// Get the current GIT repo version string
function version() {
	chdir(SCALAR);
	return exec('git log --source -1 --pretty=oneline');
}

// get the current  GIT repo .zip file and process it to our spec
function getZip() {
	chdir(PATH);
	if ( file_exists( PATH.'scalar.zip') ) {
		exec('rm '.PATH.'master.zip');
	}
		
	exec('wget "https://github.com/scalarmapedia/scalar/archive/master.zip"');
	exec('unzip master.zip');
	exec('mv scalar-master scalar');
	exec('zip -r9 tmp.zip scalar');
	exec('rm master.zip');
	exec('chown root:www '.PATH.'tmp.zip');
	exec('mv tmp.zip scalar.zip');
	exec('chmod 740 '.PATH.'scalar.zip');
	exec('chmod 700 '.PATH.'version');
	exec('rm -R scalar');
}


// Is there an existiong version file for this repo?
if ( !file_exists( PATH.'version') ) {
	// NO: Ok, create a version file
	echo "\n\nNo version data exists, creating it and creating scalar.zip\n";
	$v = version();
	
	$f = fopen( PATH.'version', 'w');
	fwrite($f, $v);
	fclose($f);

	// Create a .zip file
	getZip();
} else {
	// YES: Does the current version match the latest version on the server?	
	echo "\nversion exists";
	$vf = fopen(PATH.'version','r');
	$oldV = fgets($vf);
	fclose($vf);
	$newV = version();
	
	if ($oldV != $newV ) {
		echo "\nNew Version found: ".$newV."\n";
		echo "\nVersions do not match, updating version file and creating latest scalar.zip\n\n";
		$f = fopen( PATH.'version', 'w');
		fwrite($f, $newV);
		fclose($f);
		
		getZip();
	} else {
		echo " - Current .zip is up to date. Quiting.";
		return;
	}
}


?>
