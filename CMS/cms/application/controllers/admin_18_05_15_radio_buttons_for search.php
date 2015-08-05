<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	 public function getdatafromdb()
	{
	$data['getActiveContactType']=$this->admin_model->getActiveContactType();
	$data['getActiveDistrics']=$this->admin_model->getActiveDistrics();
	return $data;	
	}
	public function index()
	{
	//this is the main page which loads with the index page.	
	session_start();
	/*
	We are using manual session.Here we start the session and check weather session exist or not? 
	if not exist then it will create a new session and store it in db. 
	*/ 
	$_SESSION["last_acted_on"] = time();
	$this->session_exists();
	$data=$this->getdatafromdb();
	if(isset($_GET['sessionid']) && $_GET['sessionid']!='') $sessionid = $_GET['sessionid']; else $sessionid = session_id();
	$data['userdata']=$this->admin_model->GetBufferData($sessionid);
	if(count($data['userdata'])==0){
	$this->admin_model->InsertBufferData(array('SessionId'=>$sessionid));
	$data['userdata']=$this->admin_model->GetBufferData($sessionid);
	}
	
	foreach($data['userdata'] as $dataval)
	{
		if($dataval->Flag!="")
		{
		$data['memberappid'] = $dataval->memberAppId;	
		$memberid=$this->CheckUniqueAppID($dataval->memberAppId);
		$data['Email']=$dataval->Email;
		$data['Flag']=$dataval->Flag;
		$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
		$data['getMessagebyTitle']=$this->admin_model->getMessagebyTitle($dataval->Flag);
		}
	}
	
	//checks weather session have filter value ...?
		if($this->session->userdata('FilterValue')!="")
		{
			$filterdata='';$filterdatadate=array();
		$FilterValue = $this->session->userdata('FilterValue');
		if($FilterValue=="All"){$filterdata='';
		}
		elseif($FilterValue=='New'){$filterdata='New';
		}
		elseif($FilterValue=='Update'){$filterdata='Modify';
		}
		elseif($FilterValue=='New_Update'){$filterdata='Both';
		}
		elseif($FilterValue=='five'){$btntype="submit";
			$threemonthdate=$this->get3monthBeforeDate(date('Y/m/d'));
			$sixmonthdate=$this->get3monthBeforeDate($threemonthdate);
			$filterdatadate[0]=$threemonthdate;
			$filterdatadate[1]=$sixmonthdate;
		}
		elseif($FilterValue=='six'){$btntype="submit";
			$threemonthdate=$this->get3monthBeforeDate(date('Y/m/d'));
			$sixmonthdate=$this->get3monthBeforeDate($threemonthdate);
			$filterdatadate[0]=$sixmonthdate;
		}//get the member list according to session filter value.
		$data['getmemberlist']=$this->admin_model->AdminSearch($filterdata ,$filterdatadate);
		}else
		{
			$this->session->set_userdata('FilterValue',"All");
			$data['getmemberlist']=$this->admin_model->getmemberlist();
		}
		//loads the index page with data.
		$this->load->view('admin/index', $data);
	}
	
function compare()
{
	
	/* session starts and check weather session exist..?  */
	$this->session_exists();
	$data=$this->getdatafromdb();
	//page to view the club detail page.
		/* get club id from url */
	$memberappid=$this->uri->segment(3);
	if($memberappid==""){redirect('admin/');}
	$memberid=$this->CheckUniqueAppID($memberappid);
	/* check the club id exist or not ?if not exist then redirect to index page */
	if(!$memberid){redirect('admin/');}
	$memberlogid='';
	$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
	//get the data from member table and member log table by club id.
	$data['getMaxLogIdbyMemberid']=$this->admin_model->getMaxLogIdbyMemberid($memberid);//fetch max id from member log table
	foreach($data['getMaxLogIdbyMemberid'] as $memberlogidval){$memberlogid=$memberlogidval->Member_log_id;}
	$data['getmemberlogbyid'] = $this->admin_model->getmemberlogbyid($memberlogid);
	//loads the compare page with data.
	$this->load->view('admin/compare_profile',$data);
}
public function profile_view()
	{
		/* check weather session exist..?  */
		$this->session_exists();
		//page to view the club detail page.
		/* get club id from url */
		$memberappid=$this->uri->segment(3);
		if($memberappid==""){redirect('admin/');}
		$memberid=$this->CheckUniqueAppID($memberappid);
		/* check the club id exist or not ?if not exist then redirect to index page */
		if(!$memberid){redirect('admin/');}   
		 /* fetch data by member id from db and stores into data array*/
		$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
		$this->session->userdata('FilterValue');//sets the flash data for filter value
		/* load the profile view page with club data */
		$this->load->view('admin/profile_view',$data);
	}
public function search()
{
		/* check weather session exist..?  */
		$this->session_exists();
		$sessionid='';
		//checks weather data is in list..
		if(isset($_REQUEST['list']))
		{
		$remindermail='';
		//explode the requested data.	
		$filterval=explode(",",$_REQUEST['list']);
		if(count($filterval)>0)
		{$btntype="submit";	//button
		$readonly='readonly disabled';
		$sessionid = $filterval[1];//takes the session id.
		//get the value of filter and prepare a variable according to that 
		if(($filterval[0]=="five") || ($filterval[0]=="six")){ $readonly="";}
		
		$filterdata='';$filterdatadate=array();
		if($filterval[0]=='All'){$filterdata='';
		
		}
		elseif($filterval[0]=='New'){$filterdata='New';
		//$data['AdminSearch']=$this->admin_model->AdminSearch($filterdata ,$filterdatadate);
		}
		elseif($filterval[0]=='Update'){$filterdata='Modify';
		//$data['AdminSearch']=$this->admin_model->AdminSearch($filterdata ,$filterdatadate);
		}
		elseif($filterval[0]=='New_Update'){$filterdata='Both';
			//$data['AdminSearch']=$this->admin_model->AdminSearch($filterdata ,$filterdatadate);
			}
		elseif($filterval[0]=='Rejected'){$filterdata='Rejected';
			//$data['AdminSearch']=$this->admin_model->AdminSearch($filterdata ,$filterdatadate);
			}
		elseif($filterval[0]=='five'){$btntype="submit";
			$threemonthdate=$this->get3monthBeforeDate(date('Y/m/d'));
			$sixmonthdate=$this->get3monthBeforeDate($threemonthdate);
			$filterdatadate[0]=$threemonthdate;
			$filterdatadate[1]=$sixmonthdate;
			$remindermail="<div class='col-xs-offset-8 btn-group pull-right' style='margin-right:0px;' >
                 <a href='#' title='Aktualisierunganfordern' >
                <button type='".$btntype."' name='reminderMail' class='np' onclick=''> <img src='".asset_url()."img/orange_icons/mail_24.png'></button></a>  
                   </div>";			}
		elseif($filterval[0]=='six'){$btntype="submit";
			$threemonthdate=$this->get3monthBeforeDate(date('Y/m/d'));
			$sixmonthdate=$this->get3monthBeforeDate($threemonthdate);
			$filterdatadate[0]=$sixmonthdate;
			$remindermail="<div class='col-xs-offset-8 btn-group pull-right' style='margin-right:0px;' >
                 <a href='#' title='Aktualisierunganfordern' >
                <button type='".$btntype."' name='reminderMail' class='np' onclick=''> <img src='".asset_url()."img/orange_icons/mail_24.png'></button></a>  
                   </div>";	
				   		}
			//get search data into data array ...			
			$data['AdminSearch']=$this->admin_model->AdminSearch($filterdata ,$filterdatadate);
		$this->session->set_userdata('FilterValue',$filterval[0]);//sets the session data for filter value
		//Prepare html data after search into '$show' variable. 
	if(count($data['AdminSearch'])>0){$Member_latest_Release1='';$Member_CreatedAt1='';$status;$link;
	//For check box <input type='checkbox' class='text-center' id='selecctall' />
	$show="<table width='100%' class='table table-striped table-bordered'>
	  <tr>
		<td><h3>Select</h3></td>
		<td width='150'><h3>Neu/geändert</h3></td>
	   <td><h3>Vereinsname</h3></td>
		<td><h3>Registriert am</h3></td>
	   <td  width='200'><h3>Letzte genehmigte Änderung</h3></td>
	  </tr>";
		 foreach($data['AdminSearch'] as $value)
		 {   $status=$value->Member_Current_Status;
		if($status=="Modify") { $status="Geänderte";$link='compare';}
		if($status=="New") { $status="Neu";$link='compare'; } 
		if($status=="Accepted" || $status=="Rejected") {$status="";$link='compare';//profile_view
		 }
		 $Member_CreatedAt=explode(' ',$value->Member_CreatedAt);
		 $Member_latest_Release=explode(' ',$value->Member_latest_Release);
		 if($Member_CreatedAt[0]!='')$Member_CreatedAt1=date('d.m.Y',strtotime($Member_CreatedAt[0]));
		 if($Member_latest_Release[0]!='')$Member_latest_Release1=date('d.m.Y',strtotime($Member_latest_Release[0]));
		$show.= "<tr>
		  <td><input type='radio' class='checkbox1' name='selectedmembers' value='".$value->Member_App_Id."'/></td>
		  <td>".$status."</td>
			<td><a href='".base_url()."admin/".$link."/".$value->Member_App_Id."/".$sessionid."'>".$value->Member_Name."</a></td>
			<td>".$Member_CreatedAt1."</td>
		   <td>".$Member_latest_Release1."</td>
		   </tr>";
		$Member_CreatedAt1='';$Member_latest_Release1='';}
		$show.="</table>
		<div class='btn-group pull-left' style='margin-right: -10px;'> 
<a href='".base_url()."admin/exportdata' title='Daten exportieren' >Daten exportieren</a>
  </div><div class='col-xs-offset-8 btn-group pull-right' style='margin-right:0px;' >
                 <a href='#' title='Aktualisierunganfordern' >
                <button type='".$btntype."' name='reminderMail' class='np' onclick=''> <img src='".asset_url()."img/orange_icons/mail_24.png'></button></a>  
                   </div>
		";//.$remindermail;
	
	}
	else
	{$show="<div class='col-lg-7 pull-left'>Keine Einträge gefunden!!!</div>";}
	//print the '$show' variable on the index page after search performed
	header('Content-Type: text/html; charset=utf-8');
	echo $show;}
	}
		
}
function Accept()
	{
		/* session starts and check weather session exist..?  */
		//session_start();
		$this->session_exists();
		$sessionid='';
		/* Checks weather data is submitted by user or not */
		if(isset($_POST['Accept']))
		{
		$sessionid = $this->input->post('sessionid');//get session id.		
		$countryvalue='';
		$getGermanCountry=$this->admin_model->getGermanCountry();//get the values of all Active countries.now only one value is in the table.
		foreach($getGermanCountry as $country)
		{
			$countryvalue=$country->country_german_value;
		}
		$logo=$this->input->post('filename');
		$time=date('Y/m/d h:i:s');
		$memberAppid=$this->input->post('Member_App_Id');
		$memberid=$this->CheckUniqueAppID($memberAppid);
		$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
		foreach($data['getmemberbyid'] as $membervalue) {
			if($membervalue->Member_Current_Status==="New") { $Member_Current_Status="Accepted";}
			else{ $Member_Current_Status="Accepted";}
			}
		// prepare data array to accept the updated record.	
		$data = array ('Member_logo' => $logo,
		'Member_Name' => $this->input->post('Member_Name'),
		'Member_Type' => $this->input->post('Member_Type'),
		'Member_Website' => $this->input->post('Member_Website'),
		'Member_Desc' => nl2br(htmlentities($this->input->post('Member_Desc'),ENT_QUOTES)),
		'Member_Address_Street' => $this->input->post('Member_Address_Street'),
		'Member_House_No' => $this->input->post('Member_House_No'),
		'Member_ZIP' => $this->input->post('Member_ZIP'),
		'Member_City' => $this->input->post('Member_City'),
		'Member_Telephone' => $this->input->post('Member_Telephone'),
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
		'Member_latest_Release' =>$time,
		'Member_UpdatedAt' => $time,
		);
		$mdata=array('Member_Current_Status' =>$Member_Current_Status,
		'Member_Relese_version' =>$this->input->post('Member_log_id')
		);
		$maildata=array('Member_App_Id'=>$memberAppid,'Member_Name'=>$this->input->post('Member_Name'));
		//if(count($logoarray)>0)$data=array_merge($data,$logoarray);
		//print_r($data);die();
		//update the member log profile by member log id.
		$this->admin_model->updateMemberLogProfile($data,$this->input->post('Member_log_id'));
		$rdata=array_merge($data,$mdata);
		//update the member profile.
		$this->admin_model->updateMemberProfile($rdata,$memberAppid);
		$type="Accepted";
		$data['getMessagebyTitle']=$this->admin_model->getMessagebyTitle($type);
		$email=$this->input->post('MA_email');
		//update buffer data with session id to open mail window.
		$userdata=array('Email'=>$email,'memberAppId'=>$memberAppid,'Flag'=>$type);
		$this->admin_model->UpdateBufferData($userdata,$sessionid);
		}
		//redirect to index page.
		redirect('admin/?sessionid='.$sessionid.'');
	}
	function reject()
	{
		/* session starts and check weather session exist..?  */
		//session_start();
		$this->session_exists();
		//Get session id from url.
		$sessionid=$this->uri->segment(4);
		$memberappid=$this->uri->segment(3);
		$isRejectdata = array('Member_Name_isReject'=>$_GET['Member_Name_isReject'],
		'Member_Type_isReject'=>$_GET['Member_Type_isReject'],'Member_Website_isReject'=>$_GET['Member_Website_isReject'],
		'Member_Desc_isReject'=>$_GET['Member_Desc_isReject'],'Member_Address_Street_isReject'=>$_GET['Member_Address_Street_isReject'],
		'Member_House_No_isReject'=>$_GET['Member_House_No_isReject'],'Member_ZIP_isReject'=>$_GET['Member_ZIP_isReject'],
		'Member_City_isReject'=>$_GET['Member_City_isReject'],'Member_Telephone_isReject'=>$_GET['Member_Telephone_isReject'],
		'Member_Clubheim_isReject'=>$_GET['Member_Clubheim_isReject'],'Member_President_isReject'=>$_GET['Member_President_isReject'],
		'Member_Dist_isReject'=>$_GET['Member_Dist_isReject'],'Member_Country_isReject'=>$_GET['Member_Country_isReject'],
		'Member_FB_Address_isReject'=>$_GET['Member_FB_Address_isReject'],'Member_Twtr_Address_isReject'=>$_GET['Member_Twtr_Address_isReject'],
		'Member_Multiple_Sports_isReject'=>$_GET['Member_Multiple_Sports_isReject'],'MA_name_isReject'=>$_GET['MA_name_isReject'],
		'MA_first_name_isReject'=>$_GET['MA_first_name_isReject'],'MA_position_isReject'=>$_GET['MA_position_isReject'],
		'MA_street_no_isReject'=>$_GET['MA_street_no_isReject'],'MA_house_no_isReject'=>$_GET['MA_house_no_isReject'],
		'MA_zip_isReject'=>$_GET['MA_zip_isReject'],'MA_city_isReject'=>$_GET['MA_city_isReject'],
		'MA_phone_isReject'=>$_GET['MA_phone_isReject'],'MA_mobile_isReject'=>$_GET['MA_mobile_isReject'],
		'MA_email_isReject'=>$_GET['MA_email_isReject'],'Member_logo_isReject'=>$_GET['Member_logo_isReject']
		);
		$this->admin_model->UpdateRejectList($isRejectdata,$memberappid);
		//print_r($isRejectdata);die();
		$maildata;$email;$link;$memberappid;$memberlogid;
		$MemberCurrentStatus;
		$type="Rejected";
		$memberid='';
		$memberappid=$this->uri->segment(3);
		/* check the club id exist or not ?if not exist then redirect to index page */
		if($memberappid==""){redirect('admin/');}
		$memberid=$this->CheckUniqueAppID($memberappid);
		if(!$memberid){redirect('admin/');} 
		//get max log id to update the record....
		$data['getMaxLogIdbyMemberid']=$this->admin_model->getMaxLogIdbyMemberid($memberid);
		foreach($data['getMaxLogIdbyMemberid'] as $memberlogVal) {$memberlogid=$memberlogVal->Member_log_id;}
		$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
		//check status and update variables according to current status.
		foreach($data['getmemberbyid'] as $memberval)
		{//$memberappid=$memberval->Member_App_Id;
			if($memberval->Member_Current_Status==="New")
			{	
				$link="member_author/profile/"; 
				$MemberCurrentStatus="Rejected";
			}
			elseif($memberval->Member_Current_Status==="Rejected")
			{
				$link="member_author/profile/"; 
				$MemberCurrentStatus="Rejected";
			}
			else
			{
				$link="member_author/profile/";
				$MemberCurrentStatus="Accepted";
				$this->admin_model->updateMemberlogStatus($memberlogid);
			}
			$maildata=array('Member_App_Id'=>$memberval->Member_App_Id,
							'Member_Name'=>$memberval->Member_Name,
							'link'=>$link);
			$email=$memberval->MA_email;
		}
		
		//update members current status by member app id
		$this->admin_model->updateMemberCurrentStatus($memberappid,$MemberCurrentStatus);
		//set values into array and update these values into sesson table.
		$userdata=array('Email'=>$email,'memberAppId'=>$memberappid,'Flag'=>$type);
		
		$this->admin_model->UpdateBufferData($userdata,$sessionid);
		redirect('admin/?sessionid='.$sessionid.'');
	}
	//this function is to sent multiple mail request for profile updates .
	function remindermail()
	{	
		//session_start();
		$this->session_exists();
		$memberappid=$_POST['selectedmembers'];
		$sessionid = $_POST['sessionid'];
		$maildata=array();$type="Reminder";$email='';
		if($memberappid==""){redirect('admin/');}
			$memberid=$this->CheckUniqueAppID($memberappid);
			if(!$memberid){redirect('admin/');} 
			$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
		foreach($data['getmemberbyid'] as $memberval)
			{
				$maildata=array('Member_App_Id'=>$memberval->Member_App_Id,
							'Member_Name'=>$memberval->Member_Name);
				$email=$memberval->MA_email;
			}
		/*$count = count($selectedmembers);
		//print_r($selectedmembers);
		for($i=0;$i<$count;$i++)
		{
		echo $memberid=$this->CheckUniqueAppID($selectedmembers[$i]);die();
		$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
		
		foreach($data['getmemberbyid'] as $memberval)
			{
			if($count==$i+1) $postfix='';else $postfix=',';	
			$email.=$memberval->MA_email.$postfix;
			$memberappid.=$memberval->Member_App_Id.$postfix;
			/*$maildata[$i]=array('Member_App_Id'=>$memberval->Member_App_Id,
						'Member_Name'=>$memberval->Member_Name, 'email'=>$memberval->MA_email);
			}
		}*/
		
		$userdata=array('Email'=>$email,'memberAppId'=>$memberappid,'Flag'=>$type);
		$this->admin_model->UpdateBufferData($userdata,$sessionid);
		redirect('admin/?sessionid='.$sessionid.'');
	}
	function updateMail()
	{
			//session_start();
			$sessionid=$this->uri->segment(4);
			$type="Update";$maildata;
			$memberappid=$this->uri->segment(3);
			if($memberappid==""){redirect('admin/');}
			$memberid=$this->CheckUniqueAppID($memberappid);
			if(!$memberid){redirect('admin/');} 
			$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
			foreach($data['getmemberbyid'] as $memberval)
			{
				$maildata=array('Member_App_Id'=>$memberval->Member_App_Id,
							'Member_Name'=>$memberval->Member_Name);
				$email=$memberval->MA_email;
			}
			/*$this->session->set_flashdata('Member_App_Id',$memberappid);
			$this->session->set_flashdata('Email',$email);
			$this->session->set_userdata('Flag',$type);*/
			
			$userdata=array('Email'=>$email,'memberAppId'=>$memberappid,'Flag'=>$type);
			$this->admin_model->UpdateBufferData($userdata,$sessionid);
			//print_r($userdata);
			redirect('admin/?sessionid='.$sessionid.'');
			
	}
	/* To check the unique app id. */
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
	/*function _send_email($type, $email, $data)
	{
		$this->load->library('email');
		$this->email->from($this->config->item('webmaster_email'), $this->config->item('website_name'));
		$this->email->reply_to($this->config->item('webmaster_email'), $this->config->item('website_name'));
		$this->email->to($email);
		$this->email->subject($this->lang->line('auth_subject_'.$type));
		$this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));
		$this->email->set_alt_message($this->load->view('email/'.$type.'-txt', $data, TRUE));
		$this->email->send();
	}*/
	//This function is used to get backup of club data into an csv file.
	function exportdata()
	{
		$this->load->helper('file');
		$this->load->helper('download');
		$data=$this->admin_model->ExportMembersDataIntoCSV();
		$filename="export".date('Y_m_d').".csv";
		if ( ! write_file('./assets/backupdata/'.$filename, $data))
				{
					 echo 'Unable to write the file';
				}
				else
				{	$filepath=asset_url().'/backupdata/'.$filename;
				$pth    =   file_get_contents($filepath);
				force_download($filename, $pth); 
				}
	}
	//To get three before data from any date.... 
	function get3monthBeforeDate($todaydate)
		{
			$date = date_create($todaydate);
			date_sub($date, date_interval_create_from_date_string('3 month'));
			return $threeMonth=date_format($date, 'Y/m/d');
		}
	/* This function uploads the club logo and show logo after uploading. */		
	 function uploadImage()
   		{
	   $msg='';$filename;
	   $random = $this->getRandomString(); // that generates random 8 digit string for image name.
	   if($_FILES['logo']['name']!="")
			{
			$ext = substr($_FILES['logo']['name'], strrpos($_FILES['logo']['name'], '.') + 1);	
			$filename=$random."_".date('Y_m_d_h_i_s').".".$ext;	// Adding time stamp for file name.
			//echo $logo;die();
			$config['upload_path'] = './assets/img/Uploadlogos/';
			$config['allowed_types'] = 'gif|jpg|png|JPG|PNG|jpeg|JPEG';
			$config['max_size']	= '2097152';
			/*if we want to apply the size restrictions for the club logo.then we can use and set it here.*/
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
			 if($aspectRatio>1){$width=50;}elseif($aspectRatio>0.5){$width=100;}else{$width=150;}
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
	   } 
	    /* Generate random digit for logo name. */ 
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
	/* Check weather session exist or not ? */
	function session_exists()
	{
		if( isset($_SESSION["last_acted_on"]) && (time() - $_SESSION["last_acted_on"] > $this->session_expire_time) ){
		$this->admin_model->deleteBufferData(session_id());	
		session_unset();     // unset $_SESSION variable for the run-time
		session_destroy();   // destroy session data in storage
		redirect('admin');
		}
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */