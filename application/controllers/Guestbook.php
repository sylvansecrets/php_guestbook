<?php
	class Guestbook extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->model('guestbook_model');
		}

		public function index() {
			$visitor_name = $this->input->post('v_name');
			$visitor_comment = $this->input->post('v_comment');
			$insert_data = array(
				'visitor' => $visitor_name,
				'comment' => $visitor_comment
				);

			$this->guestbook_model->new_comment($insert_data);

			$data['guestlist'] = $this->guestbook_model->get_comments();

			$this->load->view('pages/header.php');
			$this->load->view('pages/guestbook.php', $data);
			$this->load->view('pages/form.php');
			$this->load->view('pages/footer.php');
		}


	}
?>
