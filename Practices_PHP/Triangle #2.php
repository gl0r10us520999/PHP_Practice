<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?php ['PHP_SELF']; ?>" method="post">
        <input type="number" name="number" placeholder="Nhập số tự nhiên N" required>
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['number']) && is_numeric($_POST['number']) && $_POST['number'] >= 1 && $_POST['number'] <= 9) {
            $n = intval($_POST['number']);

            for ($i = 1; $i <= $n; $i++) {
                echo (pow((pow(10, $i) - 1) / 9, 2)) . "<br>";
            }
        } else {
            echo "Vui lòng nhập một số hợp lệ.";
        }
    }
    ?>


</body>

</html>