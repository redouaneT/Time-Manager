<?php
// Créer une nouvelle connexion à la base de donnée 
require_once '../../class/connex/Crud.php';

$crud = new Crud;
$data = $crud->selectId("appointment", $_GET['id'], 'id');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <title>Time-Manager</title>
</head>

<body>
    <header>
        <div class="logo">
            <picture>
                <img src="" alt="logo">
            </picture>
            <span>Time-Manager</span>
        </div>
        <nav>
            <a href="../../index.php">Accueil</a>
            <a href="#">rendez-vous</a>
            <a href="#">activities</a>
            <a href="#">Notes</a>
            <a href="#">Mon profil</a>
        </nav>
    </header>


    <aside>
        <header>
            <picture>
                <img src="" alt="">
            </picture>
            <h2>
                Admin
            </h2>
        </header>
        <nav>
            <ul>
                <li>
                    <span>Gestion des utilisateurs</span>
                    <ul>
                        <li><a href="../user/user-add.php">Ajouter un utilisateur</a></li>
                        <li><a href="../user/user-list.php">liste des utilisateur</a></li>
                    </ul>
                </li>
                <li>
                    <span>Gestion des clients</span>
                    <ul>
                        <li><a href="../client/client-add.php">Ajouter un client</a></li>
                        <li><a href="../client/client-list.php">liste des client</a></li>
                    </ul>
                </li>
                <li>
                    <span>Gestion des rendez-vous</span>
                    <ul>
                        <li><a href="appointment-add.php">Ajouter un rendez vous</a></li>
                        <li><a href="appointment-list.php">liste des rendez-vous</a></li>
                    </ul>
                </li>
                <li>
                    <span>Gestion des activities</span>
                    <ul>
                        <li><a href="../activity/activity-add.php">Ajouter une activité</a></li>
                        <li><a href="../activity/activity-list.php">liste des activities</a></li>
                    </ul>
                </li>
                <li>
                    <span>Notes</span>
                    <ul>
                        <li><a href="../note/note-add.php">Ajouter une note</a></li>
                        <li><a href="../note/note-list.php">liste des notes</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>


    <main>
        <div class="container" style="width: 50%;">
            <section>
                <header>
                    <h2>Rendez-vous pour le <?php echo $data["date"] ?></h2>
                </header>
                <div>
                    <div class="groupe-info">
                        <small>Date du rendez-vous</small>
                        <span><?php echo $data["date"] ?></span>
                    </div>
                    <div class="groupe-info">
                        <small>Description</small>
                        <span><?php echo $data["description"] ?></span>
                    </div>

                    <div class="groupe-info">
                        <small>Créée le </small>
                        <span><?php echo $data["created_at"] ?></span>
                    </div>
                </div>
            </section>
        </div>
    </main>


    <footer class="footer">
        <span>Tous les droits sont reservés</span>
    </footer>

</body>

</html>