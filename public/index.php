<!DOCTYPE html>
<html>
    <head> 
        <title>Fizzbuzz !</title>
        <link rel="stylesheet" href="../style.css">
   </head>
   
   <body>
        <div class="content_box">
            <div id="main_layout">
                <div id="title_box">
                    <h1 id="title" class="content"> Fizzbuzz </h1>
                    <h1 id="subtitle" class="content"> Détecteur de bonheur </h1>
                </div>
                <p id="intro" class="content"> Rentrez un nombre et vérifier si celui-ci est un multiple de 3 (Fizz) de 5(Buzz) ou des deux (Fizzbuzz)</body>
            </div>

            <form action="" method="get" class="form" >
                <div>
                    <label for="number">Quel nombre voulez-vous tester ? </label>
                    <input type="text" name="number" id="number" required>
                </div>
                <div>
                    <input type="submit" value="Soumettre">
                </div>
                
                <!-- Fonction FizzBuzz en php -->
                <?php
                    $valueToCheck = $_GET[('number')]; 
                    $result = null;
                    
                    function processingNumber(int $value){
                        $number = $value; 
                        $fizz = "";
                        $buzz = "";

                        //Le fizz
                        $test1 = $number%3;
                        if ($test1 == 0){
                            $fizz = "Fizz";
                        }
                        // Le buzz
                        $test2 = $number%5;
                        if ($test2 == 0){
                            $buzz = "Buzz";
                        }
                        $fizzbuzz = $fizz.$buzz;

                        return $fizzbuzz;
                    }
                    
                    $result = processingNumber($valueToCheck);
                
                    echo "<h1>".$result."</h1>";
                    
                ?>
            </form>
        </div>
    </body>
</html>