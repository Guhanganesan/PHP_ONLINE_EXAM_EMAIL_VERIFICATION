<?php 
      ob_start();
      session_start();
     if(isset($_POST['submit']))		
		{
		$dbhost ="localhost";
	    $dbuser="id3242175_guha_5599";
	    $dbpass="guha0804";
	    $conn = mysqli_connect( $dbhost, $dbuser, $dbpass, "id3242175_guha");
	   // mysql_select_db("payilagam");
		
       		$user=$_POST['user'];		$pass=$_POST['pass']; 
			
		
		$q="select * from  test_table where User='$user' and Pass='$pass'";
	    $query=mysqli_query($conn, $q);
		$row=mysqli_fetch_row($query); 
		
		 $_SESSION['pass']=$row[2];
		 
		 //$s=$_SESSION['pass'];
		 
		 //setcookie('pass', $s, time()+30*60*60);
		 
		if($user==$row[1] && $pass==$row[2])
		{  
		   
		 
		   // echo "Thank You";
		   header("location:chapter.php");
		}  
		else
		{
		   // echo "wrong";
		 header("location:login.php");   
		}
		
		}  
		//unset($user);
		ob_end_flush();
		?>
