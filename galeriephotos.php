<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie Photos</title>
    <link rel="stylesheet" href="galeriephotos.css" />
</head>
<!DOCTYPE html>
<html lang="fr">

<body>
    <h1>Galerie Photos</h1>
    <div class="galerie">
        <?php
            function lire_dossier() {
                $file_names = [];
                try {
                    $uploads_dir = opendir("uploads");
                    while (($file_name = readdir($uploads_dir)) !== false) {
                        if ($file_name && $file_name != "." && $file_name != "..") {
                            $file_names[] = $file_name; // J'ajoute le nom du fichier à la liste
                        }
                    }
                    closedir($uploads_dir);
                } catch (\Throwable $th) {
                    throw $th;
                }
                return $file_names;
            }

            $liste_des_fichiers = lire_dossier();
            ?>

            <div class="fichiers">
                <?php foreach ($liste_des_fichiers as $file_name): ?>
                    <p><?= $file_name; ?></p>
                <?php endforeach; ?>
            </div>
        <img src="photo1.jpg" alt="Photo 1">
        <img src="photo2.jpg" alt="Photo 2">
        <!-- Continuez avec d'autres photos -->
    </div>
</body>
        
    </div>
    <a href="index.php">Retour à l'accueil</a>
</body>
</html>

