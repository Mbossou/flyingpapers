<!DOCTYPE html>
<html lang="fr">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>
        
        <title>Comparez plusieurs billets de transport et voyagez léger | Flying Papers</title>
        
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

        <div class="recap-etapes col-sm-12">
            <div class="container">
                    <a href=# class="a-options"><p class="num-e">1</p><p class="text-recap-e">Sélection des options</p></a>
                    <div class="next"></div>
                    <a href=#><p class="num-e">2</p><p class="text-recap-e">Porte-à-porte</p></a>
                    <div class="next"></div>
                    <a href=#><p class="num-e">3</p><p class="text-recap-e">Informations personnelles</p></a>
                    <div class="next"></div>
                    <a href=#><p class="num-e">4</p><p class="text-recap-e">Paiement</p></a>
            </div>
        </div>

        <section class="porte-a-porte">
            <div class="container">
                <div class="wrapper-pap">
                    <div class="recap-t">
                        <img src="img/trajet.png" alt="recap trajet">
                    </div>
                   
                    <div class="choix-depart border-fp">
                        <h5 class="bold bleu-fp">Avez-vous choisi comment rejoindre votre point de départ ?</h5>
                        <div class="row row-depart">
                            <a href="#">
                                <div class="bloc bloc1 border-fp">
                                    <p>J’ai déjà prévu un moyen de déplacement</p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="bloc bloc2 border-fp">
                                    <p>Louer un vélo à déposer devant la gare <br><span class="bold">15 ct / min</span></p>
                                </div>
                            </a>
                            <a href="#">
                                <div class="bloc bloc3 border-fp">
                                    <p>Réserver un Taxi Green (Voiture électrique) <br><span class="bold">30 €</span></p>
                                </div>
                            </a>
                            
                            
                            
                        </div>
                    </div>
                    <div class="impact-ecolo">
                        <div class="conteneur">
                            <h4 class="titre-ecolo bold">Impact Ecologique</h4>
                            <div class="row row-ecolo">
                                <div class="bloc bloc1">
                                    <p class="bold">2,5 KG</p>
                                    <p class="text">CO2 émis / pers. pour un aller</p>
                                </div>
                                <div class="bloc bloc2">
                                    <p class="bold">0.1 %</p>
                                    <p class="text">Du quota annuel pour limiter le réchauffement</p>
                                </div>
                            </div>  
                        </div>
                        
                        <div class="separateur"></div>
                    </div>

                    <div class="recap-b">
                        <h5 class="bold bleu-fp">Récapitulatif</h5>
                        <div class="row row1"><p>Billet 1 (1 adulte)</p><p>22,00€</p></div>
                        <div class="row row2"><p class="text-tranquille">Classe Tranquilité</p><p>+8,00€</p></div>
                        <div class="row row3"><p>Billet 2 (1 adulte)</p><p>70,00€</p></div>
                        <div class="row row4"><p><span class="bold">Total </span>(TTC)</p><p class="bold">100,00€</p></div>
                    </div>
                    <div class="modalités">
                    <h5 class="bold bleu-fp">Modalités</h5>
                    <p class="bold">Billet 1</p>
                    <p>Billet échangeable sous conditions, non remboursable.</p>
                    <p class="bold billet2">Billet 2</p>
                    <p>Ce billet est uniquement valable pour le train sélectionné. Ce billet est échangeable avant le départ. Des frais fixes de 50 € par personne et par trajet vous seront demandés, ainsi que le montant de la différence si le nouveau billet est plus cher que l’original. Ce billet n’est pas remboursable. </p>
                    </div>
                    <a class="valider validerpap bouton-peche" href="#">Valider</a>

                    
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
                            <a href="#"><img src="img/icon-facebook.PNG" alt="icone Facebook" /></a>
                            <a href="#"><img src="img/icon-twitter.PNG" alt="icone Twitter" /></a>
                            <a href="#"><img src="img/icon-instagram.PNG" alt="icone Instagram" /></a>
                            <a href="#"><img src="img/icon-youtube.PNG" alt="icone Youtube" /></a>
                            <a href="#"><img src="img/icon-linkedin.PNG" alt="icone Linkedin" /></a>
                        </div>
                        <br>
                        <a  href="#"><img src="img/LOGO1.PNG" class="footer-brand" alt="logo Flying Papers" /></a>
                    </div>
                </div>
                            
            </div>
            <div style="background:pink;color:#333;position:fixed;right:0;bottom:0;z-index:99999999;font:1em arial;" id="ld"></div><script>setInterval(function(){if($(window).height()>=$(document).height()){$('#ld').text($(document).width()+' px');}else{$('#ld').text($(document).width()+17+' px');}},150);</script>

        </section>
    </body>
</html>