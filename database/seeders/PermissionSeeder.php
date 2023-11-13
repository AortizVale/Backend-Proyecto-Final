<?php

namespace Database\Seeders;

use App\Models\users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rolAdmin = Role::create(['name' => 'administrador']);
        $rolMedico = Role::create(['name' => 'medico']);
        $rolSecre = Role::create(['name' => 'secretaria']);
        
        $permiIngreso = Permission::create(["name" => "ingreso"]);
        $permiProgramacion = Permission::create(["name" => "programacion"]);
        $permiConfirmacion = Permission::create(["name" => "confirmacion"]);
        $permiGestor = Permission::create(["name" => "gestor"]);
        $permiLlamado = Permission::create(["name" => "llamada"]);
        $permiRegistro = Permission::create(["name" => "registrar"]);
        $permiConsultorio = Permission::create(["name" => "consultorio"]);

        $rolMedico->syncPermissions([$permiGestor, $permiLlamado]);

        $rolSecre->syncPermissions([$permiLlamado, $permiIngreso, $permiProgramacion, $permiConfirmacion]);


        $usuario = Users::create([
            'nombres' => 'SuperUser',
            'apellidos' => 'Admin',
            'email' => 'super@user.com',
            'num_doc' => 'N/A',
            'tipo_doc' => 'N/A',
            'password' => Hash::make('SuperUser')
        ]);

        $usuario->assignRole($rolAdmin);
        $rolAdmin->syncPermissions([$permiLlamado, $permiGestor, $permiRegistro, $permiConsultorio, $permiIngreso, $permiProgramacion, $permiConfirmacion]);
    }
}
