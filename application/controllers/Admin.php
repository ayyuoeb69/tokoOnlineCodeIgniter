<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('user_model');

	}

	public function login()
	{
		if(isset($_SESSION['admin'])){
			redirect(base_url('admin/beranda'));
		}
		$this->load->view('admin/login');
	}
	public function beranda()
	{
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}
		if($this->admin_model->beritahu_model() == true){
			$data['beritahu'] = 1;
		}else{
			$data['beritahu'] = 0;
		}
		$data['member'] = $this->admin_model->count_member();
		$data['tra'] = $this->admin_model->count_tra();
		$data['pro'] = $this->admin_model->count_pro();
		$data['suk'] = $this->admin_model->count_suk();
		$data['tentang'] = $this->admin_model->tentang();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/footer', $data);
	}
	public function produk()
	{
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}
		if($this->admin_model->beritahu_model() == true){
			$data['beritahu'] = 1;
		}else{
			$data['beritahu'] = 0;
		}
		
		$data['produk'] = $this->admin_model->produk()->result();
		$data['kategori']=$this->admin_model->kategori()->result();
		$data['tentang'] = $this->admin_model->tentang();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/produk', $data);
		$this->load->view('admin/footer', $data);
	}
	public function kategori()
	{
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}
		if($this->admin_model->beritahu_model() == true){
			$data['beritahu'] = 1;
		}else{
			$data['beritahu'] = 0;
		}
		$data['kategori']=$this->admin_model->kategori()->result();
		$data['tentang'] = $this->admin_model->tentang();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kategori', $data);
		$this->load->view('admin/footer', $data);
	}
	public function tentang()
	{
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}
		if($this->admin_model->beritahu_model() == true){
			$data['beritahu'] = 1;
		}else{
			$data['beritahu'] = 0;
		}
		$data['tentang'] = $this->admin_model->tentang();

		$this->load->view('admin/header', $data);
		$this->load->view('admin/tentang', $data);
		$this->load->view('admin/footer', $data);
	}
	public function beli()
	{
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}
		if($this->admin_model->beritahu_model() == true){
			$data['beritahu'] = 1;
		}else{
			$data['beritahu'] = 0;
		}
		$data['status'] = $this->admin_model->beli_model()->result();
		$data['tentang'] = $this->admin_model->tentang();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/beli', $data);
		$this->load->view('admin/footer', $data);
	}
	public function detail($id)
	{
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}
		if($this->admin_model->beritahu_model() == true){
			$data['beritahu'] = 1;
		}else{
			$data['beritahu'] = 0;
		}
		$data['trx'] = $this->user_model->trx_model($id)->row();
		$data['detail'] = $this->user_model->detail_model($id)->result();
		$data['users'] = $this->admin_model->detail_user_model($id)->result();
		$data['tentang'] = $this->admin_model->tentang();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/detail', $data);
		$this->load->view('admin/footer', $data);
	}
	public function konfirmasi($id)
	{
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}
		if($this->admin_model->beritahu_model() == true){
			$data['beritahu'] = 1;
		}else{
			$data['beritahu'] = 0;
		}
		$data['konfirmasi'] = $this->admin_model->konfirmasi_model($id)->row();
		$data['trx'] = $this->user_model->trx_model($id)->row();
		$data['detail'] = $this->user_model->detail_model($id)->result();
		$data['users'] = $this->admin_model->detail_user_model($id)->result();
		$data['tentang'] = $this->admin_model->tentang();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/konfirmasi', $data);
		$this->load->view('admin/footer', $data);
	}
	public function proses()
	{
		if($this->admin_model->login()==true){
			redirect(base_url('admin/beranda'));
		}else{
			?>
			<script>

				alert('Failed Login: Check your username and password!');

				history.go(-1);

			</script>
			<?php
		}
		
		
	}
	public function beli_setuju($id)
	{
		if($this->admin_model->beli_setuju_model($id)==true){
			redirect(base_url('admin/beli'));
		}else{
			?>
			<script>

				alert('Gagal Beli');

				history.go(-1);

			</script>
			<?php
		}
		
		
	}
	public function resi($id)
	{
		if($this->admin_model->resi_model($id)==true){
			redirect(base_url('admin/beli'));
		}else{
			?>
			<script>

				alert('Gagal Beli');

				history.go(-1);

			</script>
			<?php
		}
		
		
	}
	public function beli_batal($id)
	{
		if($this->admin_model->beli_batal_model($id)==true){
			redirect(base_url('admin/beli'));
		}else{
			?>
			<script>

				alert('Gagal Beli');

				history.go(-1);

			</script>
			<?php
		}
		
		
	}
	public function sukses($id)
	{
		if($this->admin_model->sukses_model($id)==true){
			redirect(base_url('admin/beli'));
		}else{
			?>
			<script>

				alert('Gagal Sukses');

				history.go(-1);

			</script>
			<?php
		}
		
		
	}
	public function edit_tentang()
	{
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}	
		if($this->admin_model->edit_tentang_model()==true){
			redirect(base_url('admin/tentang'));
		}else{
			?>
			<script>

				alert('Failed Edit !');

				history.go(-1);

			</script>
			<?php
		}
		
		
	}
	public function edit_user_tentang()
	{
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}	
		if($this->admin_model->user_tentang_model()==true){
			$this->session->sess_destroy();
			redirect(base_url().'admin-toko', 'refresh');

		}else{
			?>
			<script>

				alert('Failed Edit !');

				history.go(-1);

			</script>
			<?php
		}
		
		
	}
	public function edit_head()
	{
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}	
		if($this->admin_model->user_head()==true){
			redirect(base_url('admin/tentang'));

		}else{
			?>
			<script>

				alert('Failed Edit !');

				history.go(-1);

			</script>
			<?php
		}
		
		
	}
		public function edit_foot()
	{
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}	
		if($this->admin_model->user_foot()==true){
			redirect(base_url('admin/tentang'));

		}else{
			?>
			<script>

				alert('Failed Edit !');

				history.go(-1);

			</script>
			<?php
		}
		
		
	}
	public function pass_user_tentang()
	{
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}	
		$this->form_validation->set_rules('pass-ttg', 'Password Form', 'required');
		$this->form_validation->set_rules('kon-pass-ttg', 'Konfirmasi Password Form', 'matches[pass-ttg]');
		if($this->form_validation->run() === false){
			?>
			<script>

				alert('Password Tidak Cocok !');

				history.go(-1);

			</script>
			<?php	
		}else{
			if($this->admin_model->pass_tentang_model()==true){
				$this->session->sess_destroy();
				redirect(base_url().'admin-toko', 'refresh');

			}else{
				?>
				<script>

					alert('Failed Edit !');

					history.go(-1);

				</script>
				<?php
			}	
		}
		
	}

	public function tambah_produk()
	{
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}
		
		if($this->admin_model->tambah_produk_model()==true){
			redirect(base_url('admin/produk'));
		}else{
			?>
			<script>

				alert('Failed Add !');

				history.go(-1);

			</script>
			<?php
		}
		
		
	}
	public function edit_produk($ids)
	{
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}	
		if($this->admin_model->edit_produk_model($ids)==true){
			redirect(base_url('admin/produk'));
		}else{
			?>
			<script>

				alert('Failed Edit !');

				history.go(-1);

			</script>
			<?php
		}
		
		
	}
	public function hapus_produk($ids)
	{
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}
		if($this->admin_model->hapus_produk_model($ids)==true){
			redirect(base_url('admin/produk'));
		}else{
			?>
			<script>

				alert('Failed Hapus !');

				history.go(-1);

			</script>
			<?php
		}
		
		
	}
	public function tambah_kategori()
	{
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}	
		if($this->admin_model->tambah_kategori_model()==true){
			redirect(base_url('admin/kategori'));
		}else{
			?>
			<script>

				alert('Failed Add !');

				history.go(-1);

			</script>
			<?php
		}
		
		
	}
	public function edit_kategori($id)
	{
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}
		if($this->admin_model->edit_kategori_model($id)==true){
			redirect(base_url('admin/kategori'));
		}else{
			?>
			<script>

				alert('Failed Edit !');

				history.go(-1);

			</script>
			<?php
		}
		
		
	}
	public function hapus_kategori($id)
	{
		if(!isset($_SESSION['admin'])){
			redirect(base_url('admin/login'));
		}
		
		if($this->admin_model->hapus_kategori_model($id)==true){
			redirect(base_url('admin/kategori'));
		}else{
			?>
			<script>

				alert('Failed Hapus !');

				history.go(-1);

			</script>
			<?php
		}
		
		
	}
	public function logout(){
		// if($_SESSION['type'] == 'perawat'){
		// 	$this->user_model->logout_perawat();
		// }
		$this->session->sess_destroy();
		redirect(base_url().'admin-toko', 'refresh');
	}
}
