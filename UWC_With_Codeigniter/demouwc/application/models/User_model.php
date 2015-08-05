<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	function Lead_genration_list()
	{
		$this->db->select('*');	
		$this->db->from('Lead_genration');
		$Lead_genration_list=$this->db->get();
		return $Lead_genration_list->result();
	}
	function View_Lead_genration($ID)
	{
		$this->db->select('*');	
		$this->db->from('Lead_genration');
		$this->db->where('ID',$ID);
		$View_Lead_genration=$this->db->get();
		return $View_Lead_genration->result();
	}
	function Add_Lead_genration($data,$ID)
	{
		$this->db->select('*');
		$this->db->from('Lead_genration');
		$q=$this->db->where('ID',$ID)->get();
		if($q->num_rows() == 0){
			/*echo "Not Exist";die();*/
				$this->db->insert('Lead_genration', $data);
				$Add_Lead_genration=$this->db->insert_id();
				return $Add_Lead_genration;
			}else{/*echo "Exist";die();*/ return "LeadIDExist";}
	}
	function Edit_Lead_genration($data,$ID) 
	{
		//print_r($ID); die();
		$this->db->set($data);
		$this->db->where('ID',$ID);
		$Edit_Lead_genration=$this->db->update('Lead_genration');
		return $Edit_Lead_genration;
	}

}
?>