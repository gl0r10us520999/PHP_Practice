<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Sum 1->n</h1>
    <form action="<?php ['PHP_SELF']; ?>" method="POST">
        Enter n <input type="number" name="n" placeholder="Nhập số tự nhiên N" required value="<?php echo isset($_POST['n']) ? htmlspecialchars($_POST['n']) : ''; ?>" step="1">
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['n'])) {
            if (is_numeric($_POST['n'])) {
                $n = $_POST["n"];
                if ($n < 0) {
                    echo "Invalid input";
                    exit;
                }
                $tong = 0;
                for ($i = 1; $i <= $n; $i++) {
                    $tong += $i;
                }
                echo "Sum = $tong";
            } else {
                echo "Invalid input!";
            }
        }
    }
    ?>
</body>

</html>