<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
   

    <?php 
    
    $array = [];
    for ($i = 0; $i < 10; $i++) { 
        $array[$i] = rand(0, 99);
        $content = implode(" ", $array);
    }

    $n = count($array);
    $s = array_sum($array);

    echo  "<h2>Input array: $content</h2> ";
    echo "<h5>Element which are more previos: ";

    for ($i = 1; $i < $n - 1; $i++) {
        if ($array[$i] > $array[$i - 1]){
            echo $array[$i] . ", ";
        } 
    } 
    echo "</h5>";
    $avg = $s / $n;
    echo "<h5>Summ: $s, AVG: $avg </h5>";

    function odd($var) {
        return $var & 1;
    }
    $arrayOdd = array_filter($array, "odd");
    rsort($arrayOdd);

    $oddNum = implode(", ", $arrayOdd);

    echo "<h4> Sorted not pair elements: $oddNum" . "</h4><br>";
          
    // №2 

    $arrayDate = ['01-01-1970', '02-01-1998','31-12-2018', '16-01-2019', '20-02-2019', '21-02-2019', '08-03-2019',  '26-03-2021'];

    echo "<h4>Input dates: " . implode(", ", $arrayDate) . "</h4><br>";
    $secDay = 86400;
    for ($i = 1; $i < count($arrayDate); $i++) 
    {
        $firstNumDays = strtotime($arrayDate[$i]) / $secDay;
        $lastNumDays = strtotime($arrayDate[$i - 1]) / $secDay;
        $countDays = ($firstNumDays - $lastNumDays);
        echo "<h5>" . $arrayDate[$i-1] . " - " . $arrayDate[$i] . " = " . $countDays . " days</h5>";
        
        ;
    }
    echo "<br>";
    
    //3
    $arrayInput = [
        "type=\"text\" value=\"Text1\"",
        "type=\"radio\" value=\"Radio1\"",
        "type=\"checkbox\" value=\"Checkbox1\"",
        "type=\"button\" value=\"Button1\"",
        "type=\"text\" value=\"Text2\"",
        "type=\"text\" value=\"Text3\"",
        "type=\"radio\" value=\"Radio2\"",
        "type=\"radio\" value=\"Radio3\"",
        "type=\"checkbox\" value=\"Checkbox2\"",
        "type=\"button\" value=\"Button2\""
    ];

    for ($i = 1; $i < count($arrayInput); $i++) 
    {
        
        echo "<input style=\"display: block;\"$arrayInput[$i]>"  ;
    }
    

    //4
    ?>
        
    
    
   
</body>
</html>