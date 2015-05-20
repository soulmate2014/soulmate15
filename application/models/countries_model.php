<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Countries_Model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}
 
	public function record_count() {
		return $this->db->count_all("tblcountries");
	}
 
	public function get_countries($limit, $start) {
		$this->db->limit($limit, $start);
		$query = $this->db->get("tblcountries");
 
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
   }
}	