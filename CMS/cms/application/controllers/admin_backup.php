<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	
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
	$data=$this->getdatafromdb();
	$this->session->set_flashdata('Flag',"Reminder");
		if($this->session->flashdata('Flag'))
		{
			if($this->session->flashdata('Flag')=="Accepted")
			{
				$data['getMessagebyTitle']=$this->admin_model->getMessagebyTitle("Accepted");
			}elseif($this->session->flashdata('Flag')=="Rejected")
			{
				$data['getMessagebyTitle']=$this->admin_model->getMessagebyTitle("Rejected");
			}
			elseif($this->session->flashdata('Flag')=="Check_App_ID")
			{
				$data['getMessagebyTitle']=$this->admin_model->getMessagebyTitle("Check_App_ID");
			}
			elseif($this->session->flashdata('Flag')=="Reminder")
			{
				$data['getMessagebyTitle']=$this->admin_model->getMessagebyTitle("Reminder");
			}
			elseif($this->session->flashdata('Flag')=="Update")
			{
				$data['getMessagebyTitle']=$this->admin_model->getMessagebyTitle("Update");
			}
			else
			{
				$data['error']=$this->session->flashdata('Flag');
			}
		}
		$data['getmemberlist']=$this->admin_model->getmemberlist();
		//print_r($data);
		$this->load->view('admin/index', $data);
	}
	
function compare()
{	$data=$this->getdatafromdb();
	$memberappid=$this->uri->segment(3);
	//if($memberappid==""){$this->session->set_flashdata('Flag',"Check_App_ID");redirect('admin/');}
	$memberid=$this->CheckUniqueAppID($memberappid);
	if(!$memberid){$this->session->set_flashdata('Flag',"Check_App_ID");redirect('admin/');}
	$memberlogid='';
	if($this->session->flashdata('Flag'))
		{
			$data['error']=$this->session->flashdata('Flag');
		}
	$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
	$data['getMaxLogIdbyMemberid']=$this->admin_model->getMaxLogIdbyMemberid($memberid);//fetch max id from member log table
	foreach($data['getMaxLogIdbyMemberid'] as $memberlogidval){$memberlogid=$memberlogidval->Member_log_id;}
	$data['getmemberlogbyid'] = $this->admin_model->getmemberlogbyid($memberlogid);
	//print_r($data);die();
	$this->load->view('admin/compare_profile',$data);
}
public function profile_view()
	{
		$memberappid=$this->uri->segment(3);
		if($memberappid==""){$this->session->set_flashdata('Flag',"Check_App_ID");redirect('admin/');}
		$memberid=$this->CheckUniqueAppID($memberappid);
		if(!$memberid){$this->session->set_flashdata('Flag',"Check_App_ID");redirect('admin/');}   
		$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
		$data['nextcount']=count($this->admin_model->getnextrecordid($memberid));
		$data['previouscount']=count($this->admin_model->getpreviousrecordid($memberid));
		$this->load->view('admin/profile_view',$data);
	}
