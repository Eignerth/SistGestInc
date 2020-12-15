<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{

    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        //Modulo Dashboard - Siempre deben tener acceso
        //Modulo Soporte
        Permission::create(['name'=>'Soporte']);
          //Tickets
          Permission::create(['name'=>'Soporte - Tickets']);
            //Tickets Generales
            Permission::create(['name'=>'Ver Tickets - Generales']);
            Permission::create(['name'=> 'Ver Detalles de Tickets']);
            Permission::create(['name'=>'Exportar Tickets']);
            Permission::create(['name'=>'Agregar Tickets - Generales']);
            //Mis Tickets
            Permission::create(['name'=>'Ver Mis Tickets']);
            Permission::create(['name'=>'Editar Mis Tickets']);
            Permission::create(['name'=>'Eliminar Mis Tickets']);
        
        //Modulo KB
        Permission::create(['name'=>'KB']);
        //Modulo Clientes
        Permission::create(['name'=>'Clientes']);
          //Contactos
          Permission::create(['name'=>'Ver Contactos']);
          Permission::create(['name'=>'Agregar Contactos']);
          Permission::create(['name'=>'Editar Contactos']);
          Permission::create(['name'=>'Eliminar Contactos']);
          //Soporte de Clientes
          Permission::create(['name'=>'Ver Soporte de Clientes']);
          Permission::create(['name'=>'Agregar Soporte de Clientes']);
          Permission::create(['name'=>'Editar Soporte de Clientes']);
          Permission::create(['name'=>'Eliminar Soporte de Clientes']);
        //Modulo Informes
        Permission::create(['name'=>'Informes']);
        //Modulo Administración
        Permission::create(['name'=>'Administración']);
          //Empresa
          Permission::create(['name'=>'Ver Empresa']);
          Permission::create(['name'=>'Editar Empresa']);

          //Area y Cargo
          Permission::create(['name'=>'Ver Área-Cargo']);
          //Area
          Permission::create(['name'=>'Agregar Área']);
          Permission::create(['name'=>'Editar Área']);
          Permission::create(['name'=>'Eliminar Área']);
          //Cargo
          Permission::create(['name'=>'Agregar Cargo']);
          Permission::create(['name'=>'Editar Cargo']);
          Permission::create(['name'=>'Eliminar Cargo']);
          //Roles y Permisos
          Permission::create(['name'=>'Ver Rol']);
          Permission::create(['name'=>'Agregar Rol']);
          Permission::create(['name'=>'Editar Rol']);
          Permission::create(['name'=>'Eliminar Rol']);
          //Personal
          Permission::create(['name'=>'Ver Personal']);
          Permission::create(['name'=>'Agregar Personal']);
          Permission::create(['name'=>'Editar Personal']);
          Permission::create(['name'=>'Eliminar Personal']);
          //Producto
          Permission::create(['name'=>'Ver Producto']);
          Permission::create(['name'=>'Agregar Producto']);
          Permission::create(['name'=>'Editar Producto']);
          Permission::create(['name'=>'Eliminar Producto']);
          //Usuario
          Permission::create(['name'=>'Ver Usuario']);
          Permission::create(['name'=>'Agregar Usuario']);
          Permission::create(['name'=>'Editar Usuario']);
        //Perfil
        //Permiso x defecto al modulo perfil
        
          //Datos Personales
          Permission::create(['name'=>'Ver Datos Personales']);
          Permission::create(['name'=>'Editar Datos Personales']);
          //Bitacora
          Permission::create(['name'=>'Ver Bitácora']);
          Permission::create(['name'=>'Agregar Bitácora']);
          Permission::create(['name'=>'Editar Bitácora']);
          Permission::create(['name'=>'Eliminar Bitácora']);
          //Cambiar Contraseña
          Permission::create(['name'=>'Ver Cambiar Contraseña']);
          Permission::create(['name'=>'Editar Cambiar Contraseña']);
        //Modulo Mantenimiento de Tablas
        Permission::create(['name'=>'Mantenimiento de Tablas']);
          //Documentos de Identidad
          Permission::create(['name'=>'Ver Docs Identidad']);
          Permission::create(['name'=>'Agregar Docs Identidad']);
          Permission::create(['name'=>'Editar Docs Identidad']);
          Permission::create(['name'=>'Eliminar Docs Identidad']);
          //Canales de Atención
          Permission::create(['name'=>'Ver Canales de Atención']);
          Permission::create(['name'=>'Agregar Canales de Atención']);
          Permission::create(['name'=>'Editar Canales de Atención']);
          Permission::create(['name'=>'Eliminar Canales de Atención']);
          //Clasificación de INCs
          Permission::create(['name'=>'Ver Clasif. Inc.']);
          Permission::create(['name'=>'Editar Clasif. Inc.']);
          Permission::create(['name'=>'Agregar Clasif. Inc.']);
          Permission::create(['name'=>'Eliminar Clasif. Inc.']);
          //Estado de Prioridad
          Permission::create(['name'=>'Ver Estado de Prioridad']);
          Permission::create(['name'=>'Agregar Estado de Prioridad']);
          Permission::create(['name'=>'Editar Estado de Prioridad']);
          Permission::create(['name'=>'Eliminar Estado de Prioridad']);
          //Control de Series
          Permission::create(['name'=>'Ver Control de Series']);
          Permission::create(['name'=>'Editar Control de Series']);
          Permission::create(['name'=>'Agregar Control de Series']);
          Permission::create(['name'=>'Eliminar Control de Series']);
          //Estados de Avance
          Permission::create(['name'=>'Ver Estado de Avance']);
          Permission::create(['name'=>'Editar Estado de Avance']);
          Permission::create(['name'=>'Agregar Estado de Avance']);
          Permission::create(['name'=>'Eliminar Estado de Avance']);

        $role = Role::create(['name'=>'Miauwaiilol17']);
        $role->givePermissionTo(Permission::all());
  }
}
