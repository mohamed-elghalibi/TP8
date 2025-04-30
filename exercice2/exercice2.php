<?php
$pass='';
if($_SERVER['REQUEST_METHOD']=="POST"){
    $long=$_POST['longueur'];
    $chaine='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+<>?';
    $pass='';
    for($i=0;$i<$long;$i++){
        $index = rand(0, strlen($chaine) - 1);
        $pass .= $chaine[$index];
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Générateur de mot de passe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eaf6f6;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 50px;
        }

        form {
            background-color: #ffffff;
            padding: 20px 30px;
        }

        label {
            font-weight: bold;
            margin-right: 10px;
        }

        input[type="number"] {
            padding: 5px;
            width: 60px;
        }

        input[type="submit"] {
            background-color: #0077cc;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            
        }

        .result {
            margin-top: 20px;
            font-size: 1.2em;
            color: #2c3e50;
        }
    </style>
</head>
<body>

    <form method="post" action="">
        <label >Longueur du mot de passe :</label>
        <input type="number" name="longueur" id="length" min="4" required>
        <br><br>
        <input type="submit" value="Générer">
    </form>

    <div class="result">
             <?php if ($pass != ""): ?>
             <p>le mot de passe généré est : <?php echo $pass; ?> </p>
             <?php endif; ?>

    </div>

</body>
</html>
