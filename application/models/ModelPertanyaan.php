<?php

class ModelPertanyaan extends CI_Model
{
    public function get_data_cari($cari)
	{
		return $this->db->query("select * from qnaa where pertanyaan like '%".$cari."%' or jawaban like '%".$cari."%'");
	}
	public function get_data($table)
	{
		return $this->db->get($table);
	}
	
	public function get_where($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	
	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
	
	public function update_data($table,$data,$where)
	{
		$this->db->update($table,$data,$where);
	}
	
	public function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	public function ambil_id_pertanyaan($id)
	{
		$hasil = $this->db->where('id_qna', $id)->get('qnaa');
		if($hasil->num_rows() > 0) {
			return $hasil->result();
		} else { 
			return false;
		}
	}
}
?>	