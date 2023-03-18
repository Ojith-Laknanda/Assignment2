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

if (isset($_POST['logIn'])) {
    $username = $_POST['username'];
    $pw = $_POST['pw'];
    $sql = "SELECT * FROM user_data WHERE username = '$username' AND pw = '$pw'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if(mysqli_num_rows($result) == 1){
            header("Location: listStudent.php");
        }
        else{
            echo  '<script>
                            window.location.href = "login.html";
                            alert("Login failed. Invalid username or password!!")
                        </script>';
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>



