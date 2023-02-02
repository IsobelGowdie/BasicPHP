<?php

class MainController
{
    private $usersModel;
    private $advertisementsModel;

    public function __construct()
    {
        require_once 'app\models\UserModel.php';
        require_once 'app\models\AdvertisementModel.php';
        $this->usersModel = new UsersModel();
        $this->advertisementsModel = new AdvertisementsModel();
    }

    public function users()
    {
        $users = $this->usersModel->getUsers();
        include 'app\views\UsersView.php';
    }

    public function advertisements()
    {
        $advertisements = $this->advertisementsModel->getAdvertisements();
        include 'app\views\AdvertisementsView.php';
    }
}

?>