<?php
class Engine{
	private $vars = array();

	public function assign($parameter, $value){
		$this->vars[$parameter] = $value;
	}

	public function render($view){
		$directory = "view";

		if(file_exists($directory."/".$view)){
			$content = file_get_contents("http://127.0.0.1/ppe2/view/".$view);
			
			foreach ($this->vars as $parameter => $value){
				$content = preg_replace('/\{\{\s'.$parameter.'\s\}\}/', $value, $content);
			}
			echo $content;
		}else{
			exit('<h1>Erreur de Template</h1>');
		}
	}
}
?>