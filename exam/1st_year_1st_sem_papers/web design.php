<!DOCTYPE html>
<html>
<head>
<title>Web Design </title>
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
  </br>
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

.answer{
padding: 10px 40px ;
font-size:20px;
}


.que{
font-size:25px;
font-weight:400;
padding:10px 70px;
color:purple;
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
    background-color:yellow;
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
            First Year First Semester Examination-2021</br>
            IT 1062-Web Design</h4>
</div>
   <div class="que_text">    
       1.Who is the inventor of www? </br>
   </div>
	   <div class="answer">
       <input type="radio" name="q1">Charles Babbage </br></br>
       <input type="radio" name="q1" id="correct1">Tim Berners Lee </br></br>
       <input type="radio" name="q1">Joseph Jacquard </br></br>
	   <input type="radio" name="q1">Howard Aiken </br>
	   </div>
	   </br>
   <div class="que_text">    
       2.What is the standard for transferring encrypted data on the web? </br>
   </div>
	   <div class="answer">
       <input type="radio" name="q2">HTTP</br></br>
       <input type="radio" name="q2" id="correct2">HTTPS</br></br>
       <input type="radio" name="q2">FTP</br></br>
	   <input type="radio" name="q2">HTML</br>
	   </div>
	   </br>
   <div class="que_text">    
       3.What does HTML stand for? </br>
   </div>
	   <div class="answer">
       <input type="radio" name="q3">Hyperlinks and Text Markup Language</br></br>
       <input type="radio" name="q3">Cascading Style Sheets</br></br>
       <input type="radio" name="q3" id="correct3">Hypertext Markup Language</br></br>
	   <input type="radio" name="q3">Hypertext Manual Log</br>
	   </div>
	   </br>
   <div class="que_text">
	   4.what is the output after executing the code given below?</br>
   </div>
	   <div class="que">
	   var i=1;</br>
	   do{</br>
	   if (1%2==1)</br>
	   document.write(i);</br>
	   i++;</br>
	   }while(i<10)
	   </div>
	   <div class="answer">
         <input type="radio" name="q4">1 2 3 4 5 6 7 8 9</br></br>
         <input type="radio" name="q4">1,3,5,7,9</br></br>
         <input type="radio" name="q4">1,2,3,4,5,6,7,8,9,10</br></br>
	     <input type="radio" name="q4" id="correct4">1 3 5 7 9</br>
	   </div>
	   </br>
   <div class="que_text">
	   5.what is the output after executing the code given below?</br>
   </div>
	   <div class="que">
	   for(x=1; x<5; x++){</br>
	   document.write(x);
	   }</br>
	   </div>
	   <div class="answer">
         <input type="radio" name="q5" id="correct5">1</br><div class="ans"> 2 </br>3</br>4 </div></br>
         <input type="radio" name="q5">1</br><div class="ans"> 2 </br>3</br>4</br>5 </div></br>
         <input type="radio" name="q5">1,2,3,4,5</br></br>
	     <input type="radio" name="q5">1 2 3 4</br>
	   </div>
		</br>
		<div class="que_text">
       6.what is the output after executing the code given below?</br>
	   </div>
	   <div class="que">
	   for(a=1; a<5; a++){</br>
	   document.write("3*"+a+"="+(a*3));</br>
	   document.write("br");</br>
	   }
	   </br>
	   </div>
	   <div class="answer">
         <input type="radio" name="q6">3*1=3<div class="ans"> 3*2=6 </br>3*3=9</br>3*4=12</br>3*5=15 </div></br>
         <input type="radio" name="q6">3,6,9,12</br></br>
         <input type="radio" name="q6">3<div class="ans">6</br>9<br>12</br>15 </div></br>
	     <input type="radio" name="q6" id="correct6">3*1=3<div class="ans"> 3*2=6 </br>3*3=9</br>3*4=12 </div></br>
	   </div>
	   </br>
	   <div class="que_text">    
       7.What is used to define access permissions,execute programs,monotor directories and files and communicate wih client computers? </br>
       </div></br>
	   <div class="answer">
       <input type="radio" name="q7" id="correct7">Web servers</br></br>
       <input type="radio" name="q7">Web Hosting</br></br>
       <input type="radio" name="q7">Web browser</br></br>
	   <input type="radio" name="q7">Internet</br>
	   </div>
	   </br>
	   <div class="que_text">  
       8.What does CSS stand for? </br>
   </div>
	   <div class="answer">
       <input type="radio" name="q8">Common Style Sheet</br></br>
       <input type="radio" name="q8" id="correct8">Cascading Style Sheet</br></br>
       <input type="radio" name="q8">Computer Style Sheet</br></br>
	   <input type="radio" name="q8">Colorful Style Sheet</br>
	   </div>
	   </br>
	   <div class="que_text">  
       9.What does HTTP stand for? </br>
   </div>
	   <div class="answer">
       <input type="radio" name="q9">Hyperlinks and Text Markup Language</br></br>
       <input type="radio" name="q9">Cascading Style Sheet</br></br>
       <input type="radio" name="q9">Hypertext Markup Language</br></br>
	   <input type="radio" name="q9" id="correct9">Hypertext Transfer Protocol</br>
	   </div>
	   </br>
	    <div class="que_text">  
       10.What are the three parts of the URLS? </br>
   </div>
	   <div class="answer">
       <input type="radio" name="q10" id="correct10">Protocol,Domain,Path</br></br>
       <input type="radio" name="q10">Protocol,Sub-Domain,Path</br></br>
       <input type="radio" name="q10">Protocol,Top-level Domain,Path</br></br>
	   <input type="radio" name="q10">HTML,CSS,HTTP</br>
	   </div>
	   </br>
	    <a href="file:///G:/My%20Project/home.html"><input type="button" value="Home Page" name="back" class="btn1"></a>
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
	     score=score+5;
		
	   }
	   if (document.getElementById('correct10').checked)
	   {
	     score=score+5;
		
	   }
	   document.write("<center><h1><u><i>Web Design</i></u></h1>");
	   document.write("</br> </br>");
	   document.write("<h2>Your score is:"+score);
	
	   }

	   </script>
		</body>
		</html>