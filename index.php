<?php
$title = 'Accueil';
$style = 'style';
ob_start(); ?> 


<div style= "text-align:center" ><a href="views/accueil.php"><img src="public/img/FBI.png" alt="Logo du fbi" height="400px"></a>
</div>
<?php $content = ob_get_clean();



require 'views/templates/template.php'; ?>