<?php
class Engine{
	private $vars = array();
	private $url = "http://127.0.0.1:8000/ppe2";
	private $date_copyright = "2018";

	public function assign($parameter, $value){
		$this->vars[$parameter] = $value;
	}

	public function render($view){
		$directory = "view";

		if(file_exists($directory."/".$view)){
			$content = file_get_contents("http://127.0.0.1/ppe2/view/".$view);
			
			foreach ($this->vars as $parameter => $value){
				$content = preg_replace('/\{\{\s'.$parameter.'\s\}\}/', $value, $content);
				$content = preg_replace('/\{\{\surl\s\}\}/', $this->url, $content);
				$content = preg_replace('/\{\{\sdate\scopyright\s\}\}/', $this->date_copyright, $content);
			}
			echo $content;
		}else{
			exit('<h1>Erreur de Template</h1>');
		}
	}

	public function url(){
		return $this->url;
	}

	public function session_check(){
		if(!isset($_SESSION["administrateur_id"])){
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