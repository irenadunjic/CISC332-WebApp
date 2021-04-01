<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Airline - Get Flights by Day</title>
        <link rel="stylesheet" href="../styles/airline.css">
        <link rel="stylesheet" href="../styles/showFlightDays.css">
    </head>
    <body>
        <header>
            <h1><span class="pageTitle">Show Flights on Given Day</span></h1>
            <p>
                Enter an airline code and a day to view all the associated flights.
            </p>
        </header>
        <main>
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
                    if ($ACode == '' or !isset($FDay)) {
                        echo "<tr><td></td><td></td><td></td></tr>";
                    } else {
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
                    }
                ?>
            </table>
            <div class="space"></div>
            <?php 
                if (($ACode == '') or !isset($FDay)) {
                    echo "One or more required fields missing. Please try again.";
                }
            ?>
            <div class="space"></div>
            <button class="optionButton" onclick="document.location='../pages/showFlightDays.php'">Choose Another Day</button>
            <button class="optionButton" onclick="document.location='../airline.php'">Back to Homepage</button>
        </main>
        <footer>
            <p>Website created for CISC 332, &copy; 2021 Irena Dunjic.</p>
        </footer>
    </body>
</html>