<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Contact</title>
</head>

<body>
    
    <section>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="Nom">Nom :</label>
        <input type="text" name="Nom" id="nom" required>

        <label for="Prenom">Prénom :</label>
        <input type="text" name="Prenom" id="prenom" required>

        <label for="Email">Adresse mail :</label>
        <input type="email" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>

        <label for="Tel">Téléphone :</label>
        <input type="tel" name="Tel" pattern="" required>
        <?php if (preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_POST['telephone']))
    {
        echo 'Le ' . $_POST['telephone'] . ' est un numéro <strong>valide</strong> !';
    } ?>

        <label for="Message"></label>
        <textarea name="Message" id="message" cols="30" rows="10" required></textarea>
        <input type="submit" value="Envoyer">
        </form>
    </section>

</body>

</html>