<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            height:50px;
            width:50px;
        }
    </style>
</head>
<body>
    <table border='1' cellpadding="10px">     
    <?php
        for($i=0;$i<8;$i++)
            {
                echo"<tr>";
                for($j=0;$j<8;$j++)
                {
                    if(($i+$j)%2==0)
                        {
                            echo"<td style='background-color:white;'> </td>";

                        }
                    else{
                            echo"<td style='background-color:black;'> </td>";
                        }

                    
                }
                echo"<tr>";
            }

            
            
            ?>
            </table>
</body>
</html>