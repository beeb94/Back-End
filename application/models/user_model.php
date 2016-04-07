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
			'us_date'=>$this->input->post('us_date')
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
	
	public function downloadNumberOnes(){
	    $SQL = "SELECT artist, COUNT(BBHOT100) AS 'Number Ones'
FROM job 
GROUP BY artist 
HAVING COUNT(*) > 0";
$header = '';
$result ='';
$exportData = mysql_query ($SQL ) or die ( "Sql error : " . mysql_error( ) );
 
$fields = mysql_num_fields ( $exportData );
 
for ( $i = 0; $i < $fields; $i++ )
{
    $header .= mysql_field_name( $exportData , $i ) . "\t";
}
 
while( $row = mysql_fetch_row( $exportData ) )
{
    $line = '';
    foreach( $row as $value )
    {                                            
        if ( ( !isset( $value ) ) || ( $value == "" ) )
        {
            $value = "\t";
        }
        else
        {
            $value = str_replace( '"' , '""' , $value );
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
    }
    $result .= trim( $line ) . "\n";
}
$result = str_replace( "\r" , "" , $result );
 
if ( $result == "" )
{
    $result = "\nNo Record(s) Found!\n";                        
}
 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=SongData.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$result";
	}
	
	public function downloadAll(){
	    $SQL = "SELECT  * from job";
$header = '';
$result ='';
$exportData = mysql_query ($SQL ) or die ( "Sql error : " . mysql_error( ) );
 
$fields = mysql_num_fields ( $exportData );
 
for ( $i = 0; $i < $fields; $i++ )
{
    $header .= mysql_field_name( $exportData , $i ) . "\t";
}
 
while( $row = mysql_fetch_row( $exportData ) )
{
    $line = '';
    foreach( $row as $value )
    {                                            
        if ( ( !isset( $value ) ) || ( $value == "" ) )
        {
            $value = "\t";
        }
        else
        {
            $value = str_replace( '"' , '""' , $value );
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
    }
    $result .= trim( $line ) . "\n";
}
$result = str_replace( "\r" , "" , $result );
 
if ( $result == "" )
{
    $result = "\nNo Record(s) Found!\n";                        
}
 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=SongData.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$result";
	}
	
}