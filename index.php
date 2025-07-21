
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    // Gérer le téléchargement de la photo
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $uploads_dir = 'uploads';
        $tmp_name = $_FILES['photo']['tmp_name'];
        $name = basename($_FILES['photo']['name']);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
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

    
       
            <h2>Ajouter une photo</h2>
            
            <form action="index.php" method="post" enctype="multipart/form-data">
                <input type="text" name="prenom" placeholder="prénom" required>
                <input type="file" name="photo" accept="image/*" required>
                <input type="submit" value="Envoyer">

            </form>
    
            <footer>
            <a href="galeriephotos.php">Voir la galerie</a>
</footer>


            


</body>
</html>