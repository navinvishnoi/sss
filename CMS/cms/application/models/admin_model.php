<?php
class admin_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	function getmemberlist()
	{
		$this->db->select('*');	
		$this->db->from('members');
		$this->db->where('Member_Status','Active');
		$this->db->where('Customer_ID','cust00001');
		$this->db->where("(Member_Current_Status!='Rejected')");
		$this->db->order_by('Member_Name','ASC');
		$getmemberlist=$this->db->get();
		return $getmemberlist->result();
	}
	function getListMemberAccepted()
	{
		$this->db->select('*');	
		$this->db->from('members');
		$this->db->where('Member_Status','Active');
		$this->db->where("(Member_Current_Status!='New')");
		$this->db->where("(Member_Current_Status!='Rejected')");
		$this->db->where("(Member_Current_Status!='New_Rejected')");
		$this->db->where("(Member_Current_Status!='New_Request_For_Deletion')");
		//$this->db->where("(Member_Current_Status='Modify' OR Member_Current_Status='Accepted')"); 
		$this->db->where('Customer_ID','cust00001');
		$this->db->order_by('Member_Name','ASC');
		$getListMemberAccepted=$this->db->get();
		return $getListMemberAccepted->result();
	}
	function getListOfNewMember()
	{
		$this->db->select('*');	
		$this->db->from('members');
		$this->db->where('Member_Status','Active');
		$this->db->where('Member_Current_Status','New');
		$this->db->where('Customer_ID','cust00001');
		$this->db->order_by('Member_Name','ASC');
		$getListOfNewMember=$this->db->get();
		return $getListOfNewMember->result();
	}
	function getmemberbyid($memberid)
	{
		$this->db->select('*');	
		$this->db->from('members');
		$this->db->where('Member_id',$memberid);
		$this->db->where('Member_Status','Active');
		$this->db->where('Customer_ID','cust00001');
		$getmemberbyid=$this->db->get();
		return $getmemberbyid->result();
	}
	function getanymemberbyappid($memberappid)
	{
		$this->db->select('*');	
		$this->db->from('members');
		$this->db->where('Member_App_Id',$memberappid);
		$this->db->where('Customer_ID','cust00001');
		$getanymemberbyappid=$this->db->get();
		return $getanymemberbyappid->result();
	}
	function getAcceptedmemberbyid($memberid)
	{
		$this->db->select('*');	
		$this->db->from('members');
		$this->db->where('Member_id',$memberid);
		$this->db->where("(Member_Current_Status!='New')");
		//$this->db->where("(Member_Current_Status='Modify' OR Member_Current_Status='Accepted')"); 
		$this->db->where('Customer_ID','cust00001');
		$this->db->where('Member_Status','Active');
		$getAcceptedmemberbyid=$this->db->get();
		return $getAcceptedmemberbyid->result();
	}
	function getmemberlogbyid($memberlogid)
	{
		$this->db->select('*');	
		$this->db->from('members_log');
		$this->db->where('Member_log_id',$memberlogid);
		$this->db->where('Member_Status','Active');
		$getmemberlogbyid=$this->db->get();
		return $getmemberlogbyid->result();
	}
	function add_member_profile($data) {
    $this->db->insert('members', $data);
	$add_member_profile=$this->db->insert_id();
	return $add_member_profile;
	}
	function add_log_member_profile($data) {
    $this->db->insert('members_log', $data);
    return;
	}
	function SearchFilter($contacttype, $dist, $text)
	{
		$this->db->select('*');	
		$this->db->from('members');
		$this->db->where('Member_Status','Active');
		$this->db->where('Customer_ID','cust00001'); 
		$this->db->where("(Member_Current_Status!='New')");
		$this->db->where("(Member_Current_Status!='Rejected')");
		$this->db->where("(Member_Current_Status!='New_Rejected')");
		$this->db->where("(Member_Current_Status!='New_Request_For_Deletion')");
		//$this->db->where("(Member_Current_Status='Modify' OR Member_Current_Status='Accepted')"); 
		if($contacttype!=""){$this->db->where('Member_Type',$contacttype);}
		if($dist!=""){$this->db->where('Member_Dist',$dist);}
		if($text!=''){
			$this->db->where('(Member_Name LIKE "%'.$text.'%" OR Member_Dist LIKE "%'.$text.'%"  OR Member_Address_Street LIKE "%'.$text.'%" OR Member_House_No 
				 LIKE "%'.$text.'%" OR Member_ZIP  LIKE "%'.$text.'%" OR Member_City  LIKE "%'.$text.'%" OR Member_Country  LIKE "%'.$text.'%" OR MA_name 
				 LIKE "%'.$text.'%" OR MA_first_name  LIKE "%'.$text.'%" OR MA_position  LIKE "%'.$text.'%" OR MA_street_no  LIKE "%'.$text.'%" OR 
				 MA_house_no  LIKE "%'.$text.'%" OR MA_zip  LIKE "%'.$text.'%" OR MA_city  LIKE "%'.$text.'%" OR MA_country  LIKE "%'.$text.'%" OR 
				 MA_phone  LIKE "%'.$text.'%" OR MA_mobile  LIKE "%'.$text.'%" OR MA_email LIKE "%'.$text.'%" OR Member_Type LIKE "%'.$text.'%")'); 
			}
		$this->db->order_by('Member_Name','ASC');
		$SearchFilter=$this->db->get();
		return $SearchFilter->result();
	}
	function getActivecountry()
	{
		$this->db->select('*');	
		$this->db->from('country');
		$this->db->where('country_status','Active');
		$getActivecountry=$this->db->get();
		return $getActivecountry->result();
	}
	function getActiveContactType()
	{
		$this->db->select('*');	
		$this->db->from('contact_type');
		$this->db->where('contact_type_status','Active');
		$getActiveContactType=$this->db->get();
		return $getActiveContactType->result();
	}
	function getActiveDistrics()
	{
		$this->db->select('*');	
		$this->db->from('district_table');
		$this->db->where('dist_status','Active');
		$this->db->order_by('dist_german_name','ASC');
		$getActiveDistrics=$this->db->get();
		return $getActiveDistrics->result();
	}
	function getGermanCountry()
	{
		$this->db->select('*');	
		$this->db->from('country');
		$this->db->where('country_status','Active');
		$this->db->where('country_id',1);
		$getActivecountry=$this->db->get();
		return $getActivecountry->result();
	}
	function getMessagebyTitle($title)
	{
		$this->db->select('*');	
		$this->db->from('messages');
		$this->db->where('msg_status','Active');
		$this->db->where('msg_title',$title);
		$getMessagebyTitle=$this->db->get();
		return $getMessagebyTitle->result();
	}
	function getMaxLogIdbyMemberid($memberid)
	{
		$this->db->select_max('Member_log_id');	
		$this->db->from('members_log');
		$this->db->where('Member_id',$memberid);
		$this->db->where('Member_Status','Active');
		$getMaxLogIdbyMemberid=$this->db->get();
		return $getMaxLogIdbyMemberid->result();
	}
	function getnextrecordid($memberid)
	{
		$this->db->select('Member_id,Member_App_Id');
		$this->db->from('members');
		$this->db->where('Member_id >',$memberid);
		$this->db->where('Customer_ID','cust00001');
		$this->db->where("(Member_Current_Status!='New')");
		$this->db->where("(Member_Current_Status!='Rejected')");		
		//$this->db->where("(Member_Current_Status='Modify' OR Member_Current_Status='Accepted')"); 
		$this->db->where('Member_Status','Active');
		$this->db->limit(1);
		$this->db->order_by('Member_Name','ASC');
		//$this->db->order_by('Member_id ','ASC');
		$getnextrecordid=$this->db->get();
		return $getnextrecordid->result();
	}
	function getpreviousrecordid($memberid)
	{
		$this->db->select('Member_id,Member_App_Id');
		$this->db->from('members');
		$this->db->where('Member_id <',$memberid);
		$this->db->where('Customer_ID','cust00001');
		$this->db->where("(Member_Current_Status!='New')"); 
		$this->db->where("(Member_Current_Status!='Rejected')");
		$this->db->where('Member_Status','Active');
		$this->db->limit(1);
		$this->db->order_by('Member_Name','ASC');
		//$this->db->order_by('Member_id ','DESC');
		$getpreviousrecordid=$this->db->get();
		return $getpreviousrecordid->result();
	}
	function CheckUniqueAppID($memberappid)
	{
		$this->db->select('Member_id');	
		$this->db->from('members');
		$this->db->where('Customer_ID','cust00001');
		$this->db->where('Member_App_Id',$memberappid);
		$this->db->where('Member_Status','Active');
		$CheckUniqueAppID=$this->db->get();
		return $CheckUniqueAppID->result();
	}
	function update_current_statusbyMid($memberid)
	{
		$this->db->set('Member_Current_Status','Accepted');
		$this->db->where('Member_id',$memberid);
		$update_current_statusbyMid=$this->db->update('members');
		return $update_current_statusbyMid;
	}
	function updateMemberlogStatus($member_log_id)
	{
		$this->db->set('Member_Status','Deactive');
		$this->db->where('Member_log_id',$member_log_id);
		$updateMemberlogStatus=$this->db->update('members_log');
		return $updateMemberlogStatus;
	}
	function updateMemberStatus($memberappid)
	{
		$this->db->set('Member_Status','Deactive');
		$this->db->where('Member_App_Id',$memberappid);
		$updateMemberStatus=$this->db->update('members');
		return $updateMemberStatus;
	}
	function updateMemberCurrentStatus($memberappid,$status)
	{
		$this->db->set('Member_Current_Status',$status);
		$this->db->where('Member_App_id',$memberappid);
		$updateMemberlogStatus=$this->db->update('members');
		return $updateMemberlogStatus;
		
	}
	function updateMemberProfile($data,$memberid)
	{
		if($memberid!="")
		{
		$this->db->set($data);
		$this->db->where('Member_App_Id',$memberid);
		$updateMemberProfile=$this->db->update('members');
		return $updateMemberProfile;
		}
	}
	/* this function updates the members_log profile by 'member log id' in members_log table */
	function updateMemberLogProfile($data,$memberid)
	{
		if($memberid!="")
		{
		$this->db->set($data);
		$this->db->where('Member_log_id',$memberid);
		$updateMemberLogProfile=$this->db->update('members_log');
		return $updateMemberLogProfile;
		}
	}
	function AdminSearch($status ,$date)
	{
		$this->db->select('*');	
		$this->db->from('members');
		//$this->db->where("(Member_Current_Status!='Rejected')");
		$this->db->where('Customer_ID','cust00001');
		$this->db->where('Member_Status','Active');
		if($status!=""){
			if($status=="Both")
			{
				$this->db->where("(Member_Current_Status='Modify' OR Member_Current_Status='New')"); 
			}
			elseif($status=="Rejected")
			{
				$this->db->where("(Member_Current_Status='Rejected' OR Member_Current_Status='Rejected_After_Accepted' OR Member_Current_Status='New_Rejected')");
			}
			elseif($status=="Request_For_Deletion")
			{
				$this->db->where("(Member_Current_Status='Request_For_Deletion' OR Member_Current_Status='New_Request_For_Deletion')");
			}else
			{$this->db->where('Member_Current_Status', $status);}
			}
		if(count($date)>0)
		{
			if(count($date)==1){
				$this->db->where("Member_latest_Release <'$date[0]' AND Member_latest_Release!=''");}
			else{
				$this->db->where("Member_latest_Release BETWEEN '$date[1]' AND '$date[0]'");
			//$this->db->where('Member_latest_Release <',$date[1]);
			}
		}
		//if($dist!=""){$this->db->where('Member_Dist',$dist);}
		$this->db->order_by('Member_Name','ASC');
		$AdminSearch=$this->db->get();
		return $AdminSearch->result();
	}
	function deleteLogoByAppID($appid)
	{
		$this->db->set('Member_logo','');
		$this->db->where('Member_App_Id',$appid);
		$deleteLogoByAppID=$this->db->update('members');
		return $deleteLogoByAppID;
	}
	function ExportMembersDataIntoCSV()
	{
	$this->load->dbutil();
	$query = $this->db->query("SELECT * FROM members where Customer_ID='cust00001'");
	return $ExportMembersDataIntoCSV=$this->dbutil->csv_from_result($query);
	}
	function getmemberAppbyid($memberappid)
	{
		$this->db->select('*');	
		$this->db->from('members');
		$this->db->where('Member_App_Id',$memberappid);
		$this->db->where('Customer_ID','cust00001');
		$getmemberAppbyid=$this->db->get();
		return $getmemberAppbyid->result();
	}
	function InsertBufferData($bufferdata)
	{
	$this->db->insert('session', $bufferdata);
	$InsertBufferData=$this->db->insert_id();
	return $InsertBufferData;
	}
	
	function GetBufferData($sessionID)
	{
		$this->db->select('*');	
		$this->db->from('session');
		$this->db->where('SessionId',$sessionID);
		$GetBufferData=$this->db->get();
		return $GetBufferData->result();
	}
	function UpdateBufferData($bufferdata,$sessionID)
	{
		//echo $sessionID;die();
		$this->db->set($bufferdata);
		$this->db->where('SessionId',$sessionID);
		$UpdateBufferData=$this->db->update('session');
		return $UpdateBufferData;
	}
	function deleteBufferData($session_id)
	{
		$this->db->where('SessionId', $session_id);
		$this->db->delete('session');
	}
	
	//manual data store for user
	function InsertBufferUserData($bufferdata)
	{
	$this->db->insert('usersession', $bufferdata);
	$InsertBufferData=$this->db->insert_id();
	return $InsertBufferData;
	}
	
	function GetBufferUserData($sessionID)
	{
		$this->db->select('*');	
		$this->db->from('usersession');
		$this->db->where('sessionid',$sessionID);
		$GetBufferData=$this->db->get();
		return $GetBufferData->result();
	}
	function UpdateBufferUserData($bufferdata,$sessionID)
	{
		//echo $sessionID;die();
		$this->db->set($bufferdata);
		$this->db->where('sessionid',$sessionID);
		$UpdateBufferData=$this->db->update('usersession');
		return $UpdateBufferData;
	}
	function deleteBufferUserData($session_id)
	{
		$this->db->where('sessionid', $session_id);
		$this->db->delete('usersession');
	}
	function UpdateRejectList($bufferdata,$sessionID)
	{
		$this->db->set($bufferdata);
		$this->db->where('Member_App_Id',$sessionID);
		$UpdateBufferData=$this->db->update('members');
		return $UpdateBufferData;
	}
	
}
?>