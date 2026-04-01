<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Website</title>
</head>
<body>
    <div class="container">
        <h1>Hello World</h1>
        <p>This is my first PHP website.</p>
        <?php
        echo "This is printed using PHP.";
        
        // This is a comment in PHP (single line comment)
        /*
        hey this is also a comment in PHP 
        (multi-line comment)
        ..
        ..
        ..
        ..
        */

        ?>
        <br>
        <?php
        echo "This is printed using PHP again.";
        // Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, maxime corporis. Iusto hic dolor possimus a, tempore harum, saepe vel tempora fugit nisi, distinctio cumque tenetur? Delectus et consequuntur ab! Similique, 
        // inventore. 
        // Illum iure sapiente aut ut id expedita corrupti. 
        // Placeat deleniti quas reiciendis cum illum architecto? 
        // Et pariatur ipsam iure neque dolorem rerum, debitis cum vitae, illo nobis accusantium eos officiis exceptur
        // i aliquid!

        ?>
        <?php
// Variables & Airthemetic operators in PHP
        $newline = "<br>";
        echo $newline;
        $num = 10;
        $num2 = 20;
        // echo "Num and num2 increant is";
        // echo $num + $num2;
        // echo $newline;
        // echo "$num $newline $num2";
        // echo $newline;
        // echo " Num + Num2 is ";
        // echo $num + $num2;
        // echo $newline;
        // echo " Num - Num2 is ";
        // echo $num - $num2;
        // echo $newline;
        // echo " Num * Num2 is ";
        // echo $num * $num2;
        // echo $newline;
        // echo " Num / Num2 is ";
        // echo $num / $num2;

// Assignment Operators in PHP

        echo $newline;
 
        $newnum = $num;
        // $newnum += 5; // $newnum is now 15
        // $newnum -= 5; // $newnum is now 5
        // $newnum *= 5; // $newnum is now 50
        // $newnum /= 5; // $newnum is now 2
        echo $newnum;
        echo $newline;
        // If you want to use html in php then you can use echo and write html code in double quotes and it will work fine.
        // echo "<h1>This is a heading</h1>";

// Comparison Operators in PHP

        // echo $newline;
        // echo "The value of 1==5 is ";
        // echo var_dump(1==5);  
        // echo $newline;
        // echo "The value of 1!=5 is ";
        // echo var_dump(1!=55);  
        // echo $newline;
        // echo "The value of 1<=5 is ";
        // echo var_dump(1<=5);  
        // echo $newline;
        // echo "The value of 1>=5 is ";
        // echo var_dump(1>=5); 
        // echo $newline;

//Increment/Decrement Operators in PHP

        // echo $num++;// Increment operator in PHP
        // echo $num--; // decrement operator in PHP
        // echo ++$num;
        // echo --$num; 
        // echo $newline;
        // echo $num;

// Logical Operators in PHP

        $myvar = (false and true);
        echo var_dump($myvar);  


        ?>

    </div>
    <div class="test"></div>
</body>
</html>