

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
if(!empty($_POST['school']))
{
  $school = htmlspecialchars($_POST['school'],ENT_QUOTES);
}
else
{
  $error.="Please Select The Course Name<br>";
}

if(!empty($_POST['classtime']))
{
  $classtime= htmlspecialchars($_POST['classtime'],ENT_QUOTES);
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


  $sql ="INSERT INTO `selfdefence`(`school`, `timing`) VALUES ('$school','$classtime')";


    

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
  
         <label for="student_faculty"><h4>School <sup>*</sup> : &nbsp;</h4> </label>
         <select class="form-control" name="school">  
           
           <option>Available School</option>
           <option value="Govt. S.S.S. Kor">Govt. S.S.S. Kor</option>
           <option value="Govt. S.S.S. Delhi Rural">Govt. S.S.S. Delhi Rural</option>
           <option value="Govt S.S.S.S. Nahan">Govt S.S.S.S. Nahan</option>
          

         </select>
  </div>

  <div class=" form-group input-group-lg form-group">
     
         
           <label for="student_faculty"><h4>Class Timing<sup>*</sup> : &nbsp;</h4></label>
         <select class="form-control" name="classtime">  
           
           <option>Timings</option>
           <option value="9:30-12:30">9:30-12:30</option>
           <option value="12:40-2:40">12:40-2:40</option>
           <option value="2:45-5:55">2:45-5:55</option>
          

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

        <table id="product-table" class=" table table-responsive table-striped    table-dark  table-bordered tablesorter">

        <thead class="success  bg-secondary">
        <tr class="primary">
          <th width="20%"  >Sl No.</th>
          <th width="20%" scope="col">Dance Id</th>
         <th width="20%" scope="col">Dance Form</th>
          <th width="20%" scope="col">Group Type</th>
          
        
          
        </tr>
      </thead>

      <tbody>



<hr>

<h3>Self Defence</h3>
	<?php 

          $event_sql = "SELECT * FROM selfdefence ";

       

$event_result = $conn->query($event_sql);

    if($event_result->num_rows > 0) {
      $count=0;
      while($sponsor_row = $event_result->fetch_assoc())
      { ?>
       <tr class="active  bg-secondary black text-black" >
       <td class="warning bg-secondary  text-white" valign="middle"><?php echo $count+1; ?></td>
       <td  class="warning" valign="middle"><?php echo $sponsor_row['selfid']; ?></td>
        <td  class="warning" valign="middle"><?php echo $sponsor_row['school']; ?></td>
       <td  class="warning" valign="middle"><?php echo $sponsor_row['timing']; ?></td>
       
      </tr>


<?php 

}
}
?>


