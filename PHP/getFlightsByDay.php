<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Airline - Get Flights by Day</title>
        <link rel="stylesheet" href="../CSS/airline.css">
        <link rel="stylesheet" href="../CSS/showFlightDays.css">
    </head>
    <body>
        <?php
            include '../connectdb.php';
        ?>
        <table>
            <tr>
                <th>Flight Code</th>
                <th>Departing Airport Location</th>
                <th>Arriving Airport Location</th>
            </tr>
            <?php
                $ACode = $_POST["airlineCode"];
                $FDay = $_POST["flightDay"];
                $query = 'SELECT F.AirlineCode, F.3DigitNum, Departures.City AS dcity, Arrivals.City AS acity
                          FROM DaysOffered AS D, Flight AS F, Airport AS Departures, Airport AS Arrivals
                          WHERE F.AirlineCode = D.AirlineCode 
                          AND F.3DigitNum = D.3DigitNum
                          AND Departures.AirportCode = F.DepartsFrom
                          AND Arrivals.AirportCode = F.ArrivesTo
                          AND F.AirlineCode = "'.$ACode.'"
                          AND D.DaysOffered = "'.$FDay.'"';
                $result = $connection->query($query);
                while ($row = $result->fetch()) {
                    echo "<tr><td>".$row['AirlineCode'].$row['3DigitNum']."</td>"."<td>".$row['dcity']."</td>"."<td>".$row['acity']."</td></tr>";
                }
            ?>
        </table>
        <button onclick="document.location='../HTML/showFlightDays.php'">Choose Another Day</button>
        <button onclick="document.location='../airline.php'">Back to Homepage</button>
    </body>
</html>