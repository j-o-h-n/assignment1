<?php

/**
 * includes header.php which contains include links
 */
require_once 'header.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Assignment 1</title>
    </head>
    <body>
        <h1>Car info</h1>
        <?php
            $car = new Car;
            $car-> setYear(1992);
            echo "<p>Year: {$car->getYear()}</p>";
            echo "<p>Honk: {$car->honk()}</p>";
        ?>
        
        <h1>Civic info</h1>
        <?php
            $civic = new Civic;
            $civic-> setYear(1999);
            echo "<p>Year: {$civic->getYear()}</p>";
            echo "<p>Honk: {$civic->honk()}</p>";
        ?>
                
        <h1>Truck info</h1>
        <?php
            $truck = new Truck;
            $truck-> setYear(1982);
            echo "<p>Year: {$truck->getYear()}</p>";
            echo "<p>Honk: {$truck->honk()}</p>";
        ?>
    </body>
</html>
