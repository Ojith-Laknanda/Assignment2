<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="list_body">
<nav>
    <div class="logo">
        <img src="imgs\images.png" alt="Logo">
    </div>
    <ul id="navi2" >
        <li  class="li_list"><a href="Add Student.html" style="transition: 1s">ADD STUDENT</a></li>
        <li class="li_list"><a href="Remove student.html" style="transition: 1s">REMOVE STUDENT</a></li>
        <li class="li_list"><a href="alter course.html" style="transition: 1s">ALTER COURSE </a></li>
    </ul>
</nav>
<br>
<div id="list_div">
    <table border="1" width="1200px">
        <tr>
            <th>Student ID Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th style="width: 250px">Address</th>
            <th>Date Of Birth</th>
            <th>Degree</th>
            <th>Gender</th>
        </tr>

        <?php
    $server_name = "localhost";
    $username = "root";
    $password = "";
    $database_name = "student_management";

    $conn = mysqli_connect($server_name, $username, $password, $database_name);

    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM student_data";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Invalid query: " . mysqli_connect_error());
    }

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["stu_id"] . "</td>";
        echo "<td>" . $row["first_name"] . "</td>";
        echo "<td>" . $row["last_name"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["birth_date"] . "</td>";
        echo "<td>" . $row["degree"] . "</td>";
        echo "<td>" . $row["Gender"] . "</td>";
        echo "</tr>";
    }
?>

    </table>
</div>
</body>
</html>