public function search()
	{
		if(isset($_POST['list']))
		{
		$filterval=$_POST['list'];
		if(count($filterval)>>0)
		{$btntype="button";	
		$readonly='readonly disabled';
		for($i=0;$i<count($filterval);$i++)
		{
			if(($filterval[$i]=="five") || ($filterval[$i]=="six")){ $readonly="";}
		}
		$filterdata='';$filterdatadate=array();
		if($filterval[0]=='All'){$filterdata='';$data['AdminSearch']=$this->admin_model->AdminSearch($filterdata ,$filterdatadate);}
		elseif($filterval[0]=='New'){$filterdata='New';
		$data['AdminSearch']=$this->admin_model->AdminSearch($filterdata ,$filterdatadate);}
		elseif($filterval[0]=='Update'){$filterdata='Modify';/*
			$maxid;
			$data['getListMemberAccepted']=$this->admin_model->getListMemberAccepted();
			foreach($data['getListMemberAccepted'] as $value){
				 $data['getMaxLogIdbyMemberid']=$this->admin_model->getMaxLogIdbyMemberid($value->Member_id);
				foreach($data['getMaxLogIdbyMemberid'] as $maxidval) {$maxid=$maxidval->Member_log_id;
				}
				if($maxid!=$value->Member_Relese_version)
				{
					$data['getmemberlogbyid']=$this->admin_model->getmemberlogbyid($maxid);
					foreach($data['getmemberlogbyid'] as $v)
					{
						$data['AdminSearch']=$this->admin_model->getmemberbyid($v->Member_id);
						}
					}
				}
			*/$data['AdminSearch']=$this->admin_model->AdminSearch($filterdata ,$filterdatadate);}
		elseif($filterval[0]=='New_Update'){$filterdata='Both';/*
			
			$maxid;
			$data['getListOfNewMember']=$this->admin_model->getListOfNewMember();
			$data['getListMemberAccepted']=$this->admin_model->getListMemberAccepted();
			foreach($data['getListMemberAccepted'] as $value){
				 $data['getMaxLogIdbyMemberid']=$this->admin_model->getMaxLogIdbyMemberid($value->Member_id);
				foreach($data['getMaxLogIdbyMemberid'] as $maxidval) {$maxid=$maxidval->Member_log_id;
				}
				if($maxid!=$value->Member_Relese_version)
				{
					$data['getmemberlogbyid']=$this->admin_model->getmemberlogbyid($maxid);
					foreach($data['getmemberlogbyid'] as $v)
					{
						$data['AdminSearch']=$this->admin_model->getmemberbyid($v->Member_id);
						}
					}
				}
			$data['AdminSearch']=array_merge($data['AdminSearch'],$data['getListOfNewMember']);
			sort($data['AdminSearch']);	
			*/$data['AdminSearch']=$this->admin_model->AdminSearch($filterdata ,$filterdatadate);}
		
		elseif($filterval[0]=='five'){$btntype="submit";
			$threemonthdate=$this->get3monthBeforeDate(date('Y/m/d'));
			$sixmonthdate=$this->get3monthBeforeDate($threemonthdate);
			$filterdatadate[0]=$threemonthdate;
			$filterdatadate[1]=$sixmonthdate;
			$data['AdminSearch']=$this->admin_model->AdminSearch($filterdata ,$filterdatadate);
			}
		elseif($filterval[0]=='six'){$btntype="submit";
			$threemonthdate=$this->get3monthBeforeDate(date('Y/m/d'));
			$sixmonthdate=$this->get3monthBeforeDate($threemonthdate);
			$filterdatadate[0]=$sixmonthdate;
			$data['AdminSearch']=$this->admin_model->AdminSearch($filterdata ,$filterdatadate);
			}
		
	
	if(count($data['AdminSearch'])>0){$Member_latest_Release1='';$Member_CreatedAt1='';$status;$link;
	$show="<table width='100%' class='table table-striped table-bordered'>
	  <tr>
		<td><h3><input type='checkbox' class='text-center' id='selecctall' ".$readonly."  /></h3></td>
		<td width='150'><h3>Neu/geändert</h3></td>
	   <td><h3>Vereinsname</h3></td>
		<td><h3>Registriert am</h3></td>
	   <td  width='200'><h3>Letzte genehmigte Änderung</h3></td>
	  </tr>";
		 foreach($data['AdminSearch'] as $value)
		 {   $status=$value->Member_Current_Status;
		if($status=="Modify") { $status="Geänderte";$link='compare';}
		if($status=="New") { $status="Neu";$link='compare'; } 
		if($status=="Accepted") {$status="";$link='profile_view'; }
		 $Member_CreatedAt=explode(' ',$value->Member_CreatedAt);
		 $Member_latest_Release=explode(' ',$value->Member_latest_Release);
		 if($Member_CreatedAt[0]!='')$Member_CreatedAt1=date('d/m/Y',strtotime($Member_CreatedAt[0]));
		 if($Member_latest_Release[0]!='')$Member_latest_Release1=date('d/m/Y',strtotime($Member_latest_Release[0]));
		$show.= "<tr>
		  <td><input type='checkbox' class='checkbox1'".$readonly." name='selectedmembers[]' value='".$value->Member_App_Id."'/></td>
		  <td>".$status."</td>
			<td><a href='".base_url()."admin/".$link."/".$value->Member_App_Id."'>".$value->Member_Name."</a></td>
			<td>".$Member_CreatedAt1."</td>
		   <td>".$Member_latest_Release1."</td>
		   </tr>";
		$Member_CreatedAt1='';$Member_latest_Release1='';}
		$show.="</table>
		<div class='btn-group pull-left' style='margin-right: -10px;'> 
<a href='".base_url()."admin/exportdata' title='Export von Daten' >Export data</a>
  </div>
		<div class='col-xs-offset-8 btn-group pull-right' style='margin-right: -10px;' >
                 <a href='#' title='Aktualisierunganfordern' >
                <button type='".$btntype."' name='reminderMail' class='np' onclick=''> <img src='".asset_url()."img/orange_icons/mail_24.png'></button></a>  
                   </div>";
	}
	else
	{$show='No records!!!';}
	}
	}
	header('Content-Type: text/html; charset=utf-8');
	echo $show;	
	}
	function Accept()
	{
		$countryvalue='';
		$getGermanCountry=$this->admin_model->getGermanCountry();
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
			elseif($membervalue->Member_Current_Status==="Accepted") { $Member_Current_Status="Modify";}
			else{ $Member_Current_Status="Accepted";}
			}
		$data = array ('Member_logo' => $logo,
		'Member_Name' => $this->input->post('Member_Name'),
		'Member_Type' => $this->input->post('Member_Type'),
		'Member_Website' => $this->input->post('Member_Website'),
		'Member_Desc' => $this->input->post('Member_Desc'),
		'Member_Address_Street' => $this->input->post('Member_Address_Street'),
		'Member_House_No' => $this->input->post('Member_House_No'),
		'Member_ZIP' => $this->input->post('Member_ZIP'),
		'Member_City' => $this->input->post('Member_City'),
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
		$this->admin_model->updateMemberLogProfile($data,$memberAppid);
		$rdata=array_merge($data,$mdata);
		$this->admin_model->updateMemberProfile($rdata,$memberAppid);
		$type="Accepted";
		$data['getMessagebyTitle']=$this->admin_model->getMessagebyTitle($type);
		$email=$this->input->post('MA_email');
		$this->_send_email($type, $email, $maildata);
		$this->session->set_flashdata('Flag',$type);
		redirect('admin/');
	}
	function reject()
	{
		$maildata;$email;$link;$memberappid;
		$type="Rejected";
		$memberid='';
		$memberlogid=$this->uri->segment(3);
		$data['getmemberlogbyid']=$this->admin_model->getmemberlogbyid($memberlogid);
		foreach($data['getmemberlogbyid'] as $val){$memberid=$val->Member_id;}
		$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
		foreach($data['getmemberbyid'] as $memberval){$memberappid=$memberval->Member_App_Id;
			if($memberval->Member_Current_Status=="New")
			{	$this->admin_model->updateMemberStatus($memberappid);
				$link="welcome/addmember/"; } else { $link="member_author/profile/"; }
			$maildata=array('Member_App_Id'=>$memberval->Member_App_Id,
							'Member_Name'=>$memberval->Member_Name,
							'link'=>$link);
		$email=$memberval->MA_email;
		}
		$this->admin_model->updateMemberCurrentStatus($memberappid,'Accepted');
		$this->admin_model->updateMemberlogStatus($memberlogid);
		$this->_send_email($type, $email, $maildata);
		$this->session->set_flashdata('Flag',$type);
		redirect('admin/');
	}
	function remindermail()
	{	
		$selectedmembers=$_POST['selectedmembers'];
		$maildata;$type="Reminder";$email;
		
		for($i=0;$i<count($selectedmembers);$i++)
		{
		$memberid=$this->CheckUniqueAppID($selectedmembers[$i]);
		
		if(!$memberid){
			$this->session->set_flashdata('Flag',"Check_App_ID");
			redirect('admin/');
			}//if Member App Id is not avalable or deactive. 
		$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
		foreach($data['getmemberbyid'] as $memberval){
			$maildata=array('Member_App_Id'=>$memberval->Member_App_Id,
						'Member_Name'=>$memberval->Member_Name);
						$email=$memberval->MA_email;
		}
		$this->_send_email($type, $email, $maildata);
		}
		$this->session->set_flashdata('Flag',$type);
		redirect('admin/');
	}
	function updateMail()
	{
		if(isset($_POST['UpdateMailSubmit']))
		{	$type="Update";$maildata;
			$memberAppid=$_POST['Member_App_Id1'];
			$email=$_POST['MemberCurrentMail'];
			$UpdateComment=$_POST['UpdateComment'];
			$memberid=$this->CheckUniqueAppID($memberAppid);
			if(!$memberid){$this->session->set_flashdata('Flag',"Check_App_ID");
				redirect('admin/');
				}//if Member App Id is not avalable or deactive. 
			$data['getmemberbyid']=$this->admin_model->getmemberbyid($memberid);
			foreach($data['getmemberbyid'] as $memberval){$maildata=array('Member_App_Id'=>$memberval->Member_App_Id,'Member_Name'=>$memberval->Member_Name
			,'UpdateComment' =>$UpdateComment);
			$email=$memberval->MA_email;}
			//print_r($maildata);die();	
			$this->_send_email($type, $email, $maildata);
			$this->session->set_flashdata('Flag',$type);
			redirect('admin/');
			}
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
	function get3monthBeforeDate($todaydate)
		{
			$date = date_create($todaydate);
			date_sub($date, date_interval_create_from_date_string('3 month'));
			return $threeMonth=date_format($date, 'Y/m/d');
		}
	 function uploadImage()
   {
	   $msg='';$filename;
	   $random = $this->getRandomString();
	   if($_FILES['logo']['name']!="")
			{
			$ext = substr($_FILES['logo']['name'], strrpos($_FILES['logo']['name'], '.') + 1);	
			$filename=$random."_".date('Y_m_d_h_i_s').".".$ext;	
			//echo $logo;die();
			$config['upload_path'] = './assets/img/Uploadlogos/';
			$config['allowed_types'] = 'gif|jpg|png|JPG|PNG|jpeg|JPEG';
			$config['max_size']	= '5242880';
			$config['max_width']  = '500';
			$config['max_height']  = '500';
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
			$msg="<input type='hidden' name='filename' value='".$filename."'>
			<img src='".asset_url()."img/Uploadlogos/".$filename."' width=90 height=90>";	
			}
			//end of logo upload if else...
		}
	   echo $msg;
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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */