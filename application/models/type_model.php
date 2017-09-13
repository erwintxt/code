<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Type_model extends CI_Model {

      public function getdatatype($offset ,$limit)
	{
            if ($offset == NULL)
                return $this->db->get('type')->result_array();
            else
                return $this->db->limit($offset, $limit)->get('type')->result_array();

	}
        public function getalldatatype()
	{
                return $this->db->get('type')->result_array();
	}

	public function inserttype($tablename,$data)
	{
            $this->db->query('alter table type auto_increment=1');
            $hasil = $this->db->insert($tablename,$data);
            return $hasil;
	}
	public function updatedatatype($tablename,$data,$id)
	{
            //echo $;
            $hasil = $this->db->update($tablename,$data,$id);
            return $hasil;
        }
	public function deletedatatype($tablename,$id)
	{
            //echo $;
            $hasil = $this->db->delete($tablename,$id);
            return $hasil;
        }
	public function datatypewhere($tablename,$data)
	{
            //$this->db->where(,$data);
            return $this->db->get_where($tablename,$data)->result();
            //$hasil = $this->db->insert($tablename,$data);
            //return $hasil;
	}

  public function datatypesum($tablename)
	{
            return $this->db->count_all($tablename);

	}

}
