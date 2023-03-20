<?php


use PHPUnit\Framework\TestCase;

class RemoveStudent extends TestCase
{
    protected $conn;

    protected function setUp(): void
    {
        $server_name = "localhost";
        $username = "root";
        $password = "";
        $database_name = "student_management";

        $this->conn = mysqli_connect($server_name, $username, $password, $database_name);
    }

    public function testDeleteStudent()
    {

        $sql = "DELETE FROM test_student_data WHERE first_name= 'yoyo' and last_name= 'k1' and stu_id= '123'";
        $result = mysqli_query($this->conn, $sql);

        $this->assertTrue($result);
    }
    public function testFailedDelete()
    {

        $sql = "DELETE FROM test_student_data WHERE first_name= 'yoyo123456' and last_name= 'k1456' and stu_id= '1111112222333323'";
        $result = mysqli_query($this->conn, $sql);

        $this->assertTrue($result);
    }

    protected function tearDown(): void
    {
        mysqli_close($this->conn);
    }
}
