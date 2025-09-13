<html>
    <head>
        <title>PHP Web Development with MySQL - Chapter 3</title>
    </head>
    <body>
        <?php
            // Ch3e1 - Assign numbers to two variables and echo their values
            $value1 = 12;
            $value2 = 45;

            echo "The two values for exercise 1 are <b>$value1</b> and <b>$value2</b>. <br/><br/>";

            
            // Ch3e2 - Create a name varible, echo the string 'Hello NAME' using the variable
            $name = "Count Chocula";

            echo "Hello <b>$name</b>. <br/><br/>";


            // Ch3e3 - Define gravity as a constant, echo it's value
            define("GRAVITY_ACCELERATION", 9.81);

            echo "The accepted value of acceleration due to gravity is <b>" . GRAVITY_ACCELERATION . "</b>."
        ?>
    </body>
</html>