<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('user_model');
	}
	public function cart($id)
	{
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		$data['cart'] = $this->user_model->cart_model($id)->result();
		$data['tentang'] = $this->admin_model->tentang();
		$data['users'] = $this->user_model->users($_SESSION['id_user'])->row();
		if(isset($_SESSION['id_user'])){
			$data['count'] = $this->user_model->count_cart_model($id);
			if($this->user_model->ingat($_SESSION['id_user']) == true){
				$data['ingat'] = 1;
			}else{
				$data['ingat'] = 0;
			}
		}
		$this->load->view('header', $data);
		$this->load->view('cart', $data);
		$this->load->view('footer', $data);
	}
		public function bayar($id)
	{
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		$data['trx'] = $this->user_model->trx_model($id)->row();
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
		$this->load->view('bayar', $data);
		$this->load->view('footer', $data);
	}
	public function info()
	{
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		$data['tentang'] = $this->admin_model->tentang();
		$data['users'] = $this->user_model->users($_SESSION['id_user'])->row();
		if(isset($_SESSION['id_user'])){
			$data['count'] = $this->user_model->count_cart_model($_SESSION['id_user']);
			if($this->user_model->ingat($_SESSION['id_user']) == true){
				$data['ingat'] = 1;
			}else{
				$data['ingat'] = 0;
			}
		}
		$this->load->view('header', $data);
		$this->load->view('info', $data);
		$this->load->view('footer', $data);
	}
	public function status($id)
	{
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		$data['status'] = $this->user_model->status_model($id)->result();
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
		$this->load->view('status', $data);
		$this->load->view('footer', $data);
	}
	public function detail($id){
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		$data['trx'] = $this->user_model->trx_model($id)->row();
		$data['tentang'] = $this->admin_model->tentang();
		$data['detail'] = $this->user_model->detail_model($id)->result();
		if(isset($_SESSION['id_user'])){
			$data['count'] = $this->user_model->count_cart_model($_SESSION['id_user']);
			if($this->user_model->ingat($_SESSION['id_user']) == true){
				$data['ingat'] = 1;
			}else{
				$data['ingat'] = 0;
			}
		}
		$this->load->view('header', $data);
		$this->load->view('detail', $data);
		$this->load->view('footer', $data);
	}
	public function proses_cart($id)
	{
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		
			if($this->user_model->cart_proses_model($id) === true){
				redirect(base_url('user/cart/'.$_SESSION['id_user'].'/#cart'));

			}else{
				redirect(base_url('user/cart/'.$_SESSION['id_user'].'/#cart'));
			}
		
	}
	public function info_user()
	{
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		
			if($this->user_model->info_user_model($_SESSION['id_user']) === true){
				redirect(base_url('user/info/#info'));

			}else{
				?>
				<script>

				alert('Gagal Menyimpan');

				history.go(-1);

				</script>
				<?php	
			}
		
	}
	public function konfirmasi($id)
	{
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		if($this->user_model->konfirmasi_model($id) === true){
			redirect(base_url('user/status/'.$_SESSION['id_user'].'/#status'));

		}else{
			?>
			<script>

			alert('Gagal Konfirmasi');

			history.go(-1);

			</script>
			<?php	
		}
	}
	public function cart_hapus($id)
	{
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		if($this->user_model->cart_hapus_model($id) === true){
			redirect(base_url('user/cart/'.$_SESSION['id_user'].'/#cart'));

		}else{
			?>
			<script>

			alert('Gagal Menghapus');

			history.go(-1);

			</script>
			<?php	
		}
	}
	public function proses_transaksi()
	{
		if(!isset($_SESSION['id_user'])){
			redirect(base_url());
		}
		if($this->user_model->proses_transaksi_model() === true){
			$_SESSION['a'] = 0;
			redirect(base_url('user/bayar/'.$_SESSION['id_trx'].'/#bayar'));
		}else{
			$_SESSION['a'] = 1;
			

			redirect(base_url('user/cart/'.$_SESSION['id_user'].'/#cart'));	
		}
	}
	
	public function logout(){
		// if($_SESSION['type'] == 'perawat'){
		// 	$this->user_model->logout_perawat();
		// }
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}
}
