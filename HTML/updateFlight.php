<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Airline - Update Flight</title>
        <link rel="stylesheet" href="../CSS/airline.css">
        <link rel="stylesheet" href="../CSS/updateFlight.css">
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
                <div class="space"></div>
                <h2>New Departure Time:</h2>
                <input class="textInput" type="text" name="newActDepartTime"><br><br>
                <div class="space"></div>
                <input class="optionButton" type="submit" value="Update Departure Time">
            </form>
            <button class="optionButton" onclick="document.location='../airline.php'">Back to Homepage</button>
        </main>
        <footer>
            <p>Website created for CISC 332, &copy; 2021 Irena Dunjic.</p>
        </footer>
    </body>
</html>