<html>
    <head>
        <title>PHP Web Development with MySQL - Chapter 8</title>
    </head>
    <body>
        <h2>Chapter 8 exercise 1</h2>
        <?php
        // Ch8e1 - Write and run the code in Listing 8.4 using 'gettype()'
        
        class Car {}
        
        $boolean = true;
        $integer = 123;
        $integer_negative = -13;
        $float_double = 12.35;
        $string = "Hello World";
        $array = array('one', 'fish', 'two', 'fish', 'red', 'fish');
        $object = new Car();
        $null = NULL;
        ?>        
        
        <table border='1px solid;'>
            <tr>
                <th>Type</th>
                <th>Value</th>
                <th>gettype() response</th>
            </tr>
            <tr>
                <th>Boolean</th>
                <th><?= $boolean ?></th>
                <th><?= gettype($boolean); ?></th>
            </tr>
            <tr>
                <th>Integer</th>
                <th><?= $integer ?></th>
                <th><?= gettype($integer); ?></th>
            </tr>
            <tr>
                <th>Integer Negative</th>
                <th><?= $integer_negative ?></th>
                <th><?= gettype($integer_negative); ?></th>
            </tr>
            <tr>
                <th>Float</th>
                <th><?= $float_double ?></th>
                <th><?= gettype($float_double); ?></th>
            </tr>
            <tr>
                <th>String</th>
                <th><?= $string ?></th>
                <th><?= gettype($string); ?></th>
            </tr>
            <tr>
                <th>Array</th>
                <th><?= implode(',', $array); ?></th>
                <th><?= gettype($array); ?></th>
            </tr>
            <tr>
                <th>Object</th>
                <th><?php print_r($object); ?></th>
                <th><?= gettype($object); ?></th>
            </tr>
            <tr>
                <th>Null</th>
                <th><?php print_r($null); ?></th>
                <th><?= gettype($null); ?></th>
            </tr>
        </table>
        <br/><br/>
        <h2>Chapter 8 exercise 2</h2>
        <?php
        // Ch8e2 - Change variable values and run again, compare output for changes
        class Automobile {}
        
        $boolean = 123;
        $integer = true;
        $integer_negative = "True";
        $float_double = -13;
        $string = 12.35;
        $array = "12";
        $object = array('one', 'fish', 'two', 'fish', 'red', 'fish');
        $null = "Not Null";
        ?>        
        
        <table border='1px solid;'>
            <tr>
                <th>Type</th>
                <th>Value</th>
                <th>gettype() response</th>
            </tr>
            <tr>
                <th>Boolean</th>
                <th><?= $boolean ?></th>
                <th><?= gettype($boolean); ?></th>
            </tr>
            <tr>
                <th>Integer</th>
                <th><?= $integer ?></th>
                <th><?= gettype($integer); ?></th>
            </tr>
            <tr>
                <th>Integer Negative</th>
                <th><?= $integer_negative ?></th>
                <th><?= gettype($integer_negative); ?></th>
            </tr>
            <tr>
                <th>Float</th>
                <th><?= $float_double ?></th>
                <th><?= gettype($float_double); ?></th>
            </tr>
            <tr>
                <th>String</th>
                <th><?= $string ?></th>
                <th><?= gettype($string); ?></th>
            </tr>
            <tr>
                <th>Array</th>
                <th><?= $array ?></th>
                <th><?= gettype($array); ?></th>
            </tr>
            <th>Object</th>
                <th><?= implode(',', $object); ?></th>
                <th><?= gettype($object); ?></th>
            <tr>
                <th>Null</th>
                <th><?php print_r($null); ?></th>
                <th><?= gettype($null); ?></th>
            </tr>
        </table>
    </body>
</html>
