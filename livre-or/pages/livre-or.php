<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=livreor', 'root', '');
if(isset($_SESSION['id'])) {
    $requser = $bdd->prepare('SELECT * FROM utilisateurs WHERE id = ?');
    $requser->execute(array($_SESSION['id']));
    $userinfo = $requser->fetch();   
 }
 ?>
 


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset= "utf-8"/>
    <link rel= "stylesheet" href= "../css/livre-or.css">
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@300&display=swap" rel="stylesheet">
    <title>Livre d'or</title>
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
          <a href="inscription.php"><li>Inscription</li></a>
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

        </ul>
      </nav>
        </header>
    
    
     
        <main>
        <h1>Les petits commentaires des sorciers et sorcières</h1>

        <h2>Profil de <?php echo $userinfo['login']; ?></h2>
<?php

$requser = $bdd->prepare("SELECT date AS 'posté', login AS 'utilisateur', commentaire FROM `commentaires` INNER JOIN `utilisateurs` ON commentaires.id_utilisateurs = utilisateurs.id ORDER BY date DESC;");
$requser->execute();

$i=0;

echo "<table>" ;

while ($result = $requser->fetch(PDO::FETCH_ASSOC))
{
    if ($i == 0)
  {

    foreach ($result as $key => $value)
    {
      echo "<th>$key</th>";
    }
    $i++;

  }

  echo "<tr>";
  foreach ($result as $key => $value) {
    if ($key == "posté"){
      date_default_timezone_set('Europe/Paris');
      $value =  date("d-m-Y", strtotime($value));  ;
    echo "<td>$value</td>";
    }
    else
      echo "<td>" .nl2br($value). "</td>";
  }
  echo "</tr>";
}

echo "</table>";

 ?>

<?php
if (isset($erreur))
{
  echo $erreur;
}
?>

</form>                                                                                              
</section>
   
<section class="commentaire">
<a href="commentaire.php" class="button" name="submit" type="submit">
        <span>Laissez votre petit commentaire</span>
    </a>   
</section>
     </main>
                                                     
                                                     
         <!--Footer-->
    <footer>  
       <p> It's a Witch Production ©</p>
    </footer>

</body>
</html>
