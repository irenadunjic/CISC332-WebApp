<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Airline</title>
        <link rel="stylesheet" href="styles/airline.css">
    </head>
    <body>
        <header>
            <h1><span class="pageTitle">Welcome to the Airline Database!</span></h1>
        </header>
        <main>
            <?php 
                include 'connectdb.php';
            ?>
            <p>
                <strong>Please select what you would like to do. Your options are:</strong>
                <em><ol id="siteOptions">
                    <li><span>Show all flights with matching scheduled and actual arrival times</span></li>
                    <li><span>Show all flights offered by a specific airline on a specific day</span></li>
                    <li><span>Add a new flight</span></li>
                    <li><span>Update the departure time of a flight</span></li>
                    <li><span>Calculate the average number of flight seats available on a specific day</span></li>
                </ol></em>
            </p>

            <div class="navigation">
            <button class="navButton" onclick="document.location='pages/showFlightTimes.php'">Find Flights by Time</button>
            <button class="navButton" onclick="document.location='pages/showFlightDays.php'">Find Flights by Day</button>
            <button class="navButton" onclick="document.location='pages/addFlight.php'">Add New Flight</button>
            <button class="navButton" onclick="document.location='pages/updateFlight.php'">Update Flight Departure Time</button>
            <button class="navButton" onclick="document.location='pages/averageSeats.php'">Calculate Average Number of Seats</button>
            </div>
        </main>
        <footer>
            <p>Website created for CISC 332, &copy; 2021 Irena Dunjic.</p>
        </footer>
    </body>
</html>