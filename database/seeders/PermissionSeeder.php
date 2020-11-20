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
        //Modulo Dashboard
        Permission::create(['name'=>'Dashboard']);
        //Modulo Tickets
        Permission::create(['name'=>'Tickets']);
        //Modulo Actividades
        Permission::create(['name'=>'Actividades']);
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
        Permission::create(['name'=>'Perfil']);
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

        $role = Role::create(['name'=>'Miauwaiilol17']);
        $role->givePermissionTo(Permission::all());
  }
}
