<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <table border='1'>
    <?php
    //math functions:
    echo pi();
    echo(min(1,53,64,23,85,24,57,97));
    echo "<br>";
    echo(rand(0,100)); //range
    echo "<br>";
    echo(pow(2,3));
    echo "<br>";
    echo(abs(-843));

   
    echo"<tr>
    <th>Num</th>
    <th>Power</th>
    <th>Squareroot</th>
    <th>Cube</th>
    </tr>";

    for($i=1;$i<=4;$i++)
        {
            echo "<tr> <td>".$i;
            echo "<td>".pow($i,2)."</td>";
            echo "<td>".round(sqrt($i),2)."</td>";
            echo "<td>".pow($i,3)."</td>";
        }

    echo"<br>";
    //string to array: explode()
    print_r(explode("a",'apple banana'));

    // echp strpos("Hello",l);
    $x="            apple";
    echo trim($x. strlen($x));
        echo "<br>";

    echo strrev('Naman');

    $abc="Today is sunday.Although it is holiday we are stying and feeling bored.";
    echo strlen($abc);
    echo(<br>);
    echo strpos($abc,'holiday');
    echo(<br>);
    echo strtoupper($abc);
    echo(<br>);
    echo str_starts_with($abc,'T');
    echo(<br>);
    echo str_ends_with($abc,'d');
    echo(<br>);
    echo str_word_count($abc);
    echo(<br>);
    echo strrev($abc);
    echo(<br>);
    echo substr($abc,9,6);
    echo substr($abc,57,70)
    echo explode(" ",$abc);
    echo str_contains($abc,'sunday');

    ?>
</table>
</body>
</html>