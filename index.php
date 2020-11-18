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
    
    <title>Comparez plusieurs billets de transport et voyagez léger | Flying Papers</title>
     
</head>
<body>
    
    <a href="#"></a>
    <!-- Choix des langues en haut à droite -->
    <!-- Menu : "Vos réservations" ; "S'inscrire" ; "Se connecter" en haut à droite -->
    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#"><img src="img/logo.PNG" alt="logo Flying Papers" /></a>
    
          <div class="collapse navbar-collapse justify-content-right" id="menu">
            <ul class="nav nav-pills navbar-nav">
                <li class="nav-item"><a class="nav-link nav-link-style" href="#langue">Choix de la langue</a></li>
                <li class="nav-item"><a class="nav-link nav-link-style" href="#reservations">Vos réservations</a></li>
                <li class="nav-item"><a class="nav-link nav-link-style" href="#inscription">S'inscrire</a></li>
                <li class="nav-item"><a class="nav-link bouton-bleu" href="#connexion">Se connecter</a></li>
            </ul>
          </div>
      </nav>
      
    <section id="moteur-recherche">
        <h1>Voyager l'esprit léger<span style="color:#f0856b">.</span> Tout simplement<span style="color:#f0856b">.</span></h1>
        <h4>Flying Papers vous accompagne pour faciliter vos déplacements en France et en Europe tout en restant écolo !</h4>
        <div class=container>
            <div class="row">
                
                <?php
                $lieu_depart1 = "Paris, France";
                $lieu_depart2 = "Rome, Italie";
                $lieu_depart3 = "Londres, Angleterre";
                $lieu_arrivee1 = "Paris, France";
                $lieu_arrivee2 = "Rome, Italie";
                $lieu_arrivee3 = "Londres, Angleterre";
                
                echo '<form method="get" action="resultats.php">';
                    echo '<input list="villesDepart" name="villeDepart" id="ville-depart-choix" type="text" placeholder="Ville de départ">';
                        echo '<datalist id="villesDepart">';                 
                            echo '<option value="'.$lieu_depart1.'">';                   
                            echo '<option value="'.$lieu_depart2.'">';                   
                            echo '<option value="'.$lieu_depart3.'">';                   
                        echo '</datalist>';         
                    echo '<input list="villesArrivee" name="villeArrivee" id="ville-arrivee-choix" type="text" placeholder="Ville d\'arrivée">';
                        echo '<datalist id="villesArrivee">';                   
                            echo '<option value="'.$lieu_arrivee1.'">';                   
                            echo '<option value="'.$lieu_arrivee2.'">';                   
                            echo '<option value="'.$lieu_arrivee3.'">';
                        echo '</datalist>';         
                        //query pour comparer les variables avec donnees de billets.ld_recherche et billets.la_recherche -> affichage conditionnel
                    echo '<label for="dateDepart">Date de départ :</label>';
                    echo '<input list="datesDepart"  name="dateDepart" id="dateDepart" type="date" placeholder="Date de départ">';
                    echo '<label for="dateArrivee">Date de retour (Falcultatif) :</label>';
                    echo '<input list="datesArrivee" name="dateArrivee" id="dateArrivee" type="date" placeholder="Ajouter un retour">';
                    echo '<input type="SUBMIT" value="Rechercher" id="recherche">'; //ajouter un évènement sur submit : redirection vers page resultats.php
                    //echo '<!-- <button type="submit" id="recherche" class="btn">Rechercher</button> -->';
                echo '</form>';
                ?>
            </div>
        </div>
        <!--
        <div style="background:pink;color:#333;position:fixed;right:0;bottom:0;z-index:99999999;font:1em arial;" id="ld"></div><script>setInterval(function(){if($(window).height()>=$(document).height()){$('#ld').text($(document).width()+' px');}else{$('#ld').text($(document).width()+17+' px');}},150);</script>
        -->
    </section>
</body>
</html>