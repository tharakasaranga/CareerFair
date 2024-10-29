<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    	body {
	  padding: 0;
	  margin: 0;
	  background: #c9cccf;
	  font-family: Arial, sans-serif;
	}
	.box {
	  display: flex;
	  flex-direction: row;
	  justify-content: center;
    height: 550px;
	  align-items: center;
	  padding: 30px;
	  width: 100%;
	  box-sizing: border-box;
	}

	.header{
	  margin-bottom: 20px;
	}
	.header h2{
	  text-align: center;
	  font-size: 28px;
	  color:rgb(60, 4, 109);
	  padding-bottom: 10px;
	}

	.header p{
	  color: rgb(148, 148, 152);
	  text-align: center;
	}

	.form-box {
	  width: 350px;
	  padding: 30px;
	  border-radius: 8px;
	  background: #fff;
	  box-shadow: 0px 2px 10px 1px rgba(71, 71, 71, 0.52);
	}

	.user, .signUp {
	  display: flex;
	  align-items: center;
	  justify-content: space-around;
	  column-gap: 10px;
	}
	.user input {
	  width: 100%;
	  height: 35px;
	  font-size: 17px;
	  border-radius: 10px;
	  padding: 0 10px;
	  border: 1px solid rgb(170, 165, 165);
	}

	.remember-forget {
	  margin-top: 10px;
	  color: rgb(115, 113, 113);
	  font-size: 16px;
    
	}

	.remember-forget a {
    margin-left: 8px;
	  font-size: 16px;
	  text-decoration: none;
	  color: rgb(74, 74, 174);
	}

	.signUp button {
	  width: 100%;
	  margin-top: 30px;
	  padding: 7px 30px;
	  border: none;
	  color: white;
	  font-weight: bold;
	  background-color: rgb(60, 4, 109);
	  border-radius: 6px;
	  font-size: 16px;
	  cursor: pointer;
	}

	.signUp button:hover {
	  background-color: rgb(40, 11, 203);
	}

	.signUp {
	  margin-top: 15px;
	}
	.signUp p {
	  color: #747577;
	}
	.signUp a {
	  font-weight: bold;
	  font-size: 16px;
	  text-decoration: none;
	  color: rgb(74, 74, 174);
	  cursor: pointer;
	}
  </style>



</head>
<body>
<header class="sticky-top">
    <nav class="navbar  navbar-expand-lg" style="background-color: gray;">
      <div class="container">
        <div class="col-2 ">
        <img  width="250" height="50" src="https://www.csc.jfn.ac.lk/wp-content/uploads/2017/02/logo_new.png" class="custom-logo" alt="Department of Computer Science" decoding="async" srcset="https://www.csc.jfn.ac.lk/wp-content/uploads/2017/02/logo_new.png 370w, https://www.csc.jfn.ac.lk/wp-content/uploads/2017/02/logo_new-300x58.png 300w" sizes="(max-width: 370px) 100vw, 370px" >
        </div>
        <div class="col-8 mt-2">
          <P class="navbar-brand text-center " style="font-size: 37px;font-weight:500;color:darkblue;">Login Form</P>
        </div> 
        <div class="col-2 ">
          <ul class="navbar-nav ms-auto">
             <li class="nav-item h5 me-3" style="border-radius: 5px;background-color:white;"> <a href="index.php" class="nav-link active " style="color: rgb(60,4,109);">Home</a></li>
              <li class="nav-item h5 " style="border-radius: 5px;background-color:white;"><a href="https://www.csc.jfn.ac.lk/contact-us/" class="nav-link " style="color: rgb(60,4,109);">Contacts</a></li>
          </ul>
        </div> 
      </div>
    </nav>
  </header>
  
  <div class="box">
    <div class="form-box">
      <div class="header">
        <h2>Welcome!!!</h2>
      </div>

      <?php
      session_start();
      $loginFailed = false; 

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $conn = new mysqli("localhost", "your_username", "your_password", "careerFair");

  
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

  
          $username = $conn->real_escape_string($_POST['urname']);
          $password = $_POST['password']; 

       
          $adminQuery = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
          $adminResult = $conn->query($adminQuery);

          if ($adminResult->num_rows > 0) {
              $_SESSION['username'] = $username;
              header("Location: admindashboard.php");
              exit();
          }

          $studentQuery = "SELECT * FROM students WHERE username='$username'";
          $studentResult = $conn->query($studentQuery);

          if ($studentResult->num_rows > 0) {
              $studentRow = $studentResult->fetch_assoc();
              
              
              if (password_verify($password, $studentRow['password'])) {
                  
                  $_SESSION['username'] = $username;
                  header("Location: profile_student.php");
                  exit();
              }
          }

          
          $loginFailed = true;
      }
      ?>

      <form action="" method="POST">
        <div class="user">
          <input type="text" name="urname" id="urname" placeholder="Username" required>
        </div>
        <br>
        <div class="user">
          <input type="password" name="password" id="password" placeholder="Password" required>
        </div>

        <div class="remember-forget">
          <input type="checkbox" name="box" id="box">
          <label>Remember me</label>
          <a href="#">Forgot Password?</a>
        </div>
        
        <div class="signUp">
          <button type="submit">Login</button>
        </div>

        <div class="signUp">
          <p>Don't have an account? <a id="signUpBtn">Sign up</a></p>
        </div>
      </form>
    </div>
  </div>

  <footer class="bg-body-tertiary text-center text-lg-start mt-3">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.3);">
      <p class="h5 mt-1 ">&copy; 2024 Career Fair Management System. All rights reserved.</p>
      
    </div>
</footer>
</body>
</html>

<script>
    document.getElementById('signUpBtn').addEventListener('click', function() {
      Swal.fire({
        title: 'Sign Up Options',
        text: 'Choose your role to sign up',
        icon: 'info',
        showCancelButton: true,
        confirmButtonText: 'Student',
        cancelButtonText: 'Company'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = 'student_register.php';
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          window.location.href = 'register_employer.php';
        }
      });
    });

    <?php if ($loginFailed): ?>
      Swal.fire({
        icon: 'error',
        title: 'Login Failed',
        text: 'Username and password do not match.',
      });
    <?php endif; ?>
  </script>



