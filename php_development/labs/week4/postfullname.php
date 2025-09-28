<!--
    PHP Web Development with MySQL
    Week 4 Labs - Chapter 14
-->

<html>
    <head>
        <title>Form for Entering Full Name (Chapter 14)</title>
    </head>
    <body>
        <?php
        if (isset($_POST['submit']))
        {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            
            // Validate first and last name fields
            if (empty($first_name) && empty($last_name))
            {
                echo '<p class="text-danger">You forgot to enter first name and last name</p>';
                $output_form = true;
            }
            else if (empty($first_name) && !empty($last_name))
            {
                echo '<p class="text-danger">You forgot to enter first name</p>';
                $output_form = true;
            }
            else if (!empty($first_name) && empty($last_name))
            {
                echo'<p class="text-danger">You forgot to enter last name</p>';
                $output_form = true;
            }
        }
        else
        {
            // Both first name AND last name are filled in, for entry is validated
        }
        
        ?>
    </body>
</html>
