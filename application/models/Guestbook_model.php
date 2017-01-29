<?php
class Guestbook_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}

		public function get_comments() {
			$query = $this->db->get('guestbook');
			return $query->row_array();
		}
}
