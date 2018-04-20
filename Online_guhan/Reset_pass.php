
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
    color:blue;
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

    <a href="login.php" style="color:white;">Login</a> &nbsp; &nbsp; <a href="forgot_pass.php" style="color:white;">
        Lost your password</a>
    <br><br>
<div class="login-block" style="margin-top:200px;">
    <h1>Reset using old to new</h1>
    <form method="post" action="Reset_pass.php">
    <input type="text" value="" placeholder="Email" name="email" id="username" />
	<input type="text" value="" placeholder="Old password" name="old" id="username" />
    <input type="password" value="" placeholder="New password" name="new" id="password" />
    <input class="i1" type="submit" name="submit" value="Reset"> </input></form>
</div>
  </body>
  </html>

<?php
       if(empty($_POST['email']))
       {
           echo "<b style='color:white;'>Please fill the required filed</b>";
           return false;
       }
       if(!empty($_POST['email'])){
           $e =$_POST['email'];
       }
       if(empty($_POST['old']))
       {
           echo "Old Password is required<br>";
           return false;
       }
       if(!empty($_POST['old'])){
           $o =$_POST['old'];
       }
       
       if(empty($_POST['new']))
       {
           echo "New is required<br>";
           return false;
       }
       if(!empty($_POST['new'])){
           $n =$_POST['new'];
       }
       
       

        $dbhost ="localhost";
	    $dbuser="id3242175_guha_5599";
	    $dbpass="guha0804";
	    $conn = mysqli_connect( $dbhost, $dbuser, $dbpass, "id3242175_guha");




$q="update test_table set  Pass='$n' where Email='$e' and Pass='$o'";

$query=mysqli_query($conn,$q);

if($query)
{
    echo "<b style='color:white;'>Password updated successfully</b>";
}

?>

