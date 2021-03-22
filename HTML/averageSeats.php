<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Airline - Calculate Average Seats</title>
        <link rel="stylesheet" href="../CSS/airline.css">
        <link rel="stylesheet" href="../CSS/averageSeats.css">
    </head>
    <body>
        <?php 
            include '../connectdb.php';
        ?>
        <h1>Calculate Average Seats on a Given Day</h1>
        <form action="../PHP/calculateAvg.php" method="post">
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
            <input type="submit" value="Calculate Seats">
        </form>
        <button onclick="document.location='../airline.php'">Back to Homepage</button>
    </body>
</html>