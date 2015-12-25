<?php
/**
 * 
 * @author lucus
 * 寄存咖啡
 *
 */
class Encouter_model extends CI_Model {
	
	public function __construct() {
		$this->load->database ();
	}

	// 查
	public function getRow($where = FALSE) {
		if ($where === FALSE) {
			return array ();
		}
		$query = $this->db->get_where ( 'encouter', $where );
		return $query->row_array ();
	}
	// 增
	public function create($obj) {
		$this->db->insert ( 'encouter', $obj );
		return $this->db->insert_id();
	}
	// 改
	public function update($obj, $id) {
		$this->db->where ( 'id', $id );
		$this->db->update ( 'encouter', $obj );
	}
	// 删
	public function del($id) {
		$this->db->where ( 'id', $id );
		$this->db->delete ( 'encouter' );
	}
	
	
}