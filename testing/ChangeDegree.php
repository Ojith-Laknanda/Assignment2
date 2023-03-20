<?php


use PHPUnit\Framework\TestCase;

class ChangeDegree extends TestCase
{
    protected $conn;

    protected function setUp(): void
    {
        $server_name="localhost";
        $username="root";
        $password="";
        $database_name="student_management";

        $this->conn = mysqli_connect($server_name,$username,$password,$database_name);
    }

    public function testUpdateDegree()
    {

        $sql = "UPDATE test_student_data SET degree = 'civil eng' WHERE stu_id='12345' and first_name = 'nihal' and last_name='kamal'";
        $result = mysqli_query($this->conn, $sql);

        $this->assertTrue($result);
    }

    protected function tearDown(): void
    {
        mysqli_close($this->conn);
    }
}
