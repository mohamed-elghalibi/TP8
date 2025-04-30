<?php
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['x'];
    $b = $_POST['y'];
    $op = $_POST['operation'];

    switch ($op) {
        case "+":
            $result = $a + $b;
            break;
        case "-":
            $result = $a - $b;
            break;
        case "*":
            $result = $a * $b;
            break;
        case "/":
            if ($b == 0) {
                $result = "impossible";
            } else {
                $result = $a / $b;
            }
            break;
        default:
            $result = "Opération inconnue";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Calculatrice</title>
</head>
<body>
    <form method="post" action="">
        <input type="number" name="x"  required><br>
        <input type="number" name="y"  required><br>
        <select name="operation" required>
            <option value="">-- Choisir une opération --</option>
            <option value="+">Addition</option>
            <option value="-">Soustraction</option>
            <option value="*">Multiplication</option>
            <option value="/">Division</option>
        </select>
        <input type="submit" value="Calculer">
    </form>

    <?php if ($result !== ""): ?>
        <p>Le résultat est : <strong><?php echo $result; ?></strong></p>
    <?php endif; ?>
</body>
</html>
