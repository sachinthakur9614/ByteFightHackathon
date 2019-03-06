<!DOCTYPE html>
<html>
<head>
  <title></title>
<link rel="icon" type="image/png" href="../logo.png"/>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white " >

  <a class="navbar-brand ml-15 pl-30" href="">  <img src="../logo.png"  height="50" width="50" > Rural Education</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link navbar-brand navbar-dark" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link navbar-brand navbar-dark" href="#">About</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link navbar-brand navbar-dark" href="login.php"><?php $_SESSION['username']  ?></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link navbar-brand navbar-dark" href="../logout.php" tabindex="-1" aria-disabled="true">Logout</a>
      </li>
    </ul>
  </div>
</nav>

</header>
