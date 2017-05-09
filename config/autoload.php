<?php
/**
 * chargement automatique des fichiers de Class
 * @param string $class_name
 */
function __autoload($class_name = ""){
	$repertoires = array(
			"controllers/",
			"models/",
			"views/",
			"system/",
			"config/"
	);
	foreach($repertoires as $repertoire){
		$file = "{$repertoire}{$class_name}.php";
		if(file_exists($file)){
			include_once($file);
		}
	}
}
?>