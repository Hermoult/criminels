<?php
session_start();
$title = 'interface';
$style = 'style';
ob_start(); ?>

<div class="body"> Agent d'accreditation <?php echo $_SESSION['accreditation'];?></div>
<form class="body" action="../controllers/crimController.php" method="POST">
    <div class="form-group col-6 col-sm-4" >
        <label for="nom">nom du criminel</label>
        <input type="text" class="form-control" id="nom" placeholder="capone" name="nom" required>
    </div>
    <?php
    if (isset($_GET['message'])) {
    ?>
        <div class="alert alert-danger" role="alert">
            <?= $_GET['message']; ?>
        </div>
    <?php
    }
    ?>
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