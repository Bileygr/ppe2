<?php
class Engine{
	//private $settings = parse_ini_file("config/settings.ini", true);
	private $vars = array();
	private $url = "http://127.0.0.1:8000/ppe2/";

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
			
			$content = preg_replace("/\{\{\surl\s\}\}/", $this->url, $content);
			$content = preg_replace("/\{\{\syear\s\}\}/", date("Y"), $content);
			echo $content;
		}else{
			exit('<h1>Erreur de template.</h1>');
		}
	}

	public function url(){
		return $this->url;
	}
}
?>
