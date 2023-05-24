<?php 

$conn=mysqli_connect('localhost','root','','tanani');
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cpassword'])) {
    $username = $_POST['username']; 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $sql = "INSERT INTO users (username, email, password)
            VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: signupsecces.html");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
