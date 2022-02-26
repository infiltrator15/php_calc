<?php
session_start();
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <header>Calculator</header>
        <form action="function.php" method="POST">
            <input type="number" name="fnum" placeholder="Enter first number"><br>
            <input type="number" name="snum" placeholder="Enter second number"><br>
            <button type="submit" class="btn btn-primary" name="add">+</button>
            <button type="submit" class="btn btn-secondary" name="substract">-</button>
            <button type="submit" class="btn btn-warning" name="multiply">x</button>
            <button type="submit" class="btn btn-danger" name="division">/</button>
        </form>
    </div>
</body>
</html>