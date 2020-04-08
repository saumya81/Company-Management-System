<?php 

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'announcements');
if(isset($_GET['sd'])){  

    $name=$_POST['name'];
    $done=4;

$q="UPDATE workdata SET workd=workd+4,totalwork=totalwork+workd WHERE nameemp='$name';";
 
}
if(isset($_GET['sd'])){  

    $name=$_POST['name'];
    $progress=1;
$q="UPDATE workdata SET workp=workp+1,totalwork=totalwork+workp WHERE nameemp='$name';";
 
}
?>
<script>
    function disablebtn() {
    document.getElementById("myBtn").disabled = true;
    }
</script>
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
          <a class="dropdown-item" href="#">Marketing</a>
          <a class="dropdown-item" href="#">Operations</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">IT</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
     <div>
        <img src="images/market.png" style="width:100%;height: 500px!important;" class="img-fluid" alt="Responsive image">
            </div>
  <h1 class="text-center py-5 my-6"> The Marketing Department</h1>
        <section class="my-5">
        <div class="py-5">
    <h2 class="text-center"> Take a look here </h2>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12"> 
            <img src="images/im8.jpeg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12"> 
            <h2 class="display-4">Employee of the month</h2>
            <p class="py-3">Hey everyone . so here we are again with the employee of th month .</p>
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
      <td><button class="btn btn-primary active" id="btn" type="submit" name="sp" >On progress</button></td>
      <td><button class="btn btn-primary active" id="btn" type="submit" name="sd">done</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Gettig in touch with loyal customers</td>
      <td><button class="btn btn-primary active" id="btn" type="submit"name="sp">On progress</button></td>
      <td><button class="btn btn-primary active" id="btn" type="submit"name="sd">done</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Account Management</td>
      <td><button class="btn btn-primary active" id="btn" type="submit" name="sp">On progress</button></td>
      <td><button class="btn btn-primary active" id="btn" type="submit" name="sd">done</button></td>
    </tr>
      <tr>
      <th scope="row">4</th>
      <td>Updating excel sheet</td>
      <td><button class="btn btn-primary active" id="btn" type="submit" name="sp">On progress</button></td>
      <td><button class="btn btn-primary active" id="btn" type="submit" name="sd">done</button></td>
    </tr>
      <tr>
      <th scope="row">5</th>
      <td>Getting 2 approved customer</td>
      <td><button class="btn btn-primary active" id="btn" type="submit" name="sp">On progress</button></td>
      <td><button class="btn btn-primary active" id="btn" type="submit" name="sd">done</button></td>
    </tr>
      <tr>
      <th scope="row">6</th>
      <td>Managing Database</td>
      <td><button class="btn btn-primary active" id="btn" type="submit" name="sp">On progress</button></td>
      <td><button class="btn btn-primary active" id="btn" type="submit" name="sd">done</button></td>
    </tr>
  </tbody>
</table>
        
        </form>
        </div>
        </section>
     <section>   
    <div class='container'> 
        <div class='card-columns'>
       
   <?php 
        $con=mysqli_connect('localhost','root');
        mysqli_select_db($con,'announcements');

        $q="select * from announcedata";
        $res=$con->query($q);
        $rowCount=$con->affected_rows;
        
        if($rowCount>0)
        {
        while($row = $res->fetch_assoc())
        {
            
            
        echo "
        
        
        <div class='card bg-primary'>
        <div class='card-body text-center'>".$row['announcement']."</h7>    
        </div>
        <span><a href='#' class='btn btn-light mr-2 ' style='width:100%;' >Acknowledge</a></span> </div> ";
            
    
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
                <form action="announcements.php" method="post">
                    <div class="form-group">
                    <label>User Name</label>
                        <input type="text" name="name" autocomplete="off" class="form-control">
                    
                    </div>
                    <div class="form-group">
                    <label> Designation</label>
                        <input type="text" name="desig" autocomplete="off" class="form-control">
                    
                    </div>
                    <div class="form-group">
                    <label> Department</label>
                        <input type="text" name="dept" autocomplete="off" class="form-control">
                    
                    </div>
                    <div class="form-group">
                    <label>Announcement</label>
                        <textarea name="anno" autocomplete="off" class="form-control"></textarea>
                    
                    </div>
                    <div class="form-group">
                    <label> date </label>
                        <input type="date" name="date" autocomplete="off" class="form-control">
                    
                    </div>
                    
                    
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    
                    
                    
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