<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Airline - Update Flight</title>
        <link rel="stylesheet" href="../CSS/airline.css">
        <link rel="stylesheet" href="../CSS/updateFlight.css">
    </head>
    <header>
        <h1>Update Flight Arrival Time</h1>
        <p>
            Update the actual departure time for a flight. Enter time in HH:MM:SS format.
        </p>
    </header>
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
    <footer>
        <p>Website created for CISC 332, &copy; 2021 Irena Dunjic.</p>
    </footer>
</html>