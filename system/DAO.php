<?php 

class DAO implements interfaceDAO{
	
	private $link;
	private $params;
	
	public function __construct(){
		$this->params = Config::$bdd;
	}
	
	public function bddQuery($sql){
		return $this->link->query($sql);
	}
	
	public function bddConnexion(){
		$this->link = @new mysqli(
				$this->params["host"], 
				$this->params["user"], 
				$this->params["password"], 
				$this->params['database']
		);
		return $this->link->connect_errno;
	}
	
	public function bddDeconnexion(){
		$this->link->close();
	}
	
}
?>