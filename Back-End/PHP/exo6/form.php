<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="getForm.php" method="POST">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" required>
        </div>

        <div>
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom" required>
        </div>

        <div>
            <label for="email">EMail</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="tel">Telephone</label>
            <input type="tel" name="tel" id="tel" required>
        </div>

        <button>Validé</button>
</body>

</html>