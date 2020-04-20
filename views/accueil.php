<?php
session_start();
$title = 'Accueil';
$style = 'style';
ob_start(); ?>
<form class="container" action="../controllers/loginController.php" method="POST">
    <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <input type="text" class="form-control" id="pseudo" placeholder="Pseudo" name="pseudo" required>
    </div>
    <div class="form-group">
        <label for="pass">Mot de passe</label>
        <input type="pass" class="form-control" id="pass" placeholder="*******" name="pass" required>
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
        <button type="submit" class="btn btn-primary bg-dark border-0" value="Envoyer">Se connecter</button>
    </div>
    <br>
    <p>Ou alors ecoutez le cri de Wilhelm</p><audio controls>
        <source src="../public/mp3/criWilhelm.mp3" type="audio/mpeg"></audio>
</form>

<?php $content = ob_get_clean();

require 'templates/template.php'; ?>