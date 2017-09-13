<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_type extends CI_Migration {

        public function up()
        {
          $this->dbforge->add_field(array(
                  'id' => array(
                          'type' => 'INT',
                          'constraint' => 10,
                          'unsigned' => TRUE,
                          'auto_increment' => TRUE
                  ),
                  'type_name' => array(
                          'type' => 'VARCHAR',
                          'constraint' => '255',
                  ),
                  'created_at' => array(
                          'type' => 'TIMESTAMP',
                          'null' => TRUE,
                  ),
          ));
          $this->dbforge->add_key('id', TRUE);
          $this->dbforge->create_table('type');
        }

        public function down()
        {
                $this->dbforge->drop_table('type');
        }
}
