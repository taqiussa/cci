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

        $kelompok1 = User::create([
            'name' => 'Kelompok 1',
            'username' => 'kelompok1',
            'password' => bcrypt('kelompok1')
        ]);
        $kelompok1->assignRole('Siswa');
        $kelompok2 = User::create([
            'name' => 'Kelompok 2',
            'username' => 'kelompok2',
            'password' => bcrypt('kelompok2')
        ]);
        $kelompok2->assignRole('Siswa');
        $kelompok3 = User::create([
            'name' => 'Kelompok 3',
            'username' => 'kelompok3',
            'password' => bcrypt('kelompok3')
        ]);
        $kelompok3->assignRole('Siswa');
        $kelompok4 = User::create([
            'name' => 'Kelompok 4',
            'username' => 'kelompok4',
            'password' => bcrypt('kelompok4')
        ]);
        $kelompok4->assignRole('Siswa');
        $kelompok5 = User::create([
            'name' => 'Kelompok 5',
            'username' => 'kelompok5',
            'password' => bcrypt('kelompok5')
        ]);
        $kelompok5->assignRole('Siswa');
        $kelompok6 = User::create([
            'name' => 'Kelompok 6',
            'username' => 'kelompok6',
            'password' => bcrypt('kelompok6')
        ]);
        $kelompok6->assignRole('Siswa');
        $kelompok7 = User::create([
            'name' => 'Kelompok 7',
            'username' => 'kelompok7',
            'password' => bcrypt('kelompok7')
        ]);
        $kelompok7->assignRole('Siswa');
        $kelompok8 = User::create([
            'name' => 'Kelompok 8',
            'username' => 'kelompok8',
            'password' => bcrypt('kelompok8')
        ]);
        $kelompok8->assignRole('Siswa');
        $kelompok9 = User::create([
            'name' => 'Kelompok 9',
            'username' => 'kelompok9',
            'password' => bcrypt('kelompok9')
        ]);
        $kelompok9->assignRole('Siswa');
        $kelompok10 = User::create([
            'name' => 'Kelompok 10',
            'username' => 'kelompok10',
            'password' => bcrypt('kelompok10')
        ]);
        $kelompok10->assignRole('Siswa');
        $kelompok11 = User::create([
            'name' => 'Kelompok 11',
            'username' => 'kelompok11',
            'password' => bcrypt('kelompok11')
        ]);
        $kelompok11->assignRole('Siswa');
        $kelompok12 = User::create([
            'name' => 'Kelompok 12',
            'username' => 'kelompok12',
            'password' => bcrypt('kelompok12')
        ]);
        $kelompok12->assignRole('Siswa');
        $kelompok13 = User::create([
            'name' => 'Kelompok 13',
            'username' => 'kelompok13',
            'password' => bcrypt('kelompok13')
        ]);
        $kelompok13->assignRole('Siswa');
        $kelompok14 = User::create([
            'name' => 'Kelompok 14',
            'username' => 'kelompok14',
            'password' => bcrypt('kelompok14')
        ]);
        $kelompok14->assignRole('Siswa');
        $kelompok15 = User::create([
            'name' => 'Kelompok 15',
            'username' => 'kelompok15',
            'password' => bcrypt('kelompok15')
        ]);
        $kelompok15->assignRole('Siswa');
        $kelompok16 = User::create([
            'name' => 'Kelompok 16',
            'username' => 'kelompok16',
            'password' => bcrypt('kelompok16')
        ]);
        $kelompok16->assignRole('Siswa');
        $kelompok17 = User::create([
            'name' => 'Kelompok 17',
            'username' => 'kelompok17',
            'password' => bcrypt('kelompok17')
        ]);
        $kelompok17->assignRole('Siswa');
        $kelompok18 = User::create([
            'name' => 'Kelompok 18',
            'username' => 'kelompok18',
            'password' => bcrypt('kelompok18')
        ]);
        $kelompok18->assignRole('Siswa');
        $kelompok19 = User::create([
            'name' => 'Kelompok 19',
            'username' => 'kelompok19',
            'password' => bcrypt('kelompok19')
        ]);
        $kelompok19->assignRole('Siswa');
        $kelompok20 = User::create([
            'name' => 'Kelompok 20',
            'username' => 'kelompok20',
            'password' => bcrypt('kelompok20')
        ]);
        $kelompok20->assignRole('Siswa');
        $kelompok21 = User::create([
            'name' => 'Kelompok 21',
            'username' => 'kelompok21',
            'password' => bcrypt('kelompok21')
        ]);
        $kelompok21->assignRole('Siswa');
        $kelompok22 = User::create([
            'name' => 'Kelompok 22',
            'username' => 'kelompok22',
            'password' => bcrypt('kelompok22')
        ]);
        $kelompok22->assignRole('Siswa');
    }
}
