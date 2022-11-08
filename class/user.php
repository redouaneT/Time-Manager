<?php

// Obtenir l'action de la requête 
$action = $_GET["action"];

// Créer une nouvelle connexion à la base de donnée 
require_once 'connex/Crud.php';

$table = "user";

// Créer un nouvel utilisateur
if ($action === "create") {
    $crud = new Crud;
    $insert = $crud->insert($table, $_POST);
    header("location:../views/user/user-list.php");
}
// Supremer un utilisateur utilisateur
if ($action === "delete") {
    $crud = new Crud;
    $crud->delete($table, $_POST, $_POST['id']);
    header("location:../views/user/user-list.php");
}
// Modifier un utilisateur
if ($action === "update") {
    $crud = new Crud;
    $crud->update($table, $_POST, $_POST['id']);
    header("location:../views/user/user-list.php");
}
