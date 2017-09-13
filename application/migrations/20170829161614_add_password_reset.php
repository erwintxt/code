<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_password_reset extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => 255,
                        ),
                        'token' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                        ),
                        'created_at' => array(
                                'type' => 'TIMESTAMP',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->create_table('pasword_reset');
        }

        public function down()
        {
                $this->dbforge->drop_table('pasword_reset');
        }
}
