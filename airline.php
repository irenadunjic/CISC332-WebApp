<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="CSS/airline.css">
        <!-- TODO -->
    </head>
    <body>
        <?php 
            include 'connectdb.php';
        ?>
        <h1>Welcome to the Airline Database!</h1>
        <p>Please select what you would like to do.</p>

        <button onclick="document.location='HTML/showFlightTimes.php'">Find Flights by Time</button>
        <button onclick="document.location='HTML/showFlightDays.php'">Find Flights by Day</button>
        <button onclick="document.location='HTML/addFlight.php'">Add New Flight</button>
        <button onclick="document.location='HTML/updateFlight.php'">Update Flight Departure Time</button>
        <button onclick="document.location='HTML/averageSeats.php'">Calculate Average Number of Seats</button>
    </body>
</html>