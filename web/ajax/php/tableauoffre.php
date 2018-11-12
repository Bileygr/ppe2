<?php

                $host = "127.0.0.1"; //$settings["database"]["host"];
                $port = ""; //$settings["database"]["port"];
                $db = "ppe"; //$settings["database"]["db"];
                $user = "ppe"; //$settings["database"]["user"];
                $password = "dDPc*MV&4D!Enm%4"; //$settings["database"]["password"];


try{
                        $db = new PDO("mysql:host=".$host.";port=".$port.";dbname=".$db.";charset=utf8", $user, $password);
                }catch(Exception $e){
                        echo "Échec lors de la connexion: ".$e->getMessage();
                }


//$connect = new Connect();
//$connexion = $connect->connexion();

$requete = $db->query("SELECT offre.offre_id, formation.formation_id, partenaire.partenaire_nom, formation.formation_nom,
											     offre_nom, offre.offre_description, offre_debut, offre_fin, offre_creation
									    FROM offre JOIN partenaire ON offre.partenaire_id = partenaire.partenaire_id 
										    		   JOIN formation ON offre.formation_id = formation.formation_id");

$lesOffres = array();

while($ligne = $requete->fetch()){
	$lesOffres[] = array_map("utf8_encode", $ligne);
}

echo json_encode($lesOffres);
?>
