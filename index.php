<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
    // Неправильно понял условие, выполнил,код оставил, но ниже все поправил

    // $n = 30;
    // $count = 0; 
    // $color = "red";
    // $fontSize = "$n" . "px";
    // $red = "style=\"font-size:$fontSize; color: $color;\" ";
    // for ($i = 1; $i <= $n; $i++) {

    //     if ($i % 2 !== 0) {
            
    //         $count++;
    //         $sum += $i;  
            
    //         echo "<span $red >$i </span>" ;
    //     } 
       
    // } 
    // $avg = $sum / $count;
    // echo '<br>' .  "AVG = $avg" . '<hr>' ;
   
    // for ($i = $n; $i >= 0; $i--) {
    //     if ($i % 2 !== 0) {
           
    //         echo  "<span $red >$i </span>" ;
            
    //     }  
       
    // } 

    // №1
    $n = 20;
    $number = 1;
    $a = 1;

    while ($a <= $n) {
        if ($number % 2 !== 0) {
            $odd[$a] = $number;
            $a++;
            $sum += $number;
        }
        $number++;
    }
    // echo "<pre>" ;
    // print_r($odd);
    // echo "</pre>";


    $max = max($odd);
    $color = "red";
    $fontSize = "$max" . "px";
    $red = "style=\"font-size:$fontSize; color: $color;\" ";

    foreach ($odd as $key => $value) {
        echo  "<span $red> $value</span>";
    }
    echo "</br>";
    echo "Среднее значение равно " . $sum / $n;
    echo "</br>";
    foreach (array_reverse($odd, true) as $key => $value) {
        echo "<span $red> $value</span>";
    }
   

    echo "<hr>";

    // №2
   
    for ($i1 = 1; $i1 < 10; $i1++)
        for ($i2 = 0; $i2 < 10; $i2++)
            for ($i3 = 0; $i3 < 10; $i3++)
                for ($i4 = 0; $i4 < 10; $i4++) {
                    if (($i1 == $i4) && ($i2 == $i3)) {
                        $mirred++;
                    }

                    if (($i4 % 2 == 0)) {
                        $pir++;
                    }

                    if (($i4 % 2 !== 0)) {
                        $notPair++;
                    }

                    if (($i1 - 1 == $i2) && ($i2 - 1 == $i3) && ($i3 - 1 == $i4)) {
                        $orderNumber++;
                    }
                }
    echo "Mirrored number: $mirred" . "<br>";
    echo "Pir number: $pir" . "<br>";
    echo "Not pair number: $notPair" . "<br>";
    echo "Ordered number: $orderNumber" . "<br>";


    echo "<hr>";
    

    $blue = 'blue';
    $height = '50px';
    $width = '50px';
    $radius = '50px';
    $float = 'left';

    echo "<style> .circle { 
    width:$width; 
    height:$height; 
    float: $float; 
    border-radius: $radius; 
    background-color: $blue;}</style>";

    $content = "<div class='circle'></div>";
   
    for ($i=0; $i <= 10; $i++) { 
        echo $content;
    }
    
    echo "<br>";
    // №4

    $numbers = 110110;
    $converted = base_convert($numbers, 2, 16);

    echo "<br>";
    echo "<p>Number: $numbers </p>";
    echo "<p>Converted: $converted</p>";
   
    // №5 
    $arabNum = 54;
    function convertToRoman($numb) {
        $numArray = array(
            "M" => 1000,
            "CM" => 900,
            "D" => 500,
            "CD" => 400,
            "C" => 100,
            "XC" => 90,
            "L" => 50,
            "XL" => 40,
            "X" => 10,
            "IX" => 9,
            "V" => 5,
            "IV" => 4,
            "I" => 1);
        
        $result = '';
        while ($numb > 0) {
        
            foreach ($numArray as $roman => $int) {
                    if($numb >= $int) {
                        $numb -= $int;
                        $result .= $roman;
                        break;
                    }
            
            }
        }
      
        return $result;
      }
        $romNum =  convertToRoman($arabNum);
        echo "<p>Number: {$arabNum}</p>";
        echo "<p>Romanian: {$romNum}</p><br>";

       

    // №6

   

    

    ?>
     
   
    </body>
</html>