<?php 
session_start();

class HomeController extends Controller
{
    public function index()
    {
        $this->view("templates/header");
        $this->view("index");
        $this->view("templates/footer");
    }

    public function logout()
    {
        unset($_SESSION['logged']);
        unset($_SESSION['user']);
        
        header('Location: http://localhost/SZFM_2020_10_SZFM-Weboldal/app/');
    }
}

?>