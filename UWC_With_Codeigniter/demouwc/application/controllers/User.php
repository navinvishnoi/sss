<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {

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
	function __construct()
	{
		
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model(array('User_model'));
		$this->load->library('session');
        $this->load->database();


		
	}
	
	public function index()
	{
		$this->load->view('index');
	}
	public function home()
	{
		$this->load->view('home');
	}
	
	/*Start Sales dropdown menu*/
	public function Lead_genration_list()
	{
		//print_r($data);
		$data['Lead_genration_list']=$this->User_model->Lead_genration_list();
		$this->load->view('Lead_genration_list', $data);
	}
	
	
	public function Add_Lead_genration()
	{
		if(isset($_POST['submit']))
		{
		$time=date('Y/m/d H:i:s');
		$ID=$this->input->post('ID');
			$data = array (
	'Lead_ID' => $this->input->post('Lead_ID'),
	'Lead' => $this->input->post('Lead'),
	'Lead_Short_Name' => $this->input->post('Lead_Short_Name'),
	'Lead_Type' => $this->input->post('Lead_Type'),
	'Lead_Address' => $this->input->post('Lead_Address'),
	'Lead_City' => $this->input->post('Lead_City'),
	'Lead_State' => $this->input->post('Lead_State'),
	'Lead_Pin_Code' => $this->input->post('Lead_Pin_Code'),
	'Lead_Country' => $this->input->post('Lead_Country'),
	'Lead_Landline_Number' => $this->input->post('Lead_Landline_Number'),
	'Lead_Contact_Person' => $this->input->post('Lead_Contact_Person'),
	'Lead_Degingnation' => $this->input->post('Lead_Degingnation'),
	'Lead_Contact_Number' => $this->input->post('Lead_Contact_Number'),
	'Lead_Email_ID' => $this->input->post('Lead_Email_ID'),
	'Lead_Business_Email_ID' => $this->input->post('Lead_Business_Email_ID'),
	'Lead_Called_by' => $this->input->post('Lead_Called_by'),
	'Lead_Called_on' => $this->input->post('Lead_Called_on'),
	'Lead_Visited_by' => $this->input->post('Lead_Visited_by'),
	'Lead_Visited_on' => $this->input->post('Lead_Visited_on'),
	'Lead_Response' => $this->input->post('Lead_Response'),
	'Lead_Next_Follow_up' => $this->input->post('Lead_Next_Follow_up'),
	'Lead_Next_Follow_up_Date' => $this->input->post('Lead_Next_Follow_up_Date'),
	'Lead_Class' => $this->input->post('Lead_Class'),
	'Lead_Area_Manager' => $this->input->post('Lead_Area_Manager'),
	'Lead_Status' => $this->input->post('Lead_Status'),
	'Lead_Reference_Name' => $this->input->post('Lead_Reference_Name'),
	'Lead_Reference_Contact_Number' => $this->input->post('Lead_Reference_Contact_Number'),
	'Lead_Create_at' => $time,
	'Lead_Create_by' => 'UWCUSER',
	'Lead_Modify_at' => $time,
	'Lead_Modify_by' => 'UWCUSER');
	//print_r($data); 
			$ID_Exist=$this->User_model->Add_Lead_genration($data,$ID);
			if($ID_Exist=="LeadIDExist") $this->load->view('User/Add_Lead_genration',$ID_Exist);
			else redirect('User/Lead_genration_list');
		}else 
		{ 
		$this->load->view('Add_Lead_genration');
	}
	}
	
	
	public function View_Lead_genration($ID)
	{
		//print_r($data);
		$data['View_Lead_genration']=$this->User_model->View_Lead_genration($ID);
		$this->load->view('View_Lead_genration', $data);
		
	}
	
	public function Edit_Lead_genration()
	{
		$ID = $this->uri->segment(3,0);
		if(isset($_POST['submit']))
		{
		$time=date('Y/m/d H:i:s');
		$data = array (
			'Lead_ID' => $this->input->post('Lead_ID'),
			'Lead' => $this->input->post('Lead'),
			'Lead_Short_Name' => $this->input->post('Lead_Short_Name'),
			'Lead_Type' => $this->input->post('Lead_Type'),
			'Lead_Address' => $this->input->post('Lead_Address'),
			'Lead_City' => $this->input->post('Lead_City'),
			'Lead_State' => $this->input->post('Lead_State'),
			'Lead_Pin_Code' => $this->input->post('Lead_Pin_Code'),
			'Lead_Country' => $this->input->post('Lead_Country'),
			'Lead_Landline_Number' => $this->input->post('Lead_Landline_Number'),
			'Lead_Contact_Person' => $this->input->post('Lead_Contact_Person'),
			'Lead_Degingnation' => $this->input->post('Lead_Degingnation'),
			'Lead_Contact_Number' => $this->input->post('Lead_Contact_Number'),
			'Lead_Email_ID' => $this->input->post('Lead_Email_ID'),
			'Lead_Business_Email_ID' => $this->input->post('Lead_Business_Email_ID'),
			'Lead_Called_by' => $this->input->post('Lead_Called_by'),
			'Lead_Called_on' => $this->input->post('Lead_Called_on'),
			'Lead_Visited_by' => $this->input->post('Lead_Visited_by'),
			'Lead_Visited_on' => $this->input->post('Lead_Visited_on'),
			'Lead_Response' => $this->input->post('Lead_Response'),
			'Lead_Next_Follow_up' => $this->input->post('Lead_Next_Follow_up'),
			'Lead_Next_Follow_up_Date' => $this->input->post('Lead_Next_Follow_up_Date'),
			'Lead_Class' => $this->input->post('Lead_Class'),
			'Lead_Area_Manager' => $this->input->post('Lead_Area_Manager'),
			'Lead_Status' => $this->input->post('Lead_Status'),
			'Lead_Reference_Name' => $this->input->post('Lead_Reference_Name'),
			'Lead_Reference_Contact_Number' => $this->input->post('Lead_Reference_Contact_Number'),
			'Lead_Modify_at' => $time,
			'Lead_Modify_by' => 'UWCUSER');
			//print_r($data); die();
			$data=$this->User_model->Edit_Lead_genration($data,$ID);
			redirect('User/Lead_genration_list');
	}else {
		$data['View_Lead_genration']=$this->User_model->View_Lead_genration($ID);
		$this->load->view('Edit_Lead_genration', $data);
		}
	}
	
	
	public function Quotation_list()
	{
		$this->load->view('Quotation_list');
	}
	public function Add_Quotation()
	{
		$this->load->view('Add_Quotation');
	}
	public function View_Quotation()
	{
		$this->load->view('View_Quotation');
	}
	
	
	public function Sales_order_list()
	{
		$this->load->view('Sales_order_list');
	}
	public function Add_Sales_order()
	{
		$this->load->view('Add_Sales_order');
	}
	public function View_Sales_order()
	{
		$this->load->view('View_Sales_order');
	}
	
	
	public function Delivery_challan_list()
	{
		$this->load->view('Delivery_challan_list');
	}
	public function Add_Delivery_challan()
	{
		$this->load->view('Add_Delivery_challan');
	}
	public function View_Delivery_challan()
	{
		$this->load->view('View_Delivery_challan');
	}
	
	
	public function Invoice_list()
	{
		$this->load->view('Invoice_list');
	}
	public function Add_Invoice()
	{
		$this->load->view('Add_Invoice');
	}
	public function View_Invoice()
	{
		$this->load->view('View_Invoice');
	}
	
	
	public function Customer_list()
	{
		$this->load->view('Customer_list');
	}
	public function Add_Customer()
	{
		$this->load->view('Add_Customer');
	}
	public function View_Customer()
	{
		$this->load->view('View_Customer');
	}
	
	
	public function Receipt_Entry()
	{
		$this->load->view('Receipt_Entry');
	}
	public function Order_Tracking()
	{
		$this->load->view('Order_Tracking');
	}
	public function Genrate_BOM()
	{
		$this->load->view('Genrate_BOM');
	}
	public function Order_Dispatch_Screen()
	{
		$this->load->view('Order_Dispatch_Screen');
	}
	/*End Sales dropdown menu*/
	
	/*Start Purchase dropdown menu*/
	public function Purchas_order_list()
	{
		$this->load->view('Purchas_order_list');
	}
	public function Add_Purchas_order()
	{
		$this->load->view('Add_Purchas_order');
	}
	public function View_Purchas_order()
	{
		$this->load->view('View_Purchas_order');
	}
	
	
	public function Vendor_list()
	{
		$this->load->view('Vendor_list');
	}
	public function Add_Vendor()
	{
		$this->load->view('Add_Vendor');
	}
	public function View_Vendor()
	{
		$this->load->view('View_Vendor');
	}
	
	
	public function Add_New_Bill()
	{
		$this->load->view('Add_New_Bill');
	}
	public function Payment_Entry()
	{
		$this->load->view('Payment_Entry');
	}
	public function Order_Receipt_Screen()
	{
		$this->load->view('Order_Receipt_Screen');
	}
	/*Start Purchase dropdown menu*/
	
	/*Start Inventory dropdown menu*/
	public function Inventory_list()
	{
		$this->load->view('Inventory_list');
	}
	public function Add_Inventory()
	{
		$this->load->view('Add_Inventory');
	}
	public function View_Inventory()
	{
		$this->load->view('View_Inventory');
	}
	
	
	public function Current_Stock()
	{
		$this->load->view('Current_Stock');
	}
	public function Movement_History()
	{
		$this->load->view('Movement_History');
	}
	public function Adjust_Stock()
	{
		$this->load->view('Adjust_Stock');
	}
	public function Transfer_Stock()
	{
		$this->load->view('Transfer_Stock');
	}
	public function Reorders_Stock()
	{
		$this->load->view('Reorders_Stock');
	}
	/*End Inventory dropdown menu*/
}
