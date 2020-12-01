<?php
session_start();
 
$bdd = new PDO('mysql:host=localhost;dbname=livreor', 'root', '');
 
if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM utilisateurs WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();

   
}
?>

<?php

 
if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM utilisateurs WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['newlogin']) AND !empty($_POST['newlogin']) AND $_POST['newlogin'] != $user['login']) {
      $newlogin = htmlspecialchars($_POST['newlogin']);
      $insertlogin = $bdd->prepare("UPDATE utilisateurs SET login = ? WHERE id = ?");
      $insertlogin->execute(array($newlogin, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newpassword']) AND !empty($_POST['newpassword']) AND isset($_POST['newpassword2']) AND !empty($_POST['newpassword2'])) {
      $password = $_POST['newpassword'];
      $password2 = $_POST['newpassword2'];
      if($password == $password2) {
         $insertmdp = $bdd->prepare("UPDATE utilisateurs SET password = ? WHERE id = ?");
         $insertmdp->execute(array($password, $_SESSION['id']));
         header('Location: profil.php?id='.$_SESSION['id']);
      } else {
         $msg = "Vos deux mdp ne correspondent pas !";
      }
   }
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset= "utf-8"/>
    <link rel= "stylesheet" href= "../css/profil.css">
   
    <title>Profil</title>
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
          <a href="connexion.php"><li>Connexion</li></a>
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
        <h1>Bienvenue<h1>
      <section class="infos">
         <h2>Profil de <?php echo $userinfo['login']; ?></h2>
      </section>
   
      <section class="profil">
            <form method="POST" action="" enctype="multipart/form-data">
              <fieldset>  
              <legend>Tes petites infos à modifier</legend>

              <article class="user-box">
                  <label>Login :</label>
                  <input type="text" name="newlogin" placeholder="login" value="<?php echo $user['login']; ?>" /><br /><br />
              </article>
               
                <article class="user-box">
                  <label>Mot de passe :</label>
                  <input type="password" name="newpassword" placeholder="Mot de passe"/><br /><br />
                </article>
                
                <article class="user-box"> 
                  <label>Confirmation - mot de passe :</label>
                  <input type="password" name="newpassword2" placeholder="Confirmation du mot de passe" /><br /><br />
                <article class="user-box">   

                <article class="user-box">
                  <input type="submit" value="Mettre à jour mon profil !" />
                <article class="user-box">
              </fieldset>  
            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
      </section>

      <section class="deconnexion">
      <?php
      if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="deconnexion.php">Se déconnecter</a>
         <?php
         }
         ?>
      </section>

      </main>
                                                     
                                                     
      <!--Footer-->
      <footer>  
        <p> It's a Witch Production ©</p>
      </footer>

   </body>
</html>
<?php   
}
else {
   header("Location: connexion.php");
}
?>