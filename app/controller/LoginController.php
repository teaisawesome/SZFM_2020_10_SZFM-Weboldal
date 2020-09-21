<?php 
session_start();

class LoginController extends Controller
{
    public function index()
    {
        $this->view('template/header');
        $this->view('loginpage');
        $this->view('template/footer');
    }

    public function validation()
    {
        // ...
    }

    public function authentication($input)
    {
        // statikus matching - lecseréljük adatbázisra.
        if($input[0] == 'harvey@nyc.com' && $input[1] == '123')
        {
            // siker
            $_SESSION['logged'] = true;
            $_SESSION['user'] = $input[0];

            $this->view('index');
        }
        else
        {
            // fail
            $this->view('login');
        }
    }
}
?>