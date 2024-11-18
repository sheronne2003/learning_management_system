<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Events</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            color: #4a90e2;
            font-size: 3em;
            margin-bottom: 20px;
        }

        .table-container {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }

        /* Table Styles */
        table {
            border-collapse: collapse;
            width: 45%;
            margin: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #4a90e2;
            color: white;
            font-size: 1.2em;
        }

        tr:nth-child(even) {
            background-color: #e6f2ff;
        }

        tr:nth-child(odd) {
            background-color: #cce0ff;
        }

        /* Additional Styling for Hover Effects */
        tr:hover {
            background-color: #b3d1ff;
            transition: background-color 0.3s;
        }

        td {
            color: #333;
        }

        /* Custom Button */
        .button {
            background-color: #4a90e2;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            text-transform: uppercase;
            margin-top: 10px;
            display: inline-block;
        }

        .button:hover {
            background-color: #357ABD;
        }

        /* Media Query for Mobile */
        @media screen and (max-width: 768px) {
            .table-container {
                flex-direction: column;
                align-items: center;
            }
            
            table {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upcoming Events</h1>
        <div class="table-container">
            <!-- First Table for Events - Notice Date: Before -->
            <table>
                <tr>
                    <th colspan="2">Notice Date: Before</th>
                </tr>
                <tr>
                    <th>Event Name</th>
                    <th>Date</th>
                </tr>
                <tr>
                    <td>Annual Charity Gala</td>
                    <td>November 25, 2024</td>
                </tr>
                <tr>
                    <td>Community Meetup</td>
                    <td>December 5, 2024</td>
                </tr>
                <tr>
                    <td>Winter Festival</td>
                    <td>December 15, 2024</td>
                </tr>
            </table>

            <!-- Second Table for Events - Notice Date: After -->
            <table>
                <tr>
                    <th colspan="2">Notice Date: After</th>
                </tr>
                <tr>
                    <th>Event Name</th>
                    <th>Date</th>
                </tr>
                <tr>
                    <td>New Year Party</td>
                    <td>January 1, 2025</td>
                </tr>
                <tr>
                    <td>Art Workshop</td>
                    <td>January 10, 2025</td>
                </tr>
                <tr>
                    <td>Spring Marathon</td>
                    <td>March 20, 2025</td>
                </tr>
            </table>
        </div>
        <div style="text-align: center; margin-top: 20px;">
            <button class="button">View More Events</button>
        </div>
        <a href="Notice_Board.php"><input type="button" value="Back" name="Back" class="btn1"></a>
    </div>
</body>
</html>
