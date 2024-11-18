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
            First Year Second Semester Examination-2021</br>
            IT 1062-Fundamentals of Programming</h4> 
        </div>
        <div class="que_text">    
            1.Which of the following is a programming language?
        </br>
        </div>
	   <div class="answer">
           <input type="radio" name="q1">HTML</br></br>
           <input type="radio" name="q1">CSS</br></br>
           <input type="radio" name="q1" id="correct1">Python</br></br>
	       <input type="radio" name="q1">SQL</br>
	   </div>
	   </br>

       <div class="que_text">    
        2.What does a compiler do?</br>
    </div>
   <div class="answer">
       <input type="radio" name="q2">Converts code to binary</br></br>
       <input type="radio" name="q2" id="correct2">Translates high-level code into machine code</br></br>
       <input type="radio" name="q2">Runs code directly without conversion</br></br>
       <input type="radio" name="q2">Organizes code into functions</br>
   </div>
   </br>

   <div class="que_text">    
    3.Which of the following is an example of a high-level programming language?</br>
</div>
<div class="answer">
   <input type="radio" name="q3">Assembly</br></br>
   <input type="radio" name="q3">Machine code</br></br>
   <input type="radio" name="q3" id="correct3">Java</br></br>
   <input type="radio" name="q3">Binary code</br>
</div>
</br>

<div class="que_text">    
    4.What is a variable in programming?
</br>
</div>
<div class="answer">
   <input type="radio" name="q4">A permanent storage space for data</br></br>
   <input type="radio" name="q4" id="correct4">A way to store data that can change</br></br>
   <input type="radio" name="q4">A fixed value that never changes</br></br>
   <input type="radio" name="q4">A function</br>
</div>
</br>

<div class="que_text">    
    5.Which symbol is commonly used to denote a comment in Python?</br>
</div>
<div class="answer">
   <input type="radio" name="q5">//</br></br>
   <input type="radio" name="q5" id="correct5">#</br></br>
   <input type="radio" name="q5">;</br></br>
   <input type="radio" name="q5">*</br>
</div>
</br>

<div class="que_text">    
    6.Which of these is a loop structure in programming?</br>
</div>
<div class="answer">
   <input type="radio" name="q6"> If-Else</br></br>
   <input type="radio" name="q6"> Switch</br></br>
   <input type="radio" name="q6" id="correct6"> For</br></br>
   <input type="radio" name="q6">Try-Catch</br>
</div>
</br>

<div class="que_text">    
    7.Which function is used to display text in Python?</br>
</div>
<div class="answer">
   <input type="radio" name="q7">printf()</br></br>
   <input type="radio" name="q7"> echo()</br></br>
   <input type="radio" name="q7" id="correct7">write()</br></br>
   <input type="radio" name="q7">print()</br>
   </div>
</br>

<div class="que_text">    
    8.What data type is used to represent true or false values?
</br>
</div>
<div class="answer">
   <input type="radio" name="q8">Integer</br></br>
   <input type="radio" name="q8" id="correct8">Boolean</br></br>
   <input type="radio" name="q8">String</br></br>
   <input type="radio" name="q8">Float</br>
</div>
</br>

<div class="que_text">    
    9.Which term describes a function that calls itself?</br>
</div>
<div class="answer">
   <input type="radio" name="q9" id="correct9">Recursive</br></br>
   <input type="radio" name="q9">Iterative</br></br>
   <input type="radio" name="q9">Redundant</br></br>
   <input type="radio" name="q9">Loop</br>
</div>
</br>

<div class="que_text">    
    10.What does IDE stand for in programming?</br>
</div>
<div class="answer">
   <input type="radio" name="q10" id="correct10"> Integrated Development Environment</br></br>
   <input type="radio" name="q10">Internal Debugging Engine</br></br>
   <input type="radio" name="q10">Integrated Data Environment</br></br>
   <input type="radio" name="q10">Intelligent Design Engine</br>
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