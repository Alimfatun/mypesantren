<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class mdata extends CI_Model
{

  //query insert data k
  function insert_all($table,$data) {
    $this->db->insert($table,$data);
  }

  // query update data k
	function update_all($where,$data,$table) {
		$this->db->where($where);
		$this->db->update($table,$data);
	}

  //query tampil all data k
  function tampil_data($table){
    $this->db->select('*');
    $this->db->from($table);
    $query = $this->db->get();
    return $query->result();
  }

  //query nomor automatis k
  function getno($table,$id) {
    $this->db->select('*');
    $this->db->from($table);
    $this->db->order_by($id, 'DESC');
    $this->db->limit(1);
    $query = $this->db->get();
    if($query->num_rows()==1)
    {
      $row = $query->row();
      return $row->$id;
    }
    else {
      return $kode=0;
    }
  }

  // chech or ambil all data k
	function check_all($table,$where,$limit) {
  $query = $this->db->get_where($table,$where,$limit);
		if($query->num_rows()==1)
		{
			return $query->result();
		}
		else {
			return false;
		}
	}


  //chek query direct result k
  function getuno($table,$data,$id) {
    $this->db->select('*');
    $this->db->from($table);
    $this->db->where($data);
    $this->db->limit(1);
    $query = $this->db->get();
    if($query->num_rows()==1)
    {
      $row = $query->row();
      return $row->$id;
    }
    else {
      return $kode=1;
    }
  }

 //join simpanan & angsuran
 function getall() {
   $this->db->select('*');
   $this->db->from('tbrpt');
   $this->db->join('tbdata','tbdata.nikd=tbrpt.nikr');
   $this->db->join('tbfisik','tbfisik.nikf=tbrpt.nikr');
   $this->db->join('tbkeluarga','tbkeluarga.nikk=tbrpt.nikr');
   $this->db->join('tbpendidikan','tbpendidikan.nikp=tbrpt.nikr');
   $this->db->join('tbpidana','tbpidana.nikpi=tbrpt.nikr');
   //$this->db->where('tbsimpanan.no_anggota',$data);
   $query = $this->db->get();
   return $query->result();
 }

 function getallp($d) {
   $this->db->select('*');
   $this->db->from('tbrpt');
   $this->db->join('tbdata','tbdata.nikd=tbrpt.nikr');
   $this->db->join('tbfisik','tbfisik.nikf=tbrpt.nikr');
   $this->db->join('tbkeluarga','tbkeluarga.nikk=tbrpt.nikr');
   $this->db->join('tbpendidikan','tbpendidikan.nikp=tbrpt.nikr');
   $this->db->join('tbpidana','tbpidana.nikpi=tbrpt.nikr');
   $this->db->where('tbrpt.id',$d);
   $query = $this->db->get();
   return $query->result();
 }


}

?>
