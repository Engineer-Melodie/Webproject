<?php
$con = mysqli_connect('localhost', 'root', '', 'merody');
if (!$con) {
    die('Connection Error: ' . mysqli_connect_error());
}
?>


<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

if($password != $confirmpassword){
    header( "location: login.html");
}
else{

    $sql = "insert into users( u_firstname,u_lastname,u_email,u_password ) values('$firstname','$lastname','$email', '$password');";
    $myquery = mysqli_query($con, $sql);

    if(!$myquery){
     echo "Error in connection";

    }
    else{
        header("Location: home.php");
        $_SESSION['message'] = "Registering is now Successfully";
    }
}