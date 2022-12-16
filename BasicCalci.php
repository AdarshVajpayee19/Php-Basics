<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
</head>
<body>
    <!-- Basic Calculator In Php -->


    <!-- <h1>Basic Calculator In Php </h1>
    <hr>
    <form action="BasicCalci.php" method = "get">
        Enter 1st Number : <input type="number" name = "num1">
        <br>
        Enter 2nd Number : <input type="number" name = "num2">
        <input type="submit">
    </form>
    <br>
    Result : <?php echo $_GET["num1"] + $_GET["num2"] ?>
     -->



    <!-- Building a Mad Libs Game -->
    <!-- <h1>Building a Mad Libs Game</h1>
    <hr>
    <form action="BasicCalci.php" method = "get">
        Color : <input type="text" name = "color"><br>
        Plural Noun : <input type="text" name = "plural_noun"><br>
        Celebrity : <input type="text" name = "celebrity"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        $color = $_GET["color"];
        $plural_noun  = $_GET["plural_noun"];
        $celebrity = $_GET["celebrity"];
        echo "Roses are $color <br>";
        echo "$plural_noun are blue <br>";
        echo "I love $celebrity<br>";
    ?> -->


    <!-- POST Vs GET -->

    <!-- Since we are using get Method in the form tag.
    it shows password in URL.This is not a good method certain information need be secured.
     -->

     <!-- Use Post Instead of Get in form Get to get rid of above conflicts. -->
    <!-- username,password,get credit card details, any sensitive information must store using POST. -->


    <!-- <form action="BasicCalci.php" method = "post">
        password : <input type="password" name="password">
        <input type="submit">
    </form>
    <br>
    <?php
        echo $_POST["password"];
    ?> -->

    <!-- Arrays In Php -->

    <?php
        $friends = array("Adarsh","Gopal","Gnanesh","Shabri","Manoj");
        
        // echo "$friends[0]<br>";
        // echo "$friends[1]<br>";
        // echo "$friends[2]<br>";
        // echo "$friends[3]<br>";
        // echo "$friends[4]<br>";

        // modifying value :

        // $friends[4] = "Bhupal";
        // echo $friends[4];

        // echo count($friends);
    ?>

    <!-- Using CheckBoxes -->
    <!-- <form action="BasicCalci.php" method="post">
       Mango : <input type="checkbox" name="fruits[]" value="Mango"><br>
       PineApple : <input type="checkbox" name="fruits[]" value="PineApple"><br>
       Banana : <input type="checkbox" name="fruits[]" value="Banana"><br>
       Grapes : <input type="checkbox" name="fruits[]" value="Grapes"><br>
       Chickoo : <input type="checkbox" name="fruits[]" value="Chickoo"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[0];
    ?> -->


    <!-- Associative array In php-->

    <!-- Storing key - value pairs -->
    <!-- keys Should be unique -->
    <!-- <form action="BasicCalci.php" method="post">
        <input type="text" name="student" placeholder = "Enter Your Name">
        <input type="submit">
    </form>
    <?php
        $grades = array("Adarsh"=>"B+","Gopal"=>"A+","Shabri"=>"A");
        
        // echo $grades["Gopal"];
        // echo "<br>";
        // echo count($grades);
        
        echo $grades[$_POST["student"]];

    ?> -->


    <!-- Functions In Php -->
    <!-- <?php
         function sayHi($name, $age)
         {
            echo "Hello I am $name, And i am $age now.<br>";
         }
         sayHi("Adarsh Vajpayee", 21);
         sayHi("Ashish Vajpayee", 24);
         sayHi("Akansha Vajpayee", 15);
    ?> -->


    <!-- Return Statements In php -->

    <!-- Cube Of the Number -->
    <!-- <form action="BasicCalci.php" method="get">
    Enter The Number : <input type="number" name="num1">
         <input type="submit">
    </form>
    <br>
    <?php
        function cube($num1)
        {
            return $num1*$num1*$num1;
        }
        $cube_result = cube($_GET["num1"]);
        echo "The Cube Of The Number: $cube_result<br>";
    ?> -->


    <!-- If ElseIf with Comparison -->
    <!-- Maximum of two Number in Php -->
    <!-- <form action="BasicCalci.php" method="get">
        Enter 1st Number :  <input type="number" name="num1" placeholder="First number">
        Enter 2nd Number :  <input type="number" name="num2" placeholder="Second number">
    <input type="submit">
    </form>
    <br>
    <?php
        function get_max_of_two($num1, $num2)
        {
            if($num1 > $num2)
                return $num1;
            else
                return $num2;
        }
        $result = get_max_of_two($_GET["num1"],$_GET["num2"]);
        echo "The Maximum of two Number is : $result <br>";
    ?> -->


<!-- Building A Better Calculator -->

    <!-- <form action="BasicCalci.php" method="post">
        First Number : <input type="number" name="n1"><br>
        Operator : <input type="text" name="operator"><br>
        Second Number : <input type="number" name="n2"><br>
    <input type="submit">
    </form>
    <br>
    <?php
        $num1 = $_POST["n1"];
        $num2 = $_POST["n2"];
        $op = $_POST["operator"];

        function get_Result($num1,$num2,$op)
        {       
                if ($op == '+')
                    return  $num1+$num2;
                elseif ($op == '-')
                    return  $num1-$num2;
                elseif ($op == '*')
                    return  $num1*$num2;
                elseif ($op == '/')
                    return  $num1/$num2;
                elseif ($op == '%')
                    return  $num1%$num2;
                else 
                return "Please enter a Valid Operator(+, -, *, /, %,) ";
        }
        $result = get_Result($num1,$num2,$op);
        echo "Result : $result <br>";
    ?> -->

        <!-- Switch Statements -->
        <!-- <form action="BasicCalci.php" method="post">
            What was your Grade?
            <input type="text" name="grade">
            <input type="submit">
        </form>
        <br>
        <?php
            $grade = $_POST["grade"];
            switch($grade)
            {
                case "A":
                    echo "You Did Amazing!!!";
                    break;
                case "B":
                    echo "You did pretty Good";
                    break;
                case "C":
                    echo "You Did poorly";
                    break;
                case "D":
                    echo "You did very bad";
                    break;
                case "F":
                    echo "You FAILED :(,Aur Baito Piche";
                    break;
                default :
                    echo "Hey U have Enter A invalid Grade.";
            }
        ?> -->

        <!-- WHILE LOOPS     -->
        <!-- <?php
            $i = 1;
            echo "<h1>While Loops</h1>";
            echo "<hr>";
            while($i <= 5)
            {
                echo "$i <br>";
                $i++;
            }

        // Do While Loops

            $d = 6;
            echo "<h1>Do While Loop</h1>";
            echo "<hr>";
            do{
                echo "$d <br>";
            }while($d <= 5);

        // For Loops
            echo "<h1>For Loop</h1>";
            echo "<hr>";
            for($i=5;$i>0;$i--)
            {
                echo "$i <br>";
            }

        //Use of For Loops
           echo "<h3>Use of For Loops, By printing LuckyNumber in array.</h3>";
           echo "<hr>";
            $luckyNumber = array(3, 2, 7, 10, 5);
            for($i=0;$i<count($luckyNumber);$i++) 
            {
                echo "$luckyNumber[$i] <br>";
            }
        ?> -->
</body>
</html>
