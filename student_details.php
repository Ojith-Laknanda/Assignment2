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

if(isset($_POST['save']))
{
    $stu_id = $_POST['stu_id'];
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $address = $_POST['address'];
    $birth_date = $_POST['bd'];
    $degree = $_POST['Degree'];
    $Gender = $_POST['Gender'];

    $sql_query = "INSERT INTO  student_data (stu_id,first_name,last_name,address,birth_date,degree,Gender)
	 VALUES ('$stu_id','$first_name','$last_name','$address','$birth_date','$degree','$Gender')";

    if (mysqli_query($conn, $sql_query))
    {
        echo "New Details Entry inserted successfully !";
        header("Location: listStudent.php");
    }
    else
    {
        echo "Error: " .$sql. "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>