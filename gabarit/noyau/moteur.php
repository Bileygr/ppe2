<?php

class Moteur{
	private $vars = array();

	public function assigner($parametres, $valeurs){
		$this->vars[$parametres] = $valeurs;
	}

	public function render($gabarit){
		$repertoire = "gabarit/vue";
		$scan_repertoire = scandir($repertoire); 
		$pattern = '/\[\! extends \"(.*?)\" \!\]/';

		if(file_exists($repertoire."/".$gabarit)){
			$contenu = file_get_contents("http://127.0.0.1/ppe2/gabarit/vue/".$gabarit);

			if(preg_match($pattern, $contenu, $sortie)){
				$sortie2 = $sortie[3];

				if(file_exists($repertoire."/".$sortie2)){
					$contenu2 = file_get_contents("http://127.0.0.1/ppe2/gabarit/vue/".$sortie2);
					$contenu = $contenu2;
				}else{
					echo "Ce fichier n'existe pas.";
				}
			}

			foreach ($this->vars as $parametres => $valeurs) {
				$contenu = str_replace('[! block '.$parametres.' !]', '', $contenu);
				$contenu = str_replace('[[ '.$parametres.' ]]', $valeurs, $contenu);
				$contenu = str_replace('[parent['.$parametres.']]', $valeurs, $contenu);
				$contenu = str_replace('[! finblock !]', '', $contenu);
			}
			//print_r($scan_repertoire);
			echo $contenu;
		}else{
			exit('<h1>Erreur de Template</h1>');
		}
	}
}
?>