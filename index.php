
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $uploads_dir = 'uploads'; // Dossier où vous souhaitez enregistrer les photos
        $uploads = $_FILES['photo']['tmp_name'];
        $name = basename($_FILES['photo']['name']);
        move_uploaded_file($uploads, "$uploads_dir/$name");
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="index.css" />
</head>
<body>
    <h1>NAINSTA</h1>
    <h2>Pour les passionnés de nains de jardin</h2>
    <img src="nainaccueil.png" class="nainaccueil" alt="javier">

    
        <clic>
            <p>Ajouter une photo</p>
            <form action="index.php" method="post" enctype="multipart/form-data">
                <input type="text" name="prenom" placeholder="prénom" required>
                <input type="file" name="photo" accept="image/*" required>
                <input type="submit" value="Envoyer">
            </form>
            <a href="galeriephotos.php">Voir la galerie</a>
</clic>

            
        </div>

</body>
</html>