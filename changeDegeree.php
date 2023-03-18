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

if (isset($_POST['change_Degree'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $stu_id = $_POST['stu_id'];
    $degree = $_POST['degree'];

    $sql = "UPDATE student_data SET degree = '$degree' WHERE stu_id='$stu_id' and first_name = '$first_name' and last_name='$last_name'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "New Details Entry inserted successfully !";
        header("Location: listStudent.php");
    }
    else
    {
        header("Location: alter course.html");
    }
}

?>



