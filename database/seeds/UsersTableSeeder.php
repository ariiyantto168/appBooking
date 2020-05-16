<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          [
            'name' => 'Admin',
            'email' => 'admin@marketplace.com',
            'role' => '2',
            'role_type' => 'A',
            'password' => bcrypt('rootroot'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
          [
            'name' => 'Penyewa',
            'email' => 'penyewa@gmail.com',
            'role' => '1',
            'role_type' => 'P',
            'password' => bcrypt('123456'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ],
          [
            'name' => 'Customer',
            'email' => 'customer@gmail.com',
            'role' => '2',
            'role_type' => 'C',
            'password' => bcrypt('123456'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
          ]
      ]);
  }
}
// sudo ~/Downloads/genymotion-3.1.0-linux_x64.bin
// chmod +x ~/Downloads/genymotion-3.1.0-linux_x64.bin
