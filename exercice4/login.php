<?php 
session_start();
$error="";
if($_SERVER['REQUEST_METHOD']== "POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $user="admin";
    $pass="admin";
    if($username==$user && $password==$pass ){
        $_SESSION['username']=$_POST['username'];
        header("Location: welcome.php");
        exit();
    }else{
        $error="Identifiant ou mot de passe incorrect";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <style>
        body {
            background-color: #eef2f3;
            font-family: sans-serif;
            padding-top: 40px;
            text-align: center;
        }

        form {
            background-color: white;
            padding: 20px;
            display: inline-block;
            border: 1px solid #ccc;
        }

        input[type="text"], input[type="password"] {
            padding: 5px;
            margin: 8px;
        }

        input[type="submit"] {
            background-color: #3366cc;
            color: white;
            border: none;
            padding: 6px 12px;
            cursor: pointer;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
        
    </style>
</head>
<body>

    <h2>Connexion</h2>
    <form method="post" action="">
        <label>Identifiant :</label><br>
        <input type="text" name="username" required><br>
        <label>Mot de passe :</label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Se connecter">
    </form>

        <?php if($error != ""): ?>
        <p class="error"><?php echo $error;  ?></p>
        <?php endif ?>

</body>
</html>
