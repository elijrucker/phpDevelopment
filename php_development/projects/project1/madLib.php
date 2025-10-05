    <!--
        PHP Web Development with MySQL
        Project 1 'Madlibs'
    -->

    <html>
    <head>
        <title>Project 1 - Madlibs</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <!-- 
            The following Madlib form should...
            - Collect user input for a noun, verb, adverb, adjective
        -->

        <h2>Build your own Madlib!</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            Noun<br/>
            <input name="noun" placeholder="Enter a plural noun"/><br/>
            Verb<br/>
            <input name="verb" placeholder="Enter a verb"/><br/>
            Adverb<br/>
            <input name="adverb" placeholder ="Enter an adverb"/><br/>
            Adjective<br/>
            <input name="adjective" placeholder="Enter an adjective"/><br/>
            <p>
            <input 
            class="button" 
            type="submit" 
            name="submit" 
            value="Generate Madlib"
            />
        </form>
        <hr>

        <!--
            After the data has been collected it should be...
            - Saved to the DB
        -->
        <?php
        if(isset($_POST['submit']))
        {
            echo "<h2>Your Madlib:</h2>";
            
            // Read/copy madlib data from form
            $noun = $_POST['noun'];
            $verb = $_POST['verb'];
            $adverb = $_POST['adverb'];
            $adjective = $_POST['adjective'];
            $madlib_whole = "We are going to the zoo today, I hope we see a(n)" 
                . " <strong>$adjective</strong> <strong>$noun</strong>. " 
                . "They are my favorite when they are <strong>$verb" 
                . "ing</strong> " . "<strong>$adverb</strong>.";
                
            // Write data into database
            $dbc_write_data = mysqli_connect(
                'localhost', 
                'testuser', 
                'testuser', 
                'MadLib'
                ) or trigger_error(
                'Error connecting to MySQL server.', E_USER_ERROR
                );
                    
            $query_write_data = 
                "INSERT INTO madLib 
                (noun, verb, adverb, adjective, madlib_whole)"
                . " VALUES 
                ('$noun', '$verb', '$adverb', '$adjective', '$madlib_whole')";
                    
            $result_write_data = mysqli_query(
                $dbc_write_data, 
                $query_write_data
                ) or trigger_error(
                'Error querying database.', E_USER_WARNING
                );
                            
            if (!$result_write_data)
            {
                trigger_error("Query Error description: "
                    . mysqli_error($dbc_write_data), E_USER_WARNING);
            }
                    
            mysqli_close($dbc_write_data);
        }
        ?>

        <!--
            After data collection...
            - Establish a DB connection
            - Query data
            - Output saved madlib DB data
        -->
        <?php
        if(isset($_POST['submit']))
        {
            // Connect to DB and query data        
            $dbc_read_data = mysqli_connect(
                'localhost', 
                'testuser', 
                'testuser', 
                'MadLib'
                ) or trigger_error(
                'Error connecting to MySQL server.', E_USER_ERROR
                );
                
            $query_read_data = 
                "SELECT madlib_whole FROM madLib ORDER By id DESC";
            
            $result_read_data = mysqli_query($dbc_read_data, $query_read_data)
                or trigger_error('Error querying database.', E_USER_ERROR);
                
            // Output data in madlib format  
            while ($row = mysqli_fetch_array($result_read_data))
            {
                echo "<br/>" . $row['madlib_whole'] . "<br/>";
            }
            
            mysqli_close($dbc_read_data);
        }
        ?>
    </body>
</html>