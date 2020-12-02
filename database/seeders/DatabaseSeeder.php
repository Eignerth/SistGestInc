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
        \App\Models\Company::create([
            'description'=>'BITS & SYSTEMS SOLUTIONS S.A.C.',
            'ruc'=>'20549479929',
            'address'=>'MZA. I LOTE. 33 URB. SANTA ROSA LIMA - LIMA - LOS OLIVOS',
            'web'=>'www.bss.com.pe',
            'principal'=>'PONTE SOMOZA JESUS MARTIN',
            'telf'=>'123456789',
            'email'=>'mponte@bss.com.pe'
        ]);
        \App\Models\Area::create([
            'description'=>'Área de Soporte',
            'abbreviation'=>'SOP',
        ]);
        \App\Models\Channel::create(['description'=>'Whatsapp']);
        \App\Models\Channel::create(['description'=>'Llamada']);
        \App\Models\Channel::create(['description'=>'Correo Electrónico']);

        $tipoidentidad1 = array('abbreviation'=>'DNI','description'=>'Documento Nacional de Identidad','ndigits'=>8);
        $tipoidentidad2 = array('abbreviation'=>'RUC','description'=>'Registro Único de Contribuyentes','ndigits'=>11);
        \App\Models\Kindidentification::create($tipoidentidad1);
        \App\Models\Kindidentification::create($tipoidentidad2);
        
        $personal = array('name'=>'Miauwaiilol17','idkindident'=>1,'kindident'=>'12345678','ownemail'=>'miauwaiilol17@gmail.com');
        \App\Models\Personal::create($personal);
        
        $user = array('name'=>'Miauwaiilol17','password'=>Hash::make('@SistGesInc~'),'lastactivity'=>Carbon::now(),'idpersonals'=>1,'flgstatus'=>1);
        $newuser = \App\Models\User::create($user);     
        $newuser->assignRole('Miauwaiilol17');

        \App\Models\Ticketsm::create([
            'idareas'=>1,
            'serie'=>'TKC',
            'flgstatus'=>1            
        ]);

    }
}
