<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Super_Admin extends CI_Controller {

	public $session_expire_time = '7200'; 
	function __construct()
	{
		parent::__construct();
	
		$this->load->helper(array('form', 'url'));
	    $this->load->library('table');
		$this->load->library('form_validation');
		$this->load->model(array('super_admin_model'));
		$this->load->library('upload');
		$this->lang->load('de','german');
		$this->load->library('session');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 //this function collect the data of contact types & districts from db.	
	 
	public function index()
	{
	//this is the main page which loads with the index page.	
	session_start();
	
	/*
	We are using manual session.Here we start the session and check weather session exist or not? 
	if not exist then it will create a new session and store it in db. 
	*/ 
	$_SESSION["last_acted_on"] = time();
	$data['getcustomerlist']=$this->super_admin_model->getcustomerlist();
		
		//loads the index page with data.
		$this->load->view('super_admin/index', $data);
	}

public function addcustomer()
	{
		if(isset($_POST['submit']))
		{
		$time=date('Y/m/d H:i:s');
		$customer_id=$this->input->post('customer_id');
			$data = array (
			'customer_id' => $this->input->post('customer_id'),
			'customer_name' => $this->input->post('customer_name'),
			'customer_status' => $this->input->post('customer_status'),
			'customer_language' => $this->input->post('customer_language'),
			'create_by' => 'SaarbruckenSuperAdmin',
			'create_at' => $time,
			'modify_by' => 'SaarbruckenSuperAdmin',
			'modify_at' => $time);
			//print_r($data); die();
			$Customer_Exist=$this->super_admin_model->add_customer_profile($data,$customer_id);
			if($Customer_Exist=="Exist") $this->load->view('super_admin/AddCustomer',$Customer_Exist);
			else redirect('super_admin');
		}else $this->load->view('super_admin/AddCustomer');
	}
public function Editcustomer()
	{
		$custId = $this->uri->segment(3);
		if(isset($_POST['submit']))
		{
		$time=date('Y/m/d H:i:s');
		$data = array (
			'customer_id' => $this->input->post('customer_id'),
			'customer_name' => $this->input->post('customer_name'),
			'customer_status' => $this->input->post('customer_status'),
			'customer_language' => $this->input->post('customer_language'),
			'modify_by' => 'SaarbruckenSuperAdmin',
			'modify_at' => $time);
			//print_r($data); die();
			$data=$this->super_admin_model->update_customer_profile($data,$custId);
			redirect('super_admin');
	}else {
		$data['getcustomerbyid']=$this->super_admin_model->getcustomerbyid($custId);
		$this->load->view('super_admin/EditCustomer', $data);
		}
	}
	
function changeCustomerStatus()
{	$i = $_POST['count'];
		$custID=$_POST['custID'];
		 if($_POST['customer_status']=='Deactive')$customerstatus='Active'; else $customerstatus='Deactive';
		 $this->super_admin_model->updateCustomerCurrentStatus($customerstatus, $custID);
		 if($customerstatus=='Active') 
		 { $btnclass='btn13';$icon="<img src='".asset_url()."img/orange_icons/Active.png'>"; }
		 else{ $btnclass=' btn13';$icon="<img src='".asset_url()."img/orange_icons/Deactive.png'>"; } 
					echo "<input type='hidden' id='status".$i."' value=".$customerstatus.">
                   		  <button type='button' class='".$btnclass."' onClick='checkStatus(".$custID.",".$i.")'>
                                           ".$icon."</button>";			
}


}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */