<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="student_management";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['signIn']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $pw= $_POST['pw'];
    $username = $_POST['username'];


    $sql_query = "INSERT INTO  user_data (username,first_name,last_name,email,pw)
	 VALUES ('$username','$first_name','$last_name','$email','$pw')";

    if (mysqli_query($conn, $sql_query))
    {
        echo "New Details Entry inserted successfully !";
        header("Location: login.html");
    }
    else
    {
        echo "Error: " .$sql. "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>