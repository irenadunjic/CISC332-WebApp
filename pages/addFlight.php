<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Airline - Add New Flight</title>
        <link rel="stylesheet" href="../styles/airline.css">
        <link rel="stylesheet" href="../styles/addFlight.css">
    </head>
    <body>
        <header>
            <h1><span class="pageTitle">Add New Flight</span></h1>
            <p>
                Add a new flight to the database. All provided fields except Days Offered are mandatory!
            </p>
        </header>
        <main>
            <?php 
                include '../connectdb.php';
            ?>
            <form class="flightOptions" action="../database/addNewFlight.php" method="post">

                <!--
                    Assign an Airline to the Flight
                -->
                <h2>Choose an Airline</h2>
                <table>
                    <tr>
                        <th> </th>
                        <th>Airline Name</th>
                    </tr>
                    <?php 
                        $query = "SELECT * FROM Airline";
                        $result = $connection->query($query);
                        while ($row = $result->fetch()) {
                            echo '<tr><td><input type=radio name="airlineCode" value="'
                            .$row['AirlineCode'].'"></td><td>'
                            .$row['AirlineName'].'</td></tr>';
                        }
                    ?>
                </table>
                <div class="space"></div>

                <!--
                    Assign a unique 3 Digit Number to the Flight
                -->
                <h2>Enter a Flight Number</h2>
                <p>Must be a 3-digit number.</p>
                <input class="textInput" type="text" name="flightNumber">
                <div class="space"></div>

                <!--
                    Assign an Airplane to the Flight
                -->
                <h2>Choose an Airplane Type</h2>
                <table>
                    <tr>
                        <th> </th>
                        <th>Airplane ID</th>
                        <th>Model Name</th>
                    </tr>
                    <?php 
                        $query = "SELECT * FROM Airplane";
                        $result = $connection->query($query);
                        while ($row = $result->fetch()) {
                            echo '<tr><td><input type="radio" name="airplaneID" value="'
                            .$row['AirplaneID'].'"></td><td>'
                            .$row['AirplaneID'].'</td><td>'
                            .$row['DesignedAs'].'</td></tr>';
                        }
                    ?>
                </table>
                <div class="space"></div>

                <!--
                    Assign Departure and Arrival Airports to the Flight
                -->
                <h2>Choose Airports</h2>
                <table>
                    <tr>
                        <th> </th>
                        <th>Departure Airport</th>
                        <th> </th>
                        <th>Arrival Airport</th>
                    </tr>
                    <?php 
                        $query = "SELECT * FROM Airport";
                        $result = $connection->query($query);
                        while ($row = $result->fetch()) {
                            echo '<tr><td><input type="radio" name="departureAirport" value="'
                            .$row['AirportCode'].'"></td><td>'
                            .$row['AirportName'].'</td><td><input type="radio" name="arrivalAirport" value="'
                            .$row['AirportCode'].'"></td><td>'
                            .$row['AirportName'].'</td></tr>';
                        }
                    ?>
                </table>
                <div class="space"></div>

                <!--
                    Optional: Assign Days Offered to the Flight
                -->
                <h2>Choose days of the week offered</h2>
                <p>
                    Optional: choose anywhere from 0 to 7 days.
                </p>
                <table>
                    <tr>
                        <th> </th>
                        <th>Days Offered</th>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="mon" value="MONDAY"></td><td><label for="mon">Monday</label></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="tues" value="TUESDAY"></td><td><label for="tues">Tuesday</label></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="wed" value="WEDNESDAY"></td><td><label for="wed">Wednesday</label></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="thurs" value="THURSDAY"></td><td><label for="thurs">Thursday</label></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="fri" value="FRIDAY"></td><td><label for="fri">Friday</label></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="sat" value="SATURDAY"></td><td><label for="sat">Saturday</label></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="sun" value="SUNDAY"></td><td><label for="sun">Sunday</label></td>
                    </tr>
                </table>
                <div class="space"></div>

                <!--
                    Submit values and move to /database/addNewFlight.php
                -->
                <input class="optionButton" type="submit" value="Add Flight">
            </form>
            <button class="optionButton" onclick="document.location='../airline.php'">Back to Homepage</button>
        </main>
        <footer>
            <p>Website created for CISC 332, &copy; 2021 Irena Dunjic.</p>
        </footer>
    </body>
</html>