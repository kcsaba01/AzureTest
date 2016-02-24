/**
* Created by PhpStorm.
* User: 0811994
* Date: 24/02/2016
* Time: 14:17
*/
<!DOCTYPE html>
<html>
    <head>
        </head>
      <body>
        <p>
            <?php
            echo "Hello World!" . "<BR>";
            //echo "<BR>";
            //echo "Hello," .  " " . "world" . "!";
            //echo "<BR>";
            //echo 5*7;
            $myname = "Frodo";
            $myage = 111;
            echo "Your name is: " . $myname . " and you are " . $myage . " years old!";
            echo "<BR>";
            echo "<BR>";
            if ($myname == "Simon") {
                print "I know you!";
            }
            else {
                print "Who are you?";
            }
            echo "<BR>";
            echo "<BR>";
            switch ($myage) {
                case ($myage<=18):
                    echo "you are a child";
                    break;
                case ($myage<=65) and ($myage >18):
                    echo "You are an adult";
                    break;
                case ($myage>65):
                    echo "You are old :)";
                    break;
                default:
                    echo "no defaults here ";
            }
            ?>
        </p>
      </body>
</html>


