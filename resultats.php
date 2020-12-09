<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="css/styles.css">
        <script src="js/script.js"></script>
        
        <title>
        Flying Papers | Comparez plusieurs billets de transport et voyagez léger
    </title>
        
    </head>
    <body class="page-2">
        <nav class="navbar navbar-light navbar-expand-lg bg-faded justify-content-center">
            <a href="/flyingpapers/" class="navbar-brand d-flex w-50 mr-auto"><img src="img/logo.PNG" alt="logo Flying Papers"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse w-100" id="collapsingNavbar">
                <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        🇫🇷
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Français 🇫🇷</a>
                            <a class="dropdown-item" href="#">English 🇬🇧</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-style" style="width:132px;" href="#">Vos réservations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-style" href="#">S'inscrire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-peche" href="#" style="padding: 10px 40px;width: 175px;">Se connecter</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="recaps-trajet col-12">
            <a class="recap-icon" href="/flyingpapers/"><i class="material-icons">keyboard_arrow_left</i></a>
            <div class="recap">
                <?php
                setlocale(LC_TIME, "fr_FR");
                echo '
                    <p class="recap-text"><strong>'. $_GET["villeDepart"] .'</strong> > <strong>'. $_GET["villeArrivee"] .'</strong></p>
                    ';
                echo '
                    <p class="recap-text">'. strftime("%a. %e %b. %Y",strtotime($_GET["dateDepart"])) .'</p>
                ';
                ?>
            </div>
            <a class="recap-icon" onclick="hideForm()"><i class="material-icons">search</i></a>
        </div>

        <script>
            function hideForm() {
                var x = document.getElementById("moteur-recherche-mobile");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
        </script>

        <div id="moteur-recherche-resultat">
            <div class="search-resultat col-12">
                <div class="row">
                    <?php
                    session_start();
                    $lieu_depart1 = "Paris, France";
                    $lieu_depart2 = "Rome, Italie";
                    $lieu_depart3 = "Londres, Angleterre";
                    $lieu_arrivee1 = "Paris, France";
                    $lieu_arrivee2 = "Rome, Italie";
                    $lieu_arrivee3 = "Londres, Angleterre";
                    
                    echo '<form method="get" action="resultats.php" class="form-search">';
                        echo '
                        <div class="input-field dep">
                            <i class="material-icons">gps_not_fixed</i>
                            <input class="input-text" list="villesDepart" name="villeDepart" id="ville-depart-choix" type="text" placeholder="Ville de départ" value="'. $_GET["villeDepart"] .'" required>
                        </div>
                        ';
                            echo '<datalist id="villesDepart">';                 
                                echo '<option value="'.$lieu_depart1.'">';                   
                                echo '<option value="'.$lieu_depart2.'">';                   
                                echo '<option value="'.$lieu_depart3.'">';                   
                            echo '</datalist>';
                        
                        echo '
                        <div class="input-field arr">
                            <i class="material-icons">location_on</i>
                            <input class="input-text" list="villesArrivee" name="villeArrivee" id="ville-arrivee-choix" type="text" placeholder="Ville d\'arrivée" value="'. $_GET["villeArrivee"] .'" required>
                        </div>
                        ';
                            echo '<datalist id="villesArrivee">';                   
                                echo '<option value="'.$lieu_arrivee1.'">';                   
                                echo '<option value="'.$lieu_arrivee2.'">';                   
                                echo '<option value="'.$lieu_arrivee3.'">';
                            echo '</datalist>';         
                            //query pour comparer les variables avec donnees de billets.ld_recherche et billets.la_recherche -> affichage conditionnel

                        echo '
                        <div class="navbar fle">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownAdulte" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    1 Adulte<i class="drop-arrow material-icons">expand_more</i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownAdulte" id="aller-dropdown">
                                    <p>Nombre d\'adulte :</p>
                                    <input label="Nombre d\'adulte" id="number" type="number" value="1">
                                </div>
                            </div>
                        </div>
                        ';
                        
                        echo '
                            <div class="input-field-date dates">
                                <i class="material-icons">date_range</i>
                                <input class="input-text-date input-text-datedepart" list="datesDepart"  name="dateDepart" id="dateDepart" type="text" onfocus="(this.type=\'date\')" onblur="(this.type=\'text\')" placeholder="Date de départ" value="'. $_GET["dateDepart"] .'" required>|
                                <input class="input-text-date input-text-datearrivee" list="datesArrivee" name="dateArrivee" id="dateArrivee" type="text" onfocus="(this.type=\'date\')" onblur="(this.type=\'text\')" placeholder="+ Ajouter un retour" value="'. $_GET["dateArrivee"] .'">
                            </div>
                        ';
                        echo '<input hidden class="input-text" list="modeTransport" name="modeTransport" id="modeTransport" type="text" value="3">';
                        echo '<input class="btn-peche bouton" type="SUBMIT" value="Modifier le trajet">'; //ajouter un évènement sur submit&nbsp;: redirection vers page resultats.php
                    echo '</form>';
                    ?>
                </div>
            </div>
        </div>
        <div id="moteur-recherche-mobile" style="display: none;">
            <div class="container search">
                <div class="navbar">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownAller" aria-controls="aller-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Aller Simple<i class="drop-arrow material-icons">expand_more</i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownAller" id="aller-dropdown">
                            <a class="dropdown-item" href="#">Aller Simple</a>
                            <a class="dropdown-item" href="#">Aller Retour</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" id="dropdownAdulte" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            1 Adulte, Sans carte de réduction<i class="drop-arrow material-icons">expand_more</i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownAdulte" id="aller-dropdown">
                            <p>Nombre d'adulte :</p>
                            <input label="Nombre d'adulte" id="number" type="number" value="1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    session_start();
                    $lieu_depart1 = "Paris, France";
                    $lieu_depart2 = "Rome, Italie";
                    $lieu_depart3 = "Londres, Angleterre";
                    $lieu_arrivee1 = "Paris, France";
                    $lieu_arrivee2 = "Rome, Italie";
                    $lieu_arrivee3 = "Londres, Angleterre";
                    
                    echo '<form method="get" action="resultats.php" class="form-search">';
                        echo '
                        <div class="input-field dep">
                            <i class="material-icons">gps_not_fixed</i>
                            <input class="input-text" list="villesDepart" name="villeDepart" id="ville-depart-choix" type="text" placeholder="Ville de départ" value="'. $_GET["villeDepart"] .'" required>
                        </div>
                        ';
                            echo '<datalist id="villesDepart">';                 
                                echo '<option value="'.$lieu_depart1.'">';                   
                                echo '<option value="'.$lieu_depart2.'">';                   
                                echo '<option value="'.$lieu_depart3.'">';                   
                            echo '</datalist>';
                        
                        echo '
                        <div class="input-field fle">
                            <img src="img/fleches.svg" alt="double-fleches" class="double-fleches">
                        </div>
                        ';

                        echo '
                        <div class="input-field arr">
                            <i class="material-icons">location_on</i>
                            <input class="input-text" list="villesArrivee" name="villeArrivee" id="ville-arrivee-choix" type="text" placeholder="Ville d\'arrivée" value="'. $_GET["villeArrivee"] .'" required>
                        </div>
                        ';
                            echo '<datalist id="villesArrivee">';                   
                                echo '<option value="'.$lieu_arrivee1.'">';                   
                                echo '<option value="'.$lieu_arrivee2.'">';                   
                                echo '<option value="'.$lieu_arrivee3.'">';
                            echo '</datalist>';         
                            //query pour comparer les variables avec donnees de billets.ld_recherche et billets.la_recherche -> affichage conditionnel
                        echo '
                            <div class="input-field-date dates">
                                <i class="material-icons">date_range</i>
                                <input class="input-text-date input-text-datedepart" list="datesDepart"  name="dateDepart" id="dateDepart" type="text" onfocus="(this.type=\'date\')" onblur="(this.type=\'text\')" placeholder="Date de départ" value="'. $_GET["dateDepart"] .'" required>|
                                <input class="input-text-date input-text-datearrivee" list="datesArrivee" name="dateArrivee" id="dateArrivee" type="text" onfocus="(this.type=\'date\')" onblur="(this.type=\'text\')" placeholder="+ Ajouter un retour" value="'. $_GET["dateArrivee"] .'">
                            </div>
                        ';
                        echo '<input hidden class="input-text" list="modeTransport" name="modeTransport" id="modeTransport" type="text" value="3">';
                        echo '<input class="btn-peche bouton" type="SUBMIT" value="Rechercher" id="recherche">'; //ajouter un évènement sur submit&nbsp;: redirection vers page resultats.php
                    echo '</form>';
                    ?>
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
                            <a href="<?php switchURL('modeTransport','1'); ?>" class="mode-transport">Vélo</a>    
                        </li>
                        <li class="filtre-transport">
                            <a href="<?php switchURL('modeTransport','2'); ?>" class="mode-transport">Voile</a>
                        </li>
                        <li class="filtre-transport">
                            <a href="<?php switchURL('modeTransport','3'); ?>" class="mode-transport">Trains</a>
                        </li>
                        <li class="filtre-transport">
                            <a href="<?php switchURL('modeTransport','4'); ?>" class="mode-transport">Voiture électrique</a>
                        </li>
                        <li class="filtre-transport">
                            <a href="<?php switchURL('modeTransport','5'); ?>" class="mode-transport">Bus</a>
                        </li>
                        <li class="filtre-transport">
                            <a href="<?php switchURL('modeTransport','6'); ?>" class="mode-transport">Covoiturage</a>
                        </li>
                        <li class="filtre-transport">
                            <a href="<?php switchURL('modeTransport','7'); ?>" class="mode-transport">Vols</a>
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
                <h2>Trajets proposés<span class="dot">.</span></h2>
                <div class="les-billets">
                    <div class="bloc-r">
                        <div class="flex">
                            <img class="carte-trajet" src="img/carte-resultats.png" alt="carte itinéraire du trajet">
                            <a href="http://localhost/flyingpapers/optionsbillets.php" class="bouton-peche">Poursuivre avec ce trajet</a>
                        </div>
                        
                    </div>
                   
                    <?php

                    $_SESSION['ville_depart'] = $_GET["villeDepart"];
                    $_SESSION['ville_arrivee'] = $_GET["villeArrivee"];
                            require 'admin/database.php';
                            $db = Database::connect();
                            $statement = $db->query('SELECT billets.id, billets.gare_depart, billets.gare_arrivee, billets.gare_c, billets.duree, billets.duree_c, billets.duree_trajet1, billets.duree_trajet2, billets.heure_depart_g, billets.heure_arrivee_g, billets.heure_depart_c, billets.heure_arrivee_c, billets.ville_c, billets.compagnie1, billets.compagnie2, billets.co2_emis, billets.pourcentage, billets.prix_g, billets.prix_opt1_trajet1, billets.prix_opt2_trajet1, billets.prix_opt3_trajet1, billets.prix_opt1_trajet2, billets.prix_opt2_trajet2, billets.prix_opt3_trajet2,  billets.ld_recherche, billets.mode_transport, billets.num_transport1, billets.num_transport2  
                            FROM billets 
                            WHERE ld_recherche = "' . $_GET['villeDepart'] . '" AND la_recherche = "' . $_GET['villeArrivee'] . '"AND mode_transport = "' . $_GET['modeTransport'] . '"
                            ORDER BY billets.id ASC');
                           
                            //$statement = $db->query('SELECT billets.id, billets.lieu_depart, billets.lieu_arrivee, billets.duree, billets.compagnie, billets.co2_emis, billets.pourcentage, billets.prix FROM billets WHERE ld_recherche = \'Paris, France\' ORDER BY billets.id ASC'); --> test
                            //WHERE lieu depart et lieu arrivee = variables des champs sélectionnés pour la recherche + mode_transport = filtre.mode_transport --> test
                            //echo print_r($statement);
                            while($billet = $statement->fetch(PDO::FETCH_ASSOC)) 
                            {
                                $_SESSION['id'. $billet['id'] .''] = $billet["id"];
                                $_SESSION['gare_depart'. $billet['id'] .''] = $billet["gare_depart"];
                                $_SESSION['gare_arrivee'. $billet['id'] .''] = $billet["gare_arrivee"];
                                $_SESSION['gare_c'. $billet['id'] .''] = $billet["gare_c"];
                                $_SESSION['duree'. $billet['id'] .''] = $billet["duree"];
                                $_SESSION['duree_c'. $billet['id'] .''] = $billet["duree_c"];
                                $_SESSION['duree_trajet1'. $billet['id'] .''] = $billet["duree_trajet1"];
                                $_SESSION['duree_trajet2'. $billet['id'] .''] = $billet["duree_trajet2"];
                                $_SESSION['heure_depart_g'. $billet['id'] .''] = $billet["heure_depart_g"];
                                $_SESSION['heure_arrivee_g'. $billet['id'] .''] = $billet["heure_arrivee_g"];
                                $_SESSION['heure_depart_c'. $billet['id'] .''] = $billet["heure_depart_c"];
                                $_SESSION['heure_arrivee_c'. $billet['id'] .''] = $billet["heure_arrivee_c"];
                                $_SESSION['ville_c'. $billet['id'] .''] = $billet["ville_c"];
                                $_SESSION['compagnie1'. $billet['id'] .''] = $billet["compagnie1"];
                                $_SESSION['compagnie2'. $billet['id'] .''] = $billet["compagnie2"];
                                $_SESSION['co2_emis'. $billet['id'] .''] = $billet["co2_emis"];
                                $_SESSION['pourcentage'. $billet['id'] .''] = $billet["pourcentage"];
                                $_SESSION['prix_g'. $billet['id'] .''] = $billet["prix_g"];
                                $_SESSION['prix_opt1_trajet1'. $billet['id'] .''] = $billet["prix_opt1_trajet1"];
                                $_SESSION['prix_opt2_trajet1'. $billet['id'] .''] = $billet["prix_opt2_trajet1"];
                                $_SESSION['prix_opt3_trajet1'. $billet['id'] .''] = $billet["prix_opt3_trajet1"];
                                $_SESSION['prix_opt1_trajet2'. $billet['id'] .''] = $billet["prix_opt1_trajet2"];
                                $_SESSION['prix_opt2_trajet2'. $billet['id'] .''] = $billet["prix_opt2_trajet2"];
                                $_SESSION['prix_opt3_trajet2'. $billet['id'] .''] = $billet["prix_opt3_trajet2"];
                                $_SESSION['num_transport1'. $billet['id'] .''] = $billet["num_transport1"];
                                $_SESSION['num_transport2'. $billet['id'] .''] = $billet["num_transport2"];

                                echo '<a style="text-decoration: none;" href="/flyingpapers/optionsbillets.php?id_billet='.$billet['id'].'">';
                                echo '<div class="billet" id="billet1">';
                                echo '<div class="horaires rub">';
                                echo '<p class="p">'. $billet['gare_depart'] . '</p>';
                                echo '<p class="p">'. $billet['gare_arrivee'] . '</p>';
                                echo '</div>';
                                echo '<div class="duree rub">';
                                echo '<p class="p">'. $billet['duree'] . '</p>';
                                echo '<p class="p">'. $billet['compagnie2'] . '</p>';
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
                                echo '<p class="p p9">'. $billet['prix_g'] . '€</p>';
                                echo '<p class="p p10">Plus de détails</p>';
                                echo '</div>';
                                echo '</div>';
                                echo '</a>';
                    /*
                        echo '<form method="get" action="optionsbilets.php">';
                        
                        echo '<input hidden class="input-text" list="modeTransport" name="modeTransport" id="modeTransport" type="text" value="3">';
                        echo '<input class="btn-orange" type="SUBMIT" value="Rechercher" id="recherche">'; 
                    echo '</form>';*/
                            }
                    ?>
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