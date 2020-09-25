<?php 
    $root = 'D:/Programok/XAMPP/htdocs/SZFM_2020_10_SZFM-Weboldal/app/';

    require(ROOT . '/database/UserDAO.php');

    class LoginModel
    {
        public $userDao;

        public function __construct()
        {
            $this->userDao = new UserDao();   
        }

        public function emailValidation($email)
        {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                return false;
            }   

            return true;
        }

        public function passwordValidation($password)
        {
            if (empty($password))
            {
                return false;
            }   

            return true;
        }

        public function authentication($email, $password)
        {
            $valid = true; $emailError = false; $passwordError = false; $loginError = false;

            if(!$this->emailValidation($email))
            {
                $emailError = true;
                $valid = false;
            }

            if(!$this->passwordValidation($password))
            {
                $passwordError = true;
                $valid = false;
            }

            if($valid)
            {
                try
                {
                    if($this->userDao->auth($email, $password))
                    {
                        $_SESSION['logged'] = true;
                        $_SESSION['user'] = $email;
                        unset($_SESSION['login_errors']);

                        header("Location: http://localhost/SZFM_2020_10_SZFM-Weboldal/app/");
                    }
                    else
                    {
                        $_SESSION['login_errors'] = array(
                            "loginErrorMessage" => "Sikertelen bejelentkezés! Hibás e-mail vagy jelszó!"
                        );

                        header("Location: http://localhost/SZFM_2020_10_SZFM-Weboldal/app/login");

                    }
                }
                catch(Exception $e)
                {
                    echo $e->getMessage();
                }
            }
            else
            {
                $_SESSION['login_errors'] = array(
                    "emailErrorMessage" => "Kérlek e-mail formátumot adj meg!",
                    "passwordErrorMessage" => "A jelszó mező kitöltése kötelező!"
                );
                
                header("Location: http://localhost/SZFM_2020_10_SZFM-Weboldal/app/login");
            }
        }
    }
?>