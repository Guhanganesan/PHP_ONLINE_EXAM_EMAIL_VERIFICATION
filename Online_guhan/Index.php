<html>
    
    <style>
        
        @import "compass/css3";

$back-color: #F0F0F0;
$green-border: #72B372;

@mixin linear-gradient($top, $bottom) {
  background: $top;
  background: -webkit-linear-gradient($top, $bottom);
	background: -moz-linear-gradient($top, $bottom);
	background: -o-linear-gradient($top, $bottom);
	background: linear-gradient($top, $bottom);
}

.main > div {
  display: inline-block;
  width: 49%;
  margin-top: 10px;
}
.two{
    .register {
       border: none; 
        
        h3 {
          border-bottom-color: #909090;
        }
    
        .sep{
          border-color: #909090;
        }
    }
}
.register {
  	width: 500px;
  	margin: 10px auto;
  	padding: 10px;
  	border: 7px solid $green-border;
  	border-radius: 10px;
  	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	  color: #444;
  	background-color: $back-color;
  	box-shadow: 0 0 20px 0 #000000;
  	
  h3 {
	  	margin: 0 15px 20px;
	  	border-bottom: 2px solid $green-border;
	  	padding: 5px 10px 5px 0;
	  	font-size: 1.1em;
	}

	div{
		margin: 0 0 15px 0;
	  	border : none;
	}

	label {
	  	display: inline-block;
	  	width: 25%;
	  	text-align: right;
	  	margin: 10px
	}

	input[type=text], input[type=password]{
  		width: 65%; 
  		font-family: "Lucida Grande","Lucida Sans Unicode",Tahoma,Sans-Serif;
  		padding: 5px;
  		font-size: 0.9em;
  		border-radius: 5px;
  		background: rgba(0, 0, 0, 0.07);
	}
  
  input[type=text]:focus, input[type=password]:focus{
		background: #FFFFFF;
	}

	.button {
  		font-size: 1em;
  		border-radius: 8px;
  		padding: 10px;
  		border: 1px solid #59B969;
  		box-shadow: 0 1px 0 0 #60BD49 inset;
  		@include linear-gradient(#63E651, #42753E);
  		
		&:hover {
  			@include linear-gradient(#51DB1C, #6BA061);
  		}
	}
	
	.sep {
	  	border: 1px solid $green-border;
	  	position: relative;
	  	margin: 35px 20px;
	}

	.or {
	  	position: absolute;
	  	width: 50px;
	 	left: 50%;
	  	background: $back-color;
	  	text-align: center;
	  	margin: -10px 0 0 -25px;
	  	line-height: 20px;
	}

	.connect {
	  	width: 400px;
	  	margin: 0 auto;
	  	text-align: center;
	}

	.social-buttons {
	  	display: inline-block;
	  	min-width: 150px;
	  	height: 50px;
	  	margin: 0 5px 10px;
	  	border-radius: 10px;
	  	text-shadow: 1px 1px 5px #000000;

	  	a {
	  		display: block;
	  		height: 100%;
	  		text-decoration: none;
	  		color: #FFFFFF;
	  		padding: 10px 15px;
		}

		span {
	  		font-size: 30px;
	  		margin-left: 35px;
		}
	}

	.facebook {
	  	@include linear-gradient(#415EA3, #2E4A88);
	  	
	  	&:hover {
			@include linear-gradient(#3B5591, #2A437C);
		}

		a {
	  		background: url(../images/logo_fb_31x42.png) no-repeat 5% 10%;
		}
	}

	.twitter {
	  	@include linear-gradient(#41C0F3, #3FBAEC);
	  	
		&:hover {
	  		@include linear-gradient(#3EB1DF, #3EAAD6);
	  	}

		a {
	  		background: url(../images/logo_twitter_38x32.png) no-repeat 6% 25%;
		}
	}
}
    </style>
<body>
    <script>
        
        $(document).ready(function(){
  var placeholder = null;
  $('input[type=text]').focus(function(){
    placeholder = $(this).attr("placeholder");
    $(this).attr("placeholder","");
  });
  $('input[type=text]').blur(function(){
    $(this).attr("placeholder", placeholder);
  });
});
        
    </script>
    
 <div class="main">
      
      
      <div class="two" >
        <div class="register" style="background-color:#197706;color:white; font-size:22;">
          <h3>Create your account</h3>
          <form id="reg-form1" action='Index.php' method='post'>
            <div>
              <label for="name1">Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="name1" name="name" spellcheck="false" placeholder="xyz@gmail.com"/>
            </div>
            <br>
            <div>
              <label for="username1">Username</label>
              <input type="text" id="username1" name='user' spellcheck="false" placeholder="xyz123" />
            </div>
            <br>
            <div>
              <label for="password1">Password</label>
              <input type="password" id="password1" name='pass' placeholder="*********"/>
            </div>
            <br>
            <div>
              <label></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="submit" name="submit" value="Create Account" id="create-account1" class="button"/>
              <a href="login.php" style="color:white;">Login</a>&nbsp;&nbsp;<a href="Reset_pass.php" style="color:white;">Reset pass</a> &nbsp;&nbsp;<a href="forgot_pass.php" style="color:white;">Forgot pass</a>
            </div>
          </form>
         
        </div>
      </div>
    </div>
</body>
</html>
<!--
<html>
     
    <form action='Index.php' method='post'>
          Name: <input name='name'></input><br><br>
           User:<input name='user'></input><br><br>
           Pass:<input name='pass'></input><br><br>
           <input type='submit' name='submit' value='submit'></input>
        
    </form>
    <a href='login.php'> Login</a>
    
</html>

-->
          
          <?php 
      
     if(isset($_POST['submit']))		
		{
		$dbhost ="localhost";
	    $dbuser="id3242175_guha_5599";
	    $dbpass="guha0804";
	    $conn = mysqli_connect( $dbhost, $dbuser, $dbpass, "id3242175_guha");
	 // Change user us default in sql
	 
	   // mysql_select_db("payilagam");
		
        $name=$_POST['name']; 		$user=$_POST['user'];		$pass=$_POST['pass']; 
        
        if(empty($_POST['name'])){
            echo "Fill name<br>";
            return false;
        }
        if(empty($_POST['user'])){
            echo "user<br>";
            return false;
        }
        
		
		if(empty($_POST['pass'])){
            echo "Pass ";
            return false;
		}
        
        
        
        
		$query="Insert into test_table values('$name','$user','$pass')";
		
		if(mysqli_query($conn,$query))
		{
		    echo "<b style='color:blue;'>Successfullty Registered!!</b>";
		}
		else{
		    echo "<b style='color:blue;'>You have already registered</b>";
		}
		
	  
		
	}
?>

          
         




