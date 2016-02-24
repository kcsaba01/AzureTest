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
            $myage = 44;
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
            echo "<BR>";
            echo "<BR>";
            //section 4
            $provisionedActivities = array("Specs", "Drugs","Roll");
            foreach($provisionedActivities as $x) {
                print "<p> $x </p>";
            }
            $provisionedActivities[1] = "hugs";
            foreach($provisionedActivities as $x) {
                print "<p> $x </p>";
            }
            print "  After replacing Drugs with hugs";
            unset($provisionedActivities[2]);
            foreach($provisionedActivities as $x) {
                print "<p> $x </p>";
            }
            print "After deleting Rolls";
            //section 5
            print "Section 5 using a for loop to display the content of an array";
            print "<BR>";
            print "<BR>";
            for ($i = 0; $i<=1;$i++) {
                echo($provisionedActivities[$i] . "  ");
            }
            $availability = array("Nothing is available", "Specs are available", "Mugs are available", "Specs and Sausage Rolls are available");
            $counter = 1;
            for ($i=0; $i<=31; $i++) {
                $counter =$i;
                while ($counter > 3) {
                $counter=$counter - 4;
                }
                echo "It's day " . $i . " today " . $availability[$counter];
            }
            ?>
        </p>
      </body>
</html>


