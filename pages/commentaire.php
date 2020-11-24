<?php

$bdd = new PDO('mysql:host=localhost;dbname=livreor', 'root', 'root');
if(isset($_GET['id']) AND $_GET['id'] > 0) {
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM utilisateurs WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
 ?>
 
 <?php   
 }
 ?>
 



   
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset= "utf-8"/>
    <link rel= "stylesheet" href= "../css/commentaire.css">
    <title>Commentaires</title>
</head>
    
  <body>
        <!--Header-->
        <header>
      <nav id="navTop">
        <ul id="listeNavTop">
        <section class="lien">
          <a href="index.php"><li>Accueil</li></a>
          <img src="../images/mouchard.png" alt="mouchard"></img>
        </section>

        <section class="lien">
          <a href="connexion.php"><li>Connexion</li></a>
          <img src="../images/mouchard.png" alt="mouchard"></img>
        </section>

        <section class="lien">
          <a href="profil.php"><li>Profil</li></a>
          <img src="../images/mouchard.png" alt="mouchard"></img>
        </section>

        <section class="lien">
          <a href="livre-or.php"><li>Livre d'or</li></a>
          <img src="../images/mouchard.png" alt="mouchard"></img>
        </section>
        </ul>
      </nav>
        </header>
    
    
     
        <main>
        <h1>Bienvenue à nos amis magiques</h1>

        <section class="infos">
         <h2>Profil de <?php echo $userinfo['login']; ?></h2>
      </section>
    
        <!--FORMULAIRE--> 



<section class="commentaire">
  <form action="commentaire.php" method="post">
    <fieldset>
      <legend>Laisse un petit commentaire</legend>
      
        <article class="user-box">
          <label for="commentaire">Commentaire :</label>
          <textarea name="nom" rows=10 cols=80 placeholder="Votre petit commentaire magique!" valeur="<?php if(isset($login)) { echo $login; } ?>"></textarea>
        </article>  

        <article class="user-box">
            <input type="submit" name="forminscription" value="Je m'inscris" />
        </article>
</fieldset>


<?php
if (isset($erreur))
{
  echo $erreur;
}
?>


</form>                                                                                              
</section>
   
     </main>
                                                     
                                                     
         <!--Footer-->
    <footer>  
       <p> It's a Witch Production ©</p>
    </footer>

</body>
</html>