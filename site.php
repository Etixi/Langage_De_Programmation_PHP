<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>

  </body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php


      echo " <h1><b>1) Ecrire du code HTML</h1> <br>";
      echo " ============================================ <br>";

      echo("Hello World") ."<br>";
      echo "Hello World" ."<br>";
      echo "<h1>Etixi's Site</h1>";
      echo "<hr>";
      echo "<p>This is my site</p>";



      echo " <h1><b>2) Variables</b></h1> <br>";
      echo " ============================================ <br>";

      $characterName = "Tom";
      $characterAge = 80;
      echo "There once was a man named $characterName <br>";
      echo "He was $characterAge years old <br>";
      echo "He reaaly liked the name $characterName <br>";
      echo "But didn't like being $characterAge <br>";
      echo "<br>";

      echo " <h1><b>3) Types De Données</b></h1> <br>";
      echo " ============================================ <br>";

      $phrase = "To be or not to be";
      $age = 30;
      $gpa = 32.9875;
      $isMale = False;
      echo $phrase ."<br>";
      echo $age ."<br>";
      echo $gpa ."<br>";
      echo $isMale ."<br>";
      echo "<br>";


      echo " <h1><b>4) Travailler avec des chaines de caractères</b></h1> <br>";
      echo " ============================================ <br>";

      $phrase = "Giraffe Academy";

      echo strtolower($phrase) ."<br>";
      echo strtoupper($phrase) ."<br>";
      echo substr($phrase, 8) ."<br>";
      echo substr($phrase, 3, 8) ."<br>";
      echo str_replace("Giraffe", "Panda", $phrase) ."<br>";
      echo strlen($phrase) ."<br>";

      $phrase[0] = "B";
      echo $phrase[0] ."<br>";
      echo $phrase ."<br>";
      echo "<br>";

      echo " <h1><b>5) Travailler avec des nombres</b></h1> <br>";
      echo "====================================== <br>";

      echo 10 + 4 . "<br>";
      echo 5.7 - 4 . "<br>";
      echo 5.7 * 9 . "<br>";
      echo 10 / 3 . "<br>";
      echo 10 % 3 . "<br>";
      echo 4 + 5 * 10 . "<br>";
      echo -40.847 . "<br>";

      $num = 10;
      $num++;
      //$num--;
      $num += 25;
      echo $num . "<br>";

      echo abs(-100) . "<br>";
      echo pow(2, 4) . "<br>";
      echo sqrt(556) . "<br>";
      echo max(2, 10) . "<br>";
      echo min(2, 10) . "<br>";
      echo round(10.7) . "<br>";
      echo ceil(10.7) . "<br>";
      echo floor(10.7) . "<br>";
      echo "<br>";
      ?>

      <?php
      echo " <h1><b>6) Obtenir une entrée utilisateur</b></h1> <br>";
      echo "====================================== <br>";
      echo "<br>";
       ?>

      <form action="site.php" method="get">
        Name: <input type="text" name="username">
        <br>
        Age: <input type="number" name="age">
        <br>
        <input type="submit" >
      </form>

      <br>
      Your name is <?php  echo $_GET["username"] ?>
      <br>
      Your age is <?php  echo $_GET["age"] ?>
      <br>



      <?php
      echo "<br>";
      echo " <h1><b>7) Construire une calculatrice basique</b></h1> <br>";
      echo "====================================== <br>";
      echo "<br>";
       ?>

       <form action="site.php" method="get">
         <input type="number" name="num1">
         <br>
         <input type="number" name="num2">
         <br>
         <input type="submit" >
       </form>

       Answer : <?php echo $_GET["num1"] + $_GET["num2"] ?>
       <br>

       <?php
       echo "<br>";
       echo " <h1><b>8) Construire le jeu de Mad Libs</b></h1> <br>";
       echo "====================================== <br>";
       echo "<br>";
        ?>

        <form action="site.php" method="get">
          Color: <input type="text" name="color"><br>
          Plural Noun: <input type="text" name="pluralNoun"><br>
          celebrity: <input type="text" name="celebrity"><br>
          <input type="submit" >
        </form>
        <br><br>

        <?php

          $color = $_GET["color"]; //Magenta
          $pluralNoun = $_GET["pluralNoun"]; //Microwaves
          $celebrity = $_GET["celebrity"]; //Tom Hanks

          echo "Roses are $color <br>";
          echo "$pluralNoun are blue <br>";
          echo "I love $celebrity <br>";
          echo "<br>";
         ?>


         <?php
         echo "<br>";
         echo " <h1><b>9) Paramètres d'URL</b></h1> <br>";
         echo "====================================== <br>";
         echo "<br>";
          ?>

          <form action="site.php" method="get">
            Name: <input type="text" name="name"><br>

            <input type="submit" >
          </form>
          <br><br>


          <?php
              //URL : http://localhost:4000/www/site.php?name=Etienne&age=78
            echo $_GET["name"];
            echo "<br>";
           ?>

           <?php
           echo "<br>";
           echo " <h1><b>10) POST VS GET</b></h1> <br>";
           echo "====================================== <br>";
           echo "<br>";
            ?>

            <form action="site.php" method="post">
              Password: <input type="password" name="password"><br>

              <input type="submit" >
            </form>
            <br><br>

            <?php
              echo $_GET["password"];
              echo "<br>";
             ?>

             <?php
             echo "<br>";
             echo " <h1><b>11) Tableaux<b></h1> <br>";
             echo "====================================== <br>";
             echo "<br>";
              ?>

              <?php
                $friends= array("Kevin", "Karen", "Oscar", "Jim");
                echo $friends[0] ."<br>";
                $friends[4] = "Angela" ."<br>";
                echo $friends[4] ."<br>";
                echo count($friends);
                echo "<br>";
               ?>

               <?php
               echo "<br>";
               echo " <h1><b>12) Utilisation de cases à cocher</b></h1> <br>";
               echo "====================================== <br>";
               echo "<br>";
                ?>

                <form action="site.php" method="post">

                  Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
                  Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
                  Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
                  <input type="submit" >
                </form>
                <br><br>

                <?php
                $fruits = $_POST["fruits"];
                echo $fruits[1];
                echo "<br>";
                 ?>

                 <?php
                 echo "<br>";
                 echo " <h1><b>13) Taleaux Associatifs</b></h1> <br>";
                 echo "====================================== <br>";
                 echo "<br>";
                  ?>


                <form action="site.php" method="post">
                  <input type="text" name="student">
                  <input type="submit" >
                </form>
                  <br><br>

                <?php
                  $grades= array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+");
                  echo $grades[$_POST["student"]] ."<br>";

                  // echo $grades["Jim"] ."<br>";
                  // echo $grades["Pam"] ."<br>";
                  // echo $grades["Oscar"] ."<br>";
                  // $grades["Jim"] = "F";
                  // echo $grades["Jim"] ."<br>";
                  // echo count($grades) ."<br>";

                 ?>

                 <?php
                  echo "<br>";
                  echo " <h1><b>14) Functions</b></h1> <br>";
                  echo "====================================== <br>";
                  echo "<br>";
                ?>

                <?php
                    function sayHi($name, $age){
                      echo "Hello $name , you are $age !!! <br>";
                    }

                    sayHi("John", 40);
                    sayHi("Dave", 25);
                    sayHi("Oscar", 36);
                 ?>

                 <?php
                  echo "<br>";
                  echo " <h1><b>14) Declaration return</b></h1> <br>";
                  echo "====================================== <br>";
                  echo "<br>";
                  ?>

                <?php
                    function cube($num){
                        return pow($num, 3);
                    }

                    $cubeResult = cube(4);
                    echo $cubeResult;
                    echo "<br>";
                 ?>


                 <?php
                  echo "<br>";
                  echo " <h1><b>15) Declaration If</b></h1> <br>";
                  echo "====================================== <br>";
                  echo "<br>";
                  ?>

                <?php
                  $isMale = false;
                  $isTall = true;

                  if ($isMale && $isTall){
                    echo "You are tall male";
                  } elseif ($isMale && !$isTall) {
                    echo "You are a short male";
                  } elseif (!$isMale && $isTall) {
                    echo "You are not male but are tall";
                  } else {
                    echo "You are not male and not tall";
                  }
                  echo "<br>";
                 ?>


                 <?php
                  echo "<br>";
                  echo " <h1><b>16) Declaration If (Suite)</b></h1> <br>";
                  echo "====================================== <br>";
                  echo "<br>";
                ?>

                <?php
                  function getMax($num1, $num2, $num3){
                    if($num1 != $num2 && $num1 >= $num3){
                        return $num1;
                    } elseif ($num2 >= $num1 && $num2 >= $num3) {
                       return $num2;
                    } else {
                        return $num3;
                    }
                  }

                  echo getMax(300, 90, 400);
                  echo "<br>";
                 ?>

                 <?php
                  echo "<br>";
                  echo " <h1><b>17) Construire un meilleur calculateur</b></h1> <br>";
                  echo "====================================== <br>";
                  echo "<br>";
                ?>

                <form action="site.php" method="post">
                  First Num: <input type="number" step="0.001" name="num1"><br>
                  OP: <input type="textbox" name="op"><br>
                  Second Num: <input type="number" name="num2"><br>
                  <input type="submit" >
                </form>

              <?php
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $op = $_POST["op"];

                if($op == "+"){
                  echo $num1 + $num2;
                } elseif ($op == "-") {
                  echo $num1 - $num2;
                } elseif ($op == "/") {
                  echo $num1 / $num2;
                } elseif ($op == "*") {
                  echo $num1 * $num2;
                } else {
                  echo "Invalid Operator";
                }

                echo "<br>";
               ?>

               <?php
                echo "<br>";
                echo " <h1><b>18) Instruction de changement</b></h1> <br>";
                echo "====================================== <br>";
                echo "<br>";
              ?>


              <form action="site.php" method="post">
                What was your grade?
                <input type="text" name="grade">
                <input type="submit">
              </form>
                <br><br>

              <?php
                $grades= $_POST["grade"];
                switch($grades){

                  case "A":
                    echo "You did amazing";
                    break;
                  case "B":
                    echo "You did pretty good";
                    break;
                  case "C":
                    echo "You did priority";
                    break;
                  case "D":
                    echo "You did very bad";
                    break;
                  case "F":
                    echo "YOU FAIL!!!";
                    break;
                  default :
                    echo "Invalid Grade";

                }

              echo "<br>";
            ?>


            <?php
              echo "<br>";
              echo " <h1><b>17) Condition : While</b></h1> <br>";
              echo "====================================== <br>";
              echo "<br>";
           ?>

           <?php

           $index = 1;
           while($index <= 5){
             echo "$index <br>";
             $index++;

           }
           echo "<br>";
            ?>

            <?php
              echo "<br>";
              echo " <h1><b> Condition : DO-While</b></h1> <br>";
              echo "====================================== <br>";
              echo "<br>";
           ?>

           <?php

           $index = 6;
           do{
             echo "$index <br>";
             $index++;
           }while($index <= 5);
           echo "<br>";
            ?>

            <?php
              echo "<br>";
              echo " <h1><b> 18) Condition : For Loops</b></h1> <br>";
              echo "====================================== <br>";
              echo "<br>";
           ?>

           <?php
           $luckyNumbers= array(4, 8, 14, 16, 23, 42);

           for ($i = 0; $i <= count($luckyNumbers); $i++){
             echo "$luckyNumbers[$i] <br>";
           }
           echo "<br>";
            ?>

            <?php
              echo "<br>";
              echo " <h1><b> 19) Commentaires</b></h1><br>";
              echo "====================================== <br>";
              echo "<br>";
           ?>

           <?php
            // comment
            echo "comments are fun!";
            echo "<br>";
            ?>

            <?php
              echo "<br>";
              echo " <h1><b> 20) Inclure du code HTML</b></h1> <br>";
              echo "====================================== <br>";
              echo "<br>";
           ?>

           <?php include "header.html" ?>
           <p>Hello World</p>
           <?php include "footer.html" ?>

           <br>

           <?php

              $title = "My First Post";
              $author = "Etixi";
              $wordcount = 400;
              include "article-header.php";
              echo "<br>";
            ?>

            <?php
              require_once 'useful-tools.php';
              echo $feetInMile ."<br>";
              echo "<br>";
             ?>

             <?php
              echo "<br>";
              echo " <h1><b> 21) Classes et Objets </b></h1> <br>";
              echo "====================================== <br>";
              echo "<br>";
            ?>

            <?php
                class Book {

                  var $title;
                  var $author;
                  var $pages;

                  function __construct($aTitle, $aAuthor, $aPages){
                    $this->title = $aTitle;
                    $this->author = $aAuthor;
                    $this->pages = $aPages;
                  }

                }

                $book1 = new Book("Harry Potter", "JK Rowling", 400);
                $book2 = new Book("Lord Of the Rings", "Tolkien", 700);

                // Accessing and printing book details
                echo "Book 1 Title: " . $book1->title . "<br>";
                echo "Book 2 Title: " . $book2->title . "<br>";
                echo "<br>";
              ?>

              <?php
               echo "<br>";
               echo " <h1><b> 21) Fonctions d' Objets </b></h1> <br>";
               echo "====================================== <br>";
               echo "<br>";
             ?>

             <?php
                class student {

                  var $name;
                  var $major;
                  var $gpa;

                  function __construct($name, $major, $gpa) {

                    $this->name = $name;
                    $this->major = $major;
                    $this->gpa = $gpa;
                  }


                  function hasHonors(){

                      if($this->gpa > 3.5){
                        return "true";
                      }
                      return "false";
                  }
              }

                $student1 = new Student("Jim", "Business", 2.8);
                $student2 = new Student("Pam", "Art", 3.6);

                echo $student1 -> hasHonors() ."<br>";
                echo $student2 -> hasHonors() ."<br>";

              ?>

              <?php
               echo "<br>";
               echo " <h1><b> 22) Getters & Setters </b></h1> <br>";
               echo "====================================== <br>";
               echo "<br>";
             ?>

             <?php

                class Movie {

                  private $title;
                  private $rating;

                  function __construct($title, $rating){

                    $this->title = $title;
                    $this->setRating($rating);
                  }

                  function getRating(){
                    return $this->rating;
                  }

                  function setRating($rating){

                    if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){

                      $this->rating = $rating;
                    } else {
                      $this->rating = "NR";
                    }
                  }
                }

                $avengers = new Movie("Avengers", "Dog");

                // $avengers->setRating("Dog");
                echo $avengers->getRating();
                echo "<br>";
              ?>

              <?php
               echo "<br>";
               echo " <h1><b> 23) Heritage </b><h1> <br>";
               echo "====================================== <br>";
               echo "<br>";
             ?>

              <?php

              class Chef {

                function makeChicken(){
                  echo "The chef makes chicken <br>";
                }

                function makeSalad(){
                  echo "The chef makes salad <br>";
                }

                function makeSpecialDish(){
                  echo "The chef makes bbq ribs <br>";
                }
              }

              class ItalianChef extends Chef{

                function makePasta(){
                  echo "The chef makes Pasta <br>";
                }

                function makeSpecialDish(){
                  echo "The chef makes chicken parm <br>";
                }

              }

              $chef = new Chef();
              $chef->makeChicken();
              $chef->makeSpecialDish();

              $italianChef = new ItalianChef();
              $italianChef->makePasta();
              $italianChef->makeSpecialDish();

               ?>

  </body>
</html>
