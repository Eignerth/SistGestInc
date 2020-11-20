<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    { 
       $this->call([
            PermissionSeeder::class,
        ]);
        \App\Models\Company::factory(1)->create();
        $tipoidentidad1 = array('abbreviation'=>'DNI','description'=>'Documento Nacional de Identidad','ndigits'=>8);
        $tipoidentidad2 = array('abbreviation'=>'RUC','description'=>'Registro Único de Contribuyentes','ndigits'=>11);
        \App\Models\Kindidentification::create($tipoidentidad1);
        \App\Models\Kindidentification::create($tipoidentidad2);
        
        $personal = array('name'=>'Miauwaiilol17','idkindident'=>1,'kindident'=>'12345678','ownemail'=>'miauwaiilol17@gmail.com');
        \App\Models\Personal::create($personal);
        
        $user = array('name'=>'Miauwaiilol17','password'=>Hash::make('@SistGesInc~'),'lastactivity'=>Carbon::now(),'idpersonals'=>1,'flgstatus'=>1);
        \App\Models\User::create($user);     
        $user->assignRole('Miauwaiilol17');
    }
}
