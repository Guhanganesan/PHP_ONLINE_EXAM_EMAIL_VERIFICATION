<html>
  <style>
  body {
    background-color:#807D7C;
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 213px;
    height: 36px;
    background: url('http://i.imgur.com/fd8Lcso.png') no-repeat;
    margin: 30px auto;
}

.login-block {
	
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block i1 {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block i1:hover {
    background: #ff7b81;
	 cursor:pointer;
}

  </style>
  <body>
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

   <a href="login.php" style="color:white;">Login</a> &nbsp; &nbsp; <a href="Reset_pass.php" style="color:white;">
        Reset Password</a>
    <p style="margin-left:400px; color:white;"> Please provide your registered email and check your email to reset password</p>
<div class="login-block" style="margin-top:200px;">
    <h1></h1>
	<form method='post' action='forgot_pass.php'>
    <input type="text" value="" placeholder="Email" name="email" id="username" />
	
    <input class="i1" type="submit" name="submit" value="Next"> </input></form>
</div>
  </body>
  </html>

<?php
       
       
       if(empty($_POST['email']))
       {
           echo "";
           return false;
       }
       if(!empty($_POST['email'])){
           $e =$_POST['email'];
       }
       

        $dbhost ="localhost";
	    $dbuser="id3242175_guha_5599";
	    $dbpass="guha0804";
	    $conn = mysqli_connect( $dbhost, $dbuser, $dbpass, "id3242175_guha");




$q="select User, Pass from test_table where Email='$e' ";

$query=mysqli_query($conn,$q);

$row=mysqli_fetch_row($query);


   $a="Username is:  ";
   $b="Password is:   ";
   $c=$a."   ".$row[0]."   and   ".$b.$row[1];

if($row)
{
$to      = $e;
$subject = 'Your Password';
$message = $c;
$headers = 'From: guhan@payilagam.com' . "\r\n" .
    'Reply-To: $e' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$mail=mail($to, $subject, $message, $headers);
if($mail)
{
	echo "<b style='color:white;'>Kindly Check your Email</b>";
}

}



?>

