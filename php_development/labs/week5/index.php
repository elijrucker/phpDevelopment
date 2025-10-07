<!--
    PHP Web Development with MySQL
    Week 5 Labs - Chapter 15
-->

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title>Movies I Like - Week 5 Labs</title>
    </head>
    <body>
        <div class="card">
            <div class="card-body">
                <h1>Movies I Like</h1>

                <?php
                require_once('dbconnection.php');

                $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                    or trigger_error('Error connecting to MySQL server for DB_NAME.', E_USER_ERROR);

                $query = "SELECT id, title FROM movieListing ORDER BY title";

                $result = mysqli_query($dbc, $query)
                    or trigger_error('Error querying database movieListing', E_USER_ERROR);
                ?>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>