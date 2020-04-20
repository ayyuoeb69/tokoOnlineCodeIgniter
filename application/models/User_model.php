<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function __construct(){
		parent::__construct();
		
	}
	public function count_cart_model($id){
		$this->db->where('id_user_cart', $id);
		$this->db->where('status_cart', 0);
		$this->db->from('cart');
		$query = $this->db->count_all_results();
		return $query;
	}
	public function cart_model($id){
		$this->db->select('*');
		$this->db->join('produk', 'id_produk = id_produk_cart');
		$this->db->order_by('waktu_cart', 'DESC');
		$this->db->where('id_user_cart', $id);
		$this->db->where('status_cart', 0);
		$query = $this->db->get('cart');
		return $query;
	}
	public function trx_model($id){
		$this->db->where('id_transaksi', $id);
		$query = $this->db->get('transaksi');
		return $query;
	}
	public function users($id){
		$this->db->where('id_user', $id);
		$query = $this->db->get('user');
		return $query;
	}
	public function status_model($id){
		$this->db->where('user_trx', $id);
		$this->db->order_by('waktu_trx', 'DESC');
		$query = $this->db->get('transaksi');
		return $query;
	}
	public function detail_model($id){
		$this->db->where('id_trx', $id);
		$this->db->join('produk', 'id_produk = id_produk_cart');
		$this->db->join('kategori', 'id_kategori = kategori_produk');
		$this->db->order_by('waktu_cart', 'DESC');
		$query = $this->db->get('cart');
		return $query;
	}
	public function ingat($id){
		$this->db->where('user_trx', $id);
		$this->db->order_by('waktu_trx', 'DESC');
		if($this->db->get('transaksi')->result()){
			$query = $this->db->get('transaksi')->result();
			foreach ($query as $k) {
				if($k->status_trx == 0){
					return true;
				}
			}
		}else{
			return false;
		}
	}
	public function cart_proses_model($id){
		$this->db->where('id_user_cart', $_SESSION['id_user']);
		$this->db->where('status_cart', 0);
		$this->db->where('id_produk_cart', $id);
		$query = $this->db->get('cart')->row();

		if(!$query){
			$data_user = [
			'id_produk_cart' => $id,
			'id_user_cart' => $_SESSION['id_user'],
			'qty_cart' => 0,
			'id_trx' => 0
		];
		$this->db->insert('cart',$data_user);
			return true;
		}else{
			return false;	
		}
		

	}
	public function cart_hapus_model($id){
		if($this->db->delete('cart',array('id_cart'=>$id))){
			return true;
		}else{
			return false;
		}

	}
	public function proses_transaksi_model(){
		$this->db->select('*');
		$this->db->join('produk', 'id_produk = id_produk_cart');
		$this->db->order_by('waktu_cart', 'DESC');
		$this->db->where('id_user_cart', $_SESSION['id_user']);
		$this->db->where('status_cart', 0);
		$query = $this->db->get('cart')->result();
		$now = 0;
		foreach ($query as $q) {
			# code...
			if($this->input->post('qty'.$q->id_cart) <= $q->stok_produk){
				$now = $q->stok_produk - $this->input->post('qty'.$q->id_cart);
				if($now < 0){
					$now = 0;
				}
				$data_user = [
					'qty_cart' => $this->input->post('qty'.$q->id_cart),
					'status_cart' => 1,
					
				];

				$this->db->where('id_cart', $q->id_cart);
				$this->db->update('cart',$data_user);
				
			}else{
				return false;
			}
		}
		$id_trx = "trx".$_SESSION['id_user'].date("Ymd").rand();
		$jum = $this->input->post('tot')+rand(10,100);
		$data_user_in = [
			
			'id_transaksi' => $id_trx,
			'jumlah_trx' => $jum,
			'user_trx' => $_SESSION['id_user'],
			'metode_trx' => $this->input->post('optradio')
		];
		$this->db->insert('transaksi',$data_user_in);

		foreach ($query as $q) {
			# code...
			if($this->input->post('qty'.$q->id_cart) <= $q->stok_produk){
				$data_user = [
					'id_trx' => $id_trx
				];

				$this->db->where('id_cart', $q->id_cart);
				$this->db->update('cart',$data_user);
			}else{
				return false;
			}
		}
		foreach ($query as $q) {
			# code...
			if($this->input->post('qty'.$q->id_cart) <= $q->stok_produk){
				$now = $q->stok_produk - $this->input->post('qty'.$q->id_cart);
				if($now < 0){
					$now = 0;
				}
				
				$data_st = [
					'stok_produk' => $now
				];
				$this->db->where('id_produk', $q->id_produk_cart);
				$this->db->update('produk',$data_st);
			}else{
				return false;
			}
		}
		$data_user_up = [
			'nama_user' => $this->input->post('nama-kon'),
			'hp_user' => $this->input->post('hp-kon'),
			'email_user' => $this->input->post('email-kon'),
			'alamat' => $this->input->post('alamat-kon'),
		];

		$this->db->where('id_user', $_SESSION['id_user']);
		$this->db->update('user',$data_user_up);
		$_SESSION['id_trx'] = $id_trx;
		$_SESSION['jml_trx'] = $jum;
		return true;
	}
	public function konfirmasi_model($id){

		$config['upload_path'] = './upload/konfirmasi';    
		$config['allowed_types'] = 'jpg|png|jpeg';    
		$config['max_size']  = '5000';    
		$config['remove_space'] = TRUE;
		$this->load->library('upload', $config);
		if($this->upload->do_upload('bukti')){
			$file = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			$data = [
			'upload_konfirmasi' => $file['file']['file_name'],
			'rek_konfirmasi' => $this->input->post('rek-buk'),
			'bank_konfirmasi' => $this->input->post('bank-buk'),
			'an_konfirmasi' => $this->input->post('an-buk'),
			'id_kon_trx' => $id
			];
			$this->db->insert('konfirmasi',$data);
			$data_trx = [
			'status_trx' => 1,
		];

		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi',$data_trx);
			return true;
			
		}else{
				return false;
		}
	}
	public function info_user_model($id){
		$data_user_up = [
			'nama_user' => $this->input->post('nama-us'),
			'hp_user' => $this->input->post('hp-us'),
			'email_user' => $this->input->post('email-us'),
			'alamat' => $this->input->post('alamat-us'),
		];

		$this->db->where('id_user', $_SESSION['id_user']);
		$this->db->update('user',$data_user_up);
		return true;
	}
}