<?php
session_start();
 
$bdd = new PDO('mysql:host=localhost;dbname=livreor', 'root', 'root');
 
 
if(isset($_POST['formconnexion'])) 
{
   $loginconnect = htmlspecialchars($_POST['loginconnect']);
   $passwordconnect = $_POST['passwordconnect'];
   if(!empty($loginconnect) AND !empty($passwordconnect)) 
   {
      $requser = $bdd->prepare("SELECT * FROM utilisateurs WHERE login = ? AND password = ?");
      $requser->execute(array($loginconnect, $passwordconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) 
      {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['login'] = $userinfo['login'];
         header("Location: profil.php?id=".$_SESSION['id']);
      }
       else {
         $erreur = "Mauvais login ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset= "utf-8"/>
    <link rel= "stylesheet" href= "../css/connexion.css">
    <title>Connexion</title>
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
          <a href="inscription.php"><li>S'inscrire</li></a>
          <img src="../images/mouchard.png" alt="mouchard"></img>
        </section>

        <section class="lien">
          <a href="profil.php"><li>Profil</li></a>
          <img src="../images/mouchard.png" alt="mouchard"></img>
        </section>


        </ul>
      </nav>
        </header>
    
    
     
        <main>
        <h1>Bienvenue sur le site des croyants de toute forme de vie</h1>
   
    <!--Formulaire-->      

    <section class="connexion">


<form method="post" action="connexion.php" >
  <fieldset>
<legend> Déjà inscrit? Connecte toi vite!</legend>

    <article class="user-box">
        <label for= "login">Login</label> 
        <input type="text" name="loginconnect" place holder=login />
    </article>

    <article class="user-box">
        <label for= "password">Password</password></label>
        <input type="password" name="passwordconnect" placeholder="Mot de passe" />
    </article>

        <input type="submit" name="formconnexion" value="Se connecter !" />



    </fieldset> 
</form>

    </section>             
      </main>
      
      
         <!--Footer-->

        <footer>  
       <p> It's an Witch Production ©</p>
      </footer>


            </body>
            </html>



