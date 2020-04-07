<?php 
$desigErr=$nameErr=$desigErr=$nameErr=$annoErr=$dateErr="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
         {
             
                if (empty($_POST["desig"])) {
                   $desigErr = "Feild is empty";
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
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'announcements');
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

?>
