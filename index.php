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
        function Math($x, $y, $z) {

            if ($z == '+') {
                $summ = $x + $y;
                echo "<p>$x + $y = $summ</p>";

            } else if ($z == '-') {
                $diff = $x * $y;
                echo "<p>$x - $y = $diff</p>";
                
            } else if ($z == '*') {
                $multi = $x * $y; 
                echo "<p>$x * $y = $multi </p>";

            } else if ($z == '/') {

                if ($y !== 0) {
                    $div = $x / $y;
                    echo "<p>$x / $y = $div</p>";
                } else {
                    echo "<p>$x / $y = <span style=\"color:red\">DivideByZero Error!</span></p>";
                }
               
            } else {
                echo "<p>$x  $z  $y   =  <span style=\"color:red\">IncorrectOperation Error!</span></p>";
            }
        }

        echo Math(12, 4, '+');
        echo Math(23, 12, '-');
        echo Math(2, 5, '*');
        echo Math(22, 0, '/');
        echo Math(32, 21, '@');

        //№2
       
        function Content($teg, $element) {
            echo "<$teg class=\"$teg\">$element</$teg>";
            echo "<style> 
        h2 {
            color: blue;
            padding: 20px;
            background-color: green;
        }
        h3 {
            color: yellow;
            padding: 20px;
            background-color: red;
        }    
        
        </style>";
        }
        
        echo Content(h3, 'HTML-element');
        echo Content(h2, 'HTML-element');

        //№3

        $arrayOne = ['Home', 'About', 'Contact', 'Photo', 'Blog'];
        $arraySecond = ['Главная', 'О нас', 'Контакты', 'Фото', 'Блог'];

       
        

        function Menu($array, $className) {
        echo "<ul style=\"list-style:none;\">";
           for ($i = 0; $i < count($array); $i++) { 
               echo "<li class=\"$className\">" . $array[$i] . "</li>";
            }; 
        echo "<style> 
        .$className {
            color: yellow;
            padding: 30px;
            background-color: green;
            float: left;
            cursor: pointer;
            margin-bottom: 20px;
        }
        .$className:hover {
            color: green;
            background-color: yellow;
        }
        
        </style>";
        
        echo "</ul>";          
        }
        
        echo Menu($arrayOne, 'item');
        echo Menu($arraySecond, 'item');

        // №4

        function random_html_color()
        {
            return sprintf( '#%02X%02X%02X', rand(0, 255), rand(0, 255), rand(0, 255) );
        }
    
        while ($a < 5) {
           $a++;
           $div = '<div style="background-color:'.random_html_color().'; width:100px; height:100px; margin:10px; display: inline-block;"></div>';
           echo $div;
        }
        
        //№5

        
             
        
    ?>
   
    
   
</body>
</html>