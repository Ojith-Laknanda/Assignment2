<?php


use PHPUnit\Framework\TestCase;

class addStudentTest extends TestCase
{
    private $conn;

    protected function setUp(): void
    {
        $server_name="localhost";
        $username="root";
        $password="";
        $database_name="student_management";

        $this->conn = mysqli_connect($server_name,$username,$password,$database_name);
    }

    protected function tearDown(): void
    {
        mysqli_close($this->conn); // close the connection after each test
    }

    public function testDatabaseConnection()
    {
        $this->assertTrue($this->conn != false, 'Could not connect to the database.'); // check if the connection is successful
    }

    public function testInsertUserData()
    {
        // Prepare data to insert
        $stu_id = '123456789';
        $first_name = 'sisira';
        $last_name = 'chandana';
        $address = 'ambalangoda';
        $birth_date = '2002-01-24';
        $degree = 'cs';
        $Gender = 'male';

        // Execute the SQL query
        $sql_query = "INSERT INTO test_student_data (stu_id,first_name,last_name,address,birth_date,degree,Gender)
	        VALUES ('$stu_id','$first_name','$last_name','$address','$birth_date','$degree','$Gender')";
        $result = mysqli_query($this->conn, $sql_query);

        // Check if the data was inserted successfully
        $this->assertTrue($result != false, 'Could not insert user data into the database.');
    }
}
