<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Course Materials</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f0f4f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .container {
            width: 80%;
            padding: 30px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 36px;
            color: #4A90E2;
            margin-bottom: 20px;
        }

        .table-wrapper {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .table-container {
            width: 48%;
            background: #f5f6f7;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4A90E2;
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        tr:nth-child(even) td {
            background-color: #e9ecef;
        }

        tr:hover td {
            background-color: #d6e0f0;
        }

        .notice-table th {
            background-color: #FF6347;
        }

        .notice-table td {
            background-color: #FFF5F5;
        }

        .course-table th {
            background-color: #32CD32;
        }

        .course-table td {
            background-color: #F0FFF0;
        }

        /* Add responsiveness */
        @media (max-width: 768px) {
            .table-wrapper {
                flex-direction: column;
                align-items: center;
            }

            .table-container {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>New Course Materials</h1>
        
        <div class="table-wrapper">
            <!-- Notice Date Table -->
            <div class="table-container">
                <h2>Notice Dates</h2>
                <table class="notice-table">
                    <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Notice Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Advanced Web Development</td>
                            <td>November 1, 2024</td>
                        </tr>
                        <tr>
                            <td>Data Science for Beginners</td>
                            <td>November 5, 2024</td>
                        </tr>
                        <tr>
                            <td>Machine Learning Basics</td>
                            <td>November 10, 2024</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Course Materials Table -->
            <div class="table-container">
                <h2>Course Materials</h2>
                <table class="course-table">
                    <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Material Type</th>
                            <th>Download Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Advanced Web Development</td>
                            <td>Lecture Slides</td>
                            <td><a href="#">Download</a></td>
                        </tr>
                        <tr>
                            <td>Data Science for Beginners</td>
                            <td>Reading Material</td>
                            <td><a href="#">Download</a></td>
                        </tr>
                        <tr>
                            <td>Machine Learning Basics</td>
                            <td>Video Tutorials</td>
                            <td><a href="#">Download</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
