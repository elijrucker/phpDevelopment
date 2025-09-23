<!--
    PHP Web Development with MySQL
    Week 3 Labs - Chapter 6
-->

<html>
    <head>
        <title>PHP Web Development with MySQL - Week 3 / Chapter 6</title>
    </head>
    <body>
        <?php
            // Ch6e1 - Create a string array (5+ strings), echo strings 2 & 3

            $book_titles = array(
                "Pride and Prejudice", 
                "To Kill a Mockingbird",
                "1984",
                "Moby Dick",
                "Jane Eyre"
            );
            echo "Chapter 6 Exercise 1 output:<br/><br/>";
            echo "Here are a couple of book titles: "
                . "$book_titles[2], $book_titles[3]";
            echo "<br/><br/><hr>";


            // Ch6e2 - Create assoc array (3+ (book(key)/author)), echo all

            $books_and_authors = array(
                "The Great Gastby" => "F. Scott Fitzgerald",
                "Frankenstein" => "Mary Shelley",
                "Wuthering Heights" => "Emily Bronte"
            );
            echo "Chapter 6 Exercise 2 output:<br/><br/>";
            foreach ($books_and_authors as $book => $author)
            {
                echo "$book by " . "$author <br/>";
            }
            echo "<br/><hr>";


            // Ch6e3 - Add entry to $books_and_authors, print_r() array

            echo "Chapter 6 Exercise 3 output:<br/><br/>";
            $books_and_authors["The Odyssey"] = "Homer";
            print_r($books_and_authors);
            echo"<br/><br/><hr>";


            // Ch6e4 - Output $books_and_authors count

            echo "Chapter 6 Exercise 4 output:<br/><br/>";
            $total_book_count = count($books_and_authors);
            echo "The current book list total: $total_book_count";
            echo "<br/><br/><hr>";


            // Ch6e5 - asort() by title, confirm with print_r()

            echo "Chapter 6 Exercise 5 output:<br/><br/>";
            ksort($books_and_authors);
            print_r($books_and_authors);
        ?>
    </body>
</html>