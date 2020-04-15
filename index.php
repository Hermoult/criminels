<?php
session_start();
$title = 'Accueil';
$style = 'style';
ob_start(); ?>
<form action="controllers/connectionVerif.php" method="POST">
    <div class="form-group col-6 col-sm-4" >
        <label for="pseudo">Pseudo</label>
        <input type="text" class="form-control" id="pseudo" placeholder="Pseudo" name="pseudo" required>
    </div>
    <div class="form-group col-6 col-sm-4">
        <label for="pass">Mot de passe</label>
        <input type="pass" class="form-control" id="pass" placeholder="*******" name="pass" required>
    </div>
    <div>
    <button type="submit" class="btn btn-primary bg-dark border-0" value="Envoyer">Se connecter</button>
    </div>
</form>

<?php $content = ob_get_clean();

require 'views/templates/template.php'; ?>