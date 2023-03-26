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
