<?php
class Connect{
	private $bd_local_mdp = "";
	private $bd_remote_mdp = "dDPc*MV&4D!Enm%4";
	public function connexion(){
		$settings = parse_ini_file("settings.ini", true);
		$host = "127.0.0.1"; //$settings["database"]["host"];
		$port = ""; //$settings["database"]["port"];
		$db = "cheik - ppe"; //$settings["database"]["db"];
		$user = "root"; //$settings["database"]["user"];
		$password = $this->bd_local_mdp; //$settings["database"]["password"];

		try{
			$db = new PDO("mysql:host=".$host.";port=".$port.";dbname=".$db.";charset=utf8", $user, $password);
		}catch(Exception $e){
			echo "Échec lors de la connexion: ".$e->getMessage();
		}

		return $db;
	}
}
?>
