<?php 
$title = "Taverne de Nazarick";

ob_start();
?>

<div class="container main-section">
    <div class="row text-center">
        <div class="col main-shade-color-bright">
            <h3> Hub New World </h3>
        </div>
    </div>
</div>



<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>