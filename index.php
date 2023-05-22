<!DOCTYPE html>
<html>
    <head> 
        <title>Fizzbuzz !</title>

   </head>
   
   <body>
        <h1> Fizzbuzz : Détecteur de bonheur </h1>

        <p> Rentrez un nombre et vérifier si celui-ci est un multiple de 3 (Fizz) de 5(Buzz) ou des deux (Fizzbuzz)</body>

        <form action="" method="get">
            <div>
                <label for="number">Quel nombre voulez-vous tester ? </label>
                <input type="text" name="number" id="number" required>
            </div>
            <div>
                <input type="submit" value="Soumettre">
            </div>

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
</html>