<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Airline - Flights by Arrival Time</title>
        <link rel="stylesheet" href="../CSS/airline.css">
        <link rel="stylesheet" href="../CSS/showFlightTimes.css">
    </head>
    <body>
        <header>
            <h1><span class="pageTitle">Show Flights by Arrival Times</span></h1>
            <p>
                A list of all flights with scheduled arrival times the same as their actual arrival times.
            </p>
        </header>
        <main>
            <?php 
                include '../connectdb.php';
            ?>
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
            <div class="space"></div>
            <button class="optionButton" onclick="document.location='../airline.php'">Back to Homepage</button>
        </main>
        <footer>
            <p>Website created for CISC 332, &copy; 2021 Irena Dunjic.</p>
        </footer>
    </body>
</html>