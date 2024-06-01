<?php
    require_once(__DIR__.'/donnes.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations du site</title>
</head>
<body>
    <a href="connexion.php">&lt;Retour vers la page connexion</a>
   
    <?php require_once(__DIR__.'/connexion.php');?>
    <!-- affiche des rcettes -->
    <?php
    if (isset($unProfe)) : ?>
     <h1><u><?php echo"Bienvenue{$_POST['matricule']}";?></u></h1>
            <h2><u>Liste des profeseurs</u></h2>
            <?php foreach ($profes as $profe) : ?>
                <div>
                    <h4><?php echo"Maticule:{$profe['matricule']}"; ?></h4>
                    <h4><?php echo"Nom:{$profe['nom']}"; ?></h4>
                    <h4><?php echo"Prénom:{$profe['prenom']}"; ?></h4>
                    <h4><?php echo"E-Mail:{$profe['mail']}";?></h4>
                    </br>
                </div>
            <?php endforeach ?>
                <h2><u>Liste des matiéres</u></h2>
                <?php foreach ($matieres as $matiere) :?>
                    <div>
                        <h3><?php echo"Matiére:{$matiere['title']}";?></h3>
                        <h4><?php echo"Contact du prof:{$matiere['contact.prof']}";?></h4>
                        <h4><?php echo"Coefficient:{$matiere['coef']}";?></h4>
                        </br>
                    </div>
            <?php endforeach ?>  
    <?php endif;?>
    
</body>
</html>
