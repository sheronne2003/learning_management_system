<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Hours</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            color: #fff;
            margin: 0;
            padding: 0;
        }

        header {
            text-align: center;
            padding: 50px 0;
            background-color: #232323;
            color: #f1f1f1;
            font-size: 2.5em;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            padding: 15px;
            text-align: center;
            font-size: 1.2em;
            border: 2px solid #fff;
        }

        th {
            background-color: #ff4081;
            color: #fff;
            text-transform: uppercase;
        }

        td {
            background-color: #f7cfd9;
            color: #2c3e50;
        }

        tr:nth-child(even) td {
            background-color: #f1f1f1;
        }

        tr:hover {
            background-color: #ff4081;
            color: #fff;
        }

        .notice, .date {
            background-color: #00bcd4;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        }

        .footer {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            background-color: #232323;
            color: #fff;
            font-size: 1.2em;
        }

        .footer a {
            color: #ff4081;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer a:hover {
            color: #fff;
        }
    </style>
</head>
<body>

<header>
    Library Hours & Notices
</header>

<div class="container">
    <table>
        <thead>
            <tr>
                <th class="notice">Notice</th>
                <th class="date">Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Holiday Hours</td>
                <td>December 24 - December 26</td>
            </tr>
            <tr>
                <td>Extended Hours</td>
                <td>January 5, 2024 - 9:00 AM to 10:00 PM</td>
            </tr>
            <tr>
                <td>Maintenance Break</td>
                <td>February 14, 2024 - 10:00 AM to 4:00 PM</td>
            </tr>
            <tr>
                <td>Special Event</td>
                <td>March 20, 2024 - 1:00 PM to 5:00 PM</td>
            </tr>
            <tr>
                <td>Summer Hours Start</td>
                <td>June 1, 2024 - 8:00 AM to 6:00 PM</td>
            </tr>
        </tbody>
    </table>
</div>

<a href="Notice_Board.php"><input type="button" value="Back" name="Back" class="btn1"></a>

<div class="footer">
    <p>&copy; 2024 Library Services | <a href="#">Contact Us</a> | <a href="#">FAQ</a></p>
</div>

</body>
</html>
