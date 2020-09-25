<?php 
session_start();

require(ROOT . "model/LoginModel.php");

class LoginController extends Controller
{
    public function index()
    {
        $this->view('template/header');
        $this->view('loginpage');
        $this->view('template/footer');
    }

    public function authentication($input)
    {
        $loginModel = new LoginModel();

        $loginModel->authentication($input[0], $input[1]);
    }
}
?>