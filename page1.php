<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "SamSoul") // Si le mot de passe est bon
    {
        // On affiche les codes
        ?>
        <h1>bienjoue</h1>
        <p>j'ai mis  3h pour cette exo :( </p>
        <p>ci logique pourtant</p>
        <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
</body>
</html>
