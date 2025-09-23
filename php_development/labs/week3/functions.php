<!--
    PHP Web Development with MySQL
    Week 3 Labs - Chapter 10
-->

<html>
    <head>
        <title>PHP Web Development with MySQL - Week 3 / Chapter 10</title>
    </head>
    <body>
        <?php
            // Ch10e1 - Create functions to add, subtract, divide, multiply
            //  two variables, returning the result
            //  Echo all results and input variables

            function addTwoNumbers($num1, $num2)
            {
                $sum = $num1 + $num2;
                echo "$num1 + $num2 = $sum";
                echo "<br/><br/>";
            }
            function subtractTwoNumbers($num1, $num2)
            {
                $difference = $num1 - $num2;
                echo "$num1 - $num2 = $difference";
                echo "<br/><br/>";
            }
            function multiplyTwoNumbers($num1, $num2)
            {
                $product = $num1 * $num2;
                echo "$num1 * $num2 = $product";
                echo "<br/><br/>";
            }
            function divideTwoNumbers($num1, $num2)
            {
                $quotient = $num1 / $num2;
                echo "$num1 / $num2 = $quotient";
                echo "<br/><br/>";
            }

            echo "Chapter 10 Exercise 1 output:<br/><br/>";
            addTwoNumbers(5, 6);
            subtractTwoNumbers(23, 8);
            multiplyTwoNumbers(4, 4);
            divideTwoNumbers(100, 2);
            echo "<hr/>";


            // Ch10e2 - Create a function that ...
            // - accepts two arguments: a total, and a sales tax percent
            // - returns the sales tax owed on the total
            // - echos the total, tax rate and sales tax owed

            function calculateSalesTax($total, $tax_rate)
            {
                $sales_tax_owed = $total * $tax_rate;
                $grand_total = $total + $sales_tax_owed;
                echo "The grand total of \$$total, with a $tax_rate "
                    . "sales tax, is \$$grand_total.<br/>"
                    . "\$$sales_tax_owed of which is sales tax.";
            }

            echo "Chapter 10 Exercise 2 output:<br/><br/>";
            calculateSalesTax(45, .05);
        ?>
    </body>
</html>