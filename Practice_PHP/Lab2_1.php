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
    <form action="Lab2_1.php" method="post">
        <input type="text" name="a" placeholder="Nhập số a" required>x + <input type="text" name="b" placeholder="Nhập số b" required>=0
</br>
        <input type="submit" value="Calculate">
    </form>
    <?php 
        if(isset($_POST['a']) && isset($_POST['b'])){
            $a=$_POST['a'];
            $b=$_POST['b'];
            if($a==0){
                if($b==0){
                    echo "Phương trình có vô số nghiệm";
                }else{
                    echo "Phương trình vô nghiệm";
                }
            }else{
                $nghiem=-1*($b/$a);
                echo "Phương trình có nghiệm là x = $nghiem";
            }
        }
    ?>
</body>
</html>