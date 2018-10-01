<?php
class Engine{
	private $vars = array();

	private $url = "http://127.0.0.1:8000/ppe2";
	private $url_de_cheik = "http://82.123.7.148:5917/cheik/accueil";

	private $path_web_css_signin = "/web/css/signin.css";
	private $path_vendor_bootstrap = "/web/vendor/bootstrap/css/bootstrap.min.css";
	private $path_vendor_font_awesome = "";

	private $regex_css_signin = "/\{\{\scss\ssignin\s\}\}/";
	private $regex_css_vendor_bootstrap = "/\{\{\scss\sbootstrap\smin\s\}\}/";
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
			$content = preg_replace($this->regex_css_signin, $this->path_web_css_signin, $content);
			$content = preg_replace($this->regex_css_vendor_bootstrap, $this->path_vendor_bootstrap, $content);
			$content = preg_replace($this->regex_host, $this->url, $content);
			$content = preg_replace($this->regex_site_de_cheik, $this->url_de_cheik, $content);
			$content = preg_replace($this->regex_current_year, date("Y"), $content);
			echo $content;
		}else{
			exit('<h1 style="color: red;">Erreur de template.</h1>');
		}
	}
	
	// Faire fonctionner cette method.
	public function router(){

	}

	public function url(){
		return $this->url;
	}

	public function administrateur_session_check(){
		if(!isset($_SESSION["administrateur_id"])){
			header("Location: ".$this->url);
		}
	}

	public function jeune_session_check(){
		if(!isset($_SESSION["jeune_id"])){
			header("Location: ".$this->url);
		}
	}

	public function partenaire_session_check(){
		if(!isset($_SESSION["partenaire_id"])){
			header("Location: ".$this->url);
		}
	}

	public function super_admin_session_check($super_status){
		if($super_status == 0){
			header("Location: ".$this->url);
		}
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
