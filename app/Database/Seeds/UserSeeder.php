<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
  public function run()
  {

    // 1 data

    // $data = [
    //   'name_user' => 'admin',
    //   'email' => 'admin@gmail.com',
    //   'password_user' => password_hash('1234qwer', PASSWORD_BCRYPT)
    // ];

    // $this->db->table('users')->insert($data);
    $data = [
      [
        'name_user' => 'admin1',
        'email' => 'admin1@gmail.com',
        'password_user' => password_hash('1234qwer', PASSWORD_BCRYPT)
      ],
      [

        'name_user' => 'admin2',
        'email' => 'admin2@gmail.com',
        'password_user' => password_hash('1234qwer', PASSWORD_BCRYPT)
      ]

    ];
    $this->db->table('users')->insertBatch($data);
  }
}
