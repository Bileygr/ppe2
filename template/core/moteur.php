<?php

class Moteur{
	private $vars = array();

	public function strpos_arr($haystack, $needle) {
    	if(!is_array($needle)) $needle = array($needle);
    	foreach($needle as $what) {
        	if(($pos = strpos($haystack, $what))!==false) return $pos;
    	}
    	return false;
	}

	public function assigner($parametres, $valeurs){
		$this->vars[$parametres] = $valeurs;
	}

	public function render($template){
		$test = new Moteur();
		$repertoire = "template/vue";
		$scan_repertoire = scandir($repertoire);

		if(file_exists($repertoire."/".$template)){
			$fichier = file_get_contents("http://127.0.0.1/ppe2/template/vue/".$template);


			if($test->strpos_arr($fichier, '{% extends "'.$scan_repertoire.'" %}')){
				echo 'Fonctionne!';
			}else{
				echo 'Ne fonctionne pas!';
			}

			foreach ($this->vars as $parametres => $valeurs) {
				$fichier = str_replace('{{ '.$parametres.' }}', $valeurs, $fichier);
			}
			//print_r($scan_repertoire);
			echo $fichier;
		}else{
			exit('<h1>Erreur de Template</h1>');
		}
	}
}
?>