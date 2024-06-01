<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <?php
        //teste de validité

        if(isset($_POST['matricule'])&& isset($_POST['password']))
            {
                if(empty($_POST['matricule'])|| empty($_POST['password']))
                    {
                        $errorMessage="Il faut un matricule et un password valide pour soumettre le formulaire";
                        
                    }
                else{
                        foreach($profes as $profe)
                        {
                            if($profe['matricule']===$_POST['matricule'] &&$profe['password']===$_POST['password'])
                                {
                                    $unProfe=['matricule'=>$profe['matricule']];
                                }    
                            
                        else{
                                $errorMessage=sprintf (" Matricule ou password incorrect :(%s/%s)",$_POST['matricule'],$_POST['password']);
                            }
                        }  
                    } 
            }
            
    ?>
        <!-- si l'utilisateur n'est pas identifié, on affiche la page la connexion -->
    <?php 
        if(!isset($unProfe)): ?>

            <form method="POST" action="index.php">
                <!-- s'il y'a message d'erreur -->
                <?php if(isset($errorMessage)): ?> 
                    <div>
                        <?php echo htmlspecialchars($errorMessage);?>
                    </div>
                <?php endif;?>
                <h3>Entrer votre matricule et votre password pour pouvoir se connnecter au site</h3>
                <div>
                    <label for="M">Matricule</label>
                    <input type="text" name="matricule"id="M">
                </div>
                    </br>
                <div>
                    <label for="P">Password</label>
                    <input type="password" name="password"id="P">
                    <br>
                </div>
                    </br></br>
                    <button type="submit" name="envoi"
                    >Formulaire envoyer</button>
                
            </form>
        <?php else:?>
    <?php endif;?>
</body>
</html>