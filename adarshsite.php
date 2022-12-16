<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adarsh website</title>
</head>
<body>

    <!-- Including HTML Files -->
    <!-- <?php include "Header.html" ?>
    <p>Hello I am Adarsh Vajpayee.</p>
    <?php include "footer.html" ?> -->


    <!-- Including PHP files -->
    <!-- <?php 
        $title = "My First Php Post";
        $author = "Adarsh";
        $wordCount = 100;
        include "article-header.php"
    ?> -->

    <!-- Including useful tools files -->
    <!-- <?php
        include "useful-tools.php";
        echo "$FeetInMiles<br>";
        get_name("ADARSH BHAI");
    ?> -->

    <!-- Classes And Objects In Php -->
    <!-- creating Custom Datatype :-->

    <!-- lets say we are writing piece of software for library. -->


    <!-- <?php
        class Book{
           var $title;
           var $author;
           var $no_of_pages;

           function __construct($aTitle,$aAuthor,$aPages)
           {
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
           }
        }

        $book1 = new Book("Harry Potter","JK Rowling",400);
        // $book1->title = "Harry Potter";
        // $book1->author = "JK Rowling";
        // $book1->no_of_pages = 400;

        $book2 = new Book("Lord of The Rings","Tolkien",700);
        // $book2->title = "Lord of the Rings";
        // $book2->author = "Tolkien";
        // $book2->no_of_pages = 700;

        // echo $book1->title;
        // echo $book2->title;
        echo $book1->title;
    ?> -->


    <!-- OBJECT FUNCTIONS -->
    <!-- <?php
        class student{
            var $name;
            var $major;
            var $gpa;

            function __construct($name,$major,$gpa)
            {
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

            function hasHonors(){
                if($this->gpa >= 8.5)
                {
                    return "true";
                }
                return "false";
            }
        }

        $student1 =new student("Adarsh","Information Science",7.2);
        $student2 =new student("Gopal","Information Science",9.2);

        echo $student1->hasHonors();
        echo $student2->hasHonors();
    ?> -->


    <!-- Getters And Setters -->
    <!-- <?php
        class Movie{
            public $title;
            // public $rating; 
            private $rating;

            function __construct($title,$rating)
            {
                $this->title = $title;
                $this->setRating($rating);
            }

            function getRating()
            {
                return $this->rating;
            }

            function setRating($rating)
            {
                if($rating == 'G' || $rating == 'PG' || $rating == 'PG-13' || $rating == 'R'|| $rating == 'NR')
                {
                    $this->rating = $rating;
                }
                else
                {
                    $this->rating = "NR";
                }
            }
        }

        $avengers = new Movie("Avengers", "Dog");
                //G, PG, PG-13, R, NR.....(Ratings).
            // $avengers->rating = "Dog"; It is In appropite giving Dog as rating so to avoid this we make it private instead of public.

        echo $avengers->getRating();

    ?> -->


    <!-- Inheritance In Php -->
    
    <?php
        class chef{
            function makeChicken()
            {
                echo "The Chef make Chicken<br>";
            }
            function makeSalad()
            {
                echo "The Chef make Salad<br>";
            }
            function makeSpecialDish()
            {
                echo "The Chef make BBQ Chicken<br>";
            }
        }

        class ItalianChef extends chef
        {
            function makePasta()
            {
                echo "The Italian chef  makes a Pasta<br>";
            }
            function makeSpecialDish()
            {
                echo "The Italian chef makes Chicken Biryani";
            }
        }

        $chef = new chef();
        $chef->makeChicken();
        $chef->makeSpecialDish();


        $ItalianChef = new ItalianChef();
        $ItalianChef->makeChicken();
        $ItalianChef->makePasta();
        //Lets Say Italian Doesn't want to make Special Dish Similar to chef.
        //He wants to make his own special Dish.

        // Nothing But Overiding

        $ItalianChef->makeSpecialDish();
        
        ?>
</body>
</html>
