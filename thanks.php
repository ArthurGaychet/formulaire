<?php

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // nettoyage et validation des données soumises via le formulaire 
    if (!isset($_POST['user_firstname']) || trim($_POST['user_firstname']) === '')
        $errors[] = "Le prénom est obligatoire";
    if (!isset($_POST['user_name']) || trim($_POST['user_name']) === '')
        $errors[] = "Le nom est obligatoire";
    if (!isset($_POST['user_email']) || trim($_POST['user_email']) === '')
        $errors[] = "L'email est obligatoire";
    if (!isset($_POST['user_phone']) || trim($_POST['user_phone']) === '')
        $errors[] = "La numero de téléphone est obligatoire";
    if (!isset($_POST['user_message']) || trim($_POST['user_message']) === '')
        $errors[] = "Un message est obligatoire";
    
    if (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)){
        $errors[] = "L'email n'est pas au bon format";
    }
    if (!filter_var($_POST['user_phone'], FILTER_VALIDATE_INT)){
        $errors[] = "Le numero n'est pas au bon format";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php // Affichage des éventuelles erreurs 
    if (count($errors) > 0) : ?>
        <div class="border border-danger rounded p-3 m-5 bg-danger">
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    
    <?php if(!empty($errors)) die(); ?>


    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = $_POST["user_firstname"];
            $name = $_POST["user_name"];
            $email = $_POST["user_email"];
            $select = $_POST["simple"];
            $phone = $_POST["user_phone"];
            $message = $_POST["user_message"];

            echo "Merci $firstname $name de nous avoir contacté à propos de $select.";

            echo "<br>";

            echo "Un de nos conseillers vous contactera soit à l’adresse $email ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande :";

            echo "<br>";

            echo "$message";
        }
        ?>

</body>

</html>