<?php
namespace Illuminate\Database\Console\Seeds;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Model\Admin',3)->create([
            'password' => bcrypt('123456')
        ]);
    }
}