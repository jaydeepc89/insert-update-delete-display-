<?php
session_start();
error_reporting(0);
$conn=mysqli_connect("localhost","root","","employee") or die("not succeful");
$id=$_REQUEST['edit'];

$query = "SELECT * from emp where ID='".$_GET['edit']."'"; 
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="bootstrap.min.css" />
<style>
.tablecard{ 
  background-color:#;
  box-shadow: 2px 15px 50px rgba(0,0,0,0.5);
  position: relative !important;
  width: 50% !important;
  word-wrap: ;
  padding: 15px 0px 0px 0px;
  overflow-x: scroll !important;
}
</style>
</head>
<body>
<div class="form">

<h3 class="text-info text-center">Update Record</h3> 
<hr/>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new'] == 1 )
{

	$id=$_REQUEST["id"];	
	$name=$_REQUEST["name"];
	$email=$_REQUEST["email"];
	$mobile=$_REQUEST["mobile"];
	$address=$_REQUEST["address"];
	$gender=$_REQUEST["gender"];
	$education=$_REQUEST["education"];
	$password=md5($_REQUEST["password"]);
	$confirmpassword=md5($_REQUEST["confirmpassword"]);
	$hobby=implode(",",$_REQUEST["hobby"]);
  //$hobby=$_REQUEST["hobby"];
	
	$updt = "UPDATE `emp` SET `name` = '$name', `email` = '$email',
	`mobile` = '$mobile',	`address` = '$address', `gender` = '$gender',
	`education` = '$education', `password` = '$password',
	`confirmpassword`='$confirmpassword',`hobby` = '$hobby'
	WHERE ID='".$_GET['edit']."'";
	
	mysqli_query($conn, $updt);
	echo "<script>alert('Record Updated Successfully.');</script>";
	header("refresh:0.1; url=process.php");
	/*header("location:process.php");*/
  
}
	else 
	{
	?>
	<div class="container tablecard">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			
    <form action="" method="post" onsubmit="return validate();">
    <input type="hidden" name="new" value="1" />
 
	<input name="id" type="hidden" value="<?php echo $row['id'];?>" /> 
			  <div class="form-group col-md-6">
    			<label for="name">Name:</label>
    			<input type="text" class="form-control " id="name" name="name" 
          value="<?php echo $row['name'];?>" required>
  			</div>

  			<div class="form-group col-md-6">
    			<label for="email">E-mail:</label>
    			<input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email'];?>" required >
  			</div>

        <div class="form-group col-md-6">
    			<label for="mobile">Mobile:</label>
    			<input type="tel" maxlength="10" class="form-control" id="mobile" name="mobile" value="<?php echo $row['mobile'];?>" required>
  			</div>

  			<div class="form-group col-md-6">
    			<label for="address">Address:</label>
    			<textarea class="form-control" rows="2" id="address" name="address" >
    				<?php echo $row['address'];?>
    			</textarea>
  			</div>

  			<div class="form-group col-md-6">
    		<label for="gender">Gender:</label><br>
        
    		<input type="radio" name="gender" value="male" <?php if($row['gender'] == "male"){ echo"checked";}?>>&nbsp;Male&nbsp;&nbsp;&nbsp;
    		<input type="radio" name="gender" value="female" <?php if($row['gender'] == "female"){ echo"checked"; }?> >&nbsp;Female&nbsp;&nbsp;&nbsp;

       <!--<select name="gender" class="form-control text-primary" >
          <option >Select</option>
          <option value="male" <?php if($row['gender'] == "male"){ ?> selected="selected" <?php } ?> >Male</option>
          <option value="female"  <?php if($row['gender'] == "female"){ ?> selected="selected" <?php } ?> >Female</option>
          <option value="other"  <?php if($row['gender'] == "other"){ ?> selected="selected" <?php } ?> >Other</option>
        </select>-->
  			</div>

  			<div class="form-group col-md-6">
    		<label>Education:</label>
			<select name="education" class="form-control">
    			<option>Select</option>
    			<option value="mca"  <?php if($row['education'] == "mca"){ ?> selected="selected" <?php } ?> >MCA</option>
    			<option value="bca"  <?php if($row['education'] == "bca"){ ?> selected="selected" <?php } ?> >BCA</option>
    			<option value="be"  <?php if($row['education'] == "be"){ ?> selected="selected" <?php } ?> >BE</option>
    		</select>
  			</div>

  			

  			<div class="form-group col-md-6">
    			<label for="password">password:</label>
    			<input type="password" class="form-control" id="password" name="password" value="<?php echo $row['password'];?>">
				<span id="fpassword" style="color: red"></span>
  			</div>

			<div class="form-group col-md-6">
				<lable for="confirmpassword"><b>Confirm Password</b></lable>
				<input type="password" class="form-control" id="confirmpassword" name="confirmpassword" value="<?php echo $row['confirmpassword'];?>">
				<span id="fconfirmpassword" style="color: red"></span>
			</div>

	
			<div class="form-group col-md-12">
    			<label style="color: black;">Hobby:</label><br/>
				<?php $hobbyarr=explode(",",$row['hobby']); ?>
    			<input type="checkbox"  id="exp" name="hobby[]" value="reading"<?php if($hobbyarr[0] == "reading"){ ?> checked="true" <?php } ?>>&nbsp;Reading&nbsp;&nbsp;&nbsp;
    			<input type="checkbox"  id="exp" name="hobby[]" value="cricket"<?php if($hobbyarr[0] == "cricket" || $hobbyarr[1] == "cricket"){ ?> checked="true" <?php } ?>>&nbsp;Cricket&nbsp;&nbsp;&nbsp;
    			<input type="checkbox"  id="exp" name="hobby[]" value="swiming"<?php if($hobbyarr[0] == "swiming" || $hobbyarr[1] == "swiming" || $hobbyarr[2] == "swiming"){ ?> checked="true" <?php } ?>>&nbsp;Swiming&nbsp;&nbsp;&nbsp;
			</div>  			

			<div class="form-group col-md-12 ">
				<input type="submit" class="btn btn-success btn-block" name="update" value="UPDATE RECORD" onclick="submit">
			</div>
		</form>
     </div>
	<?php }  ?>
	</div>
</div>

<script type="text/javascript">
  
      function validate(){

        var password=document.getElementById('password').value;
        var conpassword=document.getElementById('confirmpassword').value;

        //password 

         if (password == "")                        
       { 
          alert("Please enter your password"); 
          fpassword.focus(); 
          return false; 
      } 
       if(password.length <= 5)
       {
        alert("password length short");
        fpassword.focus();
        return false;
       }

     if(conpassword=="")
     {
      alert("plz enter conpassword");
      return false; 
     }
     else if(password!=conpassword){
      alert("password not match");
      return false;
     }
     else if(conpassword==""){
      alert("please fill the password");
      return false;
     }
      }
</script>

</body>
</html>

<!--$status = "Record Updated Successfully In Your Database. </br></br>

  <a href='process.php?id='".$_POST['id']."''>>View Updated Record Here</a>";
    echo '<p style="color:blue;">'.$status.'</p>'; 
     -->