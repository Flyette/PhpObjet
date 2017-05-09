<?php 
interface interfaceDAO{
	
	function bddQuery($sql);
	
	function bddConnexion();
	
	function bddDeconnexion();
}
?>