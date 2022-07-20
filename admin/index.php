<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>Vazara Admin Login</title>
</head>
<link rel="stylesheet" href="../assets/css/style1.css">

<body>
  <section>
    <div id="particles-js"></div>
    <div class="box">

      <div class="square" style="--i:0;"></div>
      <div class="square" style="--i:1;"></div>
      <div class="square" style="--i:2;"></div>
      <div class="square" style="--i:3;"></div>
      <div class="square" style="--i:4;"></div>
      <div class="square" style="--i:5;"></div>

      <div class="container">
        <div class="form">
          <h2>ADMIN LOGIN</h2>
          <form action="" method="post" name="login">
            <div class="inputBx">
              <input type="text" required="true" name="user">
              <span>Login</span>
              <img src="https://www.flaticon.com/svg/static/icons/svg/709/709699.svg" alt="user">
            </div>
            <div class="inputBx password">
              <input id="password-input" type="password" name="pass" required="true">
              <span>Password</span>
              <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
              <img src="https://www.flaticon.com/svg/static/icons/svg/1828/1828471.svg" alt="lock">
            </div>

            <div class="inputBx">
              <input type="submit" value="Log in" name="login">
            </div>
          </form>
          <p>Forgot password? <a href="./forgot-password.php">Click Here</a></p>
          <p>Don't have an account <a href="#">Sign up</a></p>
        </div>
      </div>

    </div>
  </section>
  <script>
    function show_hide_password(target) {
      var input = document.getElementById('password-input');
      if (input.getAttribute('type') == 'password') {
        target.classList.add('view');
        input.setAttribute('type', 'text');
      } else {
        target.classList.remove('view');
        input.setAttribute('type', 'password');
      }
      return false;
    }
  </script>
  <script src="./assets/js/particles.min.js"></script>
  <script src="./assets/js/app.js"></script>

<?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['user']);
			$password = mysqli_real_escape_string($con, $_POST['pass']);
			
			$query 		= mysqli_query($con, "SELECT * FROM admin WHERE  Password='$password' and UserName='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['id']=$row['id'];
					header('location:dashboard.php');
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>

  </body>

</html>