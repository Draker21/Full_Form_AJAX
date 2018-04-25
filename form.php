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
        <form action="verif_form.php" method="POST">

        <!--Nom-->
        <label for="Nom">Nom :</label>
        <input type="text" name="Nom" id="nom" required>

        <!--Prénom-->
        <label for="Prenom">Prénom :</label>
        <input type="text" name="Prenom" id="prenom" required>

        <!--Sexe-->
        <label for="Sexe">Quel est votre genre :</label>
        <label for="homme">Homme</label>
        <input type="radio" id="homme" name="Sexe" value="masculin">
        <label for="femme">Femme</label>
        <input type="radio" id="femme" name="Sexe" value="feminin"> 

        <!--Adresse mail-->
        <label for="Email">Adresse mail :</label>
        <input type="email" name="Email" id="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>

        <!--Téléphone-->
        <label for="Tel">Téléphone :</label>
        <input type="tel" name="Tel" id="tel" required>
    
        <!--CGU-->
        <label for="cgu">J'accepte les CGU :</label>
        <input type="checkbox" name="CGU" id ="cgu" required>

        <!--Message-->
        <label for="Message"></label>
        <textarea name="Message" id="message" cols="30" rows="10" required></textarea>
        
        <!--Submit + check form-->
        <input type="submit" value="Envoyer">
        
        </form>
    </section>

</body>

</html>