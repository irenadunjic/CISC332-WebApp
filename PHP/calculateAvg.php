<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Airline - Calculate Average Seats</title>
        <link rel="stylesheet" href="../CSS/airline.css">
        <link rel="stylesheet" href="../CSS/averageSeats.css">
    </head>
    <body>
        <header>
            <h1><span class="pageTitle">Calculate Average Seats on a Given Day</span></h1>
        </header>
        <main>
            <?php
                include '../connectdb.php';
            ?>
            <h2>Flights Offered</h2>
            <table>
                <tr>
                    <th>Flight Code</th>
                    <th>Airplane ID</th>
                    <th>Day Offered</th>
                    <th>Max Number of Seats</th>
                </tr>
                <?php 
                    $DAY = $_POST['day'];
                    $COUNT = 0;
                    $TOTAL = 0;

                    $query = 'SELECT D.AirlineCode, D.3DigitNum, A.AirplaneID, D.DaysOffered, AT.MaxNumSeats
                            FROM Airplane AS A, AirplaneType AS AT, DaysOffered AS D, Flight AS F
                            WHERE F.3DigitNum = D.3DigitNum
                            AND F.AssignedTo = A.AirplaneID
                            AND A.DesignedAs = AT.ATypeName
                            AND D.DaysOffered = "'.$DAY.'"';
                    $result = $connection->query($query);
                    while ($row = $result->fetch()) {
                        $COUNT = $COUNT + 1;
                        $TOTAL = $TOTAL + $row['MaxNumSeats'];
                        echo "<tr><td>".$row['AirlineCode'].$row['3DigitNum']."</td><td>"
                            .$row['AirplaneID']."</td><td>"
                            .$row['DaysOffered']."</td><td>"
                            .$row['MaxNumSeats']."</td></tr>";
                    }
                ?>
            </table>
            <h2>Average Number of Seats:</h2>
            <?php
                $AVG = $TOTAL / $COUNT;
                echo "There are ".$COUNT." flights offered on ".$DAY.", and a total of ".$TOTAL." seats across flights.<br>";
                echo "Therefore, the average number of available seats is ".$AVG.".<br>";
            ?>
            <button class="optionButton" onclick="document.location='../HTML/averageSeats.php'">Choose Another Day</button>
            <button class="optionButton" onclick="document.location='../airline.php'">Back to Homepage</button>
        </main>
        <footer>
            <p>Website created for CISC 332, &copy; 2021 Irena Dunjic.</p>
        </footer>
    </body>
</html>