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
            Principles of User Interface Design 
        </div>
        <div class="que_text">    
            1.Which of the following is NOT a principle of user interface design?</br>
        </div>
	   <div class="answer">
           <input type="radio" name="q1">Consistency</br></br>
           <input type="radio" name="q1">Flexibility</br></br>
           <input type="radio" name="q1" id="correct1">Complexity</br></br>
	       <input type="radio" name="q1">Feedback</br>
	   </div>
	   </br>

       <div class="que_text">    
        2.What is the main purpose of providing feedback in a user interface?</br>
    </div>
   <div class="answer">
       <input type="radio" name="q2" id="correct2">To give the user confirmation of actions</br></br>
       <input type="radio" name="q2">To slow down user interaction</br></br>
       <input type="radio" name="q2">To hide system status from the user</br></br>
       <input type="radio" name="q2">To make the interface more complex</br>
   </div>
   </br>

   <div class="que_text">    
    3.Which UI principle emphasizes the need for a predictable structure and easy-to-find elements?</br>
</div>
<div class="answer">
   <input type="radio" name="q3">Affordance</br></br>
   <input type="radio" name="q3">Simplicity</br></br>
   <input type="radio" name="q3" id="correct3">Consistency</br></br>
   <input type="radio" name="q3">Feedback</br>
</div>
</br>

<div class="que_text">    
    4.Which of the following is true about the principle of simplicity in UI design?</br>
</div>
<div class="answer">
   <input type="radio" name="q4">It encourages the use of complex visuals</br></br>
   <input type="radio" name="q4" id="correct4">It reduces user error by minimizing complexity</br></br>
   <input type="radio" name="q4">It focuses on maximizing screen usage</br></br>
   <input type="radio" name="q4">It encourages placing as many options as possible</br>
</div>
</br>

<div class="que_text">    
    5.What principle should designers use to guide the placement of important elements to make them easily noticeable?</br>
</div>
<div class="answer">
   <input type="radio" name="q5">Accessibility</br></br>
   <input type="radio" name="q5" id="correct5">Visibility</br></br>
   <input type="radio" name="q5">Affordance</br></br>
   <input type="radio" name="q5">Flexibility</br>
</div>
</br>

<div class="que_text">    
    6.What does the principle of "affordance" refer to in UI design?</br>
</div>
<div class="answer">
   <input type="radio" name="q6" id="correct6">Making objects resemble their real-world function</br></br>
   <input type="radio" name="q6">Ensuring all elements look similar</br></br>
   <input type="radio" name="q6">Allowing users to customize their interface</br></br>
   <input type="radio" name="q6">Hiding unnecessary options from users</br>
</div>
</br>

<div class="que_text">    
    7.Which principle encourages a UI design that allows users to backtrack or reverse actions if needed?</br>
</div>
<div class="answer">
   <input type="radio" name="q7">Consistency</br></br>
   <input type="radio" name="q7" id="correct7">Undoability</br></br>
   <input type="radio" name="q7">Flexibility</br></br>
   <input type="radio" name="q7">Feedback</br>
   </div>
</br>

<div class="que_text">    
    8.What does the principle of "efficiency of use" emphasize in UI design?</br>
</div>
<div class="answer">
   <input type="radio" name="q8">Designing for new users only</br></br>
   <input type="radio" name="q8">Making the interface minimalistic</br></br>
   <input type="radio" name="q8" id="correct8">Allowing users to perform tasks quickly</br></br>
   <input type="radio" name="q8">Including as many options as possible</br>
</div>
</br>

<div class="que_text">    
    9.The UI principle that ensures all users, regardless of ability, can access and use the interface effectively is called:</br>
</div>
<div class="answer">
   <input type="radio" name="q9">Consistency</br></br>
   <input type="radio" name="q9" id="correct9">Accessibility</br></br>
   <input type="radio" name="q9">Feedback</br></br>
   <input type="radio" name="q9">Flexibility</br>
</div>
</br>

<div class="que_text">    
    10.Which of the following principles is primarily concerned with user freedom and control?</br>
</div>
<div class="answer">
   <input type="radio" name="q10">Affordance</br></br>
   <input type="radio" name="q10" id="correct10">Flexibility</br></br>
   <input type="radio" name="q10">Visibility</br></br>
   <input type="radio" name="q10">Feedback</br>
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