<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {

      public function getdataproduct($offset ,$limit)
	{
            if ($offset == NULL)
                return $this->db->select("product.id AS 'id_pd',product_name,supplier_name,price,type_name")->join('type', 'type.id = product.id_type')->get('product')->result_array();
            else
                return $this->db->select("product.id AS 'id_pd',product_name,supplier_name,price,type_name")->join('type', 'type.id = product.id_type')->limit($offset, $limit)->get('product')->result_array();

	}
        public function getalldataproduct()
	{
                return $this->db->get('product')->result_array();
	}

	public function insertproduct($tablename,$data)
	{
            $this->db->query('alter table product auto_increment=1');
            $hasil = $this->db->insert($tablename,$data);
            return $hasil;
	}
	public function updatedataproduct($tablename,$data,$id)
	{
            //echo $;
            $hasil = $this->db->update($tablename,$data,$id);
            return $hasil;
        }
	public function deletedataproduct($tablename,$id)
	{
            //echo $;
            $hasil = $this->db->delete($tablename,$id);
            return $hasil;
        }
	public function dataproductwhere($tablename,$data)
	{
            //$this->db->where(,$data);
            return $this->db->get_where($tablename,$data)->result();
            //$hasil = $this->db->insert($tablename,$data);
            //return $hasil;
	}

  public function dataproductsum($tablename)
	{
            return $this->db->count_all($tablename);

	}

}
