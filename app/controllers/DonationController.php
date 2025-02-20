<?php
class DonationController {
    private $db;
    private $donationModel;

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
        require_once 'app/models/Donation.php';
        $this->donationModel = new Donation($this->db);
    }

    public function index() {
        if(!isset($_SESSION['user_id'])) {
            header('Location: login');
            exit();
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $amount = $_POST['amount'];
            $message = $_POST['message'];
            $user_id = $_SESSION['user_id'];

            if($this->donationModel->create($user_id, $amount, $message)) {
                header('Location: home');
                exit();
            }
        }

        require_once 'app/views/donate.php';
    }
}
