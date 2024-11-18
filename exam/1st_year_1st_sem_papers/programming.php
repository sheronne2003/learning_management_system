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
            First Year First Semester Examination-2021</br>
            IT 1062-Visual Application Programming</h4>
        </div>
        <div class="que_text">    
            1.What are the different types of programming? </br>
        </div>
	   <div class="answer">
           <input type="radio" name="q1">Higher level & Middle level</br></br>
           <input type="radio" name="q1" id="correct1">Higher level & Lower level </br></br>
           <input type="radio" name="q1">Java & Python </br></br>
	       <input type="radio" name="q1">Html & SQL </br>
	   </div>
	   </br>
	   
	   <div class="que_text"> 
	        2.Assume that you enter the fellowing values to Number 1 & Number 2 textboxes</br>
	   <div class="que">
	       <table border="0">
	          <tr>
	            <th> Number 1 </th> 		
                <th> Number 2 </th>
	   </div>
				
	          </tr>
	          <tr>
	            <td><center> Colombo </center></td>
                <td><center>  10	 </center></td>
              </tr>
           </table>
       </div>	
		    What would be the result given by the previous program? </br>
       <div class="que">
		    txtResult.Text = txtNumber1.Text+txtNumber2.Text 
	   </div>
	   <div class="answer">
           <input type="radio" name="q2" id="correct2">Colombo10</br></br>
           <input type="radio" name="q2">Colombo 10</br></br>
           <input type="radio" name="q2">Colombo+10 </br></br>
	       <input type="radio" name="q2">Number1+Number2 </br>
	   </div>
	   </br> 
	   
	   <div class="que_text">    
           3.what is the output after executing the code given below? </br>
       </div>
       <div class="que">
          int x = 10;</br>
          int y = 15;</br>
          int z = x+y;</br>
          Console.WriteLine (z);
       </div>
	   <div class="answer">
           <input type="radio" name="q3">10+15 </br></br>
           <input type="radio" name="q3">1015 </br></br>
           <input type="radio" name="q3">x+y </br></br>
	       <input type="radio" name="q3" id="correct3">25 </br>
	   </div>
	   </br>
	   
	   <div class="que_text">    
           4.What is the wrong variable? </br>
       </div>
	   <div class="answer">
           <input type="radio" name="q4" id="correct4">1stName </br></br>
           <input type="radio" name="q4">First_Name </br></br>
           <input type="radio" name="q4">FirstName </br></br>
	       <input type="radio" name="q4">number01 </br>
	   </div>
	   </br>
	   
	   <div class="que_text">    
           5.what is the output after executing the code given below? </br>
       </div>
       <div class="que">
             string a = "10";</br>
             a+=20;</br>
             Console.WriteLine (a);
       </div>
	   <div class="answer">
           <input type="radio" name="q5">10+20 </br></br>
           <input type="radio" name="q5">10 </br></br>
           <input type="radio" name="q5">20 </br></br>
	       <input type="radio" name="q5" id="correct5">1020 </br>
	   </div>
	   </br>
	   <div class="que_text">
            6.what is the correct code to get the following output? </br>
       </div>
	   <div class="que">
	   "Good Evening"
	   </div>
	   <div class="answer">
            <input type="radio" name="q6" id="correct6">
	           int time = 20; </br> 
	   <div class="ans">
	           if (time<18) </br> 
	           { </br>
	           Console.Writeline("Good Day");</br>
	           } </br>
	           else </br> 
	           { </br>
	           Console.Writeline("Good Evening");</br>
	           } </br></br>
	   </div>
	   
            <input type="radio" name="q6">
	           int time = 20; </br> 
	    <div class="ans">
	           if (time>18) </br> 
	           { </br>
	           Console.Writeline("Good Day");</br>
	           } </br>
	           else </br>
               { </br>	   
	           Console.Writeline("Good Evening");</br>
	           } </br></br>
	   </div>
	   
            <input type="radio" name="q6">
	           int time = 20; </br> 
       <div class="ans">	   
	           { </br>
	           Console.Writeline("Good Day");</br>
	           } </br>
	           else </br> 
	           { </br>
	           Console.Writeline("Good Evening");</br>
	           } </br></br>
	   </div>
	   
	        <input type="radio" name="q6">
	           int time=20; </br>
       <div class="ans">	   
	           if (time>18) </br> 
	           { </br>
	           Console.Writeline("Good Day");</br>
	           } </br> 
	           { </br>
	           Console.Writeline("Good Evening");</br>
	           } </br></br>
	   </div>
	   </div>
	   </br>
	   
	   <div class="que_text">    
           7.What is the output? </br>
       </div>
       <div class="que">
              int x=4;</br>
              while(x>=0){</br>
              Console.WriteLine (x); </br>
	          x--; </br>
	          } </br>
	  
       </div>
	   <div class="answer">
       <input type="radio" name="q7">4,3,2,1,0 </br></br>
       <input type="radio" name="q7">43210 </br></br>
       <input type="radio" name="q7">4</br><div class="ans">3</br>2</br>1</br></br></div>
	   <input type="radio" name="q7" id="correct7">4</br><div class="ans">3</br>2</br>1</br>0</br></br></div>
	   </br>
	   
      <div class="que_text">  
      8.what is the output after executing the code given below? </br>
       </div>
       <div class="que">
      int [] number={10,20,30,40,50};</br>
      Console.WriteLine (number [0] + ","+number[1]);</br>
	  
       </div>
	   <div class="answer">
       <input type="radio" name="q8">10 20 </br></br>
       <input type="radio" name="q8" id="correct8">10,20 </br></br>
       <input type="radio" name="q8">10</br><div class="ans">20</br></br></div>
	   <input type="radio" name="q8">10,20,30,40,50</br></br>
	   </div>
	   </br>
  
       <div class="que_text">
       9.what is the output after executing the code given below? </br>
       </div>
       <div class="que">
      for(int x=0;x<10;x++){</br>
      Console.WriteLine (x);</br>
	  
       </div>
	   <div class="answer">
       <input type="radio" name="q9">0,1,2,3,4,5,6,7,8,9 </br></br>
       <input type="radio" name="q9">0,1,2,3,4,5,6,7,8,9,10 </br></br>
       <input type="radio" name="q9">1</br><div class="ans">2</br>3</br>4</br>5</br>6</br>7</br>8</br>9</br></br></div>
	   <input type="radio" name="q9" id="correct9">0</br><div class="ans">1</br>2</br>3</br>4</br>5</br>6</br>7</br>8</br>9</br></div>
	   </div>
	   </br>
	   
	   <div class="que_text">
       10.what is the output after executing the code given below? </br>
       </div>
       <div class="que">
      int x=0;</br>
	  d0{</br>	  
      Console.WriteLine (x);</br>
	  x++</br>
	  }while {x<5);</br>
	  
       </div>
	   <div class="answer">
       <input type="radio" name="q10" id="correct10">0</br><div class="ans">1</br>2</br>3</br>4</br></br></div>
       <input type="radio" name="q10">0,1,2,3,4 </br></br>
       <input type="radio" name="q10">0</br><div class="ans">1</br>2</br>3</br>4</br>5</br></br></div>
	   <input type="radio" name="q10">0,1,2,3,4,5</br></div>
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