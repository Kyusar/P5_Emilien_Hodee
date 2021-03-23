<?php 
$title = "Formulaire de contact - Nazarick";

ob_start();
?>

<div class="container main-section">
    <div class="row text-center">
        <div class="col main-shade-color-bright">
            <h3> Contacter le support du site </h3>
        </div>
    </div>
    <form method="post" action="index.php?action=send" class="container-glow">
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Votre pseudo">
        </div>
        <div class="form-group">
            <label for="mail">Adresse Email</label>
            <input type="email" class="form-control" id="mail" name="mail" placeholder="nom@example.com">
        </div>
        <div class="form-group">
            <label for="message-object">Objet du message</label>
            <select class="form-control" id="message-object" name="message-object">
            <option>Fonctionnalité défaillantes</option>
            <option>Soutien à la communauté</option>
            <option>Rapport de bug</option>
            <option>Demande professionnel</option>
            <option>Cherche plus d'informations</option>
            </select>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Votre message"></textarea>
        </div>
        <div class="form-group text-center">
            <input type="submit" value="Envoyer" class="btn apply-submit btn-color">
        </div>
    </form>
</div>



<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>