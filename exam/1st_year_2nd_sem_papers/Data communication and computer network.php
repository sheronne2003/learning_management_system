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
            IT 1062-Data Communication and Computer Network</h4>
        </div>
        <div class="que_text">    
            1.Which layer in the OSI model is responsible for routing data packets?</br>
        </div>
	   <div class="answer">
           <input type="radio" name="q1">Application layer</br></br>
           <input type="radio" name="q1">Transport layer</br></br>
           <input type="radio" name="q1" id="correct1">Network layer</br></br>
	       <input type="radio" name="q1">Data Link layer</br>
	   </div>
	   </br>

       <div class="que_text">    
        2.What type of address is used by the Data Link layer to identify devices on a network?</br>
    </div>
   <div class="answer">
       <input type="radio" name="q2">IP Address</br></br>
       <input type="radio" name="q2" id="correct2">MAC Address</br></br>
       <input type="radio" name="q2">Port Number</br></br>
       <input type="radio" name="q2">URL</br>
   </div>
   </br>

   <div class="que_text">    
    3.Which of the following is NOT a guided transmission medium?</br>
</div>
<div class="answer">
   <input type="radio" name="q3">Coaxial cable</br></br>
   <input type="radio" name="q3">Fiber optic cable</br></br>
   <input type="radio" name="q3">Twisted pair cable</br></br>
   <input type="radio" name="q3" id="correct3">Radio waves</br>
</div>
</br>

<div class="que_text">    
    4.The process of breaking a data packet into smaller parts to meet the MTU size is called:</br>
</div>
<div class="answer">
   <input type="radio" name="q4">Multiplexing</br></br>
   <input type="radio" name="q4" id="correct4">Fragmentation</br></br>
   <input type="radio" name="q4">Modulation</br></br>
   <input type="radio" name="q4">Switching</br>
</div>
</br>

<div class="que_text">    
    5.Which protocol provides reliable communication by using acknowledgments and retransmissions?</br>
</div>
<div class="answer">
   <input type="radio" name="q5">UDP</br></br>
   <input type="radio" name="q5">IP</br></br>
   <input type="radio" name="q5">HTTP</br></br>
   <input type="radio" name="q5" id="correct5">TCP</br>
</div>
</br>

<div class="que_text">    
    6.What is the primary function of a router in a network?</br>
</div>
<div class="answer">
   <input type="radio" name="q6">To amplify signals</br></br>
   <input type="radio" name="q6">To filter traffic based on MAC addresses</br></br>
   <input type="radio" name="q6" id="correct6">To forward packets between different networks</br></br>
   <input type="radio" name="q6">To create local networks</br>
</div>
</br>

<div class="que_text">    
    7.Which protocol is used to convert domain names into IP addresses?</br>
</div>
<div class="answer">
   <input type="radio" name="q7">FTP</br></br>
   <input type="radio" name="q7" id="correct7">DNS</br></br>
   <input type="radio" name="q7">HTTP</br></br>
   <input type="radio" name="q7">SMTP</br>
   </div>
</br>

<div class="que_text">    
    8.In TCP/IP, what does "IP" stand for?</br>
</div>
<div class="answer">
   <input type="radio" name="q8" id="correct8">Internet Protocol</br></br>
   <input type="radio" name="q8">Internal Protocol</br></br>
   <input type="radio" name="q8">Information Protocol</br></br>
   <input type="radio" name="q8">Intranet Protocol</br>
</div>
</br>

<div class="que_text">    
    9.Which of the following is a standard protocol for sending emails?</br>
</div>
<div class="answer">
   <input type="radio" name="q9">FTP</br></br>
   <input type="radio" name="q9">DNS</br></br>
   <input type="radio" name="q9" id="correct9">SMTP</br></br>
   <input type="radio" name="q9">HTTP</br>
</div>
</br>

<div class="que_text">    
    10.In which network topology do all nodes connect to a central hub?</br>
</div>
<div class="answer">
   <input type="radio" name="q10">Ring</br></br>
   <input type="radio" name="q10">Mesh</br></br>
   <input type="radio" name="q10" id="correct10">Star</br></br>
   <input type="radio" name="q10">Bus</br>
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