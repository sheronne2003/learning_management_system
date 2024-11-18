<!DOCTYPE html>
<html>
<head>
<title> Object Oriented Programming </title>
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
            IT 1062-Object Oriented Programming</h4> 
        </div>
        <div class="que_text">    
            1.Which of the following is not a fundamental concept of OOP?</br>
        </div>
	   <div class="answer">
           <input type="radio" name="q1">Inheritance</br></br>
           <input type="radio" name="q1">Encapsulation</br></br>
           <input type="radio" name="q1">Polymorphism</br></br>
	       <input type="radio" name="q1" id="correct1">Compilation</br>
	   </div>
	   </br>

       <div class="que_text">    
        2.In OOP, the process of using the same function name but with different parameters is called:</br>
    </div>
   <div class="answer">
       <input type="radio" name="q2">Inheritance</br></br>
       <input type="radio" name="q2">Encapsulation</br></br>
       <input type="radio" name="q2" id="correct2">Method Overloading</br></br>
       <input type="radio" name="q2">Method Overriding</br>
   </div>
   </br>

   <div class="que_text">    
    3.What is the purpose of encapsulation in OOP?</br>
</div>
<div class="answer">
   <input type="radio" name="q3">To reuse code in multiple programs</br></br>
   <input type="radio" name="q3" id="correct3">To hide the internal details of an object</br></br>
   <input type="radio" name="q3">To allow one class to inherit from another</br></br>
   <input type="radio" name="q3">To allow multiple objects to have the same methods</br>
</div>
</br>

<div class="que_text">    
    4.Which OOP concept allows a subclass to inherit properties and methods from a superclass?</br>
</div>
<div class="answer">
   <input type="radio" name="q4">Abstraction</br></br>
   <input type="radio" name="q4">Encapsulation</br></br>
   <input type="radio" name="q4">Polymorphism</br></br>
   <input type="radio" name="q4" id="correct4">Inheritance</br>
</div>
</br>

<div class="que_text">    
    5.In OOP, what does 'polymorphism' allow you to do?</br>
</div>
<div class="answer">
   <input type="radio" name="q5">Write a program once and execute it on multiple platforms</br></br>
   <input type="radio" name="q5">Access private data directly from outside the class</br></br>
   <input type="radio" name="q5" id="correct5">Define methods in a parent class and override them in child classes</br></br>
   <input type="radio" name="q5">None of the above</br>
</div>
</br>

<div class="que_text">    
    6.Which of the following defines an “abstract class” in OOP?</br>
</div>
<div class="answer">
   <input type="radio" name="q6">A class with no methods</br></br>
   <input type="radio" name="q6">A class with only static methods</br></br>
   <input type="radio" name="q6" id="correct6">A class that cannot be instantiated and may have abstract methods</br></br>
   <input type="radio" name="q6">A class that can only be instantiated once</br>
</div>
</br>

<div class="que_text">    
    7.Which OOP principle encourages the idea of “one class, one responsibility”?</br>
</div>
<div class="answer">
   <input type="radio" name="q7">Encapsulation</br></br>
   <input type="radio" name="q7">Inheritance</br></br>
   <input type="radio" name="q7" id="correct7">Single Responsibility Principle</br></br>
   <input type="radio" name="q7">Polymorphism</br>
   </div>
</br>

<div class="que_text">    
    8.What keyword is used in many OOP languages to create an object from a class?</br>
</div>
<div class="answer">
   <input type="radio" name="q8">class</br></br>
   <input type="radio" name="q8">object</br></br>
   <input type="radio" name="q8" id="correct8">new</br></br>
   <input type="radio" name="q8">void</br>
</div>
</br>

<div class="que_text">    
    9.In OOP, which of the following best describes a 'constructor'?</br>
</div>
<div class="answer">
   <input type="radio" name="q9" id="correct9">A method called automatically when an object is created</br></br>
   <input type="radio" name="q9">A function that assigns values to private data members</br></br>
   <input type="radio" name="q9">A function that destroys an object</br></br>
   <input type="radio" name="q9">A function that calls other methods in the class</br>
</div>
</br>

<div class="que_text">    
    10.Which of the following allows you to change the behavior of a method in a subclass?</br>
</div>
<div class="answer">
   <input type="radio" name="q10">Overloading</br></br>
   <input type="radio" name="q10" id="correct10">Overriding</br></br>
   <input type="radio" name="q10">Encapsulation</br></br>
   <input type="radio" name="q10">Aggregation</br>
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