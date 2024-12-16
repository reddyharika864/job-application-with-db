<!-- ?php
// include 'database.php';
// if(isset($_POST['submit']))
// {
//     $name=$_POST['uname'];
//     $email=$_POST['wynkemail'];
//     $password=$_POST['wynkpassword'];
    // $gender=$_POST['gender'];
    // $education=$_POST['education'];
    // $chk="";
    // foreach($education as $chk1)
    // {
    //     $chk.=$chk1.",";
    // }
    // $sql="insert into details(name,email,password) values('$unmae',$email','$password')";
    // if(mysqli_query($con,$sql))
    // {
    //     echo "<script>alert('inserted a record')</script>";
        
    // }
    // else{
    //     echo "error".mysqli_error($con);
    // }
    // mysqli_close($con);
// }
// ?> -->
<?php
include 'database.php';

if(isset($_POST['submit']))
{
    $name = $_POST['uname'];
    $email = $_POST['wynkemail'];
    $password = $_POST['wynkpassword'];
    $confirm_password = $_POST['confirm_password']; // Add this line

    // Validate form data
   /*if(empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "<script>alert('Please fill in all fields')</script>";
        header("refresh:0;url=login.php"); // Redirect back to signup page
        exit;
    }

    // Validate password and confirm password
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match')</script>";
        header("refresh:0;url=login.php"); // Redirect back to signup page
        exit;
    }

    // Check if email already exists
    $check_email_query = "SELECT * FROM details WHERE email='$email'";
    $check_email_result = mysqli_query($con, $check_email_query);
    if(mysqli_num_rows($check_email_result) > 0) {
        echo "<script>alert('Email already exists')</script>";
        header("refresh:0;url=login.php"); // Redirect back to signup page
        exit;
    }*/

    // Insert new user into the database
    $insert_query = "INSERT INTO details (name, email, password) VALUES ('$name', '$email', '$password')";
    if(mysqli_query($con, $insert_query)) {
        echo "<script>alert('User registered successfully')</script>";
        header("location:sample.html "); // Redirect to login page
        exit;
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>