<?php
$contenu1 = "[% block titre %]<title>PPE 2</title>[% finblock %]";
$contenu2 = "[% block titre %]<title>PPE Test</title>[% finblock %]";
$pattern1 = '/\[\% block \"(.*?)\" \%\]/';
$pattern3 = '/\[\% finblock \%\]/';
$pattern4 = '/\[\% block \"(.*?)\" \%\](.*)\[\% finblock \%\]/';

if(preg_match($pattern1, $contenu, $sortie)){
	if(preg_match($pattern2, $contenu, $sortie2)){
		preg_match(pattern, subject);
		preg_replace(pattern, replacement, subject);
	}
}

foreach ($variable as $key => $value) {
	# code...
}

print_r($sortie);
echo $sortie[1];

if(file_exists("../gabarit/vue/".$sortie[1])){
	echo "Oui!";
}else{
	echo "Non!";
}
?>