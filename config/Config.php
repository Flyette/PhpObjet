<?php 
class Config{
	
	/**
	 * Propriétés statiques
	 */
	public static $base_href;
	public static $bdd;
	public static $file_contact;
	
	/**
	 * Initialisation des propriétés
	 */
	static function init(){
		self::$base_href = "http://".$_SERVER['HTTP_HOST']."/mvc_tp_3/";
		self::$bdd = array(
			'host' => "localhost",
			'user' => "root",
			'password' => "",
			'database' => "tp_mvc"
		);
		self::$file_contact = "docs/contacts.csv";
	}
}
Config::init();
?>