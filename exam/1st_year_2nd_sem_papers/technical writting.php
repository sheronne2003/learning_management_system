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
            IT 1062-Technical Writting</h4>  
        </div>
        <div class="que_text">    
            1.What is the primary purpose of technical writing?</br>
        </div>
	   <div class="answer">
           <input type="radio" name="q1">To entertain the audience</br></br>
           <input type="radio" name="q1" id="correct1">To inform and instruct the reader</br></br>
           <input type="radio" name="q1">To express personal opinions</br></br>
	       <input type="radio" name="q1">To tell a story</br>
	   </div>
	   </br>

       <div class="que_text">    
        2.In technical writing, which of the following is the most important aspect of style?</br>
    </div>
   <div class="answer">
       <input type="radio" name="q2">Using complex language</br></br>
       <input type="radio" name="q2">Using jargon and slang</br></br>
       <input type="radio" name="q2" id="correct2">Clarity and conciseness</br></br>
       <input type="radio" name="q2">Rhyming sentences</br>
   </div>
   </br>

   <div class="que_text">    
    3.Which of the following is an example of technical writing?</br>
</div>
<div class="answer">
   <input type="radio" name="q3">A novel</br></br>
   <input type="radio" name="q3" id="correct3">A technical manual</br></br>
   <input type="radio" name="q3">A personal diary</br></br>
   <input type="radio" name="q3">A poem</br>
</div>
</br>

<div class="que_text">    
    4.What should be avoided in technical writing?</br>
</div>
<div class="answer">
   <input type="radio" name="q4">Technical terms</br></br>
   <input type="radio" name="q4" id="correct4">Passive voice</br></br>
   <input type="radio" name="q4">Clear explanations</br></br>
   <input type="radio" name="q4">Step-by-step instructions</br>
</div>
</br>

<div class="que_text">    
    5.Which of these is a key component of a technical document?</br>
</div>
<div class="answer">
   <input type="radio" name="q5">Imaginative language</br></br>
   <input type="radio" name="q5">Persuasive arguments</br></br>
   <input type="radio" name="q5" id="correct5">Accuracy and precision</br></br>
   <input type="radio" name="q5">Figurative speech</br>
</div>
</br>

<div class="que_text">    
    6.What is the purpose of a user manual?</br>
</div>
<div class="answer">
   <input type="radio" name="q6">To entertain the user</br></br>
   <input type="radio" name="q6">To promote a product</br></br>
   <input type="radio" name="q6" id="correct6">To provide operational instructions</br></br>
   <input type="radio" name="q6">To explain the company history</br>
</div>
</br>

<div class="que_text">    
    7.Which of the following should NOT be included in a technical document?</br>
</div>
<div class="answer">
   <input type="radio" name="q7">Background information</br></br>
   <input type="radio" name="q7">Visual aids</br></br>
   <input type="radio" name="q7" id="correct7">Irrelevant details</br></br>
   <input type="radio" name="q7">Definitions of terms</br>
   </div>
</br>

<div class="que_text">    
    8.In technical writing, what is the importance of using headings and subheadings?</br>
</div>
<div class="answer">
   <input type="radio" name="q8">To add more words</br></br>
   <input type="radio" name="q8">To make the document look longer</br></br>
   <input type="radio" name="q8" id="correct8">To organize content for easier navigation</br></br>
   <input type="radio" name="q8">To confuse the reader</br>
</div>
</br>

<div class="que_text">    
    9.Which of the following best describes technical writing?</br>
</div>
<div class="answer">
   <input type="radio" name="q9" id="correct9">It is based on facts and provides explanations</br></br>
   <input type="radio" name="q9">It involves only creative storytelling</br></br>
   <input type="radio" name="q9">It includes personal opinions and emotions</br></br>
   <input type="radio" name="q9">It is a form of poetry</br>
</div>
</br>

<div class="que_text">    
    10.What should be the tone of technical writing?</br>
</div>
<div class="answer">
   <input type="radio" name="q10">Casual and conversational</br></br>
   <input type="radio" name="q10" id="correct10">Emotional and expressive</br></br>
   <input type="radio" name="q10">Formal and objective</br></br>
   <input type="radio" name="q10">Poetic and rhythmic</br>
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