<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
    }
	function login($email,$password)
    {
		$this->db->where("email",$email);
        $this->db->where("password",$password);
            
        $query=$this->db->get("sh_user");
        if($query->num_rows()>0)
        {
         	foreach($query->result() as $rows)
            {
            	//add all data to session
                $newdata = array(
                	   	'user_id'       => $rows->id,
                    	        'user_name' 	=> $rows->username,
		                'user_email'    => $rows->email,
	                        'logged_in' 	=> TRUE,
                   );
			}
            	$this->session->set_userdata($newdata);
                return true;            
		}
		return false;
    }
	public function add_user()
	{
		$data=array(
			'username'=>$this->input->post('user_name'),
			'email'=>$this->input->post('email_address'),
			'password'=>md5($this->input->post('password')),
			'address'=>$this->input->post('address'),
			'city'=>$this->input->post('city'),
			'postcode'=>$this->input->post('postcode')
			);
		$this->db->insert('sh_user',$data);
	}
	
	public function insertJob() 
        {
	        $data=array(
		        'song_title'=>$this->input->post('song_title'),
			'artist'=>$this->input->post('artist'),
			'album'=>$this->input->post('album'),
			'BBHOT100'=>$this->input->post('BBHOT100'),
			'UKTOP40'=>$this->input->post('UKTOP40')
		        );
		$this->db->insert('job', $data);
 
        }
	
	public function getallsongs(){ 
                         $query = $this->db->get('job');  
         return $query;  
        }
	
	public function delete($id){
	                $this->load->database();
	                $this->db->delete('job', array('song_id' => $id)); 
        }
	
}