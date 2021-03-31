<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Airline - Get Flights By Day</title>
        <link rel="stylesheet" href="../CSS/airline.css">
        <link rel="stylesheet" href="../CSS/showFlightDays.css">
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
            <form action="../PHP/getFlightsByDay.php" method="post">
                <h2>Airline Code:</h2>
                <input class="textInput" ype="text" name="airlineCode"><br>
                <div class="space"></div>
                <h2>Day:</h2> 
                <table>
                    <tr>
                        <th> </th>
                        <th>Days Offered</th>
                    </tr>
                    <tr>
                        <td><input type="radio" name="flightDay" value="MONDAY"></td><td>Monday</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="flightDay" value="TUESDAY"></td><td>Tuesday</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="flightDay" value="WEDNESDAY"></td><td>Wednesday</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="flightDay" value="THURSDAY"></td><td>Thursday</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="flightDay" value="FRIDAY"></td><td>Friday</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="flightDay" value="SATURDAY"></td><td>Saturday</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="flightDay" value="SUNDAY"></td><td>Sunday</td>
                    </tr>
                </table>
                <div class="space"></div>
                <input class="optionButton" type="submit" value="Get Flights">
            </form>
            <button class="optionButton" onclick="document.location='../airline.php'">Back to Homepage</button>
        </main>
        <footer>
            <p>Website created for CISC 332, &copy; 2021 Irena Dunjic.</p>
        </footer>
    </body>
</html>