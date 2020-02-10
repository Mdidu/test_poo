<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST POO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php 
// Exemple gestion personnage !!
// require "Personnage.php";
// require "Archer.php";

// $merlin = new Personnage("Merlin");
// // $merlin->nom = "Merlin";
// // $merlin->regenerer(5);


// $harry = new Personnage("Harry");
// // $harry->nom = "Harry";
// // $harry->regenerer();
// // var_dump($harry->mort());
// $legolas = new Archer("Legolas");
// $legolas->attaque($harry);
// // $merlin->attaque($harry);

// if($harry->mort()){
//     echo "Harry est mort";
// } else{
//     echo "Harry à survécu avec ".$harry->getVie()." HP !";
// }

// // $merlin->setNom('Marlin');
// var_dump($merlin);
// var_dump($harry);
// var_dump($legolas);

// // pour avoir accès au nom du personnage (private)
// var_dump($merlin->getNom());
// var_dump($merlin->getAtk());



//Gestion formulaire
// require "Personnage.php";
require "form.php";
require 'BootstrapForm.php';
// require "test.php";

// $merlin = new Personnage('Merlin');
// $merlin->regenerer();
// var_dump($merlin);

// $form = new Form(array(
//     'username' => 'Roger'
// ));

$form = new BootstrapForm($_POST);
// var_dump(Text::widthZero(4));
?>
    <form action="#" method="post"></form>
<?php
// var_dump($form->data);
// die();

echo $form->input('username');
echo $form->input('password');
echo $form->submit();
?>
    </form>
<?php
// // $form = new Form();

// // echo $form->input('aze');
// // echo $form->input('aze');
// // echo $form->submit();
?>
</body>
</html>

