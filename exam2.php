<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Table</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 150px;
        background: url(./Images/exam3.jpg);
            background-size: cover;
            background-repeat: no-repeat;
    }
    
    .container {
        max-width: 700px;
        margin: auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
        text-align: center;
    }
    
    .year-section {
        margin-bottom: 50px;
    }
    
    button {
        padding: 10px 15px;
        margin-top: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007BFF;
        color: white;
        cursor: pointer;
    }
    
    button:hover {
        background-color: #0056b3;
    }
    
    .schedule, .term-schedule {
        margin-top: 10px;
    }
    
    .hidden {
        display: none;
    }
    table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 50px;
            margin-left: 100px;
            margin-right: 100px;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        .year {
            background-color: #000000;
            color: white;
            font-weight: bold;
        }

        .semester {
            background-color: #363635;
            color: white;
        }

        .value {
            background-color: #8d8c89;
            text-align: left;
        }
    </style>
    <div class="container">
        <h1><u>Examination</u></h1>

        <div class="year-section">
            <button onclick="toggleSchedule('firstYear')">First Year Exam</button>
            <div id="firstYear" class="schedule hidden">
                    <table>
                        <thead>
                            <tr class="year">
                                <td colspan="2">First Year</td>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="semester">1st Semester</td>
                            <td class="semester">2nd Semester</td>
                        </tr>
                        <tr>
                <td class="value"><a href="./1st_year_1st_sem_papers/programming.php">Visual Application Programming</a></td>
                <td class="value"><a href="./1st_year_2nd_sem_papers/fundamentals of programming.php">Fundamentals of Programming</a></td>
            </tr>
            <tr>
                <td class="value"><a href="./1st_year_1st_sem_papers/web design.php">Web Design</a></td>
                <td class="value"><a href="./1st_year_2nd_sem_papers/software development.php">Software Deveopment</a></td>
            </tr>
            <tr>
                <td class="value"><a href="./1st_year_1st_sem_papers/computer and network system.php">Computer and Network System</a></td>
                <td class="value"><a href="./1st_year_2nd_sem_papers/SAD.php">System Analysis and Design</a></td>
            </tr>
            <tr>
                <td class="value"><a href="./1st_year_1st_sem_papers/IMS.php">Information Management and Information System</a></td>
                <td class="value"><a href="./1st_year_2nd_sem_papers/Data communication and computer network.php">Data Communication and Computer Networks</a></td>
            </tr>
            <tr>
                <td class="value"><a href="./1st_year_1st_sem_papers/communication skill.php">Communication Skills</a></td>
                <td class="value"><a href="./1st_year_2nd_sem_papers/technical writting.php">Technical Writting</a></td>
            </tr>
            <tr>
                <td class="value"></td>
                <td class="value"><a href="./1st_year_2nd_sem_papers/UI.php">Principles of User Interface Design</a></td>
            </tr>
                    </tbody>
                </table>
            </div>
            </div>
                        
        <div class="year-section">
            <button onclick="toggleSchedule('secondYear')">Second Year Exam</button>
            <div id="secondYear" class="schedule hidden">
                    <table>
                        <thead>
                            <tr class="year">
                                <td colspan="2">First Year</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="semester">1st Semester</td>
                            </tr>
                            <tr>
                <td class="value"><a href="./2nd_year_1st_sem_papers/OOP.php">Object Oriented Programming</a></td>
            </tr>
            <tr>
                <td class="value"><a href="./2nd_year_1st_sem_papers/web programming.php">Web Programming</a></td>
            </tr>
            <tr>
                <td class="value"><a href="./2nd_year_1st_sem_papers/DSA.php">Data Structures and Algorithms</a></td>
            </tr>
            <tr>
                <td class="value"><a href="./2nd_year_1st_sem_papers/DBMS.php">Database Management Systems</a></td>
            </tr>
            <tr>
                <td class="value"><a href="./2nd_year_1st_sem_papers/OS.php">Operating Systems</a></td>
            </tr>
            <tr>
                <td class="value"><a href="./2nd_year_1st_sem_papers/Information and computer security.php">Information and Computer Security</a></td>
            </tr>
            <tr>
                <td class="value"><a href="./2nd_year_1st_sem_papers/Statics for IT.phpl">Statistics for IT</a></td>
            </tr>
                        </tbody>
                    </table>
    
                </div>
                </div>
            </div>
        </div>

    <script>
        function toggleSchedule(id) {
            const element = document.getElementById(id);
            element.classList.toggle('hidden');
        }
    </script>
</body>
</html>