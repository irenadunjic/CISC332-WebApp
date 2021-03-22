<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Airline - Update Flight</title>
        <link rel="stylesheet" href="../CSS/airline.css">
        <link rel="stylesheet" href="../CSS/updateFlight.css">
    </head>
    <body>
        <?php
            include '../connectdb.php';
        ?>
        <ol>
            <?php 
                $FCode = $_POST['flightCode'];
                $NewTime = $_POST['newActDepartTime'];

                $query = 'UPDATE Flight SET ActDepartTime = "'.$NewTime.'" WHERE 3DigitNum = "'.$FCode.'"';
                $result = $connection->exec($query);

                echo "Your flight has been updated!";
            ?>
        </ol>
        <button onclick="document.location='../HTML/updateFlight.php'">Update Another Flight</button>
        <button onclick="document.location='../airline.php'">Back to Homepage</button>
    </body>
</html>