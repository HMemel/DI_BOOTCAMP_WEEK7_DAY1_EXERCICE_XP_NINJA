<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EXERCICE XP NINJA </title>
</head>

<body>
    <!-- Exercice 1 : index -->
    <form action="index.php" method="post">
    Name: <input type="text" name="name"><br>
    Color: <input type="text" name="color"><br>
          <input type="submit">
    </form>

    <!-- Exercice 2 : Reponse -->
    Welcome <?php echo $_POST["name"]; ?> <br>
    Your color is : <?php echo $_POST["color"]; ?>
</body>

</html>