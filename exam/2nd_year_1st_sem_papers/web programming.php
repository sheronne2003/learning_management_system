<!DOCTYPE html>
<html>
<head>
<title> Web Programming </title>
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
    font-weight:200;
    font-size:30px;
    text-align:center;
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
        <h4>Higher National Diploma in Information Technology</br>
            Second Year First Semester Examination-2022</br>
            IT 1062-Web Programming</h4> 
        </div>
        <div class="que_text">    
            1.What does HTML stand for?</br>
        </div>
	   <div class="answer">
           <input type="radio" name="q1">Hyperlinks and Text Markup Language</br></br>
           <input type="radio" name="q1" id="correct1">Hyper Text Markup Language</br></br>
           <input type="radio" name="q1">Home Tool Markup Language</br></br>
	       <input type="radio" name="q1">Hyper Tool Markup Language</br>
	   </div>
	   </br>

       <div class="que_text">    
        2.Which of the following is used to style a web page?</br>
    </div>
   <div class="answer">
       <input type="radio" name="q2">HTML</br></br>
       <input type="radio" name="q2" id="correct2">CSS</br></br>
       <input type="radio" name="q2">PHP</br></br>
       <input type="radio" name="q2">JavaScript</br>
   </div>
   </br>

   <div class="que_text">    
    3.Which language is primarily used for client-side scripting on the web?</br>
</div>
<div class="answer">
   <input type="radio" name="q3">PHP</br></br>
   <input type="radio" name="q3">Python</br></br>
   <input type="radio" name="q3" id="correct3">JavaScript</br></br>
   <input type="radio" name="q3">Ruby</br>
</div>
</br>

<div class="que_text">    
    4.Which of these is NOT a JavaScript data type?</br>
</div>
<div class="answer">
   <input type="radio" name="q4">Undefined</br></br>
   <input type="radio" name="q4">Number</br></br>
   <input type="radio" name="q4" id="correct4">Float</br></br>
   <input type="radio" name="q4">String</br>
</div>
</br>

<div class="que_text">    
    5.What does CSS stand for?</br>
</div>
<div class="answer">
   <input type="radio" name="q5" id="correct5">Cascading Style Sheets</br></br>
   <input type="radio" name="q5">Computer Style Sheets</br></br>
   <input type="radio" name="q5">Creative Style Sheets</br></br>
   <input type="radio" name="q5">Colorful Style Sheets</br>
</div>
</br>

<div class="que_text">    
    6.In HTML, which tag is used to create a hyperlink?</br>
</div>
<div class="answer">
   <input type="radio" name="q6"><"link"></br></br>
   <input type="radio" name="q6" id="correct6"><"a"></br></br>
   <input type="radio" name="q6"><"href"></br></br>
   <input type="radio" name="q6"><"url"></br>
</div>
</br>

<div class="que_text">    
    7.What is the correct syntax for including an external JavaScript file?</br>
</div>
<div class="answer">
   <input type="radio" name="q7"><"script name="filename.js"></br></br>
   <input type="radio" name="q7"><"script href="filename.js"></br></br>
   <input type="radio" name="q7" id="correct7"><"script src="filename.js"></br></br>
   <input type="radio" name="q7"><"script link="filename.js"></br>
   </div>
</br>

<div class="que_text">    
    8.Which HTTP method is used to request data from a specified resource?</br>
</div>
<div class="answer">
   <input type="radio" name="q8">POST</br></br>
   <input type="radio" name="q8" id="correct8">GET</br></br>
   <input type="radio" name="q8">PUSH</br></br>
   <input type="radio" name="q8">SEND</br>
</div>
</br>

<div class="que_text">    
    9.Which of the following is a front-end framework?</br>
</div>
<div class="answer">
   <input type="radio" name="q9">Django</br></br>
   <input type="radio" name="q9">Laravel</br></br>
   <input type="radio" name="q9">Flask</br></br>
   <input type="radio" name="q9" id="correct9">React</br>
</div>
</br>

<div class="que_text">    
    10.What does the "var" keyword in JavaScript do?</br>
</div>
<div class="answer">
   <input type="radio" name="q10" id="correct10">Declares a variable</br></br>
   <input type="radio" name="q10">Calls a function</br></br>
   <input type="radio" name="q10">Creates a class</br></br>
   <input type="radio" name="q10">Deletes an object</br>
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

   </>
    </body>
    </html>