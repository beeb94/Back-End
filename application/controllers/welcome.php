<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('user_model');
		$this->load->library('session');
	}
	
	public function index()
	{
		$this->load->view('home');
	}
	
	public function login()
	{
		$email=$this->input->post('email');
		$password=md5($this->input->post('pass'));

		$result=$this->user_model->login($email,$password);
		if($result) $this->welcome();
		else        $this->index();
	}
	
	public function welcome()
	{
		$this->load->view('welcome_view.php', $data);
	}
	
	public function home()
	{
		$this->load->view('registration_view.php');
	}
	
	public function registration()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('confirm_email_address', 'Email Confirmation', 'trim|required|matches[email_address]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_rules('address', 'Address', 'trim|min_length[4]|xss_clean');
		$this->form_validation->set_rules('city', 'City', 'trim|min_length[4]|xss_clean');
		$this->form_validation->set_rules('postcode', 'Postcode', 'trim|min_length[4]|xss_clean');

		if($this->form_validation->run() == FALSE)
		{
			$this->home();
		}
		else
		{
			$this->user_model->add_user();
			$this->thank();
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */