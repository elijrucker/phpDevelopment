<html>
    <head>
        <title>PHP Web Development with MySQL - Chapter 4</title>
    </head>
    <body>
        <?php
            // Ch4e1 - Concatenate first and last name variables
            $first_name = "Wilford";
            $last_name = "Brimley";

            echo "Hi, I'm <b>" . $first_name . " " . $last_name . "</b>. <br/><br/>";
           
            
            // Ch4e2 - Using string interpoliation output last name, comma, first name
            
            echo "$last_name, $first_name <br/><br/>";


            // Ch4e3 - Set last_name to "O'Connor" and output full name
            $last_name = "O'Connor";

            echo "My new name is $first_name $last_name... that's \"O'Connor\".";
        ?>
    </body>
</html>