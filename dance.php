<?php echo "string"; 
?>








<!DOCTYPE html>
<html>

<head>

  <link rel="icon" type="image/png" href="logo.png"/>
<?php include "../header.php";
include "../db.php";


 ?>

<?php



if(isset($_POST['submit'])){

$error="";
if(!empty($_POST['dancetype']))
{
  $dancetype = htmlspecialchars($_POST['dancetype'],ENT_QUOTES);
}
else
{
  $error.="Please Select The Dance Form<br>";
}

if(!empty($_POST['link']))
{
  $link= htmlspecialchars($_POST['link'],ENT_QUOTES);
}
else
{
  $error.="Please Enter The Class Link <br>";
}



if(!empty($_POST['grouptype']))
{
  $group= htmlspecialchars($_POST['grouptype'],ENT_QUOTES);
}
else
{
  $error.="Please Select The Group Link <br>";
}



//$mob = htmlspecialchars($_POST['mob'],ENT_QUOTES);

$date = date("Y-m-d H:i:s");




/*


if(empty($error))
{

*/
 


  $sql = "INSERT INTO `dance`(`dancetype`, `link`, `grouptype`) VALUES ('$dancetype','$link','$group')";

    

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
  
         <label for="student_faculty"><h4>Dance Forms<sup>*</sup> : &nbsp;</h4> </label>
         <select class="form-control" name="dancetype">  
           
           <option></option>
           <option value="Classical">Classical</option>
           <option value="MHip-Hop">Hip-Hop</option>
           <option value="Contemprorary">Contemprorary</option>
           <option  value="Bollywood">Bollywood</option>
           



         </select>
  </div>


  <div class=" form-group input-group-lg form-group">
     
         
           <label for="student_faculty"><h4>Group Type<sup>*</sup> : &nbsp;</h4></label>
         <select class="form-control" name="grouptype">  
           
           <option>Groups</option>
           <option value="Solo">Solo</option>
           <option value="Duet">Duet</option>
           <option value="Group">Group</option>
          

</select>

                      
  </div>


  <div class=" form-group input-group-lg form-group">
  
        
        <input type="Submit" class="form-control btn btn-info" name="submit" placeholder="Register" required>
  </div>

  
      </form> 
  </div>
  <br><br>

	




