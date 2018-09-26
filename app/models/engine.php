<?php
class Engine{
	private $vars = array();

	private $url = "http://127.0.0.1:8000/ppe2";
	private $url_de_cheik = "http://82.123.7.148:5917/cheik/accueil";

	private $regex_host = "/\{\{\surl\s\}\}/";
	private $regex_site_de_cheik = "/\{\{\ssite\sde\scheik\s\}\}/";
	private $regex_current_year = "/\{\{\syear\s\}\}/";

	public function assign($parameter, $value){
		$this->vars[$parameter] = $value;
	}

	public function render($view){
		$directory = "app/views/";

		if(file_exists($directory.$view)){
			$content = file_get_contents($directory.$view);
			
			foreach ($this->vars as $parameter => $value){
				$content = preg_replace("/\{\{\s".$parameter."\s\}\}/", $value, $content);
			}
			$content = preg_replace($this->regex_host, $this->url, $content);
			$content = preg_replace($this->regex_site_de_cheik, $this->url_de_cheik, $content);
			$content = preg_replace($this->regex_current_year, date("Y"), $content);
			echo $content;
		}else{
			exit('<h1>Erreur de template.</h1>');
		}
	}

	public function url(){
		return $this->url;
	}

	public function deconnecter(){
		if(session_destroy()){
   				 header("Location: ".$this->url);
  		}
	}

	public function deconnexion(){
		if(isset($_POST['deconnexion'])){
  			if(session_destroy()){
   				 header("Location: ".$this->url);
  			}
		}
	}
}
?>
