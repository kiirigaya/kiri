	 
<?php

$host="localhost";
$user="root";
$password="";
$db="tanani";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $email=$_POST["email"];
    $password=$_POST["password"];

    $sql="select * from visiteurs where email_v='".$email."' AND password_v='".$password."' ";

    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);

    if(mysqli_num_rows($result) == 1) {
        if($row["usertyp"]=="user")
        {   
            $_SESSION["email"]=$email;

            header("location:index.html");
            exit();
        }

        if($row["usertyp"]=="admin")
        {

            $_SESSION["email"]=$email;

            header("location:admin.html");
            exit();
        }
    } else {
		echo "<span class=' error-message '>Invalid email or password. </span>";
    }
}

?>
