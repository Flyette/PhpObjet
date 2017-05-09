<?php

class ModelContact{

	private $table;
	private $file;

	/**
	 * constructeur
	 */
	public function __construct(){
		$this->table = 'contact';
		$this->file = Config::$file_contact;
	}

	/**
	 * inserer les données de formulaire dans un fichier csv et dans la base de données
	 * @param array $datas
	 * @return boolean
	 */
	public function inserer($datas=array()){
		
		$ok = true;
		// Sauvegarde des données dans un fichier .csv
		$this->saveCSV($datas);
		// Creer requete SQL
		$sql ="INSERT INTO {$this->table} VALUES (
		NULL,
		'{$datas['nom']}',
		'{$datas['prenom']}',
		'{$datas['tel']}',
		'{$datas['email']}',
		'{$datas['message']}'
		);";
		// Enregistrer en base de données
		$dao = new DAO;
		if(!$dao->bddConnexion()){
			if(!$dao->bddQuery($sql))
				$ok = false;
			$dao->bddDeconnexion();
		}
		else{
			$ok = false;
		}
		return $ok;
	}

	/**
	 * sauvegarder dans un fichier csv
	 * @param array $datas
	 * @return boolean
	 */
	private function saveCSV($datas=array()){
		$ok = false;
		$f_exist = file_exists($this->file);
		$fp = fopen($this->file, 'a');
		if($fp){
			if(!$f_exist)
			{
				$ok = fputcsv($fp, array_keys($datas), ";", '"');
			}
			$ok = fputcsv($fp, $datas, ";", '"');
			fclose($fp);
		}
		return $ok;
	}
}
?>