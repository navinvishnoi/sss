<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public $session_expire_time = '7200'; 
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
	 	
	public function getdatafromdb()
	{
	$data['getActiveContactType']=$this->admin_model->getActiveContactType();
	$data['getActiveDistrics']=$this->admin_model->getActiveDistrics();
	return $data;	
	}
	public function index()
	{	
	session_start();
	$_SESSION["last_acted_on"] = time();
	$this->session_exists();
	$data=$this->getdatafromdb();
	if(isset($_GET['sessionid']) && $_GET['sessionid']!='') $sessionid = $_GET['sessionid']; else $sessionid = session_id();
	$data['userdata']=$this->admin_model->GetBufferUserData($sessionid);
	if(count($data['userdata'])==0){
	$this->admin_model->InsertBufferUserData(array('sessionid'=>$sessionid,'session_active_time'=>$_SESSION["last_acted_on"]));
	$data['userdata']=$this->admin_model->GetBufferUserData($sessionid);
	}
		$totalcount;
		/*if(!isset($_GET['cancel']))
		{$this->session->keep_flashdata('Flag');}
		*/
		if($this->session->flashdata('Flag'))
		{
			if($this->session->flashdata('Flag')=="Add_Profile")
			{
				$Member_App_Id=$this->session->flashdata('Member_App_Id');
				$memberid=$this->CheckUniqueAppID($Member_App_Id);
				$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
				$data['Email']=$this->session->flashdata('Email');
				$data['getMessagebyTitle']=$this->admin_model->getMessagebyTitle("Add_Profile");
			}
			
		}
		
		foreach($data['userdata'] as $dataval)
		{
			if($dataval->filter_data!="")
			{
			$filter_data = explode(',',$dataval->filter_data);
			$contacttype = $filter_data[0]; 
			$dist = $filter_data[1];
			$text = $filter_data[2];
			$data['contacttype'] = $contacttype;
			$data['dist'] = $dist;
			$data['text'] = $text;
			$data['getListMemberAccepted']=$this->admin_model->SearchFilter($contacttype, $dist, $text);
			$totalcount=$dataval->total_count;
			$userdata = array('filter_data'=>$dataval->filter_data,'total_count'=>$totalcount);
			$this->admin_model->UpdateBufferUserData($userdata,$sessionid);	
			}else {
			$data['getListMemberAccepted']=$this->admin_model->getListMemberAccepted();
			$totalcount=count($data['getListMemberAccepted']);
			$userdata = array('filter_data'=>"",'total_count'=>$totalcount);
			$this->admin_model->UpdateBufferUserData($userdata,$sessionid);	
			}
		}
		//print_r($data);
		$this->load->view('index', $data);
	}
	public function profile_view()
	{
		session_start();
		$memberappid=$this->uri->segment(3);
		//echo $_GET['sessionid'];
		if($memberappid==""){redirect('welcome/');}
		$memberid=$this->CheckUniqueAppID($memberappid);
		if(!$memberid){redirect('welcome/');} 
		$data['GetBufferUserData']=$this->admin_model->GetBufferUserData($_GET['sessionid']);
		//echo session_id();
		$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
		//print_r($data);
		$this->load->view('profile_view',$data);
	}
	
	public function profile_view1()
	{
		
		$memberappid=$this->uri->segment(3);
		if($memberappid==""){redirect('welcome/');}
		$memberid=$this->CheckUniqueAppID($memberappid);
		if(!$memberid){redirect('welcome/');}   
		$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
		$this->load->view('Single_profile_view',$data);
	}
	
	public function addmember()
	{
		session_start();
		$data=array();
		if($this->session->flashdata('Flag'))
		{
			$data['error']=$this->session->flashdata('Flag');
		}
		$countryvalue='';
		$getGermanCountry=$this->admin_model->getGermanCountry();
		foreach($getGermanCountry as $country)
		{
			$countryvalue=$country->country_german_value;
		}
		//echo $countryvalue;	
		if(isset($_POST['submit']))
		{
		$logo='';
		$type="Add_Profile";
		$time=date('Y/m/d h:i:s');
		$email=$this->input->post('MA_email');
		//$desc = nl2br(htmlentities($this->input->post('Member_Desc'),ENT_QUOTES));
		$Member_App_Id= $this->CheckRandomNo($this->random());//create and check unique member app id....
		$data = array ('Member_App_Id' =>$Member_App_Id,
		'Member_Name' => $this->input->post('Member_Name'),
		'Member_logo' => $this->input->post('filename'),
		'Member_Type' => $this->input->post('Member_Type'),
		'Member_Website' => $this->input->post('Member_Website'),
		'Member_Desc' => $this->input->post('Member_Desc'),
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
		//'MA_dist' => $this->input->post('MA_dist'),
		'MA_country' => $countryvalue,
		'MA_phone' => $this->input->post('MA_phone'),
		'MA_mobile' => $this->input->post('MA_mobile'),
		'MA_email' => $email,
		//'Member_latest_Release' =>$time,
		'Member_CreatedAt' => $time,
		'Member_UpdatedAt' => $time,
		'Member_Createdby' => 'SaarbruckenAdmin'
		);
		
		$MemberId=$this->admin_model->add_member_profile($data);
		$memberid=array('Member_id'=>$MemberId);
		$result=array_merge($data,$memberid);
		$this->admin_model->add_log_member_profile($result);
		$this->session->set_flashdata('Flag',$type);
		redirect('welcome');
		}
		$this->session->set_userdata('Totalcount',$this->session->userdata('Totalcount'));  
		$data=$this->getdatafromdb();
		$this->load->view('AddProfile',$data);
	}
	
	public function search()
	{
		//session_start();
		$contacttype="";
		$dist="";
		$text="";$sessionid='';
		if(isset($_REQUEST['str']) && $_REQUEST['str']!="")
		{
			 $str = explode(',',$_REQUEST['str']);
			 $contacttype=$str[0];
			 $dist=$str[1];
			 $text=$str[2];
			 $sessionid = $str[3];
		}
	$data['SearchFilter']=$this->admin_model->SearchFilter($contacttype, $dist, $text);
	$totalcount=count($data['SearchFilter']);
	$userdata = array('filter_data'=>$_REQUEST['str'],'total_count'=>$totalcount);
	$this->admin_model->UpdateBufferUserData($userdata,$sessionid);	
	
	$show='';$i=0;
	if(count($data['SearchFilter'])>0){
		$show.="<table width='100%' class='table table-striped' border='0'>";
			foreach($data['SearchFilter'] as $value){ 
		  $show.="<tr><td><a href='".base_url()."welcome/profile_view/".$value->Member_App_Id."/".$i."?sessionid=".$sessionid."'>".$value->Member_Name."</a></td>
					</tr>";
   	$i++; }
 $show.="</table><div class='clearfix'></div>";
	}
	else{
		$show.="<div class='clearfix'></div>".$this->lang->line("No_records")."<div class='clearfix'></div>";
		}//end of if - else
	header('content-type: text/html; charset=utf-8');
	//header("Access-Control-Allow-Origin:'http://pragmatixx.com'");
	echo $show;
	}
	public function go_next()
	{
	//session_start();
	$id='';
	$currentpostion=$this->uri->segment(3);
	$sessionid=$this->uri->segment(4);
	$data['userdata']=$this->admin_model->GetBufferUserData($sessionid);

	//$this->session->set_userdata('Totalcount',$this->session->userdata('Totalcount')); 
	foreach($data['userdata'] as $dataval)
		{
			if($dataval->filter_data!="")
			{
			$filter_data = explode(',',$dataval->filter_data);
			$contacttype = $filter_data[0]; 
			$dist = $filter_data[1];
			$text = $filter_data[2];
			$data['getListMemberAccepted']=$this->admin_model->SearchFilter($contacttype, $dist, $text);
			}else {
			$data['getListMemberAccepted']=$this->admin_model->getListMemberAccepted();
			}
		}
	$currentpostion++;
	$id=$data['getListMemberAccepted'][$currentpostion]->Member_App_Id;
	redirect('welcome/profile_view/'.$id.'/'.$currentpostion.'?sessionid='.$sessionid);
	}
	public function go_previous()
	{
	//session_start();
	$id='';
	$currentpostion=$this->uri->segment(3);
	$sessionid=$this->uri->segment(4);
	$data['userdata']=$this->admin_model->GetBufferUserData($sessionid);
	foreach($data['userdata'] as $dataval)
		{
			if($dataval->filter_data!="")
			{
			$filter_data = explode(',',$dataval->filter_data);
			$contacttype = $filter_data[0]; 
			$dist = $filter_data[1];
			$text = $filter_data[2];
			$data['getListMemberAccepted']=$this->admin_model->SearchFilter($contacttype, $dist, $text);
			}else {
			$data['getListMemberAccepted']=$this->admin_model->getListMemberAccepted();
			}
		}
	$currentpostion--;
	$id=$data['getListMemberAccepted'][$currentpostion]->Member_App_Id;
	redirect('welcome/profile_view/'.$id.'/'.$currentpostion.'?sessionid='.$sessionid);
	}
	function Clear_all_filter()
	{
		$sessionid = $_GET['sessionid'];
		$data['getListMemberAccepted']=$this->admin_model->getListMemberAccepted();
		$totalcount=count($data['getListMemberAccepted']);
		$userdata = array('filter_data'=>"",'total_count'=>$totalcount);
		$this->admin_model->UpdateBufferUserData($userdata,$sessionid);
		redirect('welcome/?sessionid='.$sessionid);
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
	function random()
	{
		$this->load->helper('string');
		return random_string('alnum',30);
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
	function CheckRandomNo($randomno)
	{
		if(!$this->CheckUniqueAppID($randomno))
		{
		return $randomno;
		}
		else
		{
		return $this->CheckRandomNo($this->random());
		}
	}
   function uploadImage()
   {
	   $msg='';$filename;
	   $random = $this->getRandomString();
	   if(isset($_FILES['logo']['name']) && $_FILES['logo']['name']!="")
			{
			$ext = substr($_FILES['logo']['name'], strrpos($_FILES['logo']['name'], '.') + 1);	
			$filename=$random."_".date('Y_m_d_h_i_s').".".$ext;
			//echo $logo;die();
			$config['upload_path'] = './assets/img/Uploadlogos/';
			$config['allowed_types'] = 'gif|jpg|png|JPG|PNG|jpeg|JPEG';
			$config['max_size']	= '2097152';//5242880bytes = 5MB
			//$config['max_width']  = '500';
			//$config['max_height']  = '500';
			$config['overwrite'] = 'false';
			$config['file_name'] = $filename;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
			if (!$this->upload->do_upload('logo')) 
			{	
			$msg=$this->upload->display_errors();
			}
			else
			{
				if(file_exists("./assets/img/Uploadlogos/".$filename))
			{
				/* Get the image info */
			$info = getimagesize(asset_url()."img/Uploadlogos/".$filename);
			 
			/* Calculate aspect ratio by dividing height by width */
			  $aspectRatio = $info[1] / $info[0];
			 if($aspectRatio>1){$width=100;}elseif($aspectRatio>0.5){$width=220;}else{$width=300;}
			/* Keep the width fix at 100px, 
			   but change the height according to the aspect ratio */
			$height = (int)($aspectRatio * $width) . "px";
			 
			/* Use the 'newHeight' in the CSS height property below. */
			$width .= "px";
		}
			$msg="<input type='hidden' name='filename' value='".$filename."'>
			<img src='".asset_url()."img/Uploadlogos/".$filename."' width='".$width."' height='".$height."'>";
				
			}
			//end of logo upload if else...
		}
		echo $msg;
		/*$data=$this->getdatafromdb();
	   $data['msg']=$msg;
	   $this->load->view('AddProfile',$data);*/
	   } 
 	function getRandomString($length = 8) {
    $validCharacters = "abcdefghijklmnopqrstuxyvwzABCDEFGHIJKLMNOPQRSTUXYVWZ0123456789";
    $validCharNumber = strlen($validCharacters);
      
    $result = "";
 
    for ($i = 0; $i < $length; $i++) {
        $index = mt_rand(0, $validCharNumber - 1);
        $result .= $validCharacters[$index];
    }
 	return $result;
	}
	function session_exists()
	{//echo $_SESSION["last_acted_on"];
		if( isset($_SESSION["last_acted_on"]) && (time() - $_SESSION["last_acted_on"] > $this->session_expire_time) ){
		$this->admin_model->deleteBufferUserData($session_id);	
		session_unset();     // unset $_SESSION variable for the run-time
		session_destroy();   // destroy session data in storage
		redirect('welcome');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */