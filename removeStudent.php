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
if (isset($_POST['remove'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $stu_id = $_POST['stu_id'];

    $sql = "DELETE FROM student_data WHERE first_name= '$first_name' and last_name= '$last_name' and stu_id= '$stu_id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: listStudent.php");
//        echo  '<script>
//                            window.location.href = "listStudent.html";
//                            alert("Student remove successfully")
//                        </script>';
    } else {
        header("Location: Remove student.html");
//        echo "Error deleting record: " . mysqli_error($conn);
//        echo  '<script>
//                            window.location.href = "Remove student.html";
//                            alert("Error. Invalid name or Student Id!!")
//                        </script>';
    }

    mysqli_close($conn);
}
?> 