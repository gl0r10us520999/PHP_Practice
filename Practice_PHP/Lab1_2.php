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
    <form action="caculator.php" method="POST">
        a <input type="text" name="a" placeholder="Nhập số a" required>
        </br>
        b <input type="text" name="b" placeholder="Nhập số b" required>
        </br>
        <input type="submit" value="Calculate">
        <?php
            $Add=0;
            $Sub=0;
            $Multp=0;
            $Div=0;
            if( isset($_POST['a']) && isset($_POST['b'])){
                $a=$_POST['a'];
                $b=$_POST['b'];
                $Add=$a+$b;
                $Sub=$a-$b;
                $Multp=$a*$b;
                $Div=$a/$b;
                echo nl2br ("\nAddition: $Add");
                echo nl2br ("\nSubtraction: $Sub");
                echo nl2br ("\nMultiplication: $Multp");
                echo nl2br ("\nDivision: $Div");
            }
        ?>
    </form>
</body>
</html>