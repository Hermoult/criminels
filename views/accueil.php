<?php
session_start();
$title = 'Accueil';
$style = 'style';
ob_start(); ?>
<form class="body" action="../controllers/connectionVerif.php" method="POST">
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
    <div><p>Ou alors ecoutez le cri de Wilhelm</p><iframe width="560" height="315" src="https://www.youtube.com/embed/h-BwNg1LZNs?start=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
</form>

<?php $content = ob_get_clean();

require 'templates/template.php'; ?>