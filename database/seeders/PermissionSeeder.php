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
        
        $permiGestor = Permission::create(["name" => "gestor"]);
        $permiLlamado = Permission::create(["name" => "llamada"]);

        $rolMedico->syncPermissions([$permiGestor]);
        $rolSecre->syncPermissions([$permiLlamado]);


        $usuario = Users::create([
            'nombres' => 'SuperUser',
            'apellidos' => 'Admin',
            'email' => 'super@user.com',
            'num_doc' => 'N/A',
            'tipo_doc' => 'N/A',
            'password' => Hash::make('SuperUser')
        ]);

        $usuario->assignRole($rolAdmin);
        $rolAdmin->syncPermissions([$permiLlamado, $permiGestor]);
    }
}
