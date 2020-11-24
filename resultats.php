<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/script.js"></script>
        
        <title>
        Flying Papers | Comparez plusieurs billets de transport et voyagez léger
    </title>
        
    </head>
    <body>
        
        <a href="#"></a>
        <!-- Choix des langues en haut à droite -->
        <!-- Menu : "Vos réservations" ; "S'inscrire" ; "Se connecter" en haut à droite -->
        <nav class="navbar navbar-expand-md navbar-dark">
            <a  href="#"><img class="navbar-brand" src="img/logo.PNG" alt="logo Flying Papers" /></a>
        
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav nav-pills navbar-nav">
                    <li class="nav-item"><a class="nav-link nav-link-style" href="#langue">FR</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-style" href="#reservations">Vos réservations</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-style" href="#inscription">S'inscrire</a></li>
                    <li class="nav-item"><a class="nav-link bouton-peche" href="#connexion">Se connecter</a></li>
                </ul>
            </div>
        </nav>
        <div class="recaps-trajet col-12">
            <div class="conteneur">
                <div class="recap">
                    <a href=#><p class="text-recap depart">Paris, France</p></a>
                </div>
                <div class="recap">
                    <a href=#><p class="text-recap arrivee">Londres, Royaume-Uni</p></a>
                </div>
                <div class="recap voyageurs">
                    <a href=#> <p class="text-recap">1 adulte, v </p></a>
                </div>
                <div class="recap date">
                    <a href=#><p class="text-recap">28 Sept 2020 |  + Ajouter un retour</p></a>
                </div>
                
                <div class="recap modifier">
                    <a href=#><p class="bouton-peche">Modifier le trajet</p></a>
                </div>
            </div>
        </div>
        <div class="indice-carbone">
            <div class="container">
                <div class="indice positif">
                    <p>Moins d’1 KG / pers. de CO2 émis</p>
                </div>
                <div class="indice moyen1">
                    <p>Entre 2 KG et 25 KG / pers. de CO2 émis</p>
                </div>
                <div class="indice moyen2">
                    <p>Entre 25 KG et 50 KG / pers. de CO2 émis</p>
                </div>
                <div class="indice negatif">
                    <p>+ de 130 KG / pers.</p>
                </div>
            </div>
        </div>

        
        
        <section id="mode-transport">
            <div class=container>
                <div class="row" >

                    <?php 
                    function switchURL($label, $value) {
                        parse_str($_SERVER['QUERY_STRING'], $result_array);
                        $result_array[$label] = $value;
                        echo $_SERVER['REQUEST_URI'] . http_build_query($result_array);
                    }
                    ?>
                   
                    <ul id="filtresTransport">
                        <li class="filtre-transport">
                            <a href="<?php switchURL('modeTransport','Velo'); ?>" class="mode-transport">Vélo</a>    
                        </li>
                        <li class="filtre-transport">
                            <a href="<?php switchURL('modeTransport','Voile'); ?>" class="mode-transport">Voile</a>
                        </li>
                        <li class="filtre-transport">
                            <a href="<?php switchURL('modeTransport','Train'); ?>" class="mode-transport">Trains</a>
                        </li>
                        <li class="filtre-transport">
                            <a href="<?php switchURL('modeTransport','VoitureElectrique'); ?>" class="mode-transport">Voiture électrique</a>
                        </li>
                        <li class="filtre-transport">
                            <a href="<?php switchURL('modeTransport','Bus'); ?>" class="mode-transport">Bus</a>
                        </li>
                        <li class="filtre-transport">
                            <a href="<?php switchURL('modeTransport','Covoiturage'); ?>" class="mode-transport">Covoiturage</a>
                        </li>
                        <li class="filtre-transport">
                            <a href="<?php switchURL('modeTransport','Avion'); ?>" class="mode-transport">Vols</a>
                        </li>
                    </ul>
                </div>
                <div class="barre-selection">
                    <div class="velo-actif selection"></div>
                    <div class="voile-actif selection"></div>
                    <div class="trains-actif selection"></div>
                    <div class="voiture-actif selection"></div>
                    <div class="bus-actif selection"></div>
                    <div class="covoiturage-actif selection"></div>
                    <div class="vols-actif selection"></div>
                </div>
            </div>
            
            
        </section>

        <section id="resultats-billets">
            <div>
                <h2>Autres Trajets<span style="color: #f0856b; font-size:1.5em;">.</span></h2>
                <div class="les-billets">
                    <div class="bloc-r">
                        <div class="flex">
                            <img class="carte-trajet" src="img/carte-resultats.png" alt="carte itinéraire du trajet">
                            <a href="http://localhost/flyingpapers/optionsbillets.html" class="bouton-peche">Poursuivre avec ce trajet</a>
                        </div>
                        
                    </div>
                   
                    <?php
                            require 'admin/database.php';
                            $db = Database::connect();
                            $statement = $db->query('SELECT billets.id, billets.lieu_depart, billets.lieu_arrivee, billets.duree, billets.compagnie, billets.co2_emis, billets.pourcentage, billets.prix, billets.ld_recherche FROM billets 
                            WHERE ld_recherche = "' . $_GET['villeDepart'] . '" AND la_recherche = "' . $_GET['villeArrivee'] . '"
                            ORDER BY billets.id ASC');
                            //$statement = $db->query('SELECT billets.id, billets.lieu_depart, billets.lieu_arrivee, billets.duree, billets.compagnie, billets.co2_emis, billets.pourcentage, billets.prix FROM billets WHERE ld_recherche = \'Paris, France\' ORDER BY billets.id ASC'); --> test
                            //WHERE lieu depart et lieu arrivee = variables des champs sélectionnés pour la recherche + mode_transport = filtre.mode_transport --> test
                            //echo print_r($statement);
                            while($billet = $statement->fetch(PDO::FETCH_ASSOC)) 
                            {
                                //echo print_r($billet);
                                echo '<a style="text-decoration: none;" href="/flyingpapers/optionsbillets.html">';
                                echo '<div class="billet" id="billet1">';
                                echo '<div class="horaires rub">';
                                echo '<p class="p">'. $billet['lieu_depart'] . '</p>';
                                echo '<p class="p">'. $billet['lieu_arrivee'] . '</p>';
                                echo '</div>';
                                echo '<div class="duree rub">';
                                echo '<p class="p">'. $billet['duree'] . '</p>';
                                echo '<p class="p">'. $billet['compagnie'] . '</p>';
                                echo '</div>';
                                echo '<div class="empreinteC rub">';
                                echo '<p class="p">'. $billet['co2_emis'] . ' KG</p>';
                                echo '<p class="p">'. $billet['pourcentage'] . '%</p>';
                                echo '</div>';
                                echo '<div class="infos rub">';
                                echo '<p class="p">CO2 émis / personne pour un aller</p>';
                                echo '<p class="p">Du quota annuel pour limiter le réchauffement</p>';
                                echo '</div>';
                                echo '<div class="prix rub5">';
                                echo '<p class="p p9">'. $billet['prix'] . '€</p>';
                                echo '<p class="p p10">Plus de détails</p>';
                                echo '</div>';
                                echo '</div>';
                                echo '</a>';
                                //echo '<p> Ville de départ sélectionnée :'. $_GET['villeDepart'] . '___ </p>';
                                //echo '<p> Ville d\'arrivée sélectionnée :'. $_GET['villeArrivee'] . '</p>';
                            }
                    ?>
                    <!--

                    <div class="billet" id="billet1">
                        <div class="horaires rub">
                            <p class="p">17:37   Paris Gare du Nord</p>
                            <p class="p">20:38   Londres St Pancras</p>
                        </div>
                        <div class="duree rub">
                            <p class="p">2h17   Direct</p>
                            <p class="p">Eurostar</p>
                        </div>
                        <div class="empreinteC rub">
                            <p class="p">3 kg</p>
                            <p class="p">0.1%</p>
                        </div>
                        <div class="infos rub">
                            <p class="p">CO2 émis / personne pour un aller</p>
                            <p class="p">Du quota annuel pour limiter le réchauffement</p>
                        </div>
                        <div class="prix rub5">
                            <p class="p p9">174€</p>
                            <p class="p p10">Plus de détails</p>
                        </div>
                    </div>

                    <div class="billet" id="billet2">
                        <div class="horaires rub">
                            <p class="p">17:37   Paris Gare du Nord</p>
                            <p class="p">20:38   Londres St Pancras</p>
                        </div>
                        <div class="duree rub">
                            <p class="p">2h07   Direct</p>
                            <p class="p">Eurostar</p>
                        </div>
                        <div class="empreinteC rub">
                            <p class="p">3 kg</p>
                            <p class="p">0.1%</p>
                        </div>
                        <div class="horaires rub">
                            <p class="p">CO2 émis / personne pour un aller</p>
                            <p class="p">Du quota annuel pour limiter le réchauffement</p>
                        </div>
                        <div class="prix rub5">
                            <p class="p p9">184€</p>
                            <p class="p p10">Plus de détails</p>
                        </div>
                    </div>-->
                </div>
            </div>
        </section>
        
      <section class="footer">
            <div class="container">
                <div class="row">
                    <div id="entreprise" class="bloc">
                        <h5>L'entreprise</h5>
                        <a href="#"><p>Conditions d'utilisation</p></a>
                        <a href="#"><p>Nos valeurs écologiques</p></a>
                        <a href="#"><p>Devenez partenaire</p></a>
                        <a href="#"><p>Mentions légales</p></a>
                        <a href="#"><p>CGU/CGV</p></a>
                        <a href="#"><p>Contact</p></a>
                    </div>
                    <div id="voyage" class="bloc">
                        <h5>Votre voyage</h5>  
                        <a href="#"><p>Vos réservations</p></a>
                        <a href="#"><p>Créer un compte</p></a>
                        <a href="#"><p>Foire aux questions</p></a>
                        <a href="#"><p>Avis de nos clients</p></a>
                    </div>
                    <div id="aide" class="bloc">
                        <h5>Besoin d'aide</h5>
                        <a href="#" class="bouton-aide bold bleu-fp">Centre d'aide</a>
                    </div>
                    <div id="nous-suivre">
                        <div class="bloc">
                            <h5>Nous suivre</h5>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <title>Facebook</title>
                                    <path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <title>Twitter</title>
                                    <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <title>Instagram</title>
                                    <path d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"/>
                                </svg>
                            </a>
                            <a>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <title>Youtube</title>
                                    <path d="M186.8 202.1l95.2 54.1-95.2 54.1V202.1zM448 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48zm-42 176.3s0-59.6-7.6-88.2c-4.2-15.8-16.5-28.2-32.2-32.4C337.9 128 224 128 224 128s-113.9 0-142.2 7.7c-15.7 4.2-28 16.6-32.2 32.4-7.6 28.5-7.6 88.2-7.6 88.2s0 59.6 7.6 88.2c4.2 15.8 16.5 27.7 32.2 31.9C110.1 384 224 384 224 384s113.9 0 142.2-7.7c15.7-4.2 28-16.1 32.2-31.9 7.6-28.5 7.6-88.1 7.6-88.1z"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <title>Instagram</title>
                                    <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/>
                                </svg>
                            </a>
                        </div>
                        <br>
                        <a  href="#"><img src="img/LOGO1.PNG" class="footer-brand" alt="logo Flying Papers" /></a>
                    </div>
                </div>      
            </div>
        </section>
    </body>
</html>