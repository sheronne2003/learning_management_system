<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holiday Notice</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f1f3f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 80%;
            max-width: 1200px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #ff6f61;
            font-size: 36px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .holiday-table {
            width: 100%;
            border-collapse: collapse;
        }

        .holiday-table th, .holiday-table td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        .holiday-table th {
            background-color: #ff6f61;
            color: #fff;
            font-weight: bold;
        }

        .holiday-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .holiday-table tr:hover {
            background-color: #ffe0e0;
        }

        .notice-date {
            background-color: #7e57c2;
            color: #fff;
            border-radius: 10px;
            font-weight: bold;
        }

        .notice-content {
            background-color: #4caf50;
            color: #fff;
            border-radius: 10px;
            font-weight: normal;
        }

        .holiday-footer {
            text-align: center;
            margin-top: 20px;
            color: #777;
            font-size: 14px;
        }

        .footer-link {
            text-decoration: none;
            color: #ff6f61;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Holiday Notice</h1>
        <table class="holiday-table">
            <tr>
                <th class="notice-date">Notice Date</th>
                <th class="notice-content">Holiday Details</th>
            </tr>
            <tr>
                <td class="notice-date">November 17, 2024</td>
                <td class="notice-content">We are observing a holiday in celebration of a special event. Our office will remain closed, and we look forward to welcoming you back after the break!</td>
            </tr>
            <tr>
                <td class="notice-date">December 25, 2024</td>
                <td class="notice-content">Holiday for Christmas Day. Please note that customer support will be unavailable, but we will resume regular operations after the holiday.</td>
            </tr>
            <tr>
                <td class="notice-date">January 1, 2025</td>
                <td class="notice-content">New Year's Day. Our office will be closed for the entire day in observance of the holiday.</td>
            </tr>
        </table>

        <div class="holiday-footer">
            <p>For more information, please visit our <a href="#" class="footer-link">official website</a>.</p>
        </div>
    </div>
</body>
</html>
