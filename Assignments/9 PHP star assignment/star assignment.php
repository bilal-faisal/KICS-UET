<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body{
            background-color: #Eaf4fc;
        }
    </style>
</head>
<body>
    <?php 
        echo '<br><br>';

        
        function printStars($num){
            $i = 0;
            while($i<$num){
                $j=0;
                while($j<=$i){
                    echo "* ";
                    $j++;
                }
                echo "<br>";
                $i++;
            }
            echo "<br><br>";
        }

        function printStarsDesign2($num){
            $i = 0;
            while($i<$num){
                $j=0;
                while($j<=$i){
                    echo "* ";
                    $j++;
                }
                echo "<br>";
                $i++;
            }
            
            $i = 0;
            while($i<$num){
                $j=$num-1;
                while($j>$i){
                    echo "* ";
                    $j--;
                }
                echo "<br>";
                $i++;
            }
            echo "<br><br>";
        }

        function printDiamond($num){
            for($i=1;$i<=$num;$i++){
                for($j=$num;$j>$i;$j--){
                    echo"&nbsp";
                }
                for($j=1;$j<=$i;$j++){
                    echo"* ";
                }
                echo"<br>";
            }
            for($i=$num-1;$i>=0;$i--){
                for($j=$num;$j>$i;$j--){
                    echo"&nbsp";
                }
                for($j=1;$j<=$i;$j++){
                    echo"* ";
                }
                echo"<br>";

            }
            echo "<br><br>";
        }
        
        printStars(5);
        printStarsDesign2(5);
        printDiamond(5)
        
    ?>
</body>
</html>