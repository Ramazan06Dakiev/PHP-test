<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        $name = 'Ramazan';
        echo "Hello! My name is '$name'." ; 
        $age = '23';
        echo "<br>" . "I'm $age." . "<hr>";
        
        $a = 12;
        $b = 32;
        $rez = $a + $b;
        echo "$a + $b = $rez" . '<br>';

        $a = $a + $b;
        $b = $a - $b;
        $a = $a - $b;
        echo "$a + $b = $rez" . "<hr>";
    ?>
    <div class="first-example">
        <p>Что такое арбуз?</p>
        <div class="block">
            <input type="radio" name="first-answer">
            <label for="first-answer">Овощ</label>
        </div>
        <div class="block">
            <input type="radio" name="first-answer">
            <label for="first-answer">Фрукт</label>
        </div>
        <div class="block">
            <input type="radio" name="first-answer">
            <label for="first-answer">Ягода</label>
        </div>
        <div class="block">
            <input type="radio" name="first-answer">
            <label for="first-answer">Цветок</label>
        </div>
    </div>

    <div class="second-example">
        <p>Выберите фрукты?</p>
        <div class="block">
            <input type="checkbox" name="second-answer">
            <label for="second-answer">Помидор</label>
        </div>
        <div class="block">
            <input type="checkbox" name="second-answer">
            <label for="second-answer">Апельсин</label>
        </div>
        <div class="block">
            <input type="checkbox" name="second-answer">
            <label for="second-answer">Ананас</label>
        </div>
        <div class="block">
            <input type="checkbox" name="second-answer">
            <label for="second-answer">Клубника</label>
        </div>
    </div>

    <div class="third-example">
        <p>Перечисли моря?</p>
        <textarea></textarea>
    </div>
    

    <?php 
    $background_color = "blue";
    $color = "red";
    $width = "100px";
    $height = "100px";
    $tag = "style=\"background-color: $background_color; color: $color; width: $width; height: $height;\" ";
    echo "<hr>"  .  "<div $tag >Hello! </div>" . "<hr>";
    ?>
    
   
</body>
</html>