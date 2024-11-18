<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Table</title>
    <link rel="stylesheet" href="./assets/css/timetable_style.css">
</head>
    <div class="container">
        <h1><u>HND IT Timetable Schedule</u></h1>

        <div class="year-section">
            <button onclick="toggleSchedule('firstYear')">First Year</button>
            <div id="firstYear" class="schedule hidden">
                <h2>First Year Time Table</h2>
                <button onclick="toggleSchedule('firstTerm1')">First Semestre</button>
                <div id="firstTerm1" class="term-schedule hidden"> 
                    <table>
                        <table border="1">
                            <tr>
                            <th colspan="6">1st year 1st semester</th>
                            </tr>
                            <tr>
                                <th>Time</th>
                                <th>Mon Day</th>
                                <th>Tues Day</th>
                                <th>Wends Day</th>
                                <th>Thurs Day</th>
                                <th>Fri Day</th>
                            </tr>
            
                                <tr>
                                    <td>08.30 - 09.30</td>
                                    <td>HNDIT1042(L)</td>
                                    <td>HNDIT1012(L)</td>
                                    <td>HNDIT1032(L)</td>
                                    <td>HNDIT1052(L)</td>
                                    <td>HNDIT1022(L)</td>
                                </tr>
            
                                <tr>
                                    <td>09.30 - 10.30</td>
                                    <td>HNDIT1042(L)</td>
                                    <td>HNDIT1012(L)</td>
                                    <td>HNDIT1022(L)</td>
                                    <td>HNDIT1052(L)</td>
                                    <td>HNDIT1062(L)</td>
                                </tr>
            
                                <tr>
                                    <td>10.30 - 11.30</td>
                                    <td colspan="5"><center>LUNCH</center></td>
                                </tr>
            
                                <tr>
                                    <td>11.30 - 12.30</td>
                                    <td>HNDIT1042(T)</td>
                                    <td>HNDIT1042(T)</td>
                                    <td>HNDIT1042(T)</td>
                                    <td>HNDIT1042(T)</td>
                                    <td>HNDIT1042(T)</td>
                                </tr>
            
                                <tr>
                                    <td>12.30 - 1.00</td>
                                    <td>HNDIT1042(T)</td>
                                    <td>HNDIT1042(T)</td>
                                    <td>HNDIT1042(T)</td>
                                    <td>HNDIT1042(T)</td>
                                    <td>HNDIT1042(T)</td>
                                </tr>
                            </table>

                        </br></br>

                            <table>
                                <table border="1">
                                    <th>Subject Code</th>
                                    <th>Subject</th>
                                    <th>Lecturers</th>
                                    <th>Hours<br>
                                     <th rowspan="2">Permanent</th>
                                     <th rowspan="2">Visiting</th>
            
                                    <tr>
                                        <td>HNDIT1012</td> 
                                        <td>Visual Application Programming</td>
                                        <td>Ms.Y.M.R.D. Wepathana</td>
                                        <td>06</td>
                                    </tr>
            
                                    <tr>
                                        <td>HNDIT1022</td> 
                                        <td>Web Design</td>
                                        <td>Ms.A.H.M.T.C.Bakmeedeniya</td>
                                        <td>06</td>
                                    </tr>
            
                                    <tr>
                                        <td>HNDIT1012</td> 
                                        <td>Computer and Network System</td>
                                        <td>Ms. Y.M.R.D. Wepathana</td>
                                        <td>06</td>
                                    </tr>
            
                                    <tr>
                                        <td>HNDIT1032</td> 
                                        <td>Information Management and Information System</td>
                                        <td>Ms.K.P.R.Rathnasiri</td>
                                        <td>04</td>
                                    </tr>
            
                                    <tr>
                                        <td>HNDIT1012</td> 
                                        <td>ICT Project(Individual)</td>
                                        <td>Ms.A.H.M.T.C.Bakmeedeniya <br>
                                            Ms. Y.M.R.D. Wepathana</td>
                                        <td>06</td>
                                    </tr>
            
                                    <tr>
                                        <td>HNDIT1042</td> 
                                        <td>Communication Skills</td>
                                        <td>Mrs.P.J.H.R.Jayasinghe</td>
                                        <td>05</td>
                                    </tr>
            
                            </table>
                        </div>
                <button onclick="toggleSchedule('secondTerm1')">Second Semester</button>
                <div id="secondTerm1" class="term-schedule hidden">
                    <table>
                        <table border="1">
                            <th colspan="6">1st year 2nd semester</th>
            
                            <tr>
                                <th>Time</th>
                                <th>Mon Day</th>
                                <th>Tues Day</th>
                                <th>Wends Day</th>
                                <th>Thurs Day</th>
                                <th>Fri Day</th>
                            </tr>
                            <tr>
                                <td>8.30 - 9.30</td>
                                <td>HNDIT1042(L)</td>
                                <td>HNDIT1012(L)</td>
                                <td>HNDIT1032(L)</td>
                                <td>HNDIT1052(L)</td>
                                <td>HNDIT1022(L)</td>
                            </tr>
                            <tr>
                                <td>9.30 - 10.30</td>
                                <td>HNDIT1042(L)</td>
                                <td>HNDIT1012(L)</td>
                                <td>HNDIT1022(L)</td>
                                <td>HNDIT1052(L)</td>
                                <td>HNDIT1062(L)</td>
                            </tr>
                            <tr>
                                <td>10.30 - 11.30</td>
                                <td colspan="5"><center>LUNCH</center></td>
                            </tr>
                            <tr>
                                <td>11.30 - 12.30</td>
                                <td>HNDIT1042(T)</td>
                                <td>HNDIT1042(T)</td>
                                <td>HNDIT1042(T)</td>
                                <td>HNDIT1042(T)</td>
                                <td>HNDIT1042(T)</td>
                            </tr>
                            <tr>
                                <td>12.30 - 1.00</td>
                                <td>HNDIT1042(T)</td>
                                <td>HNDIT1042(T)</td>
                                <td>HNDIT1042(T)</td>
                                <td>HNDIT1042(T)</td>
                                <td>HNDIT1042(T)</td>
                            </tr>
                            </table>
                            <br><br>

                            <table>
                                <table border="1">
                                    <th>Subject Code</th>
                                    <th>Subject</th>
                                    <th>Lecturers</th>
                                    <th>Hours<br>
                                     <th rowspan="2">Permanent</th>
                                     <th rowspan="2">Visiting</th>
            
                                    <tr>
                                        <td>HNDIT2012</td> 
                                        <td>Fundamental of Programming</td>
                                        <td>Ms.Y.M.R.D. Wepathana</td>
                                        <td>06</td>
                                    </tr>
            
                                    <tr>
                                        <td>HNDIT2022</td> 
                                        <td>Software Deveopment</td>
                                        <td>Ms.A.H.M.T.C.Bakmeedeniya</td>
                                        <td>06</td>
                                    </tr>
            
                                    <tr>
                                        <td>HNDIT1012</td> 
                                        <td>System Analysis and Design</td>
                                        <td>Ms. Y.M.R.D. Wepathana</td>
                                        <td>06</td>
                                    </tr>
            
                                    <tr>
                                        <td>HNDIT1032</td> 
                                        <td>Data Communication and Computer Networks</td>
                                        <td>Ms.K.P.R.Rathnasiri</td>
                                        <td>04</td>
                                    </tr>
            
                                    <tr>
                                        <td>HNDIT1012</td> 
                                        <td>Principles of User Interface Design</td>
                                        <td>Ms.A.H.M.T.C.Bakmeedeniya <br>
                                            Ms. Y.M.R.D. Wepathana</td>
                                        <td>06</td>
                                    </tr>
            
                                    <tr>
                                        <td>HNDIT1042</td> 
                                        <td>ICT Project(Group)</td>
                                        <td>Mrs.P.J.H.R.Jayasinghe</td>
                                        <td>05</td>
                                    </tr>
            
                                    <tr>
                                        <td>HNDIT1042</td> 
                                        <td>Technical Writing</td>
                                        <td>Mrs.P.J.H.R.Jayasinghe</td>
                                        <td>05</td>
                                    </tr>
            
                                    <tr>
                                        <td>HNDIT1042</td> 
                                        <td>Human Value and Professional Ethics(NGPA)</td>
                                        <td>Mrs.P.J.H.R.Jayasinghe</td>
                                        <td>05</td>
                                    </tr>
                            </table>
                </div>
            </div>
        </div>

        <div class="year-section">
            <button onclick="toggleSchedule('secondYear')">Second Year</button>
            <div id="secondYear" class="schedule hidden">
                <h2>Second Year Timetable</h2>
                <button onclick="toggleSchedule('firstTerm2')">First Semester</button>
                <div id="firstTerm2" class="term-schedule hidden">
                    <table>
                        <table border="1">
                            <tr>
                            <th colspan="6">2nd year 1st semester</th>
                            </tr>
                            <tr>
                                <th>Time</th>
                                <th>Mon Day</th>
                                <th>Tues Day</th>
                                <th>Wends Day</th>
                                <th>Thurs Day</th>
                                <th>Fri Day</th>
                            </tr>
            
                                <tr>
                                    <td>8.30 - 9.30</td>
                                    <td>HNDIT1042(L)</td>
                                    <td>HNDIT1012(L)</td>
                                    <td>HNDIT1032(L)</td>
                                    <td>HNDIT1052(L)</td>
                                    <td>HNDIT1022(L)</td>
                                </tr>
            
                                <tr>
                                    <td>9.30 - 10.30</td>
                                    <td>HNDIT1042(L)</td>
                                    <td>HNDIT1012(L)</td>
                                    <td>HNDIT1022(L)</td>
                                    <td>HNDIT1052(L)</td>
                                    <td>HNDIT1062(L)</td>
                                </tr>
            
                                <tr>
                                    <td>10.30 - 11.30</td>
                                    <td colspan="5"><center>LUNCH</center></td>
                                </tr>
            
                                <tr>
                                    <td>11.30 - 12.30</td>
                                    <td>HNDIT1042(T)</td>
                                    <td>HNDIT1042(T)</td>
                                    <td>HNDIT1042(T)</td>
                                    <td>HNDIT1042(T)</td>
                                    <td>HNDIT1042(T)</td>
                                </tr>
            
                                <tr>
                                    <td>12.30 - 1.00</td>
                                    <td>HNDIT1042(T)</td>
                                    <td>HNDIT1042(T)</td>
                                    <td>HNDIT1042(T)</td>
                                    <td>HNDIT1042(T)</td>
                                    <td>HNDIT1042(T)</td>
                                </tr>
                        </table>
                    </br></br>

                    <table>
                        <table border="1">
                            <th>Subject Code</th>
                            <th>Subject</th>
                            <th>Lecturers</th>
                            <th>Hours<br>
                             <th rowspan="2">Permanent</th>
                             <th rowspan="2">Visiting</th>
    
                            <tr>
                                <td>HNDIT1012</td> 
                                <td>Visual Application Programming</td>
                                <td>Ms.Y.M.R.D. Wepathana</td>
                                <td>06</td>
                            </tr>
    
                            <tr>
                                <td>HNDIT1022</td> 
                                <td>Web Design</td>
                                <td>Ms.A.H.M.T.C.Bakmeedeniya</td>
                                <td>06</td>
                            </tr>
    
                            <tr>
                                <td>HNDIT1012</td> 
                                <td>Computer and Network System</td>
                                <td>Ms. Y.M.R.D. Wepathana</td>
                                <td>06</td>
                            </tr>
    
                            <tr>
                                <td>HNDIT1032</td> 
                                <td>Information Management and Information System</td>
                                <td>Ms.K.P.R.Rathnasiri</td>
                                <td>04</td>
                            </tr>
    
                            <tr>
                                <td>HNDIT1012</td> 
                                <td>ICT Project(Individual)</td>
                                <td>Ms.A.H.M.T.C.Bakmeedeniya <br>
                                    Ms. Y.M.R.D. Wepathana</td>
                                <td>06</td>
                            </tr>
    
                            <tr>
                                <td>HNDIT1042</td> 
                                <td>Communication Skills</td>
                                <td>Mrs.P.J.H.R.Jayasinghe</td>
                                <td>05</td>
                            </tr>
    
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