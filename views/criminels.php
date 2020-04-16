<?php
session_start();
$title = 'interface';
$style = 'style';
ob_start(); ?>

<div>
    <h1>AFFICHAGE DU PROFIL DU CRIMIER</h1>
</div>
<?php $content = ob_get_clean();
require 'templates/template.php';

if ($_SESSION['accreditation'] == 1){
    require_once 'templates/accr1interface.php';
}else{
    return;
}