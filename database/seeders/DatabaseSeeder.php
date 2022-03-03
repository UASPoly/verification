<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\College;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@cert.com',
            'password' => Hash::make('admin')
        ]);

        $colleges = ['name'=>'Sciences'];
        $departments = ['Computer Science', 'Lab Science', 'Mathematics', 'Statistics'];
        $college = College::create($colleges);
        
        foreach ($departments as $department) {
            $dept = $college->departments()->create(['name'=>$department]);
            switch ($dept->id) {
                case '1':
                    $programmes = ['NDCS', 'HNDCS'];
                    break;
                case '2':
                    $programmes = ['NDLS', 'HNDLS'];
                    break;
                case '3':
                    $programmes = ['NDMT', 'HNDMT'];
                    break;
                default:
                    $programmes = ['NDST', 'HNDST'];
                    break;
            }

            foreach ($programmes as $programme) {
                $registeredProgramme = $dept->programmes()->create(['name'=>$programme]);
                for($i=1; $i <= 20; $i++){
                    $registeredProgramme->students()->create([
                        'name'=>'name'.' '.$i,'date_of_birth'=>'1990/12/12']);
                }
                
            }
        }
    }
}
