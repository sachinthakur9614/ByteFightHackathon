




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
if(!empty($_POST['coursename']))
{
  $coursename = htmlspecialchars($_POST['coursename'],ENT_QUOTES);
}
else
{
  $error.="Please Select The Course Name<br>";
}

if(!empty($_POST['class']))
{
  $class= htmlspecialchars($_POST['class'],ENT_QUOTES);
}
else
{
  $error.="Please Enter The Class Name<br>";
}




//$mob = htmlspecialchars($_POST['mob'],ENT_QUOTES);

$date = date("Y-m-d H:i:s");




/*


if(empty($error))
{

*/
 

  $sql = "INSERT INTO `CourseN`(`coursename`, `class`, `uid`) VALUES ('$coursename','$class','1')";

    

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
  
         <label for="student_faculty"><h4>Select the course<sup>*</sup> : &nbsp;</h4> </label>
         <select class="form-control" name="coursename">  
           
           <option>Available Course</option>
           <option value="Sceince">Sceince</option>
           <option value="Maths">Maths</option>
           <option value="Compuer Sceince">Computer Science</option>
           <option  value="Poltical Sceince">< Poltical Science</option>
           	<option value="English">English</option>



         </select>
  </div>

  <div class=" form-group input-group-lg form-group">
     
         
           <label for="student_faculty"><h4>Class<sup>*</sup> : &nbsp;</h4></label>
         <select class="form-control" name="class">  
           
           <option>Classes</option>
           <option value="1st">1st</option>
           <option value="2nd">2<sup>nd</sup></option>
           <option value="3rd">3<sup>rd</sup></option>
           <option value="4th">4<sup>th</sup></option>
            <option value="5th">5<sup>th</sup></option>
             <option value="6th">6<sup>th</sup></option>
              <option value="7th">7<sup>th</sup></option>
               <option value="8th">8<sup>th</sup></option>
              
               <option value="9th">9<sup>th</sup></option>
                <option value="10th">10<sup>th</sup></option>
  				<option value="11th">11<sup>th</sup></option>
                <option value="12th">12th<sup>th</sup></option>

</select>

                      
  </div>


  <div class=" form-group input-group-lg form-group">
  
        
        <input type="Submit" class="form-control btn btn-info" name="submit" placeholder="Register" required>
  </div>

  
      </form> 
  </div>
  <br><br>

	




