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
		$this->load->view('header_view');
		$this->load->view('home');
		$this->load->view('footer_view.php');
	}
	
	public function index_in()
	{
		$this->load->view('header_view');
		$this->load->view('home_in.php');
		$this->load->view('footer_view.php');
	}
	
	public function login()
	{
		$email=$this->input->post('email');
		$password=md5($this->input->post('pass'));

		$result=$this->user_model->login($email,$password);
		if($result) $this->welcome();
		else        $this->index_in();
	}
	
	public function welcome()
	{
		$this->load->view('header_view.php');
		$this->load->view('welcome_view.php');
		$this->load->view('footer_view.php');
	}
	
	public function home()
	{
		$this->load->view('header_view');
		$this->load->view('registration_view.php');
		$this->load->view('footer_view.php');
	}
	
	public function registration()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('user_name', 'User Name',        'trim|required|min_length[4]|xss_clean');
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
	
	public function thank()
	{
		if(empty($_SESSION['username']))
                die();
		$this->load->view('header_view');
		$this->load->view('thank_view.php');
		$this->load->view('footer_view.php');
	}
	
	public function logout()
	{
		$newdata = array(
		'user_id'   =>'',
		'user_name'  =>'',
		'user_email'     => '',
		'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata );
		$this->session->sess_destroy();
		$this->index();
	}
	
}