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
        <div class="form-container" style="width: 50%;">
            <form action="../../class/user.php?action=update" method="post">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <div class="form-group">
                    <label for="username">Nom utilisateur</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $data['username'] ?>" placeholder="Nom utilisateur...">
                </div>
                <div class="form-group">
                    <label for="first_name">Nom</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $data['first_name'] ?>" placeholder="Nom...">
                </div>
                <div class="form-group">
                    <label for="last_name">Prénom</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $data['last_name'] ?>" placeholder="Prénom...">
                </div>
                <div class="form-group">
                    <label for="last_name">Courriel</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email'] ?>" placeholder="Courriel...">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $data['password'] ?>" placeholder="Mot de passe...">
                </div>
                <div class="form-group">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $data['birthday'] ?>" placeholder="Date de naissance...">
                </div>
                <div class="form-group">
                    <label for="address">Adresse</label>
                    <input type="text" class="form-control" id="address" name="address" value="<?php echo $data['address'] ?>" placeholder="Adresse...">
                </div>

                <div class="form-group">
                    <label for="postal_code">Code postale</label>
                    <input type="text" class="form-control" id="postal_code" name="postal_code" value="<?php echo $data['postal_code'] ?>" placeholder="Code postale...">
                </div>

                <input class="btn btn-primary" type="submit" value="Sauvegarder" /*>
            </form>
        </div>
    </main>


    <footer class="footer">
        <span>Tous les droits sont reservés</span>
    </footer>

</body>

</html>