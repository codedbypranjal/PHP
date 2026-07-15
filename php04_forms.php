<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype='multipart/form-data'>
        Name: <input type="text" name="Name" id="">
        <br>
        Phone number: <input type="text" name="Number" id="">
        <br>
        Email: <input type="email" name="MAIL"   id="">
        <br>
        Gender: <input type="radio" name="Rad" id="" value='F'  > Male <input type="radio" name="Rad" id="" value='M' > Female 
        <br>
        <select name="Address" id="">
            <option value="Ktm">Kathmandu</option>
            <option value="Pkr">Pokhara</option>
            <option value="Lit">Lalitpur</option>
        </select>
        <br>
        Hobby:
        <!-- //Since multiple values are selected thus use array -->
        <input type="checkbox" name="check[]" value="Travel" id=""> Travelling 
        <input type="checkbox" name="check[]" value="single" id=""> Singing 
        <input type="checkbox" name="check[]" value="basket" id=""> Basketball 
        <input type="checkbox" name="check[]" value="foot" id=""> Football 

        Color: <input type="color" name="col" id=""> <br>

        <!-- PHOTO -->
        <input type="file" name="pic" id="">




        <button type="submit" value="" name="Submit"> Submit </button>
    </form>

    <?php
    if (isset($_POST['Submit']))
        {
            $Name=$_POST['Name'];
            echo 'Welcome '. $Name. '<br>';

            echo "<br>";

            $Ph=$_POST['Number'];
            echo 'Is the number correct? '.$Ph. '<br>';

            $Mel=$_POST['MAIL'];
            echo 'email: '.$Mel . '<br>';

            $Ad=$_POST['Address'];
            echo 'Do you live at: '.$Ad. '<br>';

            $Gen=$_POST['Rad'];
            echo 'Blue';

            $Hob=$_POST['check'];
            foreach($Hob as $value)
            {   
                echo"<ul>";
                echo "<li>".$value. '</li>';
                echo"</ul>";
            
            }
            $Col=$_POST['col'];
            echo 

            $Pic=$_FILES['pic']['name'];
            $temp=$_FILES['pic']['tmp_name'];
            $folder="Pic/".$Pic;
            move_uploaded_file($temp,$folder);
            echo "<img src='$folder'>";

            
         
        }
    ?>
</body>
</html>