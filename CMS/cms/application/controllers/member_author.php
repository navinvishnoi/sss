<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_Author extends CI_Controller {

	var $Edit_Profile="Edit_Profile";
	
	function __construct()
	{
		parent::__construct();
	
		$this->load->helper(array('form', 'url', 'Smiley'));
	    $this->load->helper('smiley');
		$this->load->library('table');
		$this->load->library('form_validation');
		$this->load->model(array('admin_model'));
		$this->load->library('upload');
		$this->lang->load('de','german');
		$this->load->library('encrypt');
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
	/*public function index()
	{
		$memberid=$this->uri->segment(3);
		$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
		//print_r($data);
		$this->load->view('admin/index', $data);
	}*/
	public function getdatafromdb()
	{
	$data['getActiveContactType']=$this->admin_model->getActiveContactType();
	$data['getActiveDistrics']=$this->admin_model->getActiveDistrics();
	return $data;	
	}
	public function profile()
	{	
		$memberlogid;
		$data=$this->getdatafromdb();
		
		if($this->session->flashdata('Flag')!="")
		{
			if($this->session->flashdata('Flag')=="Edit_Profile")
			{
				$Member_App_Id=$this->session->flashdata('Member_App_Id');
				$memberid=$this->CheckUniqueAppID($Member_App_Id);
				$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
				$data['Email']=$this->session->flashdata('Email');
				$data['getMessagebyTitle']=$this->admin_model->getMessagebyTitle("Edit_Profile");
			}
		}
		$memberappid=$this->uri->segment(3);
		$memberid='';
		
		if($memberappid==''){
			$data['getMessagebyTitle']=$this->admin_model->getMessagebyTitle("Check_App_ID");
			}
		else{
			$memberid=$this->CheckUniqueAppID($memberappid);
			$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
			$data['getMaxLogIdbyMemberid']=$this->admin_model->getMaxLogIdbyMemberid($memberid);//fetch max id from member log table
			foreach($data['getMaxLogIdbyMemberid'] as $memberlogidval){$memberlogid=$memberlogidval->Member_log_id;}
			$data['getmemberlogbyid']=$this->admin_model->getmemberlogbyid($memberlogid);
			}
		
		if(!$memberid){
			$data['getMessagebyTitle']=$this->admin_model->getMessagebyTitle("Check_App_ID");
			}
		
		//print_r($data);die();
		$this->load->view('member_author/editprofile', $data);
	}
	public function updateprofile()
	{  
		$countryvalue='';$oldStatus='';$MemberCurrentStatus='';
		$getGermanCountry=$this->admin_model->getGermanCountry();
		foreach($getGermanCountry as $country)
		{
			$countryvalue=$country->country_german_value;
		}
		//echo $countryvalue;	
		if(isset($_POST['submit']))
		{
		$type="Edit_Profile";	
		$memberid=$this->input->post('memberid');
		$memberappid=$this->input->post('memberappid');
		$time=date('Y/m/d h:i:s');
		//unset($config);
		
		$email=$this->input->post('MA_email');
		$logo=$this->input->post('filename');
        $data = array ('Member_App_Id' =>$memberappid, 
		'Member_id' => $memberid, 
		'Member_Name' => $this->input->post('Member_Name'),
		'Member_logo' => $logo,
		'Member_Type' => $this->input->post('Member_Type'),
		'Member_Website' => $this->input->post('Member_Website'),
		'Member_Desc' => $this->input->post('Member_Desc'),//nl2br(htmlentities($this->input->post('Member_Desc'),ENT_QUOTES))
		'Member_Address_Street' => $this->input->post('Member_Address_Street'),
		'Member_House_No' => $this->input->post('Member_House_No'),
		'Member_ZIP' => $this->input->post('Member_ZIP'),
		'Member_City' => $this->input->post('Member_City'),
		'Member_Telephone' => $this->input->post('Member_Telephone'),
		'Member_Clubheim' => $this->input->post('Member_Clubheim'),
		'Member_President' => $this->input->post('Member_President'),	
		'Member_Country' => $countryvalue,
		'Member_Dist' => $this->input->post('Member_Dist'),
		'Member_FB_Address' => $this->input->post('Member_FB_Address'),
		'Member_Twtr_Address' => $this->input->post('Member_Twtr_Address'),
		'Member_Multiple_Sports' => $this->input->post('Member_Multiple_Sports'),
		'MA_name' => $this->input->post('MA_name'),
		'MA_first_name' => $this->input->post('MA_first_name'),
		'MA_position' => $this->input->post('MA_position'),
		'MA_street_no' => $this->input->post('MA_street_no'),
		'MA_house_no' => $this->input->post('MA_house_no'),
		'MA_zip' => $this->input->post('MA_zip'),
		'MA_city' => $this->input->post('MA_city'),
		'MA_dist' => $this->input->post('MA_dist'),
		'MA_country' => $countryvalue,
		'MA_phone' => $this->input->post('MA_phone'),
		'MA_mobile' => $this->input->post('MA_mobile'),
		'MA_email' => $this->input->post('MA_email'),
		'Member_CreatedAt' => $time,
		'Member_UpdatedAt' => $time    
		);
		$isRejectdata = array('Member_Name_isReject'=>'',
		'Member_Type_isReject'=>'','Member_Website_isReject'=>'',
		'Member_Desc_isReject'=>'','Member_Address_Street_isReject'=>'',
		'Member_House_No_isReject'=>'','Member_ZIP_isReject'=>'',
		'Member_City_isReject'=>'','Member_Telephone_isReject'=>'',
		'Member_Clubheim_isReject'=>'','Member_President_isReject'=>'',
		'Member_Dist_isReject'=>'','Member_Country_isReject'=>'',
		'Member_FB_Address_isReject'=>'','Member_Twtr_Address_isReject'=>'',
		'Member_Multiple_Sports_isReject'=>'','MA_name_isReject'=>'',
		'MA_first_name_isReject'=>'','MA_position_isReject'=>'',
		'MA_street_no_isReject'=>'','MA_house_no_isReject'=>'',
		'MA_zip_isReject'=>'','MA_city_isReject'=>'',
		'MA_phone_isReject'=>'','MA_mobile_isReject'=>'',
		'MA_email_isReject'=>'','Member_logo_isReject'=>'');
		$this->admin_model->UpdateRejectList($isRejectdata,$memberappid);
		$this->admin_model->add_log_member_profile($data);
		$data['getmemberAppbyid'] = $this->admin_model->getmemberAppbyid($memberappid);
		foreach($data['getmemberAppbyid'] as $oldval)
		{
		$oldStatus=$oldval->Member_Current_Status;
		if($oldStatus==="Rejected" || $oldStatus==="New_Rejected"){$MemberCurrentStatus="New";}else{$MemberCurrentStatus="Modify";}
		}
		
		$this->admin_model->updateMemberCurrentStatus($memberappid,$MemberCurrentStatus);
		
		//$this->_send_email($type, $email, $data);
		$this->session->set_flashdata('Member_App_Id',$memberappid);
		$this->session->set_flashdata('Email',$email);
		$this->session->set_flashdata('Flag',$type);
		$data['getMessagebyTitle']=$this->admin_model->getMessagebyTitle("Edit_Profile");
		$this->load->view("member_author/response",$data);
		//redirect('member_author/profile/'.$memberappid.'');
		}
	}
	function req_for_deletion()
	{
		$Member_App_Id = $this->uri->segment(3,0);
		$Flag = "Request_For_Deletion";
		$data['getmemberAppbyid'] = $this->admin_model->getmemberAppbyid($Member_App_Id);
		foreach($data['getmemberAppbyid'] as $oldval)
		{
		$oldStatus=$oldval->Member_Current_Status;
		if($oldStatus==="New"){$Status = "New_Request_For_Deletion";}else{$Status = "Request_For_Deletion";}
		}
		$this->admin_model->updateMemberCurrentStatus($Member_App_Id,$Status);
		$data['getMessagebyTitle']=$this->admin_model->getMessagebyTitle($Flag);
		$this->load->view("member_author/response",$data);
	}
	function deleteLogo()
	{
	$data=$this->admin_model->deleteLogoByAppID($_POST['AppID']);	//update logo to null by app id
	if($data) {echo $msg="<input type='hidden' name='filename' value=''>";}	
	}
	function CheckUniqueAppID($memberappid)
	{
		$data['CheckUniqueAppID']=$this->admin_model->CheckUniqueAppID($memberappid);
		$rowcount= $data['CheckUniqueAppID'];
		$getmemberid='';
		if($rowcount>0)
		{
			foreach($data['CheckUniqueAppID'] as $getvalue){$getmemberid=$getvalue->Member_id;}
			return $getmemberid;
		}
	}
	function _send_email($type, $email, $data)
	{
		$this->load->library('email');
		$this->email->from($this->config->item('webmaster_email'), $this->config->item('website_name'));
		$this->email->reply_to($this->config->item('webmaster_email'), $this->config->item('website_name'));
		$this->email->to($email);
		$this->email->subject($this->lang->line('auth_subject_'.$type));
		$this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));
		$this->email->set_alt_message($this->load->view('email/'.$type.'-txt', $data, TRUE));
		$this->email->send();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */