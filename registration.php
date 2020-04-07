<?php
        
         $nameErr = $emailErr = "";
         $name = $email = $passErr=$cpassErr = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") 
         {
             
                if (empty($_POST["name"])) {
                   $nameErr = "Name is required";
                }
                else {
                   $name = test_input($_POST["name"]);
                }
                if (empty($_POST["username"])) {
                   $nameErr = "Userame is required";
                }
                else {
                   $username = test_input($_POST["username"]);
                }
             if (empty($_POST["password"])) {
                   $passErr = "password is required";
                }
                else {
                   $password = test_input($_POST["password"]);
                }

                if (empty($_POST["email"])) {
                   $emailErr = "Email is required";
                }
             else {
                   $email = test_input($_POST["email"]);

                   // check if e-mail address is well-formed
                   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                   {
                      $emailErr = "Invalid email format"; 
                   }
                }
            

           
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
    if(isset($_POST['submit'])){
        $con=mysqli_connect('localhost','root');

        mysqli_select_db($con,'announcements');
       
        $q="insert into employee(name,email,username,password) values ('$name','$email','$username','$password');";

        if($con->query($q))
        {
            session_start();
            $_SESSION['name']=$name;
            header('Location:index.php');


        }
        else
        {
            echo"Error: ".$con->error;
        }

    }


      ?>


<html>
    <head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet"type="text/css" href="login.css">
        </head>
<body>
    <br>
    <br>
<div class="container">
<div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header"><strong>Register to social house if Employee</strong></div>
                            <div class="card-body">

                                <form class="form-horizontal" method="post" action="<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                                    <div class="form-group">
                                        <label for="name" class="cols-sm-2 control-label">Your Name</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" /><span class = "error"> <?php echo $nameErr;?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">Your Email</label><span class = "error"> <?php echo $emailErr;?></span>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Username  <small> (Provided by company)</small></label><span class = "error">* <?php echo $nameErr;?></span>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="cols-sm-2 control-label">Password</label><span class = "error"> <?php echo $passErr;?></span>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label><span class = "error"> <?php echo $cpassErr;?></span>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirm your Password" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                                    </div>
                                    <div class="login-register">
                                        <a href="login.php">Login</a>
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