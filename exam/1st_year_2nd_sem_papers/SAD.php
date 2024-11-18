<!DOCTYPE html>
<html>
<head>
<title> Visual Application Programming </title>
<body>
</br>
  <body>
  <br/>
  <center>
  <table style="border:1px solid black; text-align:center;">
  <tr style="font-size:60px;">
      
      
	  <td id= "Minutes"><center>00</center></td>
	  <td id= "Seconds"><center>00</center></td>
  </tr>
  <tr>
      
      
	  <td><center>&ensp;&ensp;&ensp;Minutes&ensp;&ensp;&ensp; </center></td>
	  <td><center>&ensp;&ensp;&ensp;Seconds&ensp;&ensp;&ensp; </center></td>
  </tr>
	  
  </table>
  </center>
  </body>
<style>

.box{
    position:absolute;
    left:20%;
    border:2px solid;
    padding:20px;
    background-color:#F7F2F1;
    border-radius:10px;
    min-height:350px;
    width:800px;
    }

.title{
    border-bottom:1px solid;
    margin-bottom:30px;
    font-weight:700;
    font-size:35px;
    text-align:center;
    background:orange;
    }


.que_text{
    font-size:25px;
    font-weight:600;
    padding:20px;
    }

.que{
    font-size:25px;
    font-weight:400;
    padding:10px 70px;
    color:purple;
    }


.answer{
    padding: 10px 40px ;
    font-size:20px;
    }
	
.ans{
padding: 0px 20px ;
font-size:20px;
}	

.btn1{
    background-color:lightgreen;
    width: 115px;
    height: 35px;
    border-radius: 10px;    
    font-weight: bold;
    font-family: Doppio One ;
    font-size: 16px;
	cursor:pointer;
    }


 .btn2{
    background-color:skyblue;
    width: 115px;
    height: 35px;
    border-radius: 10px;
    font-weight: bold;
    font-family: Doppio One ;
    font-size: 16px;
	cursor:pointer;	
    }
	
	.btn3{
    background-color:orange;
    width: 120px;
    height: 45px;
    border-radius: 10px; 
    font-weight: bold;
    font-family: Doppio One ;
    font-size: 20px;
	cursor:pointer;	
    }
 
    </style>
 <body>
    <div class="box">
        <div class="title">
            System Analysis and Design 
        </div>
        <div class="que_text">    
            1.Which of the following is the primary goal of system analysis?</br>
        </div>
	   <div class="answer">
           <input type="radio" name="q1">To develop software</br></br>
           <input type="radio" name="q1" id="correct1">To study the existing system and identify requirements</br></br>
           <input type="radio" name="q1">To design the database</br></br>
	       <input type="radio" name="q1">To create a user interface</br>
	   </div>
	   </br>

       <div class="que_text">    
        2.What is a feasibility study in system analysis?</br>
    </div>
   <div class="answer">
       <input type="radio" name="q2">A study to check if a solution is legally allowed</br></br>
       <input type="radio" name="q2" id="correct2">An analysis to determine if a project is technically, economically, and operationally viable</br></br>
       <input type="radio" name="q2">A study of the security of the system</br></br>
       <input type="radio" name="q2">A test of the final system</br>
   </div>
   </br>

   <div class="que_text">    
    3.In which phase of the SDLC does system testing occur?</br>
</div>
<div class="answer">
   <input type="radio" name="q3">Design</br></br>
   <input type="radio" name="q3">Analysis</br></br>
   <input type="radio" name="q3" id="correct3">Testing</br></br>
   <input type="radio" name="q3">Implementation</br>
</div>
</br>

<div class="que_text">    
    4.Which of the following diagrams is used to visually represent data flow within a system?</br>
</div>
<div class="answer">
   <input type="radio" name="q4">Use Case Diagram</br></br>
   <input type="radio" name="q4">Flowchart</br></br>
   <input type="radio" name="q4" id="correct4">Data Flow Diagram (DFD)</br></br>
   <input type="radio" name="q4">Class Diagram</br>
</div>
</br>

<div class="que_text">    
    5.The primary purpose of prototyping in system design is to:</br>
</div>
<div class="answer">
   <input type="radio" name="q5">Create the final system</br></br>
   <input type="radio" name="q5">Test security of the system</br></br>
   <input type="radio" name="q5" id="correct5">Build a working model to gather user feedback</br></br>
   <input type="radio" name="q5">Document the system</br>
