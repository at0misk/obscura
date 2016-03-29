<!DOCTYPE html>
<html>
<head>
	<title>Funky Instrument Jungle</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
​
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
​
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
​
<link rel="stylesheet" href="/assets/styles/style.css">

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
​
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">OBSUCRA</a>
​
    </div>
​
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">HOME <span class="sr-only">(current)</span></a></li>
        <li><a href="#">ABOUT</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CATEGORIES <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Guitars</a></li>
            <li><a href="#">Pianos</a></li>
            <li><a href="#">Trombones</a></li>
            <li><a href="#">Drums</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
<?php
        if (count($this->session->user_session)){
          echo "<li><a href='#'>Welcome, " . $this->session->user_session['first_name'] . "</a></li>";
          echo "<li><form action='/User/signOut' method='post'><button type='button' class='btn btn-default navbar-btn'>Sign Out</button></form></li>";
        } else {
          echo "<li><button type='button' class='btn btn-default navbar-btn' data-toggle='modal' data-target='#login' >Sign in</button></li>";
        }

?>
        <!-- <li><a href="#">Welcome, Michael</a></li> -->
        <!-- <li><a href="#">Log Out</a></li> -->
       <!--  <li><button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#login">Sign in</button></li> -->
        <!-- <button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#login"> -->
​         
      </ul>
    </div>

  </div>
</nav>

<!-- Modal -->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login to Obscura</h4>
        </div>
        <div class="modal-body">
          <div class="row">
      <div class="box">
        <h2>Register</h2>
        <form action='/User/register' method='post'><br>
          <input type='hidden' name='action' value='register'>
          <label>First name: </label><input type='text' name='first_name'><br>
          <label>Last name: </label><input type='text' name='last_name'><br>
          <label>Email address: </label><input type='text' name=email><br>
          <label>Password: </label><input type='password' name='password'><br>
          <label>Confirm password: </label><input type='password' name='confirm_password'><br>
          <input class='btn' type='submit' value='register'>
        </form>
      </div>
      <div class="box">
        <h2>Login</h2>
        <form action='/User/login' method='post'>
          <input type='hidden' name='action' value='login'>
          <label>Email address: </label><input type='text' name=email><br>
          <label>Password: </label><input type='password' name='password'><br>
          <input class='btn' type='submit' value='login'>
        </form>
        <?php 
      if($this->session->flashdata("registration_errors"))
      {
        echo $this->session->flashdata("registration_errors");
      }
      if($this->session->flashdata("login_errors"))
      {
        echo $this->session->flashdata("login_errors");
      }

      ?>
      </div>
    </div>
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>