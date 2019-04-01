
<?php 
  session_start();
  error_reporting(0);

  $conn=mysqli_connect("localhost","root","","employee");
  $message="";

      if(!empty($_POST["remember"])) {
      setcookie ("email",$_POST["email"],time()+ 3600);
      setcookie ("password",$_POST["password"],time()+ 3600);
     // echo "Cookies Set Successfuly";
      } else {
      setcookie("email","");
      setcookie("password","");
     // echo "Cookies Not Set";
      }

    if(!empty($_POST["submit"])){
    $result=mysqli_query($conn,"SELECT * FROM emp WHERE email='".$_POST['email']."' AND password = '".md5($_POST['password'])."'");
    $row=mysqli_fetch_array($result);
    if(is_array($row)){
      //$_SESSION["id"]=$row['id'];
      $_SESSION["email"]=$row['email'];
      $_SESSION["password"]=$row['password'];
      $_SESSION["name"]=$row['name'];

      header("location:dashboard.php");
    }else{
        //$message="invalid email id and password!";
        echo "<script>alert('Email ID or Password Incorrect.');</script>";
    }    
  }
?>
<!DOCTYPE html> 
<html>
<head>
	<title>EMP</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
	<div class="row">
			
			<h3 class=" text-center " style="letter-spacing: 4px;"><b>Employee Login</b></b> </h3>
				<hr>

	   <div class="col-md-4 col-md-offset-4">
			
      <form action="" method="post" onsubmit="return validation()">
       
       <div class="row" style="background-color:#001111;box-shadow: 2px 15px 50px rgba(0,0,0,0.5); border:2px;border-radius: 10px;padding: 10px;">
         <div class="form-group col-md-12">
    			<label for="femail" style="color: white ;letter-spacing: 4px;">E-mail:</label><span id="femail" style="color:red;">*</span> 
      			<input type="text" class="form-control" id="email" name="email" value="<?php echo $_COOKIE['email']; ?>">
     			</div>
  			 <div class="form-group col-md-12">
    			<label for="password" style="color: white ;letter-spacing: 4px;">Password:</label><span id="fpassword" style="color: red">*</span>
    			<input type="password" class="form-control" id="password" name="password" value="<?php echo $_COOKIE['password']; ?>" >
  			   <span id="fpassword" style="color: red"></span>
        </div>

        <div class="form-group">
          <label style="margin-left: 16px"><input type="checkbox" value="1" name="remember">Remember Me</label>
        </div>
         <!--Submit Button-->

        <div class="form-group col-md-12 text-center ">
        	<input type="submit" class="btn btn-primary btn-block" name="submit" value="login">  
        </div>

        <div class="col-md-12">
        <a href="forgot.php" style="text-decoration: underline;">Forget Password?</a>
        <p class="">Not Registered Yet?&nbsp;<a href="registration.html" style="text-decoration: underline;">Register Here</a>
        </div>

    	</div>

        </form>
     </div>
	</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $.ajax({
            url:"query.php",
            type:'post',
            data: {"reson": "get_Data"},
            success:function(res){
                console.log(JSON.parse(res));
            }
        });
    }); 

     function validation()
    {
       
      var email = document.getElementById('email').value; 
     var password=document.getElementById('password').value;

      //Email Validate

      if(email == "")
      { 
      	alert("enter Your Mail Id Here");
        //document.getElementById('femail').innerHTML =" ** Please fill the email proper";
        return false;
      }
      if(email.indexOf('@') <= 0 )
      {
      	alert("plz declare @ & .com char");
        //document.getElementById('femail').innerHTML =" ** @ Invalid Position";
        return false;
      }

      if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.'))
      {
      	alert("invalid Email id");
       // document.getElementById('femail').innerHTML =" ** . Invalid Position";
        return false;
      }

      	// password 

      	 if (password == "")                        
   		 { 
        	alert("Please enter your password"); 
        	fpassword.focus(); 
        	return false; 
    	} 
    }
	</script>
</body>
</html>


