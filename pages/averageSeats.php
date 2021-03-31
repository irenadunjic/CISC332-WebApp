<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Airline - Calculate Average Seats</title>
        <link rel="stylesheet" href="../styles/airline.css">
        <link rel="stylesheet" href="../styles/averageSeats.css">
    </head>
    <body>
        <header>
            <h1><span class="pageTitle">Calculate Average Seats on a Given Day</span></h1>
        </header>
        <main>
            <?php 
                include '../connectdb.php';
            ?>
            <form action="../database/calculateAvg.php" method="post">
                <h2> Choose a Day: </h2>
                <table>
                    <tr>
                        <th> </th>
                        <th>Days Offered</th>
                    </tr>
                    <tr>
                        <td><input type="radio" name="day" value="MONDAY"></td><td>Monday</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="day" value="TUESDAY"></td><td>Tuesday</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="day" value="WEDNESDAY"></td><td>Wednesday</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="day" value="THURSDAY"></td><td>Thursday</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="day" value="FRIDAY"></td><td>Friday</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="day" value="SATURDAY"></td><td>Saturday</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="day" value="SUNDAY"></td><td>Sunday</td>
                    </tr>
                </table>
                <div class="space"></div>
                <input class="optionButton" type="submit" value="Calculate Seats">
            </form>
            <button class="optionButton" onclick="document.location='../airline.php'">Back to Homepage</button>
        </main>
        <footer>
            <p>Website created for CISC 332, &copy; 2021 Irena Dunjic.</p>
        </footer>
    </body>
</html>