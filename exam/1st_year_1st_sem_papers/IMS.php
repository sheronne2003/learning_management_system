<!DOCTYPE html>
<html>
<head>
<title>Information Management & Information Systems</title>
</head>
<br/>
<body>
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
    background:skyblue;
    }


.que_text{
    font-size:25px;
    font-weight:600;
    padding:20px;
    }

.answer{
    padding: 10px 40px ;
    font-size:20px;
    }

h1{
    text-align:center;
    background:Skyblue;
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
    background-color:skyblue;
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
Information Management and Informayion Systems
</div>
   <div class="que_text">    
       1.Which set of peoples are not in the Organizational peoples? </br>
   </div>
	   <div class="answer">
       <input type="radio" name="q1">Senior Management,Data workers,Production workers </br></br>
       <input type="radio" name="q1">Protect workers,Process workers,Directors </br></br>
       <input type="radio" name="q1">Service workers,Knowledge workers,Operational Managers </br></br>
	   <input type="radio" name="q1" id="correct1">Senior Managers,Middle Managers,Operational Managers </br>
	   </div>
	   </br>
	   
	   <div class="que_text">    
       2.Which is not under the 4 major enterprise application ? </br>
   </div>
	   <div class="answer">
       <input type="radio" name="q2" id="correct2">Risk Management system </br></br>
       <input type="radio" name="q2">Supply chain management system </br></br>
       <input type="radio" name="q2">Customer relationship management system </br></br>
	   <input type="radio" name="q2">Knowledge management system </br>
	   </div>
	   </br>
	   
	   <div class="que_text">    
       3.What is know as <b> record </b>? </br>
   </div>
	   <div class="answer">
       <input type="radio" name="q3">A group of related fields comprises </br></br>
       <input type="radio" name="q3" id="correct3">A group of recored of the same type </br></br>
       <input type="radio" name="q3">A group of related files makes up </br></br>
	   <input type="radio" name="q3">Non of the above </br>
	   </div>
	   </br>
	   
	   <div class="que_text">    
       4.Output that is returned to appropriate members of the organization to help them evaluate or correct the input storage? </br>
   </div>
	   <div class="answer">
       <input type="radio" name="q4">Input </br></br>
       <input type="radio" name="q4">Process </br></br>
       <input type="radio" name="q4">Output </br></br>
	   <input type="radio" name="q4" id="correct4">Feedback </br>
	   </div>
	   </br>
	   
	   <div class="que_text">    
       5.How can you establish a competitive advantage in costs? </br>
   </div>
	   <div class="answer">
       <input type="radio" name="q5">High asset utilization </br></br>
       <input type="radio" name="q5" id="correct5">Low direct & indirect operating costs </br></br>
       <input type="radio" name="q5">Value chain control </br></br>
	   <input type="radio" name="q5">All of the above </br>
	   </div>
	   </br>
     <div class="que_text">   
      6.How can you establish a competitive advantage in costs? </br>
    </div>
      <div class="answer">
        <input type="radio" name="q1">High asset utilization </br></br>
        <input type="radio" name="q1">Low direct & indirect operating costs </br></br>
        <input type="radio" name="q1">Value chain control </br></br>
      <input type="radio" name="q1">All of the above </br>
      </div>
    </br>
	    <a href="exam2.html"><input type="button" value="Back" name="Back" class="btn1"></a>
	    <a href=""><input type="button" value="Reset" name="reset" class="btn2"></a>
		<input type="submit" name="submit" value="Submit Quiz" onclick="result()" class="btn3">
	   </div>

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
	   document.write("<center><h1><u><i>Information Management and Information Systems</i></u></h1>");
	   document.write("</br> </br>");
	   document.write("<h2>Your score is:"+score);
	   
	   }
	   </script>
	   </body>
	   </html>