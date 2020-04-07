<?php 

$desigErr="";
$deptErr="";
$nameErr=$annoErr=$dateErr="";
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'announcements');

if ($_SERVER["REQUEST_METHOD"] == "POST") 
         {
    
             
                if (empty($_POST["desig"])) {
                   $desigErr = "Invalid";
                }
                else {
                   $desig = test_input($_POST["desig"]);
                }

                if (empty($_POST["name"])) {
                   $nameErr = "Invalid";
                }
             else {
                   $name = test_input($_POST["name"]);
                }
        if (empty($_POST["dept"])) {
                   $deptErr = "Invalid";
                }
             else {
                   $dept = test_input($_POST["dept"]);
                }
    if (empty($_POST["anno"])) {
                   $annoErr = "Invalid";
                }
             else {
                   $anno = test_input($_POST["anno"]);
                }
    if (empty($_POST["date"])) {
                   $dateErr = "Invalid";
                }
             else {
                   $date = test_input($_POST["date"]);
                }
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
if(isset($_POST["submit1"])){
    $desig=$_POST['desig'];
$name=$_POST['name'];
$dept=$_POST['dept'];
$anno=$_POST['anno'];
$date=$_POST['date'];
        $q="insert into announcedata(username,designation,department,announcement,date1) values ('$name','$desig','$dept','$anno','$date')";

        if($con->query($q))
        {
            echo "Database updated sucessfully";


        }
        else
        {
            echo"Error: ".$con->error;
        }
 }
 

?>


<!DOCTYPE html>
<html>
<head>
    <title> </title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet"type="text/css" href="style.css">
  
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Social House</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="announcement.php">Announcements <span class="badge badge-light"><?php 
        $con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'announcements');

        $q="select * from announcedata";
        $res=$con->query($q);
        $rowCount=$con->affected_rows; echo"$rowCount"?></span></a>
          
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Department
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="marketing.php">Marketing</a>
          <a class="dropdown-item" href="#">Operations</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">IT</a>
        </div>
      </li>
      
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <?php session_start(); 
          echo "Hi ".$_SESSION['name']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="login.php">Logout</a></div>
      </li>
      
        </ul></div></nav>
   
        <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/im4.png" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Social House</h3>
        <p>A way to connect with your co-workers.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/im10.png" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Hey employees</h3>
        <p>lets connect and grow together</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/im9.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>We grow </h3>
        <p>By lifting others.</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
        <div class="py-5">
    <h2 class="text-center"> ABOUT US</h2>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12"> 
            <img src="images/im8.jpeg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12"> 
            <h2 class="display-4">Hey social people</h2>
            <p class="py-3">Hey everyone . Is is very important notice for all of you that we are going to make this website as our company's official social networking site to connect with the fellow members of this company. So welcome to the social house.</p>
            <a href="about.php" class="btn btn-sucess">check more</a>
        </div>
    
    </div>
    
    </div>    
        </section>        
        
         <section class="my-5">
           
            <div class="py-5 ml-5 mr-5" > 
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">Work Assigned</th>
      <th scope="col">Progress</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Calling the customers</td>
      <td><button class="btn btn-primary active" id="btn" type="submit" name="sp" onclick="disablebtn()">On progress</button></td>
      <td><button class="btn btn-primary active" type="submit" name="sd">done</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Gettig in touch with loyal customers</td>
      <td><button class="btn btn-primary active" type="submit"name="sp">On progress</button></td>
      <td><button class="btn btn-primary active" type="submit"name="sd">done</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Account Management</td>
      <td><button class="btn btn-primary active" type="submit" name="sp">On progress</button></td>
      <td><button class="btn btn-primary active" type="submit" name="sd">done</button></td>
    </tr>
      <tr>
      <th scope="row">4</th>
      <td>Updating excel sheet</td>
      <td><button class="btn btn-primary active" type="submit" name="sp">On progress</button></td>
      <td><button class="btn btn-primary active" type="submit" name="sd">done</button></td>
    </tr>
      <tr>
      <th scope="row">5</th>
      <td>Getting 2 approved customer</td>
      <td><button class="btn btn-primary active" type="submit" name="sp">On progress</button></td>
      <td><button class="btn btn-primary active" type="submit" name="sd">done</button></td>
    </tr>
      <tr>
      <th scope="row">6</th>
      <td>Managing Database</td>
      <td><button class="btn btn-primary active" type="submit" name="sp">On progress</button></td>
      <td><button class="btn btn-primary active" type="submit" name="sd">done</button></td>
    </tr>
  </tbody>
</table>
        <div class="py-5">
    <h2 class="text-center"> Here are some important announcements</h2>
    </div>
        </form>
        </div>
        </section>
     <section>   
    <div class='container'> 
        <div class='card-columns'>
       
   <?php 
        

        $q="select * from announcedata";
        $res=$con->query($q);
        $rowCount=$con->affected_rows;
        
        if($rowCount>0)
        {
        while($row = $res->fetch_assoc())
        {
            
            
        echo "
        <div class='card shadow p-3 mb-5 bg-white rounded'>
        <div class='card-body bg-info text-center'>".$row['announcement']."</h7><br>
        </div>
                <button type='button' class='btn btn-' data-toggle='modal' data-target='#exampleModal'>
          See More
        </button>

        <!-- Modal -->
        <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
          <div class='modal-dialog' role='document'>
            <div class='modal-content'>
            
              <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Announcement</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>
              <div class='modal-body'>".
                $row['announcement']."</h7><br>"."Date :".$row['date1']."<br> Posted By: ".$row['username']."(".$row['Designation'].")<br>
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
              </div>
            </div>
          </div>
        </div></div> ";
            
    
        }
        }
        
        else 
        {
        echo "Not connected";
        }
 
?>
        </div>
        </div>
            </section>
        
            
        
        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center">Post an announcement or notice .</h2> 
                <div class="w-50 m-auto">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
                    <div class="form-group">
                    <label>User Name</label>
                        <input type="text" name="name" autocomplete="off" class="form-control" required>
                    
                    </div>
                    <div class="form-group">
                    <label> Designation</label>
                        <input type="text" name="desig" autocomplete="off" class="form-control"required>
                    
                    </div>
                    <div class="form-group">
                    <label> Department</label>
                        <input type="text" name="dept" autocomplete="off" class="form-control" required>
                        
                    
                    </div>
                    <div class="form-group">
                    <label>Announcement</label>
                        <textarea name="anno" autocomplete="off" class="form-control" required></textarea>
                        
                    
                    </div>
                    <div class="form-group">
                    <label> date </label>
                        <input type="date" name="date" autocomplete="off" class="form-control" required>
                        
                    </div>
                    
                    
                        <button type="submit" class="btn btn-primary" name="submit1">Submit</button>
                    
                    
                    
                </form>
                
                </div>
        
        </div>
        
</section>

<footer class="footer-area footer--light">
  <p class="p-3 bg-dark text-white text-center">@SocialHouse</p>
</footer>
         
    
        
        
        
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
    
    </body>
</html>