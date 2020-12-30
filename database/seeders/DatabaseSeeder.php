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
        
        \App\Models\Classification::create(['abbreviation'=>'INC','description'=>'Incidencia']);
        \App\Models\Classification::create(['abbreviation'=>'CON','description'=>'Consulta']);
        \App\Models\Classification::create(['abbreviation'=>'CAP','description'=>'Capacitación']);
        
        \App\Models\Prioritie::create(['description'=>'Sin Definir','level'=>1,'color'=>'#9c9c9c']);
        \App\Models\Prioritie::create(['description'=>'Leve','level'=>2,'color'=>'#36b044']);
        \App\Models\Prioritie::create(['description'=>'Medio','level'=>3,'color'=>'#e3dc1c']);
        \App\Models\Prioritie::create(['description'=>'Alta','level'=>4,'color'=>'#de7a1b']);
        \App\Models\Prioritie::create(['description'=>'Crítico','level'=>5,'color'=>'#db0000']);
        
        \App\Models\Tkstatus::create(['description'=>'Registrado','color'=>'#347aea']);
        \App\Models\Tkstatus::create(['description'=>'Escalado','color'=>'#e9f53d']);
        \App\Models\Tkstatus::create(['description'=>'Terminado','color'=>'#208f0a']);

        \App\Models\Product::create(['abbreviation'=>'INT','description'=>'BSS_INTEGRAL']);
        \App\Models\Product::create(['abbreviation'=>'ERP','description'=>'BSS_ERP']);
        \App\Models\Product::create(['abbreviation'=>'MIG','description'=>'BSS_MIGRADOR']);
        

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
