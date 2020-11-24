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
                   
                    <ul id="filtresTransport">
                        <li class="filtre-transport">
                            <a href="#" class="mode-transport">Vélo</a>    
                        </li>
                        <li class="filtre-transport">
                            <a href="#" class="mode-transport">Voile</a>
                        </li>
                        <li class="filtre-transport">
                            <a href="#" class="mode-transport">Trains</a>
                        </li>
                        <li class="filtre-transport">
                            <a href="#" class="mode-transport">Voiture électrique</a>
                        </li>
                        <li class="filtre-transport">
                            <a href="#" class="mode-transport">Bus</a>
                        </li>
                        <li class="filtre-transport">
                            <a href="#" class="mode-transport">Covoiturage</a>
                        </li>
                        <li class="filtre-transport">
                            <a href="#" class="mode-transport">Vols</a>
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
                            <a href="#"><img src="img/icon-facebook.svg" alt="icone Facebook" /></a>
                            <a href="#"><img src="img/icon-twitter.svg" alt="icone Twitter" /></a>
                            <a href="#"><img src="img/icon-instagram.svg" alt="icone Instagram" /></a>
                            <a href="#"><img src="img/icon-youtube.svg" alt="icone Youtube" /></a>
                            <a href="#"><img src="img/icon-linkedin.svg" alt="icone Linkedin" /></a>
                        </div>
                        <br>
                        <a  href="#"><img src="img/LOGO1.PNG" class="footer-brand" alt="logo Flying Papers" /></a>
                    </div>
                </div>      
            </div>
        </section>
    </body>
</html>