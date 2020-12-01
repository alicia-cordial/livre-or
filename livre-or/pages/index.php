<?php
session_start();
if(isset($_POST['submit']))
{
    header('location:inscription.php');
}
?> 




<!DOCTYPE html>

<html>

    <head>
        <meta charset= "utf-8"/>
        <link rel= "stylesheet" href= "../index.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
        
        <title>PAGE D'ACCUEIL</title>
    </head>

    <body>
        <header>
            <nav id="navTop">
                <ul id="listeNavTop">

                <section class="lien">
                <a href="https://fr.wikipedia.org/wiki/Quidditch_moldu"><li>Qu'est-ce le Quidditch?</li></a>
          <img src="../images/mouchard.png" alt="mouchard"></img>
        </section>

        <section class="lien">
                <a href="https://www.leparisien.fr/sports/le-quidditch-c-est-pas-sorcier-28-04-2016-5750081.php"><li>Le Quidditch c'est pas sorcier</li></a>
          <img src="../images/mouchard.png" alt="mouchard"></img>
        </section>

        <section class="lien">
        <a href="https://www.laprovence.com/article/sports/3910369/le-quidditch-un-sport-de-moldus%C2%A0.html"><li>Le Quidditch un sport de moldus</li></a>
          <img src="../images/mouchard.png" alt="mouchard"></img>
        </section>

        <section class="lien">
        <a href="https://actu.fr/auvergne-rhone-alpes/lyon_69123/ces-jeunes-lyon-vont-jouer-ligue-champions-quidditch-2020_29370469.html"><li>La ligue des champions</li></a>
          <img src="../images/mouchard.png" alt="mouchard"></img>
        </section>

        
        
                </ul>
              </nav>
        </header>
        <main>

<section class="inscription">
    <h1> A Marseille, le Quidditch c'est pas kitsch</h1>
    <a href="../pages/inscription.php" class="button" name="submit" type="submit">
        <span>S'inscrire</span>
    </a>        
</section> 

<section class="bal">
    <article class="bal1">
        <h3>LE BAL DES SORCIERS 2021</h3>
            <p>Magical Events organise chaque année le plus grand rassemblement Potterhead de France ! Sur deux jours de nombreuses activités inspirées de la saga Harry Potter vous sont proposées. Cours de potions, astrologie, botanique, histoire de la magie, quidditch, ... le tout ponctué par un Bal et un banquet ! Le Bal des Sorciers aura lieu cette année à l'Abbaye Royale du Moncel, dans l'Oise.</p>
            <a href="https://www.magicalevents.fr/adherer">N'hésiter pas à nous rejoindre !</a>   
    </article>

    <article class="bal2">
        <a href="https://www.magicalevents.fr/adherer"></a>
        <img src="../images/baldesorciers.jpg" width="800px" height="500px"></img>
    </article>
</section> 

<section>
    <h2>TITRE DU JOUR</h2> 
        
        <section class="day">
                <article class="day1">
                    <h3>Licences 2020-2021 : modalités d’adhésion</h3>
                    <p>Précisions sur les modalités d’adhésion pour la saison 2019-2020.</p>
                </article>
                
                <article class="day2">
                    <img src="../images/terrain.jpg" width="600px" height="500px"></img>
                </article>
        </section>

</section>

<section class="actus">
    <h2>LES ACTUALITES</h2>

    <section class="column">
        <article class="column1">
            <h3>EQCQ 2020 : ouverture des candidatures</h3>
                 <p>Nous lançons l’appel à candidatures pour l’organisation du tournoi qualificatif pour l’EQC (EQCQ) à l’automne 2020. Ce tournoi permettra à cinq équipes de se qualifier pour l’EQC D1 qui aura lieu entre 16 avril et le 16 mai 2021.</p>
        </article>

        <article class="column2">
            <h3>Les candidatures pour le bureau 2020-2022 sont ouvertes !</h3>
                <p>La Fédération du Quidditch Français recherche les futurs membres de son bureau.</p>
        </article>

        <article class="column3">
            <h3>Reprise des entrainements avec quelques adaptations</h3>
                <p>Après une longue période d’interruption, le gouvernement a autorisé la reprise des sports collectifs. </p>
        </article>
    </section>

</section>



        </main>
        
        <footer>
            <ul id="listeNavTop">
            
        <section class="lien">
            <a href="livre-or.php"><li>Notre livre d'or</li></a>
            <img src="../images/mouchard.png" alt="mouchard"></img>
        </section>

        <section class="lien">
            <a href="https://www.facebook.com/Quidditch-Marseille-442769749184175/"><li>Club Quidditch Marseille</li></a>
          <img src="../images/mouchard.png" alt="mouchard"></img>
        </section>

        <section class="lien">
        <a href="https://www.facebook.com/FederationQuidditch"><li>Facebook club Quidditch</li></a>
          <img src="../images/mouchard.png" alt="mouchard"></img>
        </section>

        <section class="lien">
        <a href="https://www.globenewswire.com/news-release/2020/07/02/2056641/0/en/A-group-of-peaceful-alien-race-details-their-troublesome-journey-that-led-to-their-crash-landing-in-Mexico.html"><li>Un livre écrit par des aliens</li></a>
          <img src="../images/mouchard.png" alt="mouchard"></img>
        </section>
                
                
              </ul>
        </footer>
    </body>

</html>