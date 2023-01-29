<?php echo "bonjour à tous"; ?>


<!DOCTYPE html>
    <head>
           <title>php</title>
    </head>
    <body>
    <?php include "menunaviguation"; ?> 
    <form method="post">
    <input type="text" name="pseudo" id="pseudo" placeholder="Votre Identifiant" require><br><br>
    <input type="text" name="age" id="age" placeholder="Votre age" require><br><br>
    <input type="text" name="email" id="email" placeholder="Votre email" require><br><br>
    <input type="submit" name="formsend" id="formsend">
    </form>


    <?php 
            if(isset($_POST["formsend"])) {
           
            $pseudo = $_POST["pseudo"];
            $age = $_POST["age"];
            $email = $_POST["email"];



            if(!empty($pseudo) && !empty($age) && !empty($email)) {
                echo "Votre pseudo : ".$_POST["pseudo"] . "<br>";
                echo "Votre age : ".$_POST["age"]. "<br>";
                echo "Votre email : ".$_POST["email"];
            
            }    

               

            }

    ?>
    </body>
  </html>
