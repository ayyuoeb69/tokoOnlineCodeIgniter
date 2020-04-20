<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_model extends CI_Model {
	public function getData($rowno,$rowperpage) {
 
    $this->db->select('*');
    $this->db->order_by('tanggal_upload', 'DESC');
    $this->db->from('produk');
    $this->db->join('kategori', 'id_kategori = kategori_produk');
    $this->db->limit($rowperpage, $rowno);  
    $query = $this->db->get();
 
    return $query->result_array();
  }

  // Select total records
  public function getrecordCount() {

    $this->db->select('count(*) as allcount');
    $this->db->from('produk');
    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }
  	public function getDataP($rowno,$rowperpage,$as) {
 
    $this->db->select('*');

    $this->db->order_by('tanggal_upload', 'DESC');
    $this->db->where('kategori_produk',$as);
    $this->db->from('produk');
    $this->db->join('kategori', 'id_kategori = kategori_produk');
    $this->db->limit($rowperpage, $rowno);  
    $query = $this->db->get();
 
    return $query->result_array();
  }

  // Select total records
  public function getrecordCountP($as) {

    $this->db->select('count(*) as allcount');
    $this->db->where('kategori_produk',$as);
    $this->db->from('produk');

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }

}