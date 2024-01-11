<?php
// Crée une instance de l'objet PDO (PHP Data Objects) pour la connexion à la base de données MySQL.
$mysqlClient = new PDO(
	'mysql:host=localhost;dbname=partage_de_recettes;charset=utf8', 
    // Chaîne de connexion spécifiant le type de base de données,
    // l'hôte, le nom de la base de données et le jeu de caractères.
	'root', // Nom d'utilisateur de la base de données.
	'' // Mot de passe de la base de données.
);


$recipesStatement = $mysqlClient->prepare('SELECT * FROM recipes');
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();
$usersStatement = $mysqlClient->prepare('SELECT * FROM users');
$usersStatement->execute();
$users = $usersStatement->fetchAll();

function afficheListeRecette($listeDeRecettes){
    
    foreach ($listeDeRecettes as $var) {
        echo '<li>' .  $var['title'].'</li>';
    }
   }
   function afficheListeUsers($listedeUsers){
    echo '<h2>Liste de Users</h2>';
    foreach($listedeUsers as $var2){
       echo '<li>' . ' '. $var2['full_name'];
       echo '</li>';
       }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Liste des recettes de cuisine</h1>
        <ul>
     <?php 
      afficheListeRecette($recipes);
      afficheListeUsers($users);
        ?>
        </ul>
    
</body>
</html>