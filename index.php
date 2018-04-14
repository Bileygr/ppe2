<?php
include('template/core/template.php');
$temp = new template();
$settings = array("title", "page_title", "contenu");
$values = array("Hello", "world", "!");
$temp->header($settings, $values);
?>
bla bla
<?php
$temp->footer();
?>