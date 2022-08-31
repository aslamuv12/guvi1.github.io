<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=div, initial-scale=0">
    <title>Student Registration</title>

    <style>
        .login-form {
            width: 250px;
            margin: 0.5px;
            background-color: white;
            margin-left: auto;
            margin-right: auto;
        }

        label {
            font-family: 12px 'Roboto', sans-serif;
            font-weight: bold;
            color: #4b4949;

        }

        .required label:after {
            color: #e32;
            content: ' *';
            display: inline;
        }

        .caption:before {
            color: #e32;
            display: inline;
            content: ' *';
            font-weight: bold;
        }
 input[type=text], input[type=date], input[type=number], input[type=password], select {
 width:300px;
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
.form-area{
	position: absolute;
	top: 5%;
	left: 25%;
	right: 20%
	transform: translate(-50%,-50%);
	
	box-sizing: border-box;
	background:#ccffe6;
	padding: 20px;
	border-radius:100px;
}
    </style>
<script>
function myFunction()
{
window.location.assign("http://localhost/guvi1/guvilogin.php");
}
</script>

</head>

<body style="background-image: url('images/hero_1.jpg'); background-repeat:no-repeat;">
<a style="color: #fff;" href="index.php"><b>Go To Home Page</b></a>
    <form action="guviregis.php" onSubmit="return UserValidateForm()" method="post" enctype="multipart/form-data"><center>
                    <div class="form-area">
                    <div class="float-center text-center">
                        <h1 class="font-size-20 s m-b-5 text-danger">Student Registration</h1>
                    </div>
			    
                	    <label for="firstname">First Name</label><br>
                            <input type="text" id="firstname" name="firstname" placeholder="First Name" class="form-control"><br></th>
                        
                            <label for="lastname">Last Name</label><br>
                            <input type="text" id="lastname" name="lastname" placeholder="Last Name" class="form-control"><br></th></tr>
                           
                            <label for="">Mobile Number</label><br>
                            <input type="number" id="contactno" name="contactno" placeholder="enter mobile number" class="form-control"><br></th>
                         
                            <label for="email">Email Address</label><br>
                            <input type="text" id="email" name="email" placeholder="enter mail" class="form-control"><br></th>
                            
                            <label for="">Password</label><br>
                            <input type="text" id="password" name="password" placeholder="" class="form-control"><br></th>
                            
                            <label for="">Confirm Password</label><br>
                            <input type="text" id="cfpassword" name="cfpassword" placeholder="" class="form-control"><br></th></tr>
                            
                	   
                    		
				<div class="col-sm-12 caption">Represented Fileds are required. </div>
                	    

                	
                	 
         
                        <p><a href="alert.php"><b> Register Now</b></a></p>
	<div class="mx-5 pt-3 mb-1">
                    	<p class="font-small grey-text d-flex justify-content-center">Already Registered? <a href="guvilogin.php" class="blue-text ml-1">
                            Sign in</a></p>
                	</div>
                	</div>
                	
                	
		</div>
		</div>
            </div>
            <!-- Card Body Ends -->
        </div>
    </form>

<br><br><br>
</body>

</html>