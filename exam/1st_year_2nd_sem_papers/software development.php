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
            IT 1062-Software Development</h4> 
        </div>
        <div class="que_text">    
            1.What is the primary purpose of software testing?</br>
        </div>
	   <div class="answer">
           <input type="radio" name="q1">To eliminate all bugs</br></br>
           <input type="radio" name="q1" id="correct1">To ensure the software meets requirements</br></br>
           <input type="radio" name="q1">To develop new features</br></br>
	       <input type="radio" name="q1">To increase code size</br>
	   </div>
	   </br>

       <div class="que_text">    
        2.Which software development model is characterized by repeated iterations and testing in phases?</br>
    </div>
   <div class="answer">
       <input type="radio" name="q2">Waterfall</br></br>
       <input type="radio" name="q2" id="correct2">Agile</br></br>
       <input type="radio" name="q2">V-Model</br></br>
       <input type="radio" name="q2">RAD(Rapid Application Development)</br>
   </div>
   </br>

   <div class="que_text">    
    3.Which of the following is a version control system commonly used in software development?</br>
</div>
<div class="answer">
   <input type="radio" name="q3" id="correct3"> Git</br></br>
   <input type="radio" name="q3">HTML</br></br>
   <input type="radio" name="q3">UML</br></br>
   <input type="radio" name="q3">XML</br>
</div>
</br>

<div class="que_text">    
    4.What does the acronym "API" stand for in software development?</br>
</div>
<div class="answer">
   <input type="radio" name="q4" id="correct4">Application Program Interface</br></br>
   <input type="radio" name="q4">Application Process Integration</br></br>
   <input type="radio" name="q4">Automated Protocol Instruction</br></br>
   <input type="radio" name="q4">Advanced Program Interface</br>
</div>
</br>

<div class="que_text">    
    5.In object-oriented programming, what is “encapsulation”?</br>
</div>
<div class="answer">
   <input type="radio" name="q5">Defining a method</br></br>
   <input type="radio" name="q5" id="correct5">Wrapping data and methods in a class</br></br>
   <input type="radio" name="q5">Reusing code from other classes</br></br>
   <input type="radio" name="q5">Writing comments in code</br>
</div>
</br>

<div class="que_text">    
    6.Which of these languages is NOT typically used for back-end development?</br>
</div>
<div class="answer">
   <input type="radio" name="q6">JavaScript</br></br>
   <input type="radio" name="q6">Python</br></br>
   <input type="radio" name="q6">Java</br></br>
   <input type="radio" name="q6" id="correct6">HTML</br>
</div>
</br>

<div class="que_text">    
    7.In Agile, a “sprint” is best described as:</br>
</div>
<div class="answer">
   <input type="radio" name="q7" id="correct7">A period where the team works on assigned tasks</br></br>
   <input type="radio" name="q7"> A type of product testing</br></br>
   <input type="radio" name="q7">The final stage of development</br></br>
   <input type="radio" name="q7">A brainstorming session</br>
   </div>
</br>

<div class="que_text">    
    8.Which of the following design patterns is used to restrict the instantiation of a class to one object?</br>
</div>
<div class="answer">
   <input type="radio" name="q8">Factory</br></br>
   <input type="radio" name="q8" id="correct8">Singleton</br></br>
   <input type="radio" name="q8">Observer</br></br>
   <input type="radio" name="q8">Strategy</br>
</div>
</br>

<div class="que_text">    
    9.What does the term "refactoring" refer to in software development?</br>
</div>
<div class="answer">
   <input type="radio" name="q9">Adding new features to the code</br></br>
   <input type="radio" name="q9" id="correct9">Improving the code without changing its behavior</br></br>
   <input type="radio" name="q9">Removing old code</br></br>
   <input type="radio" name="q9">Testing the software</br>
</div>
</br>

<div class="que_text">    
    10.Which tool is commonly used for continuous integration and continuous deployment (CI/CD)?</br>
</div>
<div class="answer">
   <input type="radio" name="q10" id="correct10">Jenkins</br></br>
   <input type="radio" name="q10">CSS</br></br>
   <input type="radio" name="q10">Java</br></br>
   <input type="radio" name="q10">React</br>
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