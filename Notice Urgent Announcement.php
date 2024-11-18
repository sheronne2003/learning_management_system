<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urgent Announcement</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 3em;
            color: #ff6347;
            margin-bottom: 20px;
        }

        .announcement {
            display: flex;
            justify-content: space-around;
            margin-bottom: 30px;
        }

        .notice-box {
            width: 45%;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .notice-box:hover {
            transform: scale(1.02);
        }

        .notice-date {
            font-size: 1.2em;
            font-weight: bold;
            color: #3498db;
            margin-bottom: 15px;
        }

        .notice-content {
            font-size: 1.1em;
            line-height: 1.6;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 30px 0;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border: 2px solid #3498db;
            font-size: 1.1em;
        }

        th {
            background-color: #3498db;
            color: white;
            font-size: 1.2em;
        }

        td {
            background-color: #eaf3fc;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #3498db;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #2980b9;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Urgent Announcement</h1>

        <div class="announcement">
            <!-- First Notice Section -->
            <div class="notice-box" style="background-color: #ffeb3b;">
                <div class="notice-date">Notice Date: November 15, 2024</div>
                <div class="notice-content">
                    <p>We have an important update regarding our current project. All team members are requested to check their emails for further instructions.</p>
                </div>
            </div>

            <!-- Second Notice Section -->
            <div class="notice-box" style="background-color: #4caf50; color: white;">
                <div class="notice-date">Notice Date: November 17, 2024</div>
                <div class="notice-content">
                    <p>Urgent meeting scheduled for tomorrow at 10 AM. Please ensure to attend. More details are shared in the latest report.</p>
                </div>
            </div>
        </div>

        <!-- Table -->
        <table>
            <tr>
                <th>Notice Date</th>
                <th>Announcement Details</th>
            </tr>
            <tr>
                <td>November 15, 2024</td>
                <td>Check emails for the current project update instructions.</td>
            </tr>
            <tr>
                <td>November 17, 2024</td>
                <td>Attend urgent meeting tomorrow at 10 AM. Check the report for details.</td>
            </tr>
        </table>
        <a href="Notice_Board.php"><input type="button" value="Back" name="Back" class="btn1"></a>
    </div>
</body>

</html>
