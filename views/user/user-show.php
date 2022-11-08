<?php
// Créer une nouvelle connexion à la base de donnée 
require_once '../../class/connex/Crud.php';

$crud = new Crud;
$data = $crud->selectId("user", $_GET['id'], 'id');
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
                        <li><a href="user-add.php">Ajouter un utilisateur</a></li>
                        <li><a href="user-list.php">liste des utilisateur</a></li>
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
                        <li><a href="../appointment/appointment-add.php">Ajouter un rendez vous</a></li>
                        <li><a href="../appointment/appointment-list.php">liste des rendez-vous</a></li>
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
                    <h2><?php echo $data["username"] ?></h2>
                </header>
                <div>
                    <div class="groupe-info">
                        <small>Nom</small>
                        <span><?php echo $data["first_name"] ?></span>
                    </div>
                    <div class="groupe-info">
                        <small>Prénom</small>
                        <span><?php echo $data["last_name"] ?></span>
                    </div>
                    <div class="groupe-info">
                        <small>Courriel</small>
                        <span><?php echo $data["email"] ?></span>
                    </div>
                    <div class="groupe-info">
                        <small>Mot de passe</small>
                        <span><?php echo $data["password"] ?></span>
                    </div>
                    <div class="groupe-info">
                        <small>Date de naissance</small>
                        <span><?php echo $data["birthday"] ?></span>
                    </div>
                    <div class="groupe-info">
                        <small>Adresse</small>
                        <span><?php echo $data["address"] ?></span>
                    </div>
                    <div class="groupe-info">
                        <small>Code postale</small>
                        <span><?php echo $data["postal_code"] ?></span>
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