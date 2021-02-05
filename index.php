<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
    <?php
        $x = 16;
        $y = 13;
        
        if (($x % $y) == 0) {
            echo "$x кратно $y" . '<br>';
        } else {
            echo "$x не кратно $y" . '<br>';
        }

        if(($x ** 2) > ($y ** 2)) {
            echo $x ** 2 . '<br>';
        } else if (($x ** 2) < ($y ** 2)) {
            echo $y ** 2 . '<br>';
        } else {
            echo 'Квадраты равны' . '<br>';
        }

        
        $mountDays = date('t');
        echo "Количество дней в этом месяце $mountDays" . '<br>'; 

        $year = 2021;
        $leapYear = date('L', mktime(0, 0, 0, 1, 1, $year));
        if ($leapYear == 1) {
            echo " $year год високосный"  . '<br>';
        } else {
            echo " $year год не високосный"  . '<br>';
        }


        $a = 9;
        $b = 3;
        $sum = $a + $b;
        

        if (($a % 3) == 0 && ($b % 3) == 0) {
            echo "Оба числа кратны 3 и их сумма равна = $sum" . '<br>';
        } else if ($b != 0) {
            $del =  $a / $b;
            echo "Второе число не равно 0 и деление первого числа на второе равно = $del " . '<br>';
        } else if ($b == 0) {
            echo "Некорректный ввод. Второе число равно 0" . '<br>';
        }

        ?>

    
</body>
</html>