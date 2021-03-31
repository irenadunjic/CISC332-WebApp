<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Airline - Update Flight</title>
        <link rel="stylesheet" href="../styles/airline.css">
        <link rel="stylesheet" href="../styles/updateFlight.css">
    </head>
    <body>
        <header>
            <h1><span class="pageTitle">Update Flight Arrival Time</span></h1>
            <p>
                Update the actual departure time for a flight. Enter time in HH:MM:SS format.
            </p>
        </header>
        <main>
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
            <button class="optionButton" onclick="document.location='../pages/updateFlight.php'">Update Another Flight</button>
            <button class="optionButton" onclick="document.location='../airline.php'">Back to Homepage</button>
        </main>
        <footer>
            <p>Website created for CISC 332, &copy; 2021 Irena Dunjic.</p>
        </footer>
    </body>
</html>