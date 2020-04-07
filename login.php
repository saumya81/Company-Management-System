<?php
         $username=$password="";
         $nameErr = "";
        $passErr= "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") 
         {
             
                if (empty($_POST["username"])) {
                   $nameErr = "Name is required";
                }
                else {
                   $username = test_input($_POST["username"]);
                }

                if (empty($_POST["password"])) {
                   $passErr = "password is required";
                }
             else {
                   $password = test_input($_POST["password"]);

                   // check if e-mail address is well-formed
//                   if (!filter_var($password, FILTER_VALIDATE_)) 
//                   {
//                      $emailErr = "Invalid email format"; 
//                   }
                }
            

           
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
        if(isset($_POST['submit']))
{
        $con=mysqli_connect('localhost','root');

        mysqli_select_db($con,'announcements');
       
        $q="SELECT * from employee where name='$username' AND password='$password';";
            $res=$con->query($q);
        $rowCount=$con->affected_rows;
        if($rowCount)
        {
            session_start();
            $_SESSION['name']=$username;
            header('Location:index.php');
        }
        else 
        {
            echo"<h7 style='font-family: 'Josefin Sans', sans-serif;
                color: crimson;'>Invalid ID or Password".$con->error."<h7>";
        }
            
 }


      ?>

<!DOCTYPE html>
<html>

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet"type="text/css" href="login.css">
</head>

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Connect to the social House</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="<?php 
                        echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label>
                                <span class = "error"> <?php echo $nameErr;?></span><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label>
                                <span class = "error"> <?php echo $passErr;?></span><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <footer class="footer-area footer--light">
  <p class="p-3 bg-dark text-white text-center">@SocialHouse</p>
</footer>
     
        
</body>
    </html>
