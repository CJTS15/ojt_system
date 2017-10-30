<?php
class Signup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation'));
        // $this->load->database();
        $this->load->model('user_model');
    }

    public function index()
    {

        $this->load->helper('url');

        //validation
        $this->form_validation->set_rules('fname','First Name','trim|required');
        $this->form_validation->set_rules('lname','Last Name','trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');

        // submit
        if ($this->form_validation->run() == FALSE)
        {
            // fails
            // $this->load->view('signup_page');
        }
        else
        {
            // $password = $this->input->post('password');
            // $encrypted = $this->encryption->encrypt($password);
            // $decrypted = $this->encryption->decrypt($encrypted);
            // echo $password.' '.$encrypted.' '.$decrypted; die();
            
            //insert user details into db
            $data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
                //'password' => $this->encryption->encrypt($password)
            );

            if ($this->user_model->insert_user($data))
            {
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
                redirect('Welcome/loginPage');
            }
            else
            {
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('signup/index');
            }
        }
        $this->load->view('signup_page');
    }
}
?>