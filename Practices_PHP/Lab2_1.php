<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Phương Trình Bậc Nhất ax + b = 0</h1>
    <form action="<?php ['PHP_SELF']; ?>" method="post">
        <input type="number" name="a" placeholder="Nhập số a" required value="<?php echo isset($_POST['a']) ? htmlspecialchars($_POST['a']) : ''; ?>" step="0.1"> x
        +
        <input type="number" name="b" placeholder="Nhập số b" required value="<?php echo isset($_POST['b']) ? htmlspecialchars($_POST['b']) : ''; ?>" step="0.1">= 0

        </br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        if (isset($_POST['a']) && isset($_POST['b'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            if (is_numeric($a) && is_numeric($b)) {
                if ($a == 0) {
                    if ($b == 0) {
                        echo "Phương trình có vô số nghiệm";
                    } else {
                        echo "Phương trình vô nghiệm";
                    }
                } else {
                    $nghiem = -1 * ($b / $a);
                    echo "Phương trình có nghiệm là x = $nghiem";
                }
            } else {
                echo "Please input a valid number!";
            }
        }
    }
    ?>
</body>

</html>