<?php
	class Guestbook extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->model('guestbook_model');
		}

		public function index() {
			$this->load->helper('url');

			$data['guestlist'] = $this->guestbook_model->get_comments();

			$form_data['anti_bot'] = bin2hex(openssl_encrypt(($_SERVER['REMOTE_ADDR']).(("||".time())), ENCRYPT_METHOD, ENCRYPT_KEY, 1, IV));

			$this->load->view('pages/header.php');
			$this->load->view('pages/form.php', $form_data);
			$this->load->view('pages/guestbook.php', $data);
			$this->load->view('pages/footer.php');
		}

		public function data_submitted($anti_bot) {
			function get_match($regex, $string) {
				if (preg_match($regex, $string, $match)) {
					return $match[0];
				} else {
					return '';
				}
			}
			$decrypt = openssl_decrypt(hex2bin($anti_bot), ENCRYPT_METHOD, ENCRYPT_KEY, 1, IV);
			$time = get_match('/(?<=(\|\|))(.*)/', $decrypt);
			$ip = $ip = get_match('/(.*?)(?=(\|\|))/', $decrypt);
			if ($ip == $_SERVER['REMOTE_ADDR'] AND abs ($time - time()) < 15*60) {
				$visitor_name = $this->input->post('v_name');
				$visitor_comment = $this->input->post('v_comment');
				$insert_data = array(
					'visitor' => $visitor_name,
					'comment' => $visitor_comment
					);
				$this->guestbook_model->new_comment($insert_data);
			}

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
