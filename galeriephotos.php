<?php
// Récupérer le prénom
$prenom = isset($_POST["prenom"])
    ? htmlspecialchars($_POST["prenom"])
    : "Anonyme";

// Récupérer la date du jour
$date = date('d-m-Y'); // Format de date : jour-mois-année

if (isset($_POST['delete'])) {

    $file_to_delete = "uploads/" . basename($_POST['delete']);

    if (file_exists($file_to_delete)) {

        unlink($file_to_delete);
    }
}

function lire_dossier()
{
    $file_names = [];
    if (is_dir("uploads")) {

        $uploads_dir = opendir("uploads");

        while (($file_name = readdir($uploads_dir)) !== false) {

            if ($file_name != "." && $file_name != "..") {
                $file_names[] = $file_name; // J'ajoute le nom du fichier à la liste
            }

        }

        closedir($uploads_dir);

    }

    return $file_names;
}

$liste_des_fichiers = lire_dossier();
$date = date('d-m-Y');

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie Photos</title>
    <link rel="stylesheet" href="galeriephotos.css">
</head>

<body>

    <h1>Galerie Photos</h1>

    <div class="fichiers">
        <?php foreach ($liste_des_fichiers as $file_name): ?>

            <?php $auteur = explode("_", $file_name)[0]; ?>

            <div class="card">

                <img src="uploads/<?php echo $file_name; ?>" alt="<?php echo $file_name; ?>">

                <p>
                    👤 <?php echo $auteur; ?>
                    <br>
                    📅 <?php echo $date; ?>
                    <br>
                    📷 <?php echo $file_name; ?>
                </p>

                <form method="POST">

                    <input type="hidden" name="delete" value="<?php echo $file_name; ?>">

                    <button type="submit" class="delete-btn">
                        Supprimer
                    </button>

                </form>-

            </div>

        <?php endforeach; ?>
    </div>

    <footer>
        <a href="index.php">Retour à l'accueil</a>
    </footer>

</body>

</html>