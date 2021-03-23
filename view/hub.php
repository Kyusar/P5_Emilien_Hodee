<?php 
$title = "Taverne de Nazarick";

ob_start();
?>

<div class="container main-section">
    <div class="row text-center">
        <div class="col main-shade-color-bright">
        <h1 class="main-color">  Work in progress </h1>
            <h3> Hub New World </h3>
            <p> Salut <?php echo($data['pseudo_front']) ?> </p>
        </div>
    </div>
</div>



<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>