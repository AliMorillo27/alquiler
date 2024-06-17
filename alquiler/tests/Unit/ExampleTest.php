<?php
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testDatabaseConnection()
    {
        $mysqli = new mysqli('localhost', 'root', '', 'alquiler');
        $this->assertFalse($mysqli->connect_error);
        $result = $mysqli->query("SELECT * FROM clientes");
        $this->assertGreaterThan(0, $result->num_rows);
        $mysqli->close();
    }
}
