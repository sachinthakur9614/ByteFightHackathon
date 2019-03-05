

<!DOCTYPE html>
<html>

<head>
<?php include "header.php";
include "db.php";

 ?>



<?php



if(isset($_POST['signup'])){

$error="";
if(!empty($_POST['fname']))
{
  $fname = htmlspecialchars($_POST['fname'],ENT_QUOTES);
}
else
{
  $error.="Please Enter The First Name<br>";
}

if(!empty($_POST['lname']))
{
  $lname = htmlspecialchars($_POST['lname'],ENT_QUOTES);
}
else
{
  $error.="Please Enter The Last Name<br>";
}

if(!empty($_POST['email']))
{
$email = htmlspecialchars($_POST['email'],ENT_QUOTES);
}
else
{
  $error.="Please Enter Your Email id<br>";
}

if(!empty($_POST['password']))
{
$password = $_POST['password'];
}
else
{
  $error.="Please Enter Your Password<br>";
}


$role = "user";

if(!empty($_POST['zipcode']))
{
$zipcode = htmlspecialchars($_POST['zipcode'],ENT_QUOTES);
}
else
{
  $error.="Please Enter the Zipcode<br>";
}


if(!empty($_POST['city']))
{
$city = htmlspecialchars($_POST['city'],ENT_QUOTES);
}
else
{
  $error.="Please Enter the City<br>";
}


if(!empty($_POST['State']))
{
$state = htmlspecialchars($_POST['State'],ENT_QUOTES);
}
else
{
  $error.="Please Enter State<br>";
}



if(!empty($_POST['Country']))
{
$country = htmlspecialchars($_POST['Country'],ENT_QUOTES);
}
else
{
  $error.="Please Enter the Country<br>";
}



if(!empty($_POST['mobile']))
{
$mobile = htmlspecialchars($_POST['mobile'],ENT_QUOTES);
}
else
{
  $error.="Please Enter the Mobile Number <br>";
}












//$mob = htmlspecialchars($_POST['mob'],ENT_QUOTES);

$date = date("Y-m-d H:i:s");

/*
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $error .= "Invalid Email Id<br>";
}
*/





if(empty($error))
{




  $sql = "INSERT INTO `signup`( `fname`, `lname`, `email`, `password`, `zipcode`, `city`, `state`, `country`, `mobile`) VALUES ('$fname','$lname','$email','$password','$zipcode','$city','$state','$country','$mobile')";

    header('Location: index.php');

  if ($conn->query($sql) === TRUE) 
  {

    $uid = $conn->insert_id;

    header('Location: index.php');





    $success = "Thank you for registering on Labyrinth. Verification mail has been sent to your email id. Verify your account before loging in.";
    echo $success;

  }
  else 
  {
    $error .= "<b>Error!</b> Server Error : " . $conn->error;
  }



}
else
{
 $error=" Could not sql process";
}

}
 ?>

	<title>Sign up</title>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6">

<h1 class="text-center"> Registration</h1>
<hr>
	


<div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-3 login-box">

<?php if (isset($success) && !empty($success)) { ?><div class="alert alert-success" role="alert"><?php echo $success; ?></div><br><?php } ?>

<?php if (isset($_SESSION['success_mess']) && !empty($_SESSION['success_mess'])) { ?><div class="alert alert-success" role="alert"><?php echo $_SESSION['success_mess']; $_SESSION['success_mess']=""; ?></div><br><?php } ?>
<?php if (isset($error) && !empty($error)) { ?><div class="alert alert-danger" role="alert"><?php echo $error; ?></div><br><?php } ?>



<form action="" method="post" id="signup-form">
  
  <div class=" form-group input-group-lg form-group">
     
         <label for="student_faculty"><h4>First Name<sup>*</sup> : &nbsp;</h4></label>
        <input type="text" class="form-control"  name="fname" placeholder="First Name" size="21">
  </div>
 

  <div class=" form-group input-group-lg form-group">
    
         <label for="student_faculty"><h4>Last Name<sup>*</sup> : &nbsp;</h4></label>
        <input type="text" class="form-control" name="lname" placeholder="Last Name" size="21" required>
  </div>

  <div class=" form-group input-group-lg form-group">

         <label for="student_tutor"><h4>Email Name<sup>*</sup> : &nbsp;</h4></label>
        <input type="email" class="form-control"   name="password" placeholder="example@something.com" size="21" required>
  </div>

  <div class=" form-group input-group-lg form-group">
  
         <label for="student_faculty"><h4>Password<sup>*</sup> : &nbsp;</h4></label>
        <input type="text" class="form-control"  name="fname" placeholder="First Name" size="21" required>
  </div>

  <div class=" form-group input-group-lg form-group">
  
         <label for="student_faculty"><h4>ZipCode<sup>*</sup> : &nbsp;</h4></label>
        <input type="text" class="form-control" minlength="6" maxlength="6" onkeypress="return validateNumber(event)" name="zipcode" placeholder="Zip Code" size="21" required>
  </div>

  <div class=" form-group input-group-lg form-group">
  
         <label for="student_faculty"><h4>City<sup>*</sup> : &nbsp;</h4></label>
        <input type="text" class="form-control"  name="city" placeholder="Bangalore" size="21" required>
  </div>

  <div class=" form-group input-group-lg form-group">
  
         <label for="student_faculty"><h4>State<sup>*</sup> : &nbsp;</h4></label>
        <input type="text" class="form-control"  name="state" placeholder="Karnataka" size="21" required>
  </div>

  <div class=" form-group input-group-lg form-group">
  
         <label for="student_faculty"><h4>Country<sup>*</sup> : &nbsp;</h4></label>
        <input type="text" class="form-control"   name="country" placeholder="India" size="21" required>
  </div>


  <div class=" form-group input-group-lg form-group">
  
         <label for="student_faculty"><h4>Mobile Number<sup>*</sup> : &nbsp;</h4></label>
        <input type="text" class="form-control"  minlength="10" maxlength="10" onkeypress="return validateNumber(event)" name="mobile" placeholder="Mobile No" size="21" required>
  </div>



  <div class=" form-group input-group-lg form-group">
  
        
        <input type="Submit" class="form-control btn btn-info" name="signup" placeholder="Submit" required>
  </div>

  


</form>
</div>
</div>



<?php include "footer.php" ?>

</body>
<html>