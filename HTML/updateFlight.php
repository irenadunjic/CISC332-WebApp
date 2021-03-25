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
        <form action="../PHP/updateDepartureTime.php" method="post">
            <h2>Choose a Flight to Update</h2>
            <table>
                <tr>
                    <th> </th>
                    <th>Flight Code</th>
                    <th>Scheduled Departure Time</th>
                    <th>Actual Departure Time</th>
                </tr>
                <?php 
                    $query = "SELECT * FROM Flight";
                    $result = $connection->query($query);
                    while ($row = $result->fetch()) {
                        echo '<tr><td><input type="radio" name="flightCode" value="'
                        .$row['3DigitNum'].'"</td><td>'
                        .$row['AirlineCode'].$row['3DigitNum'].'</td><td>'
                        .$row['SchDepartTime'].'</td><td>'
                        .$row['ActDepartTime'].'</td></tr>';
                    }
                ?>
            </table>

            <h2>New Departure Time:</h2>
            <input type="text" name="newActDepartTime"><br><br>
            <input type="submit" value="Update Departure Time">
        </form>
        <button onclick="document.location='../airline.php'">Back to Homepage</button>
    </body>
    <footer>
        <p>Website created for CISC 332, &copy; 2021 Irena Dunjic.</p>
    </footer>
</html>