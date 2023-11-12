<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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

        $rolMedico->syncPermissions($permiGestor);
        $rolSecre->syncPermissions($permiLlamado);
    }
}
