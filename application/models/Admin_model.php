<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function login(){
		$username = $this->input->post('username_adm', true);
		$password = $this->input->post('password_adm', true);
		$this->db->where('username', $username);
		$query = $this->db->get('admin')->row();
		if (!$query) return false;
		$hash = $query->password;
		if (!password_verify($password, $hash)) return false;

      // Update last_login user
		$_SESSION['admin'] = $query->username;
		// $_SESSION['pass'] = $query->password;
      // Jika username dan password benar maka return data user
		return true;    
	}
// 		$data_user = [
// 					'username' => $this->input->post('username_adm'),
// 					'password' => password_hash($this->input->post('password_adm'), PASSWORD_DEFAULT)

// 				];
// 				$this->db->insert('admin',$data_user);
// 				return true;
// }
	public function count_member(){
		$query = $this->db->query('SELECT COUNT(id_user) as `jml` FROM `user` WHERE id_user != "0" ');
		return $query->row();
	}
		public function count_tra(){
		$query = $this->db->query('SELECT COUNT(id_transaksi) as `jml` FROM `transaksi` WHERE id_transaksi != "0"  ');
		return $query->row();
	}
		public function count_pro(){
		$query = $this->db->query('SELECT COUNT(id_produk) as `jml` FROM `produk`  ');
		return $query->row();
	}
		public function count_suk(){
		$query = $this->db->query('SELECT COUNT(id_transaksi) as `jml` FROM `transaksi` WHERE status_trx = 5  ');
		return $query->row();
	}
	public function beli_model(){
		$this->db->order_by('waktu_trx', 'DESC');
		$query = $this->db->get('transaksi');
		return $query;
	}
	public function konfirmasi_model($id){
		$this->db->where('id_kon_trx', $id);
		$query = $this->db->get('konfirmasi');
		return $query;
	}
	public function detail_user_model($id){
		$this->db->where('id_trx', $id);
		$this->db->join('user', 'id_user = id_user_cart');
		$this->db->limit(1);
		$this->db->order_by('waktu_cart', 'DESC');
		$query = $this->db->get('cart');
		return $query;
	}
	public function beli_batal_model($id){
		$data = [
			'status_trx' => 4
		];
		$this->db->where('id_transaksi', $id);
		$query = $this->db->update('transaksi', $data);

		$this->db->where('id_trx', $id);
		$this->db->join('produk', 'id_produk = id_produk_cart');
		$this->db->order_by('waktu_cart', 'DESC');
		$querys = $this->db->get('cart')->result();
		$a = 0;
		foreach ($querys as $k) {
			$a = $k->stok_produk + $k->qty_cart;
			$data_a = [
				'stok_produk' => $a
			];
			$this->db->where('id_produk', $k->id_produk_cart);
			$this->db->update('produk', $data_a); 
		}
		return true;
	}
	public function beli_setuju_model($id){
		$data = [
			'status_trx' => 2
		];
		$this->db->where('id_transaksi', $id);
		$query = $this->db->update('transaksi', $data);
		return true;
	}
	public function resi_model($id){
		$data = [
			'status_trx' => 3
		];
		$this->db->where('id_transaksi', $id);
		$query = $this->db->update('transaksi', $data);
		$data_in = [
			'resi' => $this->input->post('resi')
		];
		$this->db->where('id_transaksi', $id);
		$query = $this->db->update('transaksi', $data_in);
		return true;
	}
	public function sukses_model($id){
		$data = [
			'status_trx' => 5
		];
		$this->db->where('id_transaksi', $id);
		$query = $this->db->update('transaksi', $data);
		return true;
	}
	public function tambah_produk_model(){
		$config['upload_path'] = './upload/produk';    
		$config['allowed_types'] = 'jpg|png|jpeg';    
		$config['max_size']  = '5000';    
		$config['remove_space'] = TRUE;
		$this->load->library('upload', $config);
		if($this->upload->do_upload('fotop')){
			$file_produk = array('result' => 'success', 'file_produk' => $this->upload->data(), 'error' => '');
			$data_tambah_produk = [
				'nama_produk' => $this->input->post('namap', true),
				'harga_produk' => $this->input->post('hargap', true),
				'kategori_produk' => $this->input->post('katp', true),
				'foto_produk' => $file_produk['file_produk']['file_name'],
				'stok_produk' => $this->input->post('qtyp', true),
				'keterangan_produk' => $this->input->post('ketp', true),
			];
			if($this->db->insert('produk',$data_tambah_produk)){
				return true;
			}else{
				return false;
			}
		}
		else{
			die("salah");
		}

		
	}
	public function foto_model(){

		$config['upload_path'] = './upload/produk';    
		$config['allowed_types'] = 'jpg|png|jpeg';    
		$config['max_size']  = '5000';    
		$config['remove_space'] = TRUE;
		$this->load->library('upload', $config);
		if($this->upload->do_upload('fd')){
			$file_ = array('result' => 'success', 'file_' => $this->upload->data(), 'error' => '');
			$data_= [
				'foto_tentang' => $file_['file_']['file_name']
			];
			$this->db->where('id_tentang',1);
			if($this->db->update('tentang',$data_)){
				return true;
			}else{
				return false;
			}
		}
	}
	public function edit_produk_model($id){

		$config['upload_path'] = './upload/produk';    
		$config['allowed_types'] = 'jpg|png|jpeg';    
		$config['max_size']  = '5000';    
		$config['remove_space'] = TRUE;
		$this->load->library('upload', $config);
		if($this->upload->do_upload('fotoeditp')){
			$file_produk = array('result' => 'success', 'file_produk' => $this->upload->data(), 'error' => '');
			$data_edit_produk = [
				'nama_produk' => $this->input->post('namaeditp', true),
				'harga_produk' => $this->input->post('hargaeditp', true),
				'kategori_produk' => $this->input->post('kateditp', true),
				'foto_produk' => $file_produk['file_produk']['file_name'],
				'stok_produk' => $this->input->post('qtyeditp', true),
				'keterangan_produk' => $this->input->post('keteditp', true),
			];
			$this->db->where('id_produk',$id);
			if($this->db->update('produk',$data_edit_produk)){
				return true;
			}else{
				return false;
			}
		}
		else{
			$data_edit_produk = [
				'nama_produk' => $this->input->post('namaeditp', true),
				'harga_produk' => $this->input->post('hargaeditp', true),
				'kategori_produk' => $this->input->post('kateditp', true),
				'foto_produk' => $this->input->post('sementara', true),
				'stok_produk' => $this->input->post('qtyeditp', true),
				'keterangan_produk' => $this->input->post('keteditp', true),
			];
			$this->db->where('id_produk',$id);
			if($this->db->update('produk',$data_edit_produk)){
				return true;
			}else{
				return false;
			}
		}
	}
	public function hapus_produk_model($id){
		
		if($this->db->delete('produk',array('id_produk'=>$id))){
			return true;
		}else{
			return false;
		}
	}
	public function beritahu_model(){
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

	public function produk(){
		$this->db->select('*');
		$this->db->join('kategori', 'id_kategori = kategori_produk');
		$this->db->order_by('tanggal_upload', 'DESC');
		$query = $this->db->get('produk');
		return $query;
	}
	public function tambah_kategori_model(){
		$data_tambah_kategori = [
			'nama_kategori' => $this->input->post('kategorip', true)
		];
		if($this->db->insert('kategori',$data_tambah_kategori)){
			return true;
		}else{
			return false;
		}
	}

	public function edit_kategori_model($id){
		$data_update_kategori = [
			'nama_kategori' => $this->input->post('kategorieditp', true)
		];
		$this->db->where('id_kategori',$id);
		if($this->db->update('kategori',$data_update_kategori)){
			return true;
		}else{
			return false;
		}
	}
	public function user_tentang_model(){
		$data_up = [
			'username' => $this->input->post('user-ttg', true)
		];
		$this->db->where('id_admin',1);
		if($this->db->update('admin',$data_up)){
			return true;
		}else{
			return false;
		}
		
		
	}
	public function pass_tentang_model(){
		$data_up = [
			'username' => $this->input->post('user-ttg', true),
			'password' => password_hash($this->input->post('pass-ttg'), PASSWORD_DEFAULT)
		];
		$this->db->where('id_admin',1);
		if($this->db->update('admin',$data_up)){
			return true;
		}else{
			return false;
		}
		
		
	}
	public function hapus_kategori_model($id){
		
		if($this->db->delete('kategori',array('id_kategori'=>$id))){
			return true;
		}else{
			return false;
		}
	}
	public function kategori(){
		return $this->db->get('kategori');
	}
	public function tentang(){
		return $this->db->get('tentang')->row();
	}
	public function edit_tentang_model(){
		
		$config['upload_path'] = './upload/tentang';    
		$config['allowed_types'] = 'jpg|png|jpeg';    
		$config['max_size']  = '5000';    
		$config['remove_space'] = TRUE;
		$this->load->library('upload', $config);
		if($this->upload->do_upload('foto-ttg')){
			$file_ttg = array('result' => 'success', 'file_ttg' => $this->upload->data(), 'error' => '');
			if($this->upload->do_upload('logo-ttg')){
				$logo_ttg = array('result' => 'success', 'logo_ttg' => $this->upload->data(), 'error' => '');
				$data_edit_ttg = [
					'judul_tentang' => $this->input->post('jdl-ttg', true),
					'alamat_tentang' => $this->input->post('alamat-ttg', true),
					'hp_tentang' => $this->input->post('hp-ttg', true),
					'email_tentang' => $this->input->post('email-ttg', true),
					'tagline_tentang' => $this->input->post('tag-ttg', true),
					'isi_tentang' => $this->input->post('isi-ttg', true),
					'foto_tentang' => $file_ttg['file_ttg']['file_name'],
					'logo' => $logo_ttg['logo_ttg']['file_name'],
					'quote_tentang' => $this->input->post('quo-ttg', true),
					'no_rek' => $this->input->post('rek-ttg', true),
					'bank' => $this->input->post('bank-ttg', true),
					'atas_nama' => $this->input->post('an-ttg', true),
				];
				$this->db->where('id_tentang',1);
				if($this->db->update('tentang',$data_edit_ttg)){
					return true;
				}else{
					return false;
				}
			}else{
				$file_ttg = array('result' => 'success', 'file_ttg' => $this->upload->data(), 'error' => '');
				$data_edit_ttg = [
					'judul_tentang' => $this->input->post('jdl-ttg', true),
					'alamat_tentang' => $this->input->post('alamat-ttg', true),
					'hp_tentang' => $this->input->post('hp-ttg', true),
					'email_tentang' => $this->input->post('email-ttg', true),
					'tagline_tentang' => $this->input->post('tag-ttg', true),
					'isi_tentang' => $this->input->post('isi-ttg', true),
					'foto_tentang' => $file_ttg['file_ttg']['file_name'],
					'logo' => $this->input->post('logo-sem-ttg', true),
					'quote_tentang' => $this->input->post('quo-ttg', true),
					'no_rek' => $this->input->post('rek-ttg', true),
					'bank' => $this->input->post('bank-ttg', true),
					'atas_nama' => $this->input->post('an-ttg', true),
				];
				$this->db->where('id_tentang',1);
				if($this->db->update('tentang',$data_edit_ttg)){
					return true;
				}else{
					return false;
				}
			}

		}

		else if($this->upload->do_upload('logo-ttg') && !($this->upload->do_upload('foto-ttg'))){
			$logo_ttg = array('result' => 'success', 'logo_ttg' => $this->upload->data(), 'error' => '');
			$data_edit_ttg = [
				'judul_tentang' => $this->input->post('jdl-ttg', true),
				'alamat_tentang' => $this->input->post('alamat-ttg', true),
				'hp_tentang' => $this->input->post('hp-ttg', true),
				'email_tentang' => $this->input->post('email-ttg', true),
				'tagline_tentang' => $this->input->post('tag-ttg', true),
				'isi_tentang' => $this->input->post('isi-ttg', true),
				'foto_tentang' => $this->input->post('sementara-ttg', true),
				'logo' => $logo_ttg['logo_ttg']['file_name'],
				'quote_tentang' => $this->input->post('quo-ttg', true),
				'no_rek' => $this->input->post('rek-ttg', true),
				'bank' => $this->input->post('bank-ttg', true),
				'atas_nama' => $this->input->post('an-ttg', true),
			];
			$this->db->where('id_tentang',1);
			if($this->db->update('tentang',$data_edit_ttg)){
				return true;
			}else{
				return false;
			}
		}
		else{
			$data_edit_ttg = [
				'judul_tentang' => $this->input->post('jdl-ttg', true),
				'alamat_tentang' => $this->input->post('alamat-ttg', true),
				'hp_tentang' => $this->input->post('hp-ttg', true),
				'email_tentang' => $this->input->post('email-ttg', true),
				'tagline_tentang' => $this->input->post('tag-ttg', true),
				'isi_tentang' => $this->input->post('isi-ttg', true),
				'logo' => $this->input->post('logo-sem-ttg', true),
				'foto_tentang' => $this->input->post('sementara-ttg', true),
				'quote_tentang' => $this->input->post('quo-ttg', true),
				'no_rek' => $this->input->post('rek-ttg', true),
				'bank' => $this->input->post('bank-ttg', true),
				'atas_nama' => $this->input->post('an-ttg', true),
			];
			$this->db->where('id_tentang',1);
			if($this->db->update('tentang',$data_edit_ttg)){
				return true;
			}else{
				return false;
			}
		}

	}
	public function user_head(){
		
		$config['upload_path'] = './assets/img/';   
		$config['overwrite'] = TRUE; 
		$config['file_name'] = 'header-bg';
		$config['allowed_types'] = 'jpg|png|jpeg';    
		$config['max_size']  = '5000';    
		$this->load->library('upload', $config);
		if($this->upload->do_upload('header')){
			return true;
		}
	}
		public function user_foot(){
		
		$config['upload_path'] = './assets/img/';   
		$config['overwrite'] = TRUE; 
		$config['file_name'] = 'footer-bg';
		$config['allowed_types'] = 'jpg|png|jpeg';    
		$config['max_size']  = '5000';    
		$this->load->library('upload', $config);
		if($this->upload->do_upload('footer')){
			return true;
		}
	}
}