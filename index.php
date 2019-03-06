




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



<div class="main row">


<div class="main_container col-lg-9 col-md-9 col-sm-9 col-xs-12">
  <div class="pull-right">
     
<div class="table-responsive content-bg">

        <table id="product-table" class=" table table-responsive table-striped    table-dark  table-bordered tablesorter">

        <thead class="success  bg-secondary">
        <tr class="primary">
          <th width="40%" >Sl No.</th>
          <th width="40%"  scope="col">Dance Id</th>
          <th width="40%"  scope="col">Dance Form</th>
          <th width="40%" scope="col">Group Type</th>
          
        
          
        </tr>
      </thead>

      <tbody>



<hr>

<h3>Dance Classes  Enroll</h3>
	<?php 

          $event_sql = "SELECT * FROM dance ";

       

$event_result = $conn->query($event_sql);

    if($event_result->num_rows > 0) {
      $count=0;
      while($sponsor_row = $event_result->fetch_assoc())
      { ?>
       <tr class="active  bg-secondary black text-black" >
       <td class="warning bg-secondary  text-white" valign="middle"><?php echo $count+1; ?></td>
       <td  class="warning" valign="middle"><?php echo $sponsor_row['danceid']; ?></td>
        <td  class="warning" valign="middle"><?php echo $sponsor_row['dancetype']; ?></td>
       <td  class="warning" valign="middle"><?php echo $sponsor_row['grouptype']; ?></td>
       
      </tr>


<?php 

}
}
?>




<div class="main row">


<div class="main_container col-lg-9 col-md-9 col-sm-9 col-xs-12">
  <div class="pull-right">
     
<div class="table-responsive content-bg">

        <table id="product-table" class=" table table-responsive table-striped    table-dark  table-bordered tablesorter">

        <thead class="success  bg-secondary">
        <tr class="primary">
          <th  width="50%" >Sl No.</th>
          <th  width="50%" scope="col">Dance Id</th>
          <th width="70%" scope="col">Dance Form</th>
          
          
        
          
        </tr>
      </thead>

      <tbody>


 

<h3>Docs of Defence  </h3>
	<?php 

          $event_sql = "SELECT * FROM docs";

       

$event_result = $conn->query($event_sql);

    if($event_result->num_rows > 0) {
      $count=0;
      while($sponsor_row = $event_result->fetch_assoc())
      { ?>
       <tr class="active  bg-secondary black text-black" >
       <td class="warning bg-secondary  text-white" valign="middle"><?php echo $count+1; ?></td>
       <td  class="warning" valign="middle"><?php echo $sponsor_row['armytype']; ?></td>
        <td  class="warning" valign="middle"><?php echo $sponsor_row['idcard']; ?></td>
      
       
      </tr>


<?php 

}
}
?>