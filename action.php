<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "sample";
$conn = new mysqli($servername,$username,$password,$database);
if(!$conn)
{
    echo "Database not connected";
    echo "<script>alert('Server is not connected');</script";
}
else{

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $user = $_POST['username'];
    $cpass = $_POST['cpassword'];
    $num = $_POST['number'];
    // $sql = "INSERT into `appleform`(`fname`,`lname`,`dob`,`username`,`password`,`number`)values('$fname','$lname',$dob',$user','$cpass','$num')";
    $sql1 = "INSERT INTO `appleform`(`fname`, `lname`, `dob`, `username`, `password`, `number`) VALUES ('$fname','$lname','$dob','$user','$cpass','$num')";
    $query = mysqli_query($conn, $sql1);
    if ($query) 
    {
        // echo "Data store";
        echo "<script>alert('Register Succesfull')</script>";
        setcookie("user_name" , "$fname", time() + 3600, "/");
        echo "<script> window.location.href='Apple.com.php'</script>";

        // echo "Set cookie for 60 secound";
        // print_r($_COOKIE);
    } 
    else{
        echo "<script>alert('Register not Succesfull')</script>";
        
    }
}