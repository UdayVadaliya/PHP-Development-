<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Website</title>
</head>
<style>
    .container{
        width: 80%;
        margin: auto;
        background-color: rgb(240, 240, 240);
        padding: 20px;
    }
</style>
<body>
    <div class="container">
        <h1>Conditional Statements.</h1>
        <p>Your age verification:</p>
        <?php
        $nl = "<br>";

// if-else statement in PHP

        $age = 100;
        if($age == 18 and $age > 18) {
            echo "You r an adult....";
        } elseif ($age >= 100 ) {
            echo "You are Lying and if it's true than You r too old to be alive....";
        }
        elseif($age <= 18){
            echo "... :( better luck till 18.. because you are..";

        }
        else {
                echo  "You r an adult....";
            
        }
        
        echo $age;
        echo $nl;
// Arrays in PHP
        $hobby = array("Playing games","Reading books","Watching movies","Travelling");
        echo $hobby[1];
        echo $nl;
        echo count($hobby);
        echo $nl;

//Loops in PHP
        $a = 0;
        while ($a <= 10) {
            echo "this is a value of a: ";
            echo $nl;
            echo $a;
            $a++;
            echo $nl;

        }
        // Integrating arrays in while loop
       $a = 0;
        while ($a < count($hobby)) {
            echo "is my hobby ";
            echo $nl;
            echo $hobby[$a];
            $a++;
        }
        $a = 0;
        while ($a < count($hobby)) {
            echo "<br>is my hobby ";
            echo $hobby[$a];
            $a++;
        }
        echo $nl;

        $a = 0;
        do {
            echo "<br>This is a do while loop and the value of a is: $a ";
           $a++;     
            } while ($a <= 10);
            echo $nl;

        for ($a=0; $a < 10; $a++) { 
            echo "$nl This is a for loop and the value of a is: $a"; 
            
        }    
        echo $nl;
        foreach ($hobby as $values){
            echo "$nl(foreach loop) My hobby is $values";
        }
// Functions is PHP

        function sayhello(){
            echo "<br> Hello, Welcome to my Website! ";
        }

       sayhello();
        sayhello();
        sayhello();
        sayhello();
        sayhello();
        sayhello();

        function TaxCalculation($price, $tax){
            $taxamount = $price * $tax;
            $totalprice = $price + $taxamount;

            return $totalprice;
        }

        $mytax = TaxCalculation(55, 0.5);

        echo " $nl The Tax is:  $mytax";


        function greet($name){
            echo "<br>Hello, Welcome $name";
        }

        greet("Uday");
// sumad is funtion's use is to calculate two numbers through addition. 
        function sumad($a, $b){
            $c = $a+$b;
            $ans = $c;
            return $ans;
        }
        

        ?>


    </div>
    
</body>
</html>
