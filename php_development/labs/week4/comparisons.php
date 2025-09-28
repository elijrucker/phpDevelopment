<!--
    PHP Web Development with MySQL
    Week 4 Labs - Chapter 7
-->

<html>
    <head>
        <title>PHP Web Development with MySQL - Week 4 / Chapter 7</title>
    </head>
    <body>
        <?php
            /*
                Ch7e1
                - Use '$x = random_int(1,10) to pick a number between 1 and 10
                - Then indicate if it is between 3 and 7 inclusive
            */
            echo "Chapter 7 Exercise 1 output:<br/><br/>";

            $x = random_int(1,10);
            echo "The random number is $x<br/>";
            if ($x > 3 && $x <= 7)
            {
                echo "The random number is between 3 and 7.";
            }
            else 
            {
                echo "The random number is not between 3 and 7.";
            }

            echo "<br/><hr/></br>";
            /*
                Ch7e2
                - Use '$x = random_int(1,10) to pick a number between 1 and 10
                - Output the value of $x
                - Indicate if it's less than 3, between 3 and 7 inclusive or 7+
            */
            echo "Chapter 7 Exercise 2 output:<br/><br/>";

            $x = random_int(1,10);
            echo "The random number is $x<br/>";
            if ($x < 3)
            {
                echo "The random number is less than 3.";
            }
            else if ($x <= 7)
            {
                echo "The random number is between 3 and 7.";
            }
            else
            {
                echo "The random number is greater than 7.";
            }

            echo "<br/><hr/></br>";
            /*
                Ch7e3
                - Redo Ch7e2 with compound conditional statements
            */
            echo "Chapter 7 Exercise 3 output:<br/><br/>";

            $x = random_int(1,10);
            echo "The random number is $x<br/>";
            if ($x > 3 && $x <= 7)
            {
                echo "The random number is between 3 and 7.";
            } 
            else if ($x < 3)
            {
                echo "The random number is less than 3.";
            } 
            else 
            {
                echo "The number is greater than 7.";
            }
        ?>
    </body>
</html>