<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Caculator Basic</h1>
    <form action="<?php ['PHP_SELF']; ?>" method="POST">
        a <input type="number" name="a" placeholder="Nhập số a" step="0.1" required>
        </br>
        b <input type="text" name="b" placeholder="Nhập số b" step="0.1" required>
        </br>
        <input type="submit" value="Calculate">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $Add = 0;
            $Sub = 0;
            $Multp = 0;
            $Div = 0;
            if (isset($_POST['a']) && isset($_POST['b'])) {
                if (is_numeric($_POST['a']) && is_numeric($_POST['b'])) {
                    $a = $_POST['a'];
                    $b = $_POST['b'];
                    $Add = $a + $b;
                    $Sub = $a - $b;
                    $Multp = $a * $b;
                    echo nl2br("\nAddition: $Add");
                    echo nl2br("\nSubtraction: $Sub");
                    echo nl2br("\nMultiplication: $Multp");
                    if ($b != 0) {
                        $Div = $a / $b;
                        $Div = round($Div, 2);
                        echo nl2br("\nDivision: $Div");
                    } else {
                        echo nl2br("\nCan't devided by zero!");
                    }
                } else {
                    echo  nl2br("\nPlease input a valid number!");
                }
            }
        }
        ?>
    </form>
</body>

</html>