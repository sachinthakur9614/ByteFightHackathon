



<!DOCTYPE html>
<html>

<head>
<?php include "header.php";
include "db.php";

 ?>



<?php



if(isset($_POST['login'])){

$error="";



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













//$mob = htmlspecialchars($_POST['mob'],ENT_QUOTES);

$date = date("Y-m-d H:i:s");






if(empty($error))
{


$sql = "SELECT * FROM signup WHERE email = '$email'";

      $result = mysqli_query($conn,$sql);
      $login_row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      $count = mysqli_num_rows($result);

     
    
      if($count == 1) {
         
$sql1 = "SELECT * FROM signup WHERE email = '$email' AND password='$password'";

      $result = mysqli_query($conn,$sql1);
      $login_row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      $count = mysqli_num_rows($result);

       if($count == 1) {

        $_SESSION['lab_hackuser_login'] = 1; 
      
          

header('Location:index.php');
      
        
        
     }

      else
      {
        $error = "<b>Incorrect</b> Password";
      }




}
else
{
 $error=" Email Id is not Registered ";
}

}

}


 ?>

	<title>Login</title>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">

<h1 class="text-center"> Login</h1>
<hr>
	


<div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-3 login-box">

<?php if (isset($success) && !empty($success)) { ?><div class="alert alert-primary" role="alert"><?php echo $success; ?></div><br><?php } ?>

<?php if (isset($_SESSION['success_mess']) && !empty($_SESSION['success_mess'])) { ?><div class="alert alert-primary" role="alert"><?php echo $_SESSION['success_mess']; $_SESSION['success_mess']=""; ?></div><br><?php } ?>
<?php if (isset($error) && !empty($error)) { ?><div class="alert alert-primary" role="alert"><?php echo $error; ?></div><br><?php } ?>



<form action="" method="post" id="signup-form">
  

  <div class=" form-group input-group-lg form-group">

         <label for="student_tutor"><h4>Email<sup>*</sup> : &nbsp;</h4></label>
        <input type="email" class="form-control"   name="email" placeholder="example@something.com" size="21" >
  </div>

  <div class=" form-group input-group-lg form-group">
  
         <label for="student_faculty"><h4>Password<sup>*</sup> : &nbsp;</h4></label>
        <input type="password" class="form-control"  name="password" placeholder="First Name" size="21" >
  </div>

  <div class=" form-group input-group-lg form-group">
  
        
        <input type="Submit" class="form-control btn btn-info" name="login" placeholder="Submit" required>
  </div>

  


</form>
</div>
</div>



<?php include "footer.php" ?>

</body>
<html>
