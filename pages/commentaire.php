<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=livreor', 'root', '');
if(isset($_SESSION['id'])) {
    $requser = $bdd->prepare('SELECT * FROM utilisateurs WHERE id = ?');
    $requser->execute(array($_SESSION['id']));
    $userinfo = $requser->fetch();   
}  
 
    if(isset($_POST['forminscription'])) {
        $commentaire = $_POST['commentaire'];
        if(!empty($commentaire))
        {
        date_default_timezone_get('Europe/Paris');
        $date =date("Y-m-d");
        $requetecom = $bdd->prepare("INSERT INTO  commentaires(commentaire, id_utilisateurs, date) VALUES(?, ?, ?)");
        $requetecom->execute(array($commentaire, $_SESSION['id'], $date));
        header("location:livre-or.php?id=".$_SESSION['id']);
        }
        else
        {
           $erreur;
        }
    }
    else
    {
        $erreur;
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
          <textarea name="commentaire" rows=10 cols=80 placeholder="Votre petit commentaire magique!" ></textarea>
        </article>  

        <article class="user-box">
            <input type="submit" name="forminscription" value="Poster mon commentaire" />
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