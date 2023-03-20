<?php


use PHPUnit\Framework\TestCase;

class loginTest extends TestCase
{
    protected $conn;

    protected function setUp(): void
    {
        $server_name="localhost";
        $username="root";
        $password="";
        $database_name="student_management";

        $this->conn=mysqli_connect($server_name,$username,$password,$database_name);
    }

    public function testSuccessfulLogin()
    {

        $sql = "SELECT * FROM test_user_data WHERE username = 'khol' AND pw = '123'";
        $result = mysqli_query($this->conn, $sql);

        $this->assertEquals(1, mysqli_num_rows($result));
    }

    public function testFailedLogin()
    {

        $sql = "SELECT * FROM test_user_data WHERE username = 'invalid_username' AND pw = 'invalid_password'";
        $result = mysqli_query($this->conn, $sql);

        $this->assertEquals(0, mysqli_num_rows($result));
    }

    protected function tearDown(): void
    {
        mysqli_close($this->conn);
    }
}