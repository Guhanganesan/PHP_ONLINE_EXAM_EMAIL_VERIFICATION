<?php 
      ob_start();
      session_start();
     if(isset($_POST['submit']))		
		{
		$dbhost ="localhost";
	    $dbuser="";
	    $dbpass="";
	    $conn = mysqli_connect( $dbhost, $dbuser, $dbpass, "id3242175_guha");
	   // mysql_select_db("payilagam");
		
        $name=$_POST['name']; 		$user=$_POST['user'];		$pass=$_POST['pass']; 
			
	    $q="select User from test_table";
	    
	    $q1=mysqli_query($conn,$q);
	    
	    $row=mysqli_fetch_assoc($q1);
	     // print_r($row);
	   
	   
	   
	   //$a=array("a"=>"red","b"=>"green","c"=>"blue");
       // array_search("red",$a);
	    
	    
	    
	    if(!array_search($user,$row)){
		
		
		
		                    $query="insert into test_table values ('$name','$user', '$pass')";
                    	
                    		if(mysqli_query($conn,$query))
                    	   {
                    		     $_SESSION['s']="Success";
                    		    //echo "<center><b style='color:white;'>*..Thank You!!!*</b></center>";
                    		    header("Location:Index.php");
                    	   }	    
	    }		 
            		else
            		{
            		     //$_SESSION['r']=5;
            		     
            		     header("Location:Index.php");
            		     
            		     //echo "Wrong, you have already resistered by this user name";
            		    
            		}
		
		
		
		}  
		
		ob_end_flush();
		?>
