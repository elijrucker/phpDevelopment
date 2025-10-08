<!--
    PHP Web Development with MySQL
    Week 5 Labs - Chapter 15
-->

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title>Movies Details - Week 5 Labs</title>
    </head>
    <body>
        <div class="card">
            <div class="card-body">
                <nav class="nav">
                    <a class="nav-link" href="index.php">Movies I Like</a>                  
                </nav>
                <?php
                    if (isset($_GET['id'])):

                        require_once('dbconnection.php');

                        $id = $_GET['id'];

                        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                            or trigger_error('Error connecting to MySQL server for' . DB_NAME, E_USER_ERROR);

                        $query = "SELECT * FROM movieListing WHERE id = $id";

                        $result = mysqli_query($dbc, $query)
                            or trigger_error('Error querying database movieListing', E_USER_ERROR);

                    if (mysqli_num_rows($result) == 1):

                        $row = mysqli_fetch_assoc($result)
                    
                ?>
                <h1><?= $row['title'] ?></h1>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">Rating</th>
                            <td><?= $row['rating'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Director</th>
                            <td><?= $row['director'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Running Time (minutes)</th>
                            <td><?= $row['running_time_in_minutes'] ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Genre</th>
                            <td><?= $row['genre'] ?></td>
                        </tr>
                    </tbody>
                </table>
                    <?php
                        else:
                    ?>
                <h3>No Movie Details :-(</h3>
                <?php
                        endif;
                    else:
                ?>
                <h3>No Movie Details :-(</h3>
                <?php
                    endif;
                ?>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>