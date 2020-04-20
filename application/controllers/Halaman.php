<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		    // Load Pagination library
		$this->load->library('pagination');

    // Load model
		$this->load->model('halaman_model');
		$this->load->helper('captcha');
		$this->load->model('user_model');
		
	}
	public function index()
	{
		$vals_reg = array(
			'img_path'	 => './captcha/',
			'img_url'	 => base_url().'captcha/',
			'img_width'	 => '250',
			'img_height' => 50,
			'border' => 0,
			'word_length' => 5,	
			'expiration' => 7200
		);

            // create captcha image
		$cap_regs = create_captcha($vals_reg);

            // store image html code in a variable
		$this->session->unset_userdata('mycaptcha_reg');
		$this->session->set_userdata('mycaptcha_reg', $cap_regs['word']);
		$data['img_capt_reg'] = $cap_regs['image'];

            // store the captcha word in a session
		$vals_log = array(
			'img_path'	 => './captcha/',
			'img_url'	 => base_url().'captcha/',
			'img_width'	 => '250',
			'img_height' => 50,
			'border' => 0,
			'word_length' => 5,	
			'expiration' => 7200
		);

            // create captcha image
		$cap_log = create_captcha($vals_log);

            // store image html code in a variable
		$this->session->unset_userdata('mycaptcha_log');
		$this->session->set_userdata('mycaptcha_log', $cap_log['word']);
		$data['img_capt_log'] = $cap_log['image'];
		$data['kategori'] = $this->admin_model->kategori()->result();
		$data['tentang'] = $this->admin_model->tentang();
		if(isset($_SESSION['id_user'])){
		$data['count'] = $this->user_model->count_cart_model($_SESSION['id_user']);
		if($this->user_model->ingat($_SESSION['id_user']) == true){
				$data['ingat'] = 1;
			}else{
				$data['ingat'] = 0;
			}
		}
		$this->load->view('header', $data);
		$this->load->view('index', $data);
		$this->load->view('footer', $data);
	}
	function loadRecord($rowno=0){

    // Row per page
		$rowperpage = 9;

    // Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}

    // All records count
		$allcount = $this->halaman_model->getrecordCount();

    // Get records
		$users_record = $this->halaman_model->getData($rowno,$rowperpage);

    // Pagination Configuration
		$config['base_url'] = base_url().'halaman/loadRecord';
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;
		$config['first_link'] = ' << ';
		$config['last_link'] = ' >> ';
		$config['next_link'] = ' > ';
		$config['prev_link'] = ' < ';
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
    // Initialize
		$this->pagination->initialize($config);

    // Initialize $data Array
		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $users_record;
		$data['row'] = $rowno;

		echo json_encode($data);

	}
	function loadRecordP($rowno=0, $as){

    // Row per page
		$rowperpage = 9;

    // Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}

    // All records count
		$allcount = $this->halaman_model->getrecordCountP($as);

    // Get records
		$users_record = $this->halaman_model->getDataP($rowno,$rowperpage,$as);

    // Pagination Configuration
		$config['base_url'] = base_url().'halaman/loadRecordP';
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;
		$config['first_link'] = ' << ';
		$config['last_link'] = ' >> ';
		$config['next_link'] = FALSE;
		$config['prev_link'] = FALSE;
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] ="</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
    // Initialize
		$this->pagination->initialize($config);

    // Initialize $data Array
		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $users_record;
		$data['row'] = $rowno;

		echo json_encode($data);

	}
}
