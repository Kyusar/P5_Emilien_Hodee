<?php 
$title = "Interface administrateur";


ob_start();
?>

<div class="container main-section">
    <div class="row text-center">
        <div class="col main-shade-color-bright">
            <h2> Interface  d'administration : </h2>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-lg-4 col-sm-12 container-glow">
            <h4 class="main-color"> Gestion des rangs : </h4>
            <form method="post" action="index.php?action=addRank">
                <div class="form-group">
                    <label for="pseudo-first-form">Membres</label>
                    <select class="form-control" id="pseudo-first-form" name="member">
                        <?php 
                            while ($data = $listMember->fetch())
                            {
                                ?>
                                <option> <?= htmlspecialchars($data['pseudo']) ?> </option>
                                <?php
                            }
                            $listMember->closeCursor();
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="member">Rang</label>
                    <select class="form-control" id="rank" name="rank">
                        <option>owner</option>
                        <option>dev</option>
                        <option>roster</option>
                        <option>member</option>
                    </select>
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-color" value="Ajouter">
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-sm-12 container-glow">
            <h4 class="main-color"> Suppresion d'un membre : </h4>
            <form method="post" action="index.php?action=supprMember">
                <div class="form-group">
                    <label for="pseudo-second-form">Membres</label>
                    <select class="form-control" id="pseudo-second-form" name="pseudo">
                        <?php 
                            while ($dataTwo = $secondListMember->fetch())
                            {
                                ?>
                                <option> <?= htmlspecialchars($dataTwo['pseudo']) ?> </option>
                                <?php
                            }
                            $secondListMember->closeCursor();
                        ?>
                    </select>
                </div>
                <div class="form-group hidden">
                    <label>Hidden</label>
                    <input class="form-control">
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-color" value="Supprimer">
                </div>
            </form>
        </div>
        <!-- <div class="col-4 container-glow">
            <h4 class="main-color"> Gestion des ? : </h4>
        </div> -->
        
    </div>
</div>



<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>