




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

	







<div class="main row">



<div class="main_container col-lg-9 col-md-9 col-sm-9 col-xs-12">
  <div class="pull-right">
     
<div class="table-responsive content-bg">

<h3> Courses Enroll</h3>
        <table id="product-table" class=" table table-responsive table-striped    table-dark  table-bordered tablesorter">

        <thead class="success  bg-secondary">
        <tr class="primary">
          <th width="20%" >Sl No.</th>
          <th width="20%" scope="col">Course Id</th>
          <th width="20%" scope="col">Course Enrolled</th>
          <th width="40%" scope="col">Class</th>
        
          
        </tr>
      </thead>

      <tbody>


	<?php 

          $event_sql = "SELECT * FROM CourseN ";//" ORDER BY edate DESC";
       

$event_result = $conn->query($event_sql);

    if($event_result->num_rows > 0) {
      $count=0;
      while($sponsor_row = $event_result->fetch_assoc())
      { ?>
       <tr class="active  bg-secondary black text-black" >
       <td class="warning bg-secondary  text-white" valign="middle"><?php echo $count+1; ?></td>
       <td  class="warning" valign="middle"><?php echo $sponsor_row['courseId']; ?></td>
       <td  class="warning"warning="middle"><?php echo $sponsor_row['coursename']; ?></td>
       <td  class="warning" valign="middle"><?php echo $sponsor_row['class']; ?></td>
      
      </tr>


<?php 

}
}
?>


