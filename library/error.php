<?php
error_reporting(E_ALL); 
error_reporting(E_ALL & ~E_NOTICE | E_STRICT); // Warns on good coding standards
//ini_set("display_errors", "1");
function show_404() {
	header('HTTP/1.1 Not Found 404', true, 404);
	require(BASEPATH.'error_404.php');
}
