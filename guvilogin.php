<?php
session_start();
$email = $pwd =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $email=$_POST['email'];
  $pwd=$_POST['pwd'];
}
PWD($email,$pwd);

function PWD($email,$pwd)
{?>
<html>
<head>
<style>
  input[type=text], input[type=date], input[type=password],select {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  resize: vertical;
}

.submit_button {
  background-color: #01CEFE;
  border: none;
  color: white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
border-radius: 20px;
  
}
.submit_button1:hover {
  background-color: #4CAF50;
  color: white;
}


</style>

<link rel="stylesheet" href="css/all.css">
</head>
<?php
         $servername = "localhost";
$username = "root";
$password = "";
$dbname = "crs";
$conn = mysqli_connect($servername, $username, $password, $dbname);


	?>
		<center>
		<br>
		<form action="" method="POST">
		<label for="email">EMail</label><br>
        	<input type="text" name="email" value="<?php echo $email; ?>"  /><br>
		<label for="pwd">Password</label><br>
        	<input type="password"  name="pwd" value="<?php echo $pwd; ?>"/><br>
		<input type="submit" name="SIGN_IN" value="SIGN IN" class="submit_button submit_button1" onSubmit="welcome.php">
		<br>
		</form>

	   	<?php
	   
	if( isset($_POST['SIGN_IN']))
       { 
  	$email=$_POST['email'];
  	$pwd=$_POST['pwd'];

	$sql = "SELECT * FROM users WHERE email='".$email."' AND password='".$pwd."' ";
	    $result = $conn->query($sql);
            if ($result->num_rows > 0) 
	    {	
			$_SESSION['email'] = $email;
                	$_SESSION['password'] = $pwd; 
                 //echo "<script>alert('Going to Company Dashboard.')</script>";
			echo "<script>window.location = 'welcome.php'</script>";        
	    }
	    else
            {
		unset($_POST['password']);
		echo "<script>alert('Invalid Login Details.')</script>";
	    }

	}
	
} 
 ?>
      