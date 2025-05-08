<?php 
echo " BIENVENU AU LEVELUP TOGO " ;
// Connexion à la base de données
$conn = new mysqli("localhost", "root", "", "utilisateurs_db");
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

// Récupération et sécurisation des données
$nom = htmlspecialchars(trim($_POST['nom']));
$email = htmlspecialchars(trim($_POST['email']));
$mdp1 = $_POST['mdp1'];
$mdp2 = $_POST['mdp2'];

// Vérification des mots de passe
if ($mdp1 !== $mdp2) {
    die("Les mots de passe ne correspondent pas.");
}

// Hachage du mot de passe
$mot_de_passe = password_hash($mdp1, PASSWORD_DEFAULT);

// Préparation de l’insertion
$sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nom, $email, $mot_de_passe);

// Exécution
if ($stmt->execute()) {
    echo "Inscription réussie.";
} else {
    echo "Erreur lors de l'inscription : " . $stmt->error;
}

// Fermeture
$stmt->close();
$conn->close();
?>
