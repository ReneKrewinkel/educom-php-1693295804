<!DOCTYPE html>
<html>
    <body>
        <?php
            echo "<h2>PHP is Fun!</h2>";
            echo "Hello world!<br>";
            echo "I'm about to learn PHP!<br>";
            echo "This ", "string ", "was ", "made ", "with multiple parameters.";

            $txt1 = "learn PHP";
            $txt2 = "w3schools.com";
            $x = 5;
            $y = 4;

            echo "<h2>" . $txt1 . "</h2>";
            echo "Study PHP at" . $txt2 . "<br>";
            echo $x + $y;

            print "<h2>PHP is Fun!</h2>";
            print "Hello world!<br>";
            print "I'm about to learn PHP!<br>";

            print "<h2>" . $txt1 . "</h2>";
            print "Study PHP at" . $txt2 . "<br>";
            print $x + $y;
        ?>
    </body>
</html>