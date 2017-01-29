<?php
	class Guestbook extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->model('guestbook_model');
		}

		public function index() {
			$data['guestlist'] = $this->guestbook_model->get_comments();

			$key = "trivial_key";
			$form_data['anti_bot'] = openssl_encrypt(($_SERVER['REMOTE_ADDR']).(("||".time())), 'aes-256-ctr', $key);


			$this->load->view('pages/header.php');
			$this->load->view('pages/guestbook.php', $data);
			$this->load->view('pages/form.php', $form_data);
			$this->load->view('pages/footer.php');
		}

		public function data_submitted($anti_bot) {

			$visitor_name = $this->input->post('v_name');
			$visitor_comment = $this->input->post('v_comment');
			$insert_data = array(
				'visitor' => $visitor_name,
				'comment' => $visitor_comment
				);

			$this->guestbook_model->new_comment($insert_data);

			$this->load->helper('url');
			redirect('/guestbook');
		}

		public function delete_comment($id) {
			$this->guestbook_model->delete_comment($id);

			$this->load->helper('url');
			redirect('/guestbook');
		}


	}
?>
