<?php
      ob_start();
      session_start();
       echo "Welcome dear friends!!!";
       
       if(!$_SESSION['pass'])
       {
           header('Location:login.php');
       }
?>





<html>
    <head>
        
	
    </head>
    <style>
             *{box-sizing:border-box;}
			 a{color:white;text-decoration:none;}
			 
            .header{width:auto;background-color:;
			height:60px;padding:3px;color:white;}
			
			.h0{float:left;}
			
			.h1{float:left;font-size:20px;font-weight:bold;text-align:center;margin-left:0px;
			margin-top:0px;background-color:;width:100px;}
			
			
			
			.h2{font-size:40px;font-weight:bold;text-align:center;margin-left:4px;}
			
            .header1{float:left;width:25%;padding:15px;}
            
            .body{width:auto;background-color:;height:500px;margin-top:-50px;}
            
              .body1{background-color:;float:left;}
              .body2{background-color:;height:123px;}
              
              .body3{width:50%;background-color:;height:250px;float:left;}
			  
			  form{margin:auto;color:blue;font-weight:bold;font-size:20px;}
			  input{color:blue; width:350;height:40;}
        
        
        
        
        
        
        ul li{border: 1px solid blue;width:120;height:50;text-align:center;
background-color:rgba(92, 236, 181,0.8 ) ;
border-radius:8px;float:left;}

ul li:hover{border: 1px solid blue;width:120;height:50;text-align:center;
background-color:red;
border-radius:8px;float:left;}

ul ul{margin-left:-42px;display:none;margin-top:-3px;}

ul li:hover ul{display:block;}

a{color:white;
  text-decoration:none;
}



    </style>
    
    <body style="background-color:#26998e;">
	
           <!------------------------HEADER---------------------------->
		   <div style="width:100%; height:auto;padding:10px;"
		   
		   
		  <div class="header" >
              
              <div style="color:white;font-size:32px;font-weight:bold;text-align:center;width:100%; height:100px; border:0px solid red;
			  position:fixed;">
			  Welcome to e-learning course</div>
              
          </div>
		  
		  
		  
		  <!--------------------------MENU--------------------------->
          <div class="header" style="height:250px;border:0px solid red;">
		      
			  <div class="h0"style="width:25%;border:0px solid red;float:left;">
			  
			  <img src="icon.PNG" style="height:150px;width:30%;"> </img>


			 </div>
			  
			  <div style="width:55%;float:left;"> 
			  
								 <p class="h2">Online Exam</p> 
								
								  <p class="h1"><a href="">Visit Payilagam</a></p>
								   <p class="h1">Chapter wise</p>
									<p class="h1">Mock Interview</p>
									 <p class="h1"style="padding:12px;" id="r1">Register</p>
									 
				  </div>
				  <div style="width:20%;border:0px solid red;float:left;"> 
				 <img src="test1.jpg" style="height:150px;width:100%"> </img> 
				  </div>
              
			
          </div>
          
          <!------------------------------BODY--------------------------------------------->
          
          
          <div class="body" style="">
              
			  <!---------------------------Register---------------->
			  
              <div class="body1" style="width:100%;color:white; height:750px;">
								  
							   <div class="body2" style="margin-left:30px;">
							   
											      <ul type="none">   <!-- circle, disc-->
                                                     <li><p><a href="#">JAVA</a> </p> </li>
                                                     <li><p> <a href="#">PHP </a> </p>
	 
                                                    	     <ul type="none">
                                                    	        <li><p><a href="https://guhanraghavan.000webhostapp.com/Online_guhan/PHP/php_q1.php">CHAPTER1</a> </p> </li>
                                                    	         <li><p><a href="#">CHAPTER2</a> </p> </li>
                                                    	          <li><p><a href="#">CHAPTER3</a> </p> </li>
                                                    	           <li><p><a href="#">CHAPTER4</a> </p> </li>
                                                    	 
                                                    	 
                                                    	 
                                                    	     </ul>
	                                                                    </li>
	 
	                                                     <li><p><a href="#">ANDROID</a> </p> 
	 
                                                                	 
                                                                	 <ul type="none">
                                                                	        <li><p><a href="#">CHAPTER1</a> </p> </li>
                                                                	         <li><p><a href="#">CHAPTER2</a> </p> </li>
                                                                	          <li><p><a href="#">CHAPTER3</a> </p> </li>
                                                                	           <li><p><a href="#">CHAPTER4</a> </p> </li>
                                                                	 
                                                                	 <li><p><a href="#">CHAPTER5</a> </p> </li>
                                                                	         <li><p><a href="#">CHAPTER6</a> </p> </li>
                                                                	          <li><p><a href="#">CHAPTER7</a> </p> </li>
                                                                	           <li><p><a href="#">CHAPTER8</a> </p> </li>
                                                                	 
                                                                	 
                                                                	     </ul>
                                                                	 
                                                                	 
                                                                	 
                                                                	 
                                                                	 </li>
                                                                	 <li><p><a href="#">.NET</a> </p> </li>
                                                                	 <li><p><a href="#">TESTING</a> </p> </li>
                                                                </ul>


																	   
							   </div>   
               
              </div>
			  
			  
			  <!------------------->
              
          
          
          <div class="header">
              
              <div class="header1">Guhan</div>
              <div class="header1">Guhan</div>
              <div class="header1">Guhan</div>
              <div class="header1">Guhan</div>
          </div>
        
		     </div>
		
		</div>
    </body>
    
</html>



