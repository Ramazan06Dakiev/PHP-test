<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>

    <?php 

    // №1
    $style = "style=\"width: 500px;\"";
    $random = [];
    for($i = 0; $i  < 100; $i++){
        $random[$i] = rand(1, 300);
       
        $content = implode(" ", $random);
        $max = max($random);
        $min = min($random);
        } 
        echo  "<p $style> $content</p> ";
        echo  "<p>Maximum: $max</p> ";
        echo  "<p>Minimum: $min</p> ";
        

        echo "<hr>";

        // №2

        $arr = scandir('./img');
        foreach($arr as $v) {
        if(stripos($v,'.jpg')) 
        echo '<img src="img/'.$v.'" width="250" />';
        }
        
        echo "<hr>";
        // №3


        echo "<table cellpadding=\"5\" style=\"display: flex;\">";

        for ($i = 2; $i <= 10; $i++ ) {
            echo "<tbody>";
            for ($k = 2; $k <= 10; $k++) {
                echo "<tr><td align=\"right\">$i * $k = " . $i * $k . "</td></tr>";
            }
        }
        echo "</tbody>";
        echo "</table>";
        

        echo "<hr>";

        //№4

        echo "<table>";
        echo "<tbody>";
        echo "<tr style=\"background-color: red;\">";
        echo "<td>Year</td>";
        echo "<td>Summ start</td>";
        echo "<td>Summ end</td>";
        echo "<td>Profit</td>";
        echo "</tr>";

        $x = 300;
        $y = 20;

        for ($i = 1; $i <= 20; $i++) {
            $z = $x + ($x * ($y / 100));
            $s = $z - $x;
            
            echo "<tr style=\"background-color:grey; color: white;\">";
            echo "<td>$i</td>";
            echo "<td>" . round($x, 2) . "</td>";
            echo "<td>" . round($z, 2) . "</td>";
            echo "<td>" . round($s, 2) . "</td>";
            echo "</tr>";
            $x = $z;
        }
        
        echo "</table>";
        echo "</tbody>";


        echo "<hr>";
        // №5
    
        $firstNum = 347689;
        $revNum = strrev($firstNum);

        echo "<h1 style=\"color: red\";>$firstNum</h1>";
        echo "<h1 style=\"color: green\";>$revNum</h1>";
        
    ?>
    
    
   
</body>
</html>