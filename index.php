
<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $uploads_dir = 'uploads'; // Dossier où vous souhaitez enregistrer les photos
        $photos = $_FILES['photo']['tmp_name'];
        $name = basename($_FILES['photo']['name']);
        move_uploaded_file($photos, "$uploads_dir/$name");
    } else {
    
    }
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Accueil- galeriephotos </title>
    <link rel="stylesheet" href="style.css" />
   
   
    
</head>


<body>
    <h1> NAINSTA </h1>
    <h2>Pour les passionnés de nains de jardin</h2>
    </div>
            <img src="nainaccueil.png" class="nainaccueil"  att="javier">
        </div>

<main>
    <div>
        <pre>       Ajouter une photo </pre>   
        <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="file" name="photo" accept="image/*" required>
        <input type="submit" value="Envoyer">

        <?php
        $photos=fopen("photo","a+");
        if($photos==false){
$photos=fopen ("photo","a+");
fwrite($photos);

        }




?>
        </form>

    </div>
</main> 

    
</body>




</html>