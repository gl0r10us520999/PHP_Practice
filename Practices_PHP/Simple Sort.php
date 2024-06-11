<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sort String</title>
</head>

<body>
    <form action="<?php ['PHP_SELF']; ?>" method="post">
        <label for="inputString">Nhập chuỗi:</label>
        <input type="text" id="inputString" name="inputString">
        <input type="submit" value="Sắp xếp">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['inputString'];

        function custom_sort($a, $b)
        {
            $a_is_digit = is_numeric($a);
            $b_is_digit = is_numeric($b);

            if ($a_is_digit != $b_is_digit) {
                return $a_is_digit ? -1 : 1;
            }

            if ($a_is_digit && $b_is_digit) {
                $a_is_even = $a % 2 == 0;
                $b_is_even = $b % 2 == 0;

                if ($a_is_even != $b_is_even) {
                    return $a_is_even ? -1 : 1;
                }
            }

            return strcmp($a, $b);
        }

        $chars = str_split($input);
        usort($chars, 'custom_sort');
        $sorted_string = implode('', $chars);

        echo "Chuỗi đã sắp xếp: " . htmlspecialchars($sorted_string);
    }
    ?>

</body>

</html>