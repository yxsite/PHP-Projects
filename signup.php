<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login And Sign Up System (PHP Project 01) | Mr.Code</title>
  <link rel="stylesheet" href="./css/style.css" type="text/css" media="all" />
</head>
<body>
  <div class="wrapper">
    <div class="header">
      <div class="back-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
          <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
        </svg>
      </div>
      <div class="page-name">
        <h2>Sign Up Page</h2>
      </div>
      <div class="help-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
          <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
        </svg>
      </div>
    </div>
    <div class="page-body">
      <div class="inp-form">
        <form action="./script/signup.sct.php" method="post">
          <h1 class="form-title">Register An <br>Account Now</h1>
          <?php
          
          $errormsg = $_GET['error'];
          if($errormsg === "emptyinp"){
          echo "<span style='color:red;'>The Fields Shouldn't Be Empty!</span>";
          }
          else if($errormsg === "invalidfname"){
          echo "<span style='color:red;'>Invalid Name!</span>";
          }
          else if($errormsg === "invaliduname"){
          echo "<span style='color:red;'>Invalid Username!</span>";
          }
          else if($errormsg === "invalidemail"){
          echo "<span style='color:red;'>Invalid Email!</span>";
          }
          else if($errormsg === "pwdnomatch"){
          echo "<span style='color:red;'>The Password Is Not Matching!</span>";
          }else if($errormsg === "none"){
          echo "<span style='color:green;'>Signed Up Successful!</span>";
          }
          ?>
          <input type="text" name="fullname"  placeholder="Fullname">
          <input type="text" name="username"  placeholder="Username">
          <input type="text" name="email"  placeholder="Email Address">
          <input type="password" name="pwd"  placeholder="Password">
          <input type="password" name="pwd-rep"  placeholder="Password Repeat">
          <button type="submit">Sign Up</button>
        </form>
        <span>Already Have An Account? <a href="./index.php">Login</a></span>
      </div>
    </div>
  </div>
</body>
</html>
