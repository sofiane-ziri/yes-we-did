<?php
session_start(); // Démarrage de la session
require_once '../model/connect-bdd.php'; // On inclut la connexion à la base de données

if (!empty($_POST['prenom']) && !empty($_POST['password'])) // Si il existe les champs email, password et qu'il sont pas vident
{
    // Patch XSS
    $prenom = htmlspecialchars($_POST['prenom']);
    $password = htmlspecialchars($_POST['password']);

    $prenom = strtolower($prenom); // prenom transformé en minuscule


    // On regarde si l'utilisateur est inscrit dans la table utilisateurs
    $check = $bdd->prepare('SELECT login, prenom, nom, id, password FROM utilisateurs WHERE login = ?');
    $check->execute(array($prenom));
    $data = $check->fetch();
    $row = $check->rowCount();


    // Si > à 0 alors l'utilisateur existe
    if ($row > 0) {
        // Si le mail est bon niveau format
        if (filter_var($prenom, FILTER_VALIDATE_EMAIL)) {
            // Si le mot de passe est le bon
            if (password_verify($password, $data['password'])) {
                // On créer la session et on redirige sur profil.php
                $_SESSION['user'] = $data;
                header('Location:../../index.php');
                die();
            } else {
                header('Location: ../view/connexion.php?login_err=password');
                die();
            }
        } else {
            header('Location: ../view/connexion.php?login_err=email');
            die();
        }
    } else {
        header('Location: ../view/connexion.php?login_err=already');
        die();
    }
} else {
    header('Location: ../view/connexion.php');
    die();
} // si le formulaire est envoyé sans aucune données
