<?php
class UsersModel
{
    private $conn;

    public function __construct()
    {
        require_once 'config.php';
        $this->conn = new mysqli('localhost', 'root', '', 'basic_php');
    }

    public function getUsers()
    {
        $query = "SELECT * FROM users";
        $result = $this->conn->query($query);
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        return $users;
    }
}

?>