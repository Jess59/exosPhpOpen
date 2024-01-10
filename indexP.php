<?php
$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];
$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => 'Etape 1 : prenez une belle salade',
        'author' => 'lorene.castor@exemple.com',
        'is_enabled' => true,
    ],
];
function afficheListeRecette($listeDeRecettes){
    
    foreach ($listeDeRecettes as $var) {
        echo '<li>' .  $var['title'].'</li>';
    }
   }

function afficheListeUsers($listedeUsers){
    echo '<h2>Liste de Users</h2>';
    foreach($listedeUsers as $var){
       echo '<li>' . ' '. $var['full_name'];
       echo '   '.'<a href="mailto:' . $var['email'] . '">' . $var['email'] .'</a>';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="container">
        <h1>Liste des recettes de cuisine</h1>
        <ul>
     <?php 
      afficheListeRecette($recipes);
      afficheListeUsers($users);
        ?>
        </ul>
    </div>
</body>
</html>











