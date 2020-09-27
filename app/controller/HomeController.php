<?php 
session_start();

class HomeController extends Controller
{
    public function index()
    {
        $this->view("homepage");
    }

    public function logout()
    {
        unset($_SESSION['logged']);
        unset($_SESSION['user']);
        
        header('Location: http://localhost/SZFM_2020_10_SZFM-Weboldal/app/');
    }
}

?>