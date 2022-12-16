<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Php WebPage</title>
</head>
<body>
    <!-- Basics -->
    <?php
    echo ("<h1>Hello Everyone it is my first Php WebPage</h1>");
    echo ("<hr>");
    echo("<p>This is my Site</p>");
    ?>
<!-- variables in php -->
<?php
    echo ("<h1>Varibles in Php</h1>");
    echo ("<hr>");
    $name = "AdarshVajpayee";
    $age = 21;
    echo("There Once was a man named $name <br>");
    echo("He was $age Years Old <br>");
    $name = "AdityaVajpayee";
    echo("He really Liked the name $name <br>");
    echo("But Didn't Like Being $age <br>");
    ?>
    <!-- Datatypes in php -->
    <?php
    echo ("<h1>Datatypes in Php</h1>");
    echo ("<hr>");
    $phrase = "To be or not to be";
    $age = 25;
    $gpa = 6.5;
    $isMale = true;
    echo "Hello Adi <br>";
    echo $phrase;
    ?>
    <!-- Working with Strings -->
    <?php
    echo ("<h1>Working with Strings in Php</h1>");
    echo ("<hr>");
    $phrase = "AdarshVajpayee";
    echo strtolower($phrase);
    echo "<br>";
    echo strtoupper("gnanesh<br>");
    echo strlen($phrase);
    echo "<br>";
    echo "$phrase[0]<br>";
    echo "$phrase[1]<br>";
    echo "$phrase[2]<br>";
    echo "$phrase[3]<br>";
    echo "$phrase[4]<br>";
    echo "$phrase[5]<br>";

    $Name = "Sunil Kumar";
    echo "$Name<br>";
    echo str_replace("Sunil", "Prajwal", $Name);
    echo "<br>";
    echo substr($Name, 6);
    $sub_str = substr($Name, 0, 7);
    echo "<br>$sub_str";
    echo str_replace("il","ny",$sub_str);
    ?>
    
    <!-- Working With Numbers -->
    <?php
    echo ("<h1>Working with Numbers in Php</h1>");
    echo ("<hr>");
    echo 40.5;
    echo "<br>";
    echo 5.7*9;
    echo "<br>";
    echo 10 % 3;
    echo "<br>";
    
    $num = 10;
    $num++;
    echo $num;
    echo "<br>";
    $num--;
    echo $num;
    echo "<br>";
    $num = $num + 90;
    echo $num;
    echo "<br>";
    echo abs(-100);
    echo "<br>";
    echo pow(2,4);
    echo "<br>";
    echo sqrt(144);
    echo "<br>";
    echo max(2, 10);
    echo "<br>";
    echo min(3000, 300);
    echo "<br>";
    echo round(3.2);
    echo "<br>";
    echo round(3.8);
    echo "<br>";
    echo ceil(10.4);
    echo "<br>";
    echo floor(10.9);
    echo "<br>";
    ?>
    <!-- Getting Users Input -->
    <?php
    echo ("<h1>Getting Users Input in Php</h1>");
    echo ("<hr>");
    ?>

    <form action="site.php" method="get">
        Name : <input type="text" name="username">
        <br>
        Age : <input type="number" name="age">
        <input type="submit">
    </form> 
    <br>
    Your Name Is : <?php echo $_GET["username"] ?>
    <br>
    Your Age Is : <?php echo $_GET["age"] ?>
</body>
</html>