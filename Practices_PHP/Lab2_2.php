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
    <form action="Lab2_2.php" method="POST">
        Enter n <input type="text" name="n" placeholder="Nhập số tự nhiên N" required>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if(isset($_POST['n'])){
        $n = $_POST["n"];
        $tong = 0;
        for ($i = 1; $i <= $n; $i++) {
            $tong += $i;
        }
        echo "Sum = $tong";
    }
?>
</body>
</html>
