<!--
    PHP Web Development with MySQL
    Week 3 Labs - Chapter 9
-->

<html>
    <head>
        <title>PHP Web Development with MySQL - Week 3 / Chapter 9</title>
    </head>
    <body>
        <?php
            // Ch9e1 - Loop 1 - 10, output counter value and counter squared
            
            echo "Chapter 9 Exercise 1 output:<br/><br/>";
            for ($i = 1; $i <= 10; $i++)
            {
                echo $i . "&nbsp;&nbsp;&nbsp;&nbsp;" . ($i * $i);
                echo "<br/>";
            }
            echo "<br/><br/><hr>";


            // Ch9e2 - Use foreach loop to output books from $books_and_authors

            echo "Chapter 9 Exercise 2 output:<br/><br/>";
            $books_and_authors = array(
                "The Great Gastby" => "F. Scott Fitzgerald",
                "Frankenstein" => "Mary Shelley",
                "Wuthering Heights" => "Emily Bronte"
            );
            foreach ($books_and_authors as $title => $author)
            {
                echo $title;
                echo "<br/>";
            }         
        ?>
    </body>
</html>