<?php
class super_admin_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	function getcustomerlist()
	{
		$this->db->select('*');	
		$this->db->from('Customer');
		$this->db->order_by('customer_name','ASC');
		$getcustomerlist=$this->db->get();
		return $getcustomerlist->result();
	}
	function getcustomerbyid($customerid)
	{
		$this->db->select('*');	
		$this->db->from('Customer');
		$this->db->where('custID',$customerid);
		$getcustomerbyid=$this->db->get();
		return $getcustomerbyid->result();
	}
	function add_customer_profile($data,$customer_id)
	{
		$this->db->select('*');
		$this->db->from('Customer');
		$q=$this->db->where('customer_id',$customer_id)->get();
		if($q->num_rows() == 0){
			/*echo "Not Exist";die();*/
				$this->db->insert('Customer', $data);
				$add_customer_profile=$this->db->insert_id();
				return $add_customer_profile;
			}else{/*echo "Exist";die();*/ return "Exist";}
	}
	function update_customer_profile($data,$customerid) 
	{
		$this->db->set($data);
		$this->db->where('custID',$customerid);
		$update_customer_profile=$this->db->update('Customer');
		return $update_customer_profile;
	}
	function updateCustomerCurrentStatus($customerstatus,$customerid)
	{
		$this->db->set('customer_status',$customerstatus);
		$this->db->where('custID',$customerid);
		$updateCustomerCurrentStatus=$this->db->update('Customer');
		return $updateCustomerCurrentStatus;
	}
}
?>