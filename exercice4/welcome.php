<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
$nom=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue</title>
    <style>
        body {
            background-color: #ddf0e4;
            font-family: Arial;
            padding-top: 50px;
            text-align: center;
        }

        .container {
            background-color: #fff;
            padding: 25px;
            display: inline-block;
            border: 1px solid #bbb;
        }

        a {
            display: block;
            margin-top: 20px;
            color: #d00;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Bienvenue <?php echo $nom; ?></h2>
        <a href="login.php">Se déconnecter</a>
    </div>

</body>
</html>
