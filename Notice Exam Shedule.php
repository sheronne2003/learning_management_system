<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Schedule</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 2.5em;
            text-transform: uppercase;
        }
        .container {
            width: 90%;
            margin: 20px auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 30px;
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
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
            text-transform: uppercase;
        }
        td {
            background-color: #f9f9f9;
        }
        tr:nth-child(even) td {
            background-color: #f1f1f1;
        }
        tr:hover td {
            background-color: #f2ffcc;
        }
        .section-title {
            font-size: 1.8em;
            color: #333;
            margin-bottom: 10px;
            padding: 10px 0;
            border-bottom: 2px solid #4CAF50;
        }
        .half {
            display: inline-block;
            width: 48%;
            vertical-align: top;
            padding-right: 2%;
        }
        .half:last-child {
            padding-right: 0;
        }
        .notice-date {
            background-color: #ffcc00;
        }
        .exam-date {
            background-color: #ff5722;
            color: white;
        }
        .footer {
            text-align: center;
            background-color: #4CAF50;
            padding: 10px;
            color: white;
            font-size: 1em;
        }
    </style>
</head>
<body>

<header>
    Exam Schedule
</header>

<div class="container">
    <div class="half">
        <div class="section-title notice-date">
            <h3>Notice Date</h3>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Notice Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Web Programming</td>
                    <td>November 15, 2024</td>
                </tr>
                <tr>
                    <td>Operating System</td>
                    <td>November 17, 2024</td>
                </tr>
                <tr>
                    <td>Statistics For IT</td>
                    <td>November 20, 2024</td>
                </tr>
                <tr>
                    <td>Object Oriented Programming</td>
                    <td>November 22, 2024</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="half">
        <div class="section-title exam-date">
            <h3>Exam Date</h3>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Subject</th>
                    <th>Exam Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Web Programming</td>
                    <td>December 1, 2024</td>
                </tr>
                <tr>
                    <td>Operating System</td>
                    <td>December 3, 2024</td>
                </tr>
                <tr>
                    <td>Statistics For IT</td>
                    <td>December 6, 2024</td>
                </tr>
                <tr>
                    <td>Object Oriented Programming</td>
                    <td>December 8, 2024</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<footer class="footer">
    &copy; 2024 Exam Schedule. All Rights Reserved.
</footer>

</body>
</html>
