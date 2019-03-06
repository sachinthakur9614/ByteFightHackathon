







<!DOCTYPE html>
<html>

<head>

  <link rel="icon" type="image/png" href="logo.png"/>
<?php include "header.php";
include "../db.php";


 ?>

<?php



if(isset($_POST['submit'])){

$error="";
if(!empty($_POST['armytype']))
{
  $armytype = htmlspecialchars($_POST['armytype'],ENT_QUOTES);
}
else
{
  $error.="Please Select The Dance Form<br>";
}

if(!empty($_POST['file']))
{
  $file= htmlspecialchars($_POST['file'],ENT_QUOTES);
}
else
{
  $error.="Please Enter The Class Link <br>";
}





//$mob = htmlspecialchars($_POST['mob'],ENT_QUOTES);

$date = date("Y-m-d H:i:s");




/*


if(empty($error))
{

*/
 


  $sql = "INSERT INTO `docs`( `armytype`, `idcard`) VALUES ('$armytype','$file')";

    

  if ($conn->query($sql) === TRUE) 
  {

    //$uid = $conn->insert_id;
header('Location: index.php');

 echo "able to addd";

  }
  else 
  {
    $error .= "<b>Error!</b> Server Error : " . $conn->error;
  }


/*
}
else
{
 $error=" Could not sql process";
*/
}
 ?>








<br> 


<div class="main row">

<?php require('sidebar.php'); ?>

<div class="main_container col-lg-9 col-md-9 col-sm-9 col-xs-12">
  <div class="pull-right">
      <form action="" method="post" id="signup-form"  >
       

  <div class=" form-group input-group-lg form-group">
  
         <label for="student_faculty"><h4>Defence<sup>*</sup> : &nbsp;</h4> </label>
         <select class="form-control" name="armytype">  
           
           <option>Select the options</option>
           <option value="Classical">Army</option>
           <option value="MHip-Hop">Navy</option>
           <option value="Contemprorary">Indian Air Force</option>
           
           



         </select>
  </div>


  <div class=" form-group input-group-lg form-group">
        
           <label for="student_faculty"><h4>Parents Id<sup>*</sup> : &nbsp;</h4></label>
        <input type="file" class="form-control"  name="file">
          


                      
  </div>


  <div class=" form-group input-group-lg form-group">
  
        
        <input type="Submit" class="form-control btn btn-info" name="submit" placeholder="Register" required>
  </div>

  
      </form> 
  </div>
  <br><br>

	




