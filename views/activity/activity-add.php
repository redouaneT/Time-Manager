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
                        <li><a href="../appointment/appointment-add.php">Ajouter un rendez vous</a></li>
                        <li><a href="../appointment/appointment-list.php">liste des rendez-vous</a></li>
                    </ul>
                </li>
                <li>
                    <span>Gestion des activities</span>
                    <ul>
                        <li><a href="activity-add.php">Ajouter une activité</a></li>
                        <li><a href="activity-list.php">liste des activities</a></li>
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
            <h2>Ajouter une activité</h2>
            <form action="../../class/activity.php?action=create" method="post">
                <!-- <input type="hidden" name="id" value="<?php echo $id; ?>"> -->
                <div class="form-group">
                    <label for="type">Type d'activité</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Type d'activité...">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description...">
                </div>
                <div class="form-group">
                    <label for="starts_at">Date de début d'activité</label>
                    <input type="date" class="form-control" id="starts_at" name="starts_at">
                </div>
                <div class="form-group">
                    <label for="ends_at">Date de fin d'activité</label>
                    <input type="date" class="form-control" id="ends_at" name="ends_at">
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