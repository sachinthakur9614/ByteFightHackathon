


<?php include "header.php" ?>

<div class="conntainer ml-40">
	<div class="row">
		<div class="col-md-4">

	
<h1 class="text-center"> Registration</h1>
	
<form action="#" method="post" id="signup-form">
  
  <div class=" form-group input-group-lg form-group">
        <br>
         <label for="student_faculty"><h4>Student/faculty<sup>*</sup> : &nbsp;</h4></label>
        <select style="width:100%;" class="form-control" onchange="onChangeSignupType(this.value)" data-placeholder="Student/Faculty" name="type" required>
            <option value="" selected="true" disabled="true">Student/Faculty</option>
            <option class="form-group">Student</option>
            <option class="form-group">Faculty</option>
      </select>
  </div>
  <br>

  <div class="input-group-lg">
        <label for="name"><h4>Name<sup>*</sup> : &nbsp;</h4></label>
        <input type="text" class="form-control" name="name" placeholder="Name" size="21" required>
  </div>
  <br>

  <div class="input-group-lg">
        <label for="regno"><h4>Register No.<sup>*</sup> : &nbsp;</h4></label>
        <input type="text" id="regno" class="form-control" maxlength="7" onkeypress="return validateNumber(event)" name="regno" placeholder="Register No" size="21" required>
  </div>
  <br>

<div id="signupType">
  <div class="input-group-lg">
        <label for="regno"><h4>Course<sup>*</sup> : &nbsp;</h4></label>
        <select data-placeholder="Select a Course" name="course" class=" form-control  ">
       
          <option value="" selected="true">Select a Course</option>
            <?php getCourses(); ?>
      </select>
  </div>
  <br>

  <div class="input-group-lg">
        <label for="class"><h4>Class<sup>*</sup> : &nbsp;</h4></label>
        <input type="text" class="form-control" name="class" placeholder="Class" size="21">
  </div>
  <br>
</div>

  <div class="input-group-lg">
        <label for="email"><h4>Email<sup>*</sup> : &nbsp;</h4></label>
        <input type="email" class="form-control" name="email" placeholder="Email" size="21" required>
        <b>Note : </b>Please use university's email id.
  </div>
  <br>

  <div class="input-group-lg">
        <label for="mob"><h4>Mobile No. : &nbsp;</h4></label>
        <input type="text" class="form-control" minlength="10" maxlength="10" onkeypress="return validateNumber(event)" name="mob" placeholder="Mobile No" size="21">
  </div>
  <br>

  <div class="input-group-lg">
        <label for="password"><h4>Password<sup>*</sup> : &nbsp;</h4></label>
        <input type="password" class="form-control" name="password" placeholder="Password" size="21" required> 
  </div>
  <br>

  <div class="input-group-lg">
        <label for="repassword"><h4>Retype Password<sup>*</sup> : &nbsp;</h4></label>
        <input type="password" class="form-control" name="repassword" placeholder="Retype Password" size="21" required>
  </div>
  <br>


  <br>

  <div class="input-group-lg">
   <span class="pull-right"><input type="submit" name="signup" class="btn btn-lg btn-info" value="Sign Up"></span>
  </div>
    
<br>


</form>
</div>
</div>
</div>


<?php include "footer.php" ?>
