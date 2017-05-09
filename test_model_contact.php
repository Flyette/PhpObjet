<?php 
include_once('models/ModelContact.php');


$datas = array(
		'nom' => "Dupond",
		'prenom' => "Paul",
		'tel' => "00.11.22.33.44",
		'email' => "duran@gmail.com",
		'message' => "Mon message"
);

$mdl= new ModelContact;
var_dump($mdl);


$mdl->inserer($datas);


?>