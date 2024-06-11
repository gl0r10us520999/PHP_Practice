<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Factorial</h1>
    <form action="Lab2_3.php" method="POST">
        Enter n <input type="number" name="n" placeholder="Nhập số tự nhiên N" required value="<?php echo isset($_POST['n']) ? htmlspecialchars($_POST['n']) : ''; ?>" step="1">
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['n'])) {
            $n = $_POST["n"];
            if (is_numeric($n)) {
                $giaithua = 1;
                if ($n > 0) {
                    for ($i = 1; $i <= $n; $i++) {
                        $giaithua *= $i;
                    }
                } elseif ($n == 0) {
                    $giaithua = 1;
                } else {
                    $giaithua = "Không tồn tại giai thừa của $n";
                }
                echo "Giai thừa từ 1 -> $n là: $giaithua";
            }
        }
    }
    ?>
</body>

</html>