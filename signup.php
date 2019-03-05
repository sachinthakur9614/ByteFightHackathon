

<!DOCTYPE html>
<html>

<head>
<?php include "header.php" ?>



<?php



if(isset($_POST['signup'])){

$error="";
if(!empty($_POST['type']))
{
  $type = htmlspecialchars($_POST['type'],ENT_QUOTES);
}
else
{
  $error.="Please select Student/Teacher<br>";
}

if(!empty($_POST['name']))
{
  $name = htmlspecialchars($_POST['name'],ENT_QUOTES);
}
else
{
  $error.="Please enter name<br>";
}

if(!empty($_POST['email']))
{
$email = htmlspecialchars($_POST['email'],ENT_QUOTES);
}
else
{
  $error.="Please enter email id<br>";
}

if(!empty($_POST['password']))
{
$password = $_POST['password'];
}
else
{
  $error.="Please enter password<br>";
}

if(!empty($_POST['repassword']))
{
$repassword = $_POST['repassword'];
}
else
{
  $error.="Please enter re-password<br>";
}
$role = "user";

if(!empty($_POST['regno']))
{
$regno = htmlspecialchars($_POST['regno'],ENT_QUOTES);
}
else
{
  $error.="Please enter registration no.<br>";
}



$mob = htmlspecialchars($_POST['mob'],ENT_QUOTES);

$date = date("Y-m-d H:i:s");


if($type=="Faculty")
{
  $class = "";
  $course = "";
}
else if($type=="Student")
{
  if(empty($_POST['class']))
  {
    $error.="Please enter your class<br>";
  }
  else
  {
    $class = htmlspecialchars($_POST['class'],ENT_QUOTES);
  }

  if(empty($_POST['course']))
  {
    $error.="Please enter your course<br>";
  }
  else
  {
    $course = htmlspecialchars($_POST['course'],ENT_QUOTES);
  }
  
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $error .= "Invalid Email Id<br>";
}

if($type=="Faculty" && strlen($regno)>4)
{
  $error.="Invalid Registration Number<br>";
}

if (strlen($email)<20 || substr($email, -19)!="christuniversity.in") {
  $error .= "Invalid Email Id<br>";
}

if($type=="Student" && strlen($regno)!=7)
{
  $error.="Invalid Registration Number<br>";
}

if($password!=$repassword)
{
  $error.="Passwords does not match<br>";
}

$pass = password_hash($password,PASSWORD_DEFAULT);

$vercode = md5(uniqid(rand(), true));

 
    $ucheck_sql = "SELECT uemail,uregno FROM users WHERE uemail='$email' OR uregno='$regno'";
    $ucheck_result = $conn->query($ucheck_sql); 

    if($ucheck_result->num_rows != 0)
    {
      $error.="Email Id or Registration No. Already Exists!<br>";
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
	
<form action="#" method="post" id="signup-form">
  
  <div class=" form-group input-group-lg form-group">
     
         <label for="student_faculty"><h4>First Name<sup>*</sup> : &nbsp;</h4></label>
        <input type="text" class="form-control"  name="fname" placeholder="First Name" size="21" required>
  </div>
 

  <div class=" form-group input-group-lg form-group">
    
         <label for="student_faculty"><h4>Last Name<sup>*</sup> : &nbsp;</h4></label>
        <input type="text" class="form-control" name="lname" placeholder="Last Name" size="21" required>
  </div>

  <div class=" form-group input-group-lg form-group">

         <label for="student_faculty"><h4>Email Name<sup>*</sup> : &nbsp;</h4></label>
        <input type="password" class="form-control"   name="password" placeholder="example@something.com" size="21" required>
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
        <input type="text" class="form-control" maxlength="7" name="zipcode" placeholder="Zip Code" size="21" required>
  </div>

  <div class=" form-group input-group-lg form-group">
  
         <label for="student_faculty"><h4>State<sup>*</sup> : &nbsp;</h4></label>
        <input type="text" class="form-control" maxlength="7" name="zipcode" placeholder="Zip Code" size="21" required>
  </div>

  <div class=" form-group input-group-lg form-group">
  
         <label for="student_faculty"><h4>Country<sup>*</sup> : &nbsp;</h4></label>
        <input type="text" class="form-control" maxlength="7"  name="zipcode" placeholder="Zip Code" size="21" required>
  </div>


  <div class=" form-group input-group-lg form-group">
  
         <label for="student_faculty"><h4>Mobile Number<sup>*</sup> : &nbsp;</h4></label>
        <input type="text" class="form-control" maxlength="7" onkeypress="return validateNumber(event)" name="zipcode" placeholder="Zip Code" size="21" required>
  </div>


  


</form>
</div>
</div>



<?php include "footer.php" ?>

</body>
<html>