<?php
class Moteur{
	private $vars = array();
	private $url = "http://127.0.0.1:8000/ppe2";

	public function assigner($parametre, $valeur){
		$this->vars[$parametre] = $valeur;
	}

	public function presenter($vue){
		$repertoire = "app/vues";

		if(file_exists($repertoire."/".$vue)){
			$contenu = file_get_contents("app/vues/".$vue);
			
			foreach ($this->vars as $parametre => $valeur){
				$contenu = preg_replace("/\{\{\s".$parametre."\s\}\}/", $valeur, $contenu);
				$contenu = preg_replace("/\{\{\surl\s\}\}/", $this->url, $contenu);
				$contenu = preg_replace("/\{\{\sdate\s\}\}/", "2017 - ".date('Y'), $contenu);
			}
			echo $contenu;
		}else{
			exit('<h1>Erreur de Template</h1>');
		}
	}

	public function url(){
		return $this->url;
	}
}
?>