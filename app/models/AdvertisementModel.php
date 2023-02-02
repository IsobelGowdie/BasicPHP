<?php

class AdvertisementsModel
{
    private $conn;

    public function __construct()
    {
        require_once 'config.php';
        $this->conn = new mysqli('localhost', 'root', '', 'basic_php');
    }

    public function getAdvertisements()
    {
        $query = "SELECT advertisements.*, users.name as name
                  FROM advertisements
                  INNER JOIN users ON advertisements.userid = users.id";
        $result = $this->conn->query($query);
        $advertisements = [];
        while ($row = $result->fetch_assoc()) {
            $advertisements[] = $row;
        }
        return $advertisements;
    }
}

?>