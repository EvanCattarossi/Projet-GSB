<?php
// Tableau associatif contenant les informations des utilisateurs
$users = [
 [
 "email" => "user1@example.com",
 "password" => "password123",
 "name" => "Jean",
 "surname" => "Dupont",
 "role" => "Admin"
 ],
 [
 "email" => "user2@example.com",
 "password" => "password456",
 "name" => "Marie",
 "surname" => "Durand",
 "role" => "User"
 ],
 // Vous pouvez ajouter d'autres utilisateurs ici
];

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $email = $_POST['email'];
 $password = $_POST['password'];
 // Parcourir la liste des utilisateurs pour trouver une correspondance
 foreach ($users as $user) {
 if ($user['email'] == $email && $user['password'] == $password) {
 // Si email et mot de passe correspondent, afficher un message de bienvenue
 echo "Bonjour, " . $user['name'] . " " . $user['surname'] . " !<br/>";
 echo "Vous avez le role <b>" . $user['role'] . "</b>.";
 exit; // Terminer le script ici après une connexion réussie
 }
 }
 // Si aucune correspondance n'a été trouvée, afficher un message d'erreur
 echo "Email ou mot de passe incorrect.";
}