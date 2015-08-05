<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagination_Model extends CI_Model {
function __construct() {
parent::__construct();
}
// Count all record of table "contact_info" in database.
public function record_count() {
return $this->db->count_all("members where Member_Status='Active'");
}

// Fetch data according to per_page limit.
public function fetch_data($limit, $id) {
$this->db->limit($limit);
$this->db->where('Member_id', $id);
$this->db->order_by('Member_Name','ASC');
$query = $this->db->get("members");
if ($query->num_rows() > 0) {
foreach ($query->result() as $row) {
$data[] = $row;
}
print_r($data);
return $data;
}
return false;
}
}
?>