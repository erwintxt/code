<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_user extends CI_Migration {

        public function up()
        {
          $this->dbforge->add_field(array(
                  'id' => array(
                          'type' => 'INT',
                          'constraint' => 5,
                          'unsigned' => TRUE,
                          'auto_increment' => TRUE
                  ),
                  'name' => array(
                          'type' => 'VARCHAR',
                          'constraint' => '100',
                          'null' => TRUE,
                  ),
                  'address' => array(
                          'type' => 'VARCHAR',
                          'constraint' => '200',
                          'null' => TRUE,
                  ),
                  'telp' => array(
                          'type' => 'VARCHAR',
                          'constraint' => '50',
                          'null' => TRUE,
                  ),
                  'email' => array(
                          'type' => 'VARCHAR',
                          'constraint' => '50',
                          'null' => TRUE,
                  ),
                  'password' => array(
                          'type' => 'VARCHAR',
                          'constraint' => '50',
                          'null' => TRUE,
                  ),
                  'created_at' => array(
                          'type' => 'TIMESTAMP',
                          'null' => TRUE,
                  ),
          ));
          $this->dbforge->add_key('id', TRUE);
          $this->dbforge->create_table('user');
        }

        public function down()
        {
                $this->dbforge->drop_table('user');
        }
}
