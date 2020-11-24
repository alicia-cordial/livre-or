<?php
session_start();
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
        <h1>Bienvenue sur le site des amis de toute forme de vie</h1>


<?php
$bdd = mysqli_connect("localhost", "root", "root", "livreor");
$requete = "SELECT date AS 'posté', login AS 'utilisateur', commentaire FROM `commentaires` INNER JOIN `utilisateurs` ON commentaires.id_utilisateurs = utilisateurs.id ORDER BY date DESC;";

$query = mysqli_query($bdd, $requete);

$i=0;

echo "<table>" ;

while ($result = mysqli_fetch_assoc($query))
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

    foreach ($result as $key => $value) 
    {
  echo "<td>$value</td>";
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
      <?php
      if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="commentaire.php">Laisser un commentaire</a>
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
