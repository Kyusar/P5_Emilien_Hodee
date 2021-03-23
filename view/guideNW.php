<?php 
$title = "Guides de NW by Nazarick";

ob_start();
?>

    <div class="container-fluid main-section">
        <div class="row text-center align-items-center">
            <div class="col">
                <h1 class="main-color">  Work in progress </h1>
            </div> 
        </div>
    </div>



<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>