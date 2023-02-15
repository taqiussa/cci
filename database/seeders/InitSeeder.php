<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class InitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Admin',
            'Siswa'
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role
            ]);
        }

        $ppl = User::create([
            'name' => 'Panitia CCI',
            'username' => 'ppl',
            'password' => bcrypt('smpalfappl'),
        ]);

        $ppl->assignRole('Admin');

        
    }
}
