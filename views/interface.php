<?php
session_start();
$title = 'Accueil';
$style = 'style';
ob_start(); ?>

<form action="controllers/connectionCrim.php" method="POST">
    <div class="form-group col-6 col-sm-4" >
        <label for="pseudo">nom du criminel</label>
        <input type="text" class="form-control" id="pseudo" placeholder="Pseudo" name="pseudo" required>
    </div>
    <div>
    <button type="submit" class="btn btn-primary bg-dark border-0" value="Envoyer">Se connecter</button>
    </div>
</form>

<?php $content = ob_get_clean();

require 'templates/template.php'; ?>