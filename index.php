<?php
$title = 'Accueil';
$style = 'style';
ob_start(); ?>

<?php $content = ob_get_clean();

require 'views/templates/template.php'; ?>