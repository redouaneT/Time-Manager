<?php



// Obtenir l'action de la requête 
$action = $_GET["action"];

// Créer une nouvelle connexion à la base de donnée 
require_once 'connex/Crud.php';

$table = "activity";

$_POST["user_id"] = 1;

// Créer un nouvel utilisateur
if ($action === "create") {
    // var_dump($_POST);

    // die();
    $crud = new Crud;
    $insert = $crud->insert($table, $_POST);
    header("location:../views/activity/activity-list.php");
}
// Supremer un utilisateur utilisateur
if ($action === "delete") {
    unset($_POST['user_id']);

    $crud = new Crud;
    $crud->delete($table, $_POST, $_POST['id']);
    header("location:../views/activity/activity-list.php");
}
// Modifier un utilisateur
if ($action === "update") {
    $crud = new Crud;
    $crud->update($table, $_POST, $_POST['id']);
    header("location:../views/activity/activity-list.php");
}
