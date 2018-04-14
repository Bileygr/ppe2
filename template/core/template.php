<?php

class Template{
	public function header($settings, $values){
		$file = file_get_contents("http://127.0.0.1/ppe2/template/src/header.html");
		$count = 0;

		foreach ($settings as $setting) {
			$file = str_replace('['.$setting.']', $values[$count], $file);
			$count++;
		}
		echo $file;
	}

	public function footer(){
		$file = file_get_contents("http://127.0.0.1/ppe2/template/src/footer.html");
		echo $file;
	}
}
?>