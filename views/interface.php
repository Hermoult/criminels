<?php
session_start();
$title = 'interface';
$style = 'style';
ob_start(); ?>

<form action="../controllers/connectionCrim.php" method="POST">
    <div class="form-group col-6 col-sm-4" >
        <label for="nom">nom du criminel</label>
        <input type="text" class="form-control" id="nom" placeholder="capone" name="nom" required>
    </div>
    <div>
    <button type="submit" class="btn btn-primary bg-dark border-0" value="Envoyer">Consulter profil</button>
    </div>
</form>

<?php $content = ob_get_clean();
require 'templates/template.php';

if ($_SESSION['accreditation'] == 1){
    require_once 'templates/accr1interface.php';
}else{
    return;
}

?>