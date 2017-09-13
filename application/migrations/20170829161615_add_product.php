<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_product extends CI_Migration {

        public function up()
        {
          $this->dbforge->add_field(array(
                  'id' => array(
                          'type' => 'INT',
                          'constraint' => 10,
                          'unsigned' => TRUE,
                          'auto_increment' => TRUE
                  ),
                  'product_name' => array(
                          'type' => 'VARCHAR',
                          'constraint' => '255',
                  ),
                  'supplier_name' => array(
                          'type' => 'VARCHAR',
                          'constraint' => '255',
                  ),
                  'price' => array(
                          'type' => 'DECIMAL',
                          'constraint' => '13,2',
                  ),
                  'id_type' => array(
                          'type' => 'INT',
                          'constraint' => '4',
                  ),
                  'created_at' => array(
                          'type' => 'TIMESTAMP',
                          'null' => TRUE,
                  ),
          ));
          $this->dbforge->add_key('id', TRUE);
          $this->dbforge->create_table('product');
        }

        public function down()
        {
                $this->dbforge->drop_table('product');
        }
}
