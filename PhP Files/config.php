<?php

// server name
// user name
// password
//database name

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobs';

$conn = mysqli_connect($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}
echo "";

if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['phone_no'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `users`(`Name`, `Email`, `Password`, `Phone_no`) VALUES ('$name','$email','$password','$number')";
    if (mysqli_query($conn, $sql)) {
        echo "Records inserted successfully";
        header("Location: http://localhost/job%20portal/login.php", true, 301);
    } else {
        echo "Error: Could not able to execute $sql. " . mysqli_error($conn);
    }
}

session_start();
if(isset($_POST['Login']))
{
   $email = $_POST['email'];
   $password = $_POST['password'];

   $query = "SELECT * FROM `users` WHERE  Email = '$email' AND  Password = '$password'";
   $result = mysqli_query($conn,$query);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   if(mysqli_num_rows($result)== 1){
       header("location:index.php");
    //    echo "Records inserted successfully";
   }
   else{
       $error = 'emailid or password is incorrect';
       echo "error";
   }
}

if(isset($_POST['submit'])){
    $cname = $_POST['cname'];
    $position = $_POST['position'];
    $jdesc = $_POST['jdesc'];
    $skills = $_POST['skills'];
    $ctc = $_POST['ctc'];
    $job = "INSERT INTO `jobs`(`CName`, `Position`, `JDesc`, `Skills`, `CTC`) VALUES ('$cname','$position','$jdesc','$skills','$ctc')";
    mysqli_query($conn,$job);
}

if(isset($_POST['apple'])){
    $name = $_POST['name'];
    $qualify = $_POST['qualify'];
    $year = $_POST['year'];
    $apply1 = $_POST['apply'];

    $sql = "INSERT INTO `candidates`(`Name`, `Qualification`, `Year`, `Apply`) VALUES ('$name','$qualify','$year','$apply1')"; 
    mysqli_query($conn,$sql);
}
mysqli_close($conn);
?>