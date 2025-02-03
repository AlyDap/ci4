<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        // Membuat tabel 'users'
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true, // Kolom id dengan auto increment
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true, // Kolom name boleh kosong
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true, // Kolom type boleh kosong
            ],
            'status' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'null' => true, // Kolom status boleh kosong
                'default' => 1, // Nilai default adalah 1 (misalnya 'active')
            ],
        ]);

        // Menambahkan primary key pada kolom 'id'
        $this->forge->addPrimaryKey('id');

        // Membuat tabel 'users'
        $this->forge->createTable('users');
    }

    public function down()
    {
        // Menghapus tabel 'users' jika rollback dilakukan
        $this->forge->dropTable('users');
    }
}
