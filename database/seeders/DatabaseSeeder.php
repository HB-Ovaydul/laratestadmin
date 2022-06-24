<?php

namespace Database\Seeders;

use App\Models\admin\studnt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        studnt::create([
            'name'            => 'Supar Admin',
            'email'           => 'admin@gmail.com',
            'cell'            => '01772813144',
            'username'        => 'admin',
            'department'      => 'dep-1',
            'gender'          => 'male',
            'courses'         => 'PHP',
        ]);
        studnt::create([
            'name'            => 'Ovaydul',
            'email'           => 'ovaydul@gmail.com',
            'cell'            => '01772813149',
            'username'        => 'Ovaydul',
            'department'      => 'dep-2',
            'gender'          => 'male',
            'courses'         => 'JAVA',
        ]);
        studnt::create([
            'name'            => 'Montaha',
            'email'           => 'montha@gmail.com',
            'cell'            => '01772813140',
            'username'        => 'Montha',
            'department'      => 'dep-3',
            'gender'          => 'female',
            'courses'         => 'PYTHON',
        ]);
        studnt::create([
            'name'            => 'Norin',
            'email'           => 'norin@gmail.com',
            'cell'            => '01772813122',
            'username'        => 'norin',
            'department'      => 'dep-4',
            'gender'          => 'female',
            'courses'         => 'PHP',
        ]);

    }
}
