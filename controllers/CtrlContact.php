<?php 
class CtrlContact{
	
	private $view;
	private $model;
	private $datas;
	
	public function __construct(){
		$this->view = new ViewContact;
		$this->model = new ModelContact;
		$this->datas = array();
	}
	
	public function getForm(){
		$this->preparer();
		$this->view->afficherForm();
	}
	
	private function preparer(){
		return true;
	}
	
	public function enregistrerForm(){
		if($this->verifierChamps()){
			if($this->model->inserer($this->datas)){
				$this->view->afficherResultat();
			}
			else{
				$this->view->afficherErreurDeSaisie($this->datas,'erreurBdd');
			}
		}
		else{
			$this->view->afficherErreurDeSaisie($this->datas,'erreurSaisie');
		}
	}
	
	private function verifierChamps(){
		$ok = true;
		
		if (isset($_POST['nom']) && ($_POST['nom'] != ''))
			$this->datas['nom'] = $_POST['nom'];
		else 
			$ok = false;
		
		if (isset($_POST['prenom']) && ($_POST['prenom'] != ''))
			$this->datas['prenom'] = $_POST['prenom'];
		else
			$ok = false;
		
		if (isset($_POST['tel']) && ($_POST['tel'] != ''))
			$this->datas['tel'] = $_POST['tel'];
		else
			$ok = false;

		if (isset($_POST['email']) && ($_POST['email'] != ''))
			$this->datas['email'] = $_POST['email'];
		else
			$ok = false;
				
		if (isset($_POST['message']) && ($_POST['message'] != ''))
			$this->datas['message'] = $_POST['message'];
		else
			$ok = false;
		
		return $ok;
			
	}
}
?>