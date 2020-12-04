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
<body class="page-1">
    <nav class="navbar navbar-light navbar-expand-xl bg-faded justify-content-center">
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
                    <a class="nav-link nav-link-style" href="#">Vos réservations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-style" href="#">S'inscrire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-peche" href="#">Se connecter</a>
                </li>
            </ul>
        </div>
    </nav>
      
    <section id="banniere">
        <h1>Voyager l'esprit léger<span class="dot">.</span> Tout simplement<span  class="dot">.</span></h1>
        <h4>Flying Papers vous accompagne pour faciliter</br> vos déplacements en France et en Europe tout en restant écolo !</h4>
        <div id="moteur-recherche">
            <div class="container search">
                <div class="row">
                    <p>Aller Simple</p>
                    <p>1 Adulte, Sans carte de réduction</p>
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
                            <input class="input-text" list="villesDepart" name="villeDepart" id="ville-depart-choix" type="text" placeholder="Ville de départ" required>
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
                            <input class="input-text" list="villesArrivee" name="villeArrivee" id="ville-arrivee-choix" type="text" placeholder="Ville d\'arrivée" required>
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
                                <input class="input-text-date input-text-datedepart" list="datesDepart"  name="dateDepart" id="dateDepart" type="text" onfocus="(this.type=\'date\')" onblur="(this.type=\'text\')" placeholder="Date de départ" required>|
                                <input class="input-text-date input-text-datearrivee" list="datesArrivee" name="dateArrivee" id="dateArrivee" type="text" onfocus="(this.type=\'date\')" onblur="(this.type=\'text\')" placeholder="+ Ajouter un retour">
                            </div>
                        ';
                        echo '<input hidden class="input-text" list="modeTransport" name="modeTransport" id="modeTransport" type="text" value="3">';
                        echo '<input class="btn-peche bouton" type="SUBMIT" value="Rechercher" id="recherche">'; //ajouter un évènement sur submit : redirection vers page resultats.php
                    echo '</form>';
                    ?>
                </div>
            </div>
        </div>
    </section>

    <div class="destinationsPopulaires">
        <h2>Nos destinations les plus populaires<span class="dot">.</span></span></h2>
        <div class="cards-mobile">
            <div class="card-mobile">
                <div class="card card-img-1">
                    <div class="card-body">
                        <h4>Porto-vecchio</h4>
                    </div>
                </div>
                <div class="card-mob-text">
                    <h5>en voilier</h5>
                    <p class="card-text">Au départ de Toulon, Nice et Marseille, direction l’île de beauté tout en profitant de l’air marin.</p>
                </div>
            </div>
            <div class="card-mobile">
                <div class="card card-img-2">
                    <div class="card-body">
                        <h4>Milan</h4>
                    </div>
                </div>
                <div class="card-mob-text">
                    <h5>en train</h5>
                    <p class="card-text">Depuis Paris et Montpellier laissez-vous transporter le temps d’une sieste jusqu’au au coeur de l’Italie.</p>
                </div>
            </div>
            <div class="card-mobile">
                <div class="card card-img-3">
                    <div class="card-body">
                        <h4>Bruxelles</h4>
                    </div>
                </div>
                <div class="card-mob-text">
                    <h5>en bus</h5>
                    <p class="card-text">Depuis Paris ou Lille partez à la rencontre du mélange de la culture flamande et française.</p>
                </div>
            </div>
            <div class="card-mobile">
                <div class="card card-img-4">
                    <div class="card-body">
                        <h4>Rouen</h4>
                    </div>
                </div>
                <div class="card-mob-text">
                    <h5>en vélo</h5>
                    <p class="card-text">Pour les normands les plus téméraires, laissez-vous tenter par une randonnée à vélo jusqu’à Rouen.</p>
                </div>
            </div>
        </div>
        <div class="cards">
            <div class="card card-img-1">
                <div class="card-body">
                    <h4>Porto-vecchio</h4>
                    <h5>en voilier</h5>
                    <p class="card-text">Au départ de Toulon, Nice et Marseille, direction l’île de beauté tout en profitant de l’air marin.</p>
                </div>
            </div>
            <div class="card card-img-2">
                <div class="card-body">
                    <h4>Milan</h4>
                    <h5>en train</h5>
                    <p class="card-text">Depuis Paris et Montpellier laissez-vous transporter le temps d’une sieste jusqu’au au coeur de l’Italie.</p>
                </div>
            </div>
            <div class="card card-img-3">
                <div class="card-body">
                    <h4>Bruxelles</h4>
                    <h5>en bus</h5>
                    <p class="card-text">Depuis Paris ou Lille partez à la rencontre du mélange de la culture flamande et française.</p>
                </div>
            </div>
            <div class="card card-img-4">
                <div class="card-body">
                    <h4>Rouen</h4>
                    <h5>en vélo</h5>
                    <p class="card-text">Pour les normands les plus téméraires, laissez-vous tenter par une randonnée à vélo jusqu’à Rouen.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="home-rect home-rect-g">
        <h2>Nos valeurs écologiques<span class="dot">.</span></span></h2>
        <div class="home-rect-flex">
            <div class="home-rect-txt">
                <p>Chez Flying Papers, nous souhaitons démocratiser les démarches écologiques de consommation. Notre volonté est de « vivre mieux en consommant mieux ».</p>
                <p>Nous vous proposons les meilleures solutions de transports sur le marché. En se basant sur vos attentes et sur le respect de l’environnement, nous comparons les offres de plus de 250 sociétés partenaires.</p>
                <p>Voyager l’esprit léger, Flying Papers s’occupe de tout, que ce soit pour la préparation de vos trajets ou pour la préservation de notre environnement !</p>
                <button class="btn-bleu ensavoirplus">En savoir plus</button>
            </div>
            <div class="jauges jauges-peche">
                <h3>Paris – Moscou en avion</h3>
                <h6>par personne*</h6>
                <table class="jauges-table">
                    <tbody>
                        <tr>
                            <td>
                                <img src="img/co2-peche.svg" alt="CO2" class="co2">
                            </td>
                            <td>
                                <img src="img/jauge-pleine.svg" alt="Jauge pleine" class="jauge">
                            </td>
                        </tr>
                        <tr>
                            <td><span class="jauges-label">1800 </span><span class="jauges-label-kgpourcent">KG</span></td>
                            <td><span class="jauges-label">90 </span><span class="jauges-label-kgpourcent">%</span></td>
                        </tr>
                        <tr>
                            <td class="jauges-text">CO2 émis pour un trajet aller retour</td>
                            <td class="jauges-text">Du quota annuel pour limiter le réchauffement</td>
                        </tr>
                    </tbody>
                </table>
                <p class="jauges-source">*Source : calculs sur données de l’ADEME, base carbone. Effet de trainée inclus.<p>
            </div>
            <div class="jauges jauges-bleu">
                <h3>Paris – Marseille en TGV</h3>
                <h6>par personne*</h6>
                <table class="jauges-table">
                    <tbody>
                        <tr>
                            <td>
                                <img src="img/co2-bleu.svg" alt="CO2" class="co2">
                            </td>
                            <td>
                                <img src="img/jauge-vide.svg" alt="Jauge vide" class="jauge">
                            </td>
                        </tr>
                        <tr>
                            <td><span class="jauges-label">3 </span><span class="jauges-label-kgpourcent">KG</span></td>
                            <td><span class="jauges-label">0.1 </span><span class="jauges-label-kgpourcent">%</span></td>
                        </tr>
                        <tr>
                            <td class="jauges-text">CO2 émis pour un trajet aller retour</td>
                            <td class="jauges-text">Du quota annuel pour limiter le réchauffement</td>
                        </tr>
                    </tbody>
                </table>
                <p class="jauges-source">*Source : SNCF<p>
            </div>
        </div>
    </div>

    <div class="home-rect home-rect-w">
        <h2>Nos partenaires<span class="dot">.</span></span></h2>
        <div class="home-rect-flex">
            <div class="home-rect-txt">
                <p>Grâce à un large choix de solutions de transports proposées par nos 250 partenaires telles que SNCF, FLIXBUS, BLABLACAR, VELIB’, voyagez en toute confiance et en toute sérénité.</p>
                <p>Embarquez vers votre prochaine destination en bus, en train, en bateau ou parmi nos autres modalités de transports disponibles grâce à notre important réseau de partenaires.</p>
                <p>Réservez vos billets directement sur notre site tout en bénéficiant de prix et d’avantages exclusifs.</p>
            </div>
            <div class="partenaires">
                <h3>Ils nous font confiance pour vendre leurs billets</h3>
                <div class="partenaires-pic">
                    <img src="img/partenaire_1.png" alt="Partenaire 1">
                    <img src="img/partenaire_2.png" alt="Partenaire 1">
                    <img src="img/partenaire_3.png" alt="Partenaire 1">
                    <img src="img/partenaire_4.png" alt="Partenaire 1">
                    <img src="img/partenaire_5.png" alt="Partenaire 1">
                    <img src="img/partenaire_6.png" alt="Partenaire 1">
                </div>
            </div>
        </div>
        <div class="join">
            <h5>Vous êtes un•e professionnel•le ?</h5>
            <button class="btn-bleu" id="Join">Rejoignez-nous !</button>
        </div>
    </div>
    <div class="home-rect home-rect-g">
        <h2>Nos clients en parlent le mieux<span class="dot">.</span></span></h2>
        <div class="clients">
            <div class="client">
                <img src="img/client_1.png" alt="Client 1">
                <div class="client-txt">
                    <p><strong>Je recommande Flying Papers</strong></br>Je recommande flyingpapers.com !</br>La demande de réservation pour un trajet est simple, le site est intuitif.</p>
                </div>
            </div>
            <div class="client">
                <img src="img/client_2.png" alt="Client 2">
                <div class="client-txt">
                    <p><strong>Site très claire et facile à utiliser</strong></br>Facile de trouver des billets de transports économiques avec un faible taux d’empreinte carbone.</br>Je recommande fortement !</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="home-rect home-rect-w">
        <h2>Newsletter<span class="dot">.</span></span></h2>
        <div class="home-rect-flex responsive-web">
            <div class="newsletter-left">
                <input class="input-text" type="text" placeholder="Votre adresse e-mail">
                <input class="btn-peche" type="submit" value="S'abonner">
                <p class="newsletter-title">Recevez tous nos bons plans pour voyager éco-responsable</p>
            </div>
            <div class="newsletter-right">
                <p><span class="promo promo-1">-20%</span> <span class="promo promo-2">offert</span></p>
                <p>sur votre premier trajet ne dépassant pas les 10kg de CO2 émis pour toute inscription à la newsletter</p>
            </div>
        </div>
        <div class="home-rect-flex responsive-mobile">
            <div class="newsletter-left">
                <p class="newsletter-title">Recevez tous nos bons plans pour voyager éco-responsable</p>
                <p><span class="promo promo-1">-20%</span> <span class="promo promo-2">offert</span> sur votre premier trajet ne dépassant pas les 10kg de CO2 émis pour toute inscription à la newsletter</p>
            </div>
            <div class="newsletter-right">
                <input class="input-text" type="text" placeholder="Votre adresse e-mail">
                <input class="btn-peche" type="submit" value="S'abonner">
            </div>
        </div>
    </div>

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
    <div id="cookies" class="cookies">
        <p class="lblcookies">
          Nous utilisons les cookies pour assurer un meilleur service, analyser
          les comportements de nos utilisateurs et améliorer nos publicités sur
          des sites tiers. En poursuivant la navigation sur notre site, vous
          acceptez les termes d’utilisation des cookies en conformité avec notre
          politique en matière de confidentialité. Vous pourrez désactiver les
          cookies à n’importe quel moment.
        </p>
        <a onclick="document.getElementById('cookies').style.visibility = 'hidden';">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"/></svg>
        </a>  
    </div>
</body>
</html>