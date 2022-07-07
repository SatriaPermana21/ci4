<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
		$model->insert([
		'username' => 'Satria Permana',
		'useremail' => 'satria21@gmail.com',
		'userpassword' => password_hash('satria123', PASSWORD_DEFAULT),
		]);
	}
}