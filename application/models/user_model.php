<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

      public function getdatauser($offset ,$limit)
	{
            if ($offset == NULL)
                return $this->db->get('user')->result_array();
            else
                return $this->db->limit($offset, $limit)->get('user')->result_array();

	}
        public function getalldatauser()
	{
                return $this->db->get('user')->result_array();
	}

	public function insertuser($tablename,$data)
	{
            $this->db->query('alter table user auto_increment=1');
            $hasil = $this->db->insert($tablename,$data);
            return $hasil;
	}
	public function updatedatauser($tablename,$data,$id)
	{
            //echo $;
            $hasil = $this->db->update($tablename,$data,$id);
            return $hasil;
        }
	public function deletedatauser($tablename,$id)
	{
            //echo $;
            $hasil = $this->db->delete($tablename,$id);
            return $hasil;
        }
	public function datauserwhere($tablename,$data)
	{
            //$this->db->where(,$data);
            return $this->db->get_where($tablename,$data)->result();
            //$hasil = $this->db->insert($tablename,$data);
            //return $hasil;
	}

  public function datausersum($tablename)
	{
            return $this->db->count_all($tablename);

	}

}