</div>
</br>

<div class="que_text">    
    6.Which of the following is NOT an advantage of using SDLC?</br>
</div>
<div class="answer">
   <input type="radio" name="q6">Improved project management</br></br>
   <input type="radio" name="q6" id="correct6">Higher costs</br></br>
   <input type="radio" name="q6">Better control over complex projects</br></br>
   <input type="radio" name="q6">Defined stages and deliverables</br>
</div>
</br>

<div class="que_text">    
    7.A system that continues to operate in the event of a component failure is known as:</br>
</div>
<div class="answer">
   <input type="radio" name="q7">Reliable system</br></br>
   <input type="radio" name="q7" id="correct7">Fault-tolerant system</br></br>
   <input type="radio" name="q7">Secured system</br></br>
   <input type="radio" name="q7">Operational system</br>
   </div>
</br>

<div class="que_text">    
    8.What does ERD stand for in the context of system design?</br>
</div>
<div class="answer">
   <input type="radio" name="q8" id="correct8">Entity-Relationship Diagram</br></br>
   <input type="radio" name="q8">Essential-Resource Diagram</br></br>
   <input type="radio" name="q8">Error-Reporting Diagram</br></br>
   <input type="radio" name="q8">Event-Response Diagram</br>
</div>
</br>

<div class="que_text">    
    9.Which of the following is an example of a non-functional requirement?</br>
</div>
<div class="answer">
   <input type="radio" name="q9">The system must store customer data</br></br>
   <input type="radio" name="q9" id="correct9">The system must support 1000 users simultaneously</br></br>
   <input type="radio" name="q9">The system must allow the user to update their profile</br></br>
   <input type="radio" name="q9">The system must generate monthly reports</br>
</div>
</br>

<div class="que_text">    
    10.A use case diagram is primarily used to describe:</br>
</div>
<div class="answer">
   <input type="radio" name="q10">Data flow in the system</br></br>
   <input type="radio" name="q10" id="correct10">System requirements from the user's perspective</br></br>
   <input type="radio" name="q10">Database relationships</br></br>
   <input type="radio" name="q10">User interface layout</br>
</div>
</br>

<a href="exam2.html"><input type="button" value="Back" name="Back" class="btn1"></a>
<a href=""><input type="button" value="Reset" name="reset" class="btn2"></a>
<input type="submit" name="submit" value="Submit Quiz" onclick="result()" class="btn3">
</div>
</br>

<script type="text/javascript">
    var x= new Date();
    var y= x.getTime();
    var total=y+(4*24*3600000);
    function count()
    {
        var now=new Date();
        var currentTime=now.getTime();
          
        var diff=total-currentTime;
        var s=Math.floor(diff/1000);
        var m=Math.floor(s/60);
        
        
          
          
        
        m=m%30;
        s=s%60;
          
        
        m=(m<10)?"0"+m:m;
        s=(s<10)?"0"+s:s;
        
        
          
         
        
        document.getElementById("Minutes").innerHTML=m;
        document.getElementById("Seconds").innerHTML=s;
          
        setTimeout(count, 1000);
          
    }
          
        count();
</script>
</body>
   <script type="text/javascript">
   function result(){
   var score=0;
 
   if (document.getElementById('correct1').checked)
   {
     score=score+5;

   }
   if (document.getElementById('correct2').checked)
   {
     score=score+5;
    
   }
   if (document.getElementById('correct3').checked)
   {
     score=score+5;
    
   }
   if (document.getElementById('correct4').checked)
   {
     score=score+5;
    
   }
   if (document.getElementById('correct5').checked)
   {
     score=score+5;
    
   }
   if (document.getElementById('correct6').checked)
   {
     score=score+5;
    
   }
   if (document.getElementById('correct7').checked)
   {
     score=score+5;
    
   }
   if (document.getElementById('correct8').checked)
   {
     score=score+5;
     
   }
   if (document.getElementById('correct9').checked)
   {
    
   }
   if (document.getElementById('correct10').checked)
   {
     score=score+5;
    
   }
   document.write("<center><h1><u><i>Visual Application Programming</i></u></h1>");
   document.write("<h3>Your score is:"+score);
  }

   </script>
    </body>
    </html>