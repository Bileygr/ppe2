<?php
$contenu = '[% block titre %]test[% finblock %]';
$contenu2 = '[% block titre %]<title>kjvhkirvbr</title>[% finblock %]';

$pattern = '/\[\% block titre %\](.*)\[\% finblock \%\]/';

preg_match($pattern, $contenu, $sortie);
preg_match($pattern, $contenu2, $sortie2);

$test = preg_replace($pattern, $sortie2[1], $contenu);

print_r($test);
?>