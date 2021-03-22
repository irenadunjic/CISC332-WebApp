<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Airline - Flights by Arrival Time</title>
        <link rel="stylesheet" href="../CSS/airline.css">
        <link rel="stylesheet" href="../CSS/showFlightTimes.css">
    </head>
    <body>
        <?php 
            include '../connectdb.php';
        ?>
        <h1>Show Flights by Arrival Times</h1>
        <p>
            A list of all flights with scheduled arrival times the same as their actual arrival times.
        </p>
        <table>
            <tr>
                <th>Flight Code</th>
                <th>Arrival Time</th>
            </tr>
            <?php
                $query="SELECT * FROM Flight WHERE SchArrivalTime = ActArrivalTime";
                $result = $connection->query($query);
                while ($row = $result->fetch()) {
                    echo "<tr><td>".$row['AirlineCode'].$row['3DigitNum']."</td><td>".$row['ActArrivalTime']."</td></tr>";
                }
            ?>
        </table>
        <button onclick="document.location='../airline.php'">Back to Homepage</button>
    </body>
</html>