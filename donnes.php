<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Données</title>
</head>
<body>
  <?php
    $profes=[
        ['matricule'=>'M221','nom'=>'Diouf','prenom'=>'Omar','mail'=>'Diouf@gmail.com','password'=>'ingénieur',],
        ['matricule'=>'M223','nom'=>'Séne','prenom'=>'Modou','mail'=>'Séne@gmail.com','password'=>'chercheur',], 
        ['matricule'=>'M225','nom'=>'Dieng','prenom'=>'Ablaye','mail'=>'Dieng@gmail.com','password'=>'champ',],
        ['matricule'=>'M227','nom'=>'Pouye','prenom'=>'Bassirou','mail'=>'Pouye@gmail.com','password'=>'pilote',], 
        ['matricule'=>'M229','nom'=>'Bâ','prenom'=>'Chérif','mail'=>'Bâ@gmail.com','password'=>'capitine',],
    ];
    $matieres=[
        ['title'=>'Maths','contact.prof'=>'770000000','coef'=>6,],
        ['title'=>'Digital','contact.prof'=>'760000000','coef'=>5,],
        ['title'=>'Analogie','contact.prof'=>'780000000','coef'=>6,],
        ['title'=>'DevWeb','contact.prof'=>'750000000','coef'=>7,],
        ['title'=>'Réseau','contact.prof'=>'770000001','coef'=>8,],
        ['title'=>'English','contact.prof'=>'760000001','coef'=>4,],
    ];
  ?>  
</body>
</html>