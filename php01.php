<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Hello World";
    //variable
    $x=5;  //integer, float, string, char, null: loosely coupled 
    echo"<br>";
    
    echo $y="Pranjal";   
    echo "<br>";
    
    echo str_contains($y,"z"); //shows 1/nothing if contained
        echo "<br>";
    echo "<br>";
    echo "<br>";


    echo " double-quote: \t Hello, $y <br>"; //prints Hello,Pranjal "doble quote" like f string.
    echo 'single-quote: \t  Hello, $y';   //prints Hello,Pranjal "doble quote"


    echo "How are you?";
    echo "<br>";

    var_dump($f=789.435);
    echo "<br>";

    var_dump($b=true);
    echo "<br>";

    echo $a=$b=$c='alphabets'; //multiple value declaration usi 
    echo "<br>";

    var_dump($x); //shows type of data

    class student{
        public $name="NCIT";
        public $age=20;
    }
    $obj= new student();
    echo "<br>";
    echo $obj->name;

    //print returns 1 while echo is not returning anything, echo is faster (same reason), echo takes multi-parameter

    $x=30;
    $y=10;
    echo "<br> Sum: ".$x+$y ;
    echo "<br>Sub: ".$x-$y ;
    echo "<br>Div: ".$x/$y;
    echo "<br>Mult: ".$x*$y;
    echo "<br>Mod: ".$x% $y;
    echo "<br> Expo: ".$x**$y;
    
    $child=18;
    $adult=23;

    echo($a<=>$b); //compares values: -ve is a is smaller and vice versa

    echo "<br>";
    if ($child <>16) //not equal
    {
        echo "Eligible";
    }
    else{
        echo " Not Eligible";
    }

    $sci=90;
    $soc=60;
    $math=30;
    echo "<br>";

    if($sci and $soc and $math>40)
    {
        echo "Passed";
    }
    else{
        echo "Failed";
    }
    
    //ternary operator:  condition ? value_if_true : value_if_false
    echo "<br>";
    
    echo($sci>89?"Passed":"Failed");
    echo "<br>";

    $flo=0;

    echo($flo>0)?"Positive": (($flo<0) ?"Negative":"Zero");
   

    //largest among two 
    echo "<br>";

    $a=10;
    $b=100;
    $c=150;
    echo($a>$b?"$a is larger":"$b is larger");

     echo "<br>";

    echo (($a>$b and $a>$c)?"$a is largest":(($b>$c)?"&b is largest":"$c is largest"));
     echo "<br>";

    $op='+';
    switch($op){
        case '+':
        echo $a+$b;
        break;
    
    
        case '-':
        echo $a-$b;
        break;
    
   
        case '-':
        echo $a-$b;
        break;
    
 
        case '-':
        echo $a*$b;
        break;
  
         case '/':
         echo $a/$b;
         break;
    
        default:
        echo "Unexpected Error!";
    }

$color=4;
$scan= match($color){
    1=>"Sunday",
    2=>"Monday",
    3=>"Tuesday",
    4=>"Wednesday",
    5=>"Thursday",
    default=> "Invalid input."
};
echo "<br>";
echo $scan;

$traffic="red";
$light=match($traffic){
    "red"=>"Stop",
    "yellow"=>"Wait",
    "Green"=>"Go",
    default=> "Error"
};
     echo "<br>";

echo($light);

 ?>
</body>
</html>