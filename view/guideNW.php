<?php 
$title = "Guides de NW by Nazarick";

ob_start();
?>

    <div class="container-fluid main-section">
        <div class="row text-center align-items-center">
            <div class="col motto">
                " Evolue et Domine "
            </div> 
        </div>
    </div>



<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>