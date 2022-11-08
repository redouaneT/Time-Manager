<?php
// Créer une nouvelle connexion à la base de donnée 
require_once '../../class/connex/Crud.php';
$crud = new Crud;
$data = $crud->select("appointment", 'id', 'ASC');
// header("location:./index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        <h1>List des rendez-vous</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Description</th>
                    <th scope="col">Ajouter le</th>
                    <th></th>
                    <th></th>
                    <th>
                        <a class="btn btn-secondary" type="button" href="appointment-add.php">Ajouter</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($data as $row) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['date'] ?></td>
                        <td><?php echo $row['description'] ?></td>
                        <td><?php echo $row['created_at'] ?></td>
                        <td>
                            <a class="btn btn-primary" type="button" href="appointment-show.php?id=<?php echo $row['id']; ?>">Voir</a>
                        </td>

                        <td><a class="btn btn-primary" type="button" href="appointment-edit.php?id=<?php echo $row['id']; ?>">Modifier</a></td>
                        <td>
                            <form action="../../class/appointment.php?action=delete" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input class="btn btn-primary" type="submit" value="Supprimer" />
                            </form>
                        </td>
                    </tr>
                    <tr>
                    <?php
                }
                    ?>
            </tbody>
        </table>
    </main>


    <footer class="footer">
        <span>Tous les droits sont reservés</span>
    </footer>

</body>

</html>