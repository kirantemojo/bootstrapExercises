<?php
function __autoload($class)
{
	$directories = array(
		'',
		'model/',
		'model/admin/',
		'model/public/',
		'controller/',
		'controller/admin/',
		'controller/public/',
		'view/',
		'view/admin/',
		'view/public/'
	);
	
	$fileFormatNames = array(
		'%s.php'
	);
	
	foreach($directories as $directory)
	{
		foreach($fileFormatNames as $fileFormatName)
		{
			$path =  $directory.sprintf($fileFormatName,$class);
			if(file_exists($path))
			{
				require_once($path);
				return $path;
			}
		}
	}	
}
