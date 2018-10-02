<?php
class Connect{
	public function connexion(){
		$settings = parse_ini_file("settings.ini", true);

		$host = "192.168.1.40"; //$settings["database"]["host"];
		$port = "3306"; //$settings["database"]["port"];
		$db = "ppe"; //$settings["database"]["db"];
		$user = "ppe"; //$settings["database"]["user"];
		$password = "S7xvZEuCDq&2tWCa"; //$settings["database"]["password"];

		try{
			$db = new PDO("mysql:host=".$host.";port=".$port.";dbname=".$db.";charset=utf8", $user, $password);
		}catch(Exception $e){
			echo "Échec lors de la connexion: ".$e->getMessage();
		}

		return $db;
	}
}
?>
