<?php
class Guestbook_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}

		public function get_comments() {
			$query = $this->db->get('guestbook');
			return $query;
		}

		public function new_comment($insert_data) {
			$this->db->insert('guestbook', $insert_data);
		}

		public function delete_comment($id) {
			$this->db->delete('guestbook', array('id' => $id));
		}
}
