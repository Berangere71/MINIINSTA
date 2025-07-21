
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie Photos</title>
    <link rel="stylesheet" href="galeriephotos.css" />
</head>
<body>
    <h1>Galerie Photos</h1>
    <div class="galerie">
        <?php
          // Récupérer le prénom
          $prenom = htmlspecialchars($_POST["prénom"]);
          var_dump ($_POST);

    
        // Récupérer la date du jour
        $date = date('d-m-Y'); // Format de date : jour-mois-année

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
    <?php 
    foreach ($liste_des_fichiers as $file_name): ?>
        <img src="uploads/<?php echo $file_name; ?>" alt="<?php echo $file_name; ?>" />
        <p>id: <?php echo $prenom; ?> |  <?php echo $date; ?> | <?php echo $file_name; ?></p>
    <?php endforeach; ?>
</div>
    </div>
<footer>
    <a href="index.php">Retour à l'accueil</a>

            </footer>
</body>
</html>