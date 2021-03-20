<?php $title = 'New World - Présentation';

ob_start(); ?>
    <div class="container-fluid main-section">
        <div id="bg-nw" class="bg-image shadow-2-strong">
        <div class="container mask h-100">
                <div class="row text-center">
                    <div class="col">
                        <h3 class="main-color"><strong> New World </strong></h3>
                    </div>
                </div>
                <div class="row bio-section">
                    <div class="col-lg-8 col-sm-12 text-center">

                        <h4 class="main-color "><strong> Présentation </strong></h4>
                        <p class="text-bio text-left">New World est un jeu action, exploration, mmo, online réalisé par Amazon Game Studios et commercialisé par Amazon Game Studios. New World est en développement sur PC
                        <br /> <br />
                        En développement   <br />
                        Date de sortie :   31 Août 2021 <br />
                        Genre : Action, Exploration, MMO, Online <br />
                        Editeur : Amazon Game Studios <br />
                        Développeur : Amazon Game Studios</p>

                        <h4 class="main-color "><strong> Synopsis </strong></h4>
                        <p class="text-bio text-left">Sculptez votre propre destin dans New World, un jeu massivement multijoueur, à mon ouvert situé sur une terre maudite, un monde en évolution les saisons, la météo, et l'heure de la journée. Regroupez vous pour traquer des monstres et bâtir des civilisations florissantes, ou pour survivre face à des terreurs surnaturelles et des bandits meurtriers.</p>

                        <h4 class="main-color"><strong> Outils de la communauté </strong></h4>
                        <p class="text-bio text-left"> 
                            Retrouvez ci-dessous plusieurs site/outils fourni par la communauté : <br /><br />
                            
                            <a href="https://newworldfans.com/" class="simple-link" target="_blank"> NewWorldFans</a> : Fournit une database du jeu ainsi que différents guide du jeu. <br /> <br>
                            <a href="https://www.newworld-map.com/" class="simple-link" target="_blank">NewWorld-Map</a> : Fournit une carte intéractive avec une localisation de ressource.
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <a class="twitter-timeline" data-width="300" data-height="600" data-theme="dark" data-chrome="nofooter" href="https://twitter.com/PlaynewworldFR?ref_src=twsrc%5Etfw" style>Tweets by PlaynewworldFR</a>
                    </div>
                </div>  
        </div>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>