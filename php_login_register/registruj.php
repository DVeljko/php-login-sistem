<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registracija</h1>

    <form action="proveraRegistracije.php" method="post">
        <input type="email" name="email" id="" placeholder = "Unesite vas email" required>
        <input type="password" name="password" id="" placeholder = "Unesite vasu lozinku" required>
        <input type="password" name="proveraPassword" id="" placeholder = "Ponovite unos vase lozinke" required>
        <input type="submit" value="Registruj se">
    </form>
    
</body>
</html>