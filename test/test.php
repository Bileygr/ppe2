<?php
// Recupere le contenu du fichier
$url = "http://127.0.0.1/ppe2/gabarit/vue/";
$repertoire = "../gabarit/vue/";
$gabarit = "index2.html";

// Verifier que le fichier existe bien
if(file_exists($repertoire.$gabarit)){

	// Recuperer le contenu du fichier
	$contenu_original = file_get_contents($url.$gabarit);

	// Patterns
	$pattern_extends = '/\[\% extends \"(.*?)\" \%\]/';
	$pattern_block_titre = '/\[\% block titre \%\](.*)\[\% finblock \%\]/';
	$pattern_block_header = '/\[\% block header \%\](.*)\[\% finblock \%\]/';

	preg_match($pattern_extends, $contenu_original, $gabarit_extend);

	if(file_exists($repertoire.$gabarit_extend[1])){
		$contenu_extended = file_get_contents($url.$gabarit_extend[1]);

		preg_match($pattern_block_titre, $contenu_original, $pattern_block_titre);
		preg_replace($pattern_block_titre, $pattern_block_titre[1], $contenu_extended);

		//print_r($pattern_block_titre);
		echo $contenu_extended;
	}
}

// Lis les tags et traduit

// Remplace les tags
// Affiche la page
?>