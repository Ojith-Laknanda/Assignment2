<?php


use PHPUnit\Framework\TestCase;

class signupTest extends TestCase
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
        $first_name = 'ojith';
        $last_name = 'lak';
        $email = 'kho123@example.com';
        $pw = '123';
        $username = 'khol';

        // Execute the SQL query
        $sql_query = "INSERT INTO test_user_data (username,first_name,last_name,email,pw)
                      VALUES ('$username','$first_name','$last_name','$email','$pw')";
        $result = mysqli_query($this->conn, $sql_query);

        // Check if the data was inserted successfully
        $this->assertTrue($result != false, 'Could not insert user data into the database.');
    }
}
