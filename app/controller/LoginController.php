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

    public function emailValidation($email)
    {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return false;
        }   

        return true;

    }

    public function passwordValidation($pwd)
    {
        if (empty($pwd))
        {
            return false;
        }   

        return true;
    }

    public function authentication($input)
    {
        $valid = true; $emailError = false; $passwordError = false;

        if(!$this->emailValidation($input[0]))
        {
            $emailError = true;
            $valid = false;
        }

        if(!$this->passwordValidation($input[1]))
        {
            $passwordError = true;
            $valid = false;
        }

        if($valid)
        {
            $_SESSION['logged'] = true;
            $_SESSION['user'] = "asd";
            unset($_SESSION['login_errors']);

            header("Location: http://localhost/SZFM_2020_10_SZFM-Weboldal/app/");

        }
        else
        {

            $_SESSION['login_errors'] = [$emailError, $passwordError];
            
            header("Location: http://localhost/SZFM_2020_10_SZFM-Weboldal/app/login");

        }

        // statikus matching - lecseréljük adatbázisra.
        /*if($input[0] == 'harvey@nyc.com' && $input[1] == '123')
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
        }*/
    }
}
?>