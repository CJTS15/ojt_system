<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('user_model');
    }
    
    public function index()
    {
        $this->load->helper('url');
        // get form input
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        
        // form validation
        $this->form_validation->set_rules("username", "Username", "trim|required|min_length[3]");
        $this->form_validation->set_rules("password", "Password", "trim|required");

        if ($this->form_validation->run() == FALSE)
        {
            // validation fail
            // $this->load->view('login_page');
        }
        else
        {
            // check for user credentials
            $uresult = $this->user_model->get_user($username, $password);
            if (count($uresult) > 0)
            {
                // set session
                $sess_data = array('login' => TRUE, 'uname' => $uresult[0]->fname, 'uid' => $uresult[0]->id);
                $this->session->set_userdata($sess_data);
                redirect('profile/index');
            }
            else
            {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>'); 
            }
        }
        $this->load->view('login_page');
    }
}
?>