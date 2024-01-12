<?php
session_start();

// Vérifier si la session utilisateur est définie
if (!isset($_SESSION['utilisateur'])) {
    header("Location: connexion.php");
    exit();
}

// Vérifier le rôle de l'utilisateur
$roleUtilisateur = $_SESSION['utilisateur']['role'];

// Si l'utilisateur n'est ni admin ni adhérent, le rediriger
if ($roleUtilisateur !== 'admin' && $roleUtilisateur !== 'adhérent') {
    header("connexion.php");
    exit();
}
?>