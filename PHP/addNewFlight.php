<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Airline - Add New Flight</title>
        <link rel="stylesheet" href="../CSS/airline.css">
        <link rel="stylesheet" href="../CSS/addFlight.css">
    </head>
    <body>
        <?php
            include '../connectdb.php';
        ?>
        <ol>
            <?php 
                $ACode = $_POST['airlineCode'];
                $FNum = $_POST['flightNumber'];
                $APType = $_POST['airplaneID'];
                $DepAirportCode = $_POST['departureAirport'];
                $ArrAirportCode = $_POST['arrivalAirport'];
                
                $flightQuery = 'INSERT INTO Flight (AirlineCode, 3DigitNum, AssignedTo, DepartsFrom, ArrivesTo) 
                                VALUES ("'.$ACode.'","'.$FNum.'","'.$APType.'","'.$DepAirportCode.'","'.$ArrAirportCode.'")';
                $flightRows = $connection->exec($flightQuery);
                
                
                if (isset($_POST['mon'])) { 
                    $MON = $_POST['mon'];
                    $monQuery = 'INSERT INTO DaysOffered VALUES ("'.$ACode.'","'.$FNum.'","'.$MON.'")';
                    $dayRows = $connection->exec($monQuery); 
                }
                if (isset($_POST['tues'])) { 
                    $TUES = $_POST['tues']; 
                    $tuesQuery = 'INSERT INTO DaysOffered VALUES ("'.$ACode.'","'.$FNum.'","'.$TUES.'")';
                    $dayRows = $connection->exec($tuesQuery); 
                }
                if (isset($_POST['wed'])) { 
                    $WED = $_POST['wed']; 
                    $wedQuery = 'INSERT INTO DaysOffered VALUES ("'.$ACode.'","'.$FNum.'","'.$WED.'")';
                    $dayRows = $connection->exec($wedQuery); 
                }
                if (isset($_POST['thurs'])) { 
                    $THURS = $_POST['thurs']; 
                    $thursQuery = 'INSERT INTO DaysOffered VALUES ("'.$ACode.'","'.$FNum.'","'.$THURS.'")';
                    $dayRows = $connection->exec($thursQuery); 
                }
                if (isset($_POST['fri'])) { 
                    $FRI = $_POST['fri']; 
                    $friQuery = 'INSERT INTO DaysOffered VALUES ("'.$ACode.'","'.$FNum.'","'.$FRI.'")';
                    $dayRows = $connection->exec($friQuery); 
                }
                if (isset($_POST['sat'])) { 
                    $SAT = $_POST['sat']; 
                    $satQuery = 'INSERT INTO DaysOffered VALUES ("'.$ACode.'","'.$FNum.'","'.$SAT.'")';
                    $dayRows = $connection->exec($satQuery); 
                }
                if (isset($_POST['sun'])) { 
                    $SUN = $_POST['sun']; 
                    $sunQuery = 'INSERT INTO DaysOffered VALUES ("'.$ACode.'","'.$FNum.'","'.$SUN.'")';
                    $dayRows = $connection->exec($sunQuery); 
                }

                echo "Your flight has been added!";
                $connection = NULL;
            ?>
        </ol>
        <button onclick="document.location='../HTML/addFlight.php'">Add Another Flight</button>
        <button onclick="document.location='../airline.php'">Back to Homepage</button>
    </body>
</html>