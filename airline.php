<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Airline</title>
        <link rel="stylesheet" href="CSS/airline.css">
    </head>
    <header>
        <h1>Welcome to the Airline Database!</h1>
    </header>
    <body>
        <?php 
            include 'connectdb.php';
        ?>
        <p>
            Please select what you would like to do. Your options are:
            <ol>
                <li>Show all flights with matching scheduled and actual arrival times</li>
                <li>Show all flights offered by a specific airline on a specific day</li>
                <li>Add a new flight</li>
                <li>Update the departure time of a flight</li>
                <li>Calculate the average number of flight seats available on a specific day</li>
            </ol>
        </p>

        <button class="navButton" onclick="document.location='HTML/showFlightTimes.php'">Find Flights by Time</button>
        <button class="navButton" onclick="document.location='HTML/showFlightDays.php'">Find Flights by Day</button>
        <button class="navButton" onclick="document.location='HTML/addFlight.php'">Add New Flight</button>
        <button class="navButton" onclick="document.location='HTML/updateFlight.php'">Update Flight Departure Time</button>
        <button class="navButton" onclick="document.location='HTML/averageSeats.php'">Calculate Average Number of Seats</button>
    </body>
    <footer>
        <p>Website created for CISC 332, &copy; 2021 Irena Dunjic.</p>
    </footer>
</html>