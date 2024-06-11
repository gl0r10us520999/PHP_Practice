<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Lab2_4.php" method="post">
        StringA <input type="text" name="a" placeholder="Nhập chuỗi a" value="<?php echo isset($_POST['a']) ? htmlspecialchars($_POST['a']) : ''; ?>" required></br>
        StringB <input type="text" name="b" placeholder="Nhập chuỗi B" value="<?php echo isset($_POST['b']) ? htmlspecialchars($_POST['b']) : ''; ?>" required></br>
        StringC <input type="text" name="c" placeholder="Nhập chuỗi C" value="<?php echo isset($_POST['c']) ? htmlspecialchars($_POST['c']) : ''; ?>" required></br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['c'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];
            $my_array = array($a, $b, $c);

            $minLength = PHP_INT_MAX;
            $maxLength = PHP_INT_MIN;
            foreach ($my_array as $string) {
                $length = strlen($string);
                if ($length < $minLength) {
                    $minLength = $length;
                }
                if ($length > $maxLength) {
                    $maxLength = $length;
                }
            }

            echo "minLength = " . $minLength . "; maxLength = " . $maxLength;
        }
    }
    ?>

</body>

</html>