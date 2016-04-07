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
		$this->load->view('footer_view');
	}
	
	public function index_in()
	{
		$this->load->view('header_view');
		$this->load->view('home_in.php');
		$this->load->view('footer_view');
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
	
	public function addjobForm(){ 
	        $this->load->helper('form'); 
                $this->load->view('header_view.php');
	        $this->load->view('newsong.php');
                $this->load->view('footer_view.php');
	} 
	 
	public function addsong()
	{		
		$this->load->library('form_validation');
		$this->load->helper('form');
		// field name, error message, validation rules
		$this->form_validation->set_rules('song_title', 'Song Title',        'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('artist', 'Artist', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('album', 'Album', 'trim|required|min_length[4]|xss_clean');
		$this->form_validation->set_rules('BBHOT100', 'Billboard Hot 100 Position', 'trim|required|min_length[1]|xss_clean');
		$this->form_validation->set_rules('us_date', 'Date issued', 'trim|required|min_length[1]|xss_clean');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view("header_view");
	                $this->load->view("newsong");
                        $this->load->view("footer_view");
		}
		else
		{
			$this->user_model->insertJob();
			$this->load->view("header_view");
	                $this->load->view("confirmation");
                        $this->load->view("footer_view");
		}
	}
	public function allSongs() 
        {
                        $this->load->database();
			$this->load->model("user_model"); 
                        $data['jobs']=$this->user_model->getallsongs();
			$this->load->view("header_view", $data);
                        $this->load->view("allsongs", $data);
			$this->load->view("footer_view", $data);
                }
		
	public function del($id){
                        $data['title']= 'Deleted';
                        $this->load->library('table');
                        $this->load->helper('html');  
                        $this->load->model('user_model');
                        if((int)$id > 0){
                        $this->user_model->delete($id);
                }
                        $data['query'] = $this->user_model->getallsongs();
                        $this->load->helper('url');
                        //redirect('user/details');
                        $this->output->set_header('refresh:2;url='.site_url().'/welcome/allSongs');
                        $this->load->view('header_view',$data);
                        $this->load->view('details',$data);
                        $this->load->view('footer_view',$data);

}
    public function export()
    {
        $this->load->database();
        $this->load->view('export.php');
    }
		
}