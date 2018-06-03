<?php
/** Route Partial Map
=======================================================*/

// Order matters!
$route_partials = [
	'authenticate',
	'painel'
];


/** Router Partial Loadup

=======================================================*/

foreach ($route_partials as $partial) {
	
	$file = __DIR__ .DIRECTORY_SEPARATOR.$partial.'.php';


	if(! file_exists($file))
	{
		$msg = "Route partial [{$partial}] not found.";
		//throw new FileNotFoundException($msg);
		
	}

	require_once  $file;
 
}
