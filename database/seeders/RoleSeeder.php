<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Tesorero']);
        $role3 = Role::create(['name' => 'Secretario']);
        $role4 = Role::create(['name' => 'Fiscal']);

        Permission::create(['name' => 'admin.home',
                            'description' => 'ver dashboard'])->syncRoles([$role1, $role2, $role3,$role4]);

        Permission::create(['name' => 'admin.users.index',
                            'description' => 'Ver listado de usuarios'])->syncRoles([$role1, $role4]);
        Permission::create(['name' => 'admin.users.edit',
                            'description' => 'Asignar roles'])->syncRoles([$role1]);
        // Permission::create(['name' => 'admin.users.update',
        //                     'description' => ''])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.roles.index',
                            'description' => 'Ver listado de roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.create',
                            'description' => 'Crear roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.edit',
                            'description' => 'Editar roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.destroy',
                            'description' => 'Eliminar role'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.miembros.index',
                            'description' => 'Ver listado de miembros'])->syncRoles([$role1, $role3, $role4]);
        Permission::create(['name' => 'admin.miembros.create',
                            'description' => 'Crear miembro'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'admin.miembros.edit',
                            'description' => 'Editar miembro'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'admin.miembros.destroy',
                            'description' => 'Eliminar miembro'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.diezmos.index',
                            'description' => 'Ver listado de diezmos'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name' => 'admin.diezmos.create',
                            'description' => 'Crear diezmo'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.diezmos.edit',
                            'description' => 'Editar diezmo'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.diezmos.destroy',
                            'description' => 'Eliminar diezmo'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.ofrendas.index',
                            'description' => 'Ver listado de ofrendas'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name' => 'admin.ofrendas.create',
                            'description' => 'crear ofrenda'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.ofrendas.edit',
                            'description' => 'Editar ofrenda'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.ofrendas.destroy',
                            'description' => 'Eliminar ofrenda'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.gastos.index',
                            'description' => 'Ver listado de gastos'])->syncRoles([$role1, $role2, $role4]);
        Permission::create(['name' => 'admin.gastos.create',
                            'description' => 'Crear gasto'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.gastos.edit',
                            'description' => 'Editar gasto'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.gastos.destroy',
                            'description' => 'Eliminar gasto'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.propositos.index',
                            'description' => 'Ver listado de Propositos de gasto'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.propositos.create',
                            'description' => 'Crear proposito de gasto'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.propositos.edit',
                            'description' => 'Editar proposito de gasto'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.propositos.destroy',
                            'description' => 'Eliminar proposito de gasto'])->syncRoles([$role1]);

        
    }
}
