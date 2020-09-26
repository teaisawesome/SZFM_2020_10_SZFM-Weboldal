<?php 
session_start();

require(ROOT . "model/RegistrationModel.php");

class RegistrationController extends Controller
{
    public function index()
    {
        $this->view('templates/header');
        $this->view('registrationpage');
        $this->view('templates/footer');
    }

    public function registration($inputs)
    {
        $formInputs = array(
            'name' => $inputs[0],
            'address' => $inputs[1],
            'email' => $inputs[2],
            'phone' => $inputs[3],
            'password' => $inputs[4]
        );

        $registModel = new RegistrationModel();

        $registModel->registration($formInputs);
    }
}
?>