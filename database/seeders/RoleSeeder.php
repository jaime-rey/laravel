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
        $role2 = Role::create(['name' => 'Blogger']);

        Permission::create(['name'=>'admin.home', 'description'=>'Ver el panel de control'])->syncRoles([$role1, $role2]);

        Permission::create(['name'=>'admin.users.index', 'description'=>'Ver lista de usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.users.edit', 'description'=>'Editar usuario'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.categories.index', 'description'=>'Ver lista de categorías'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.categories.create', 'description'=>'Crear categoría'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.categories.edit', 'description'=>'Editar categoría'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.categories.destroy', 'description'=>'Eliminar categoría'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.tags.index', 'description'=>'Ver lista de etiquetas'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.tags.create', 'description'=>'Crear etiqueta'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.tags.edit', 'description'=>'Modificar etiqueta'])->syncRoles([$role1]);
        Permission::create(['name'=>'admin.tags.destroy', 'description'=>'Eliminar etiqueta'])->syncRoles([$role1]);

        Permission::create(['name'=>'admin.posts.index', 'description'=>'Ver lista de posts'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.posts.create', 'description'=>'Crear post'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.posts.edit', 'description'=>'Modificar post'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'admin.posts.destroy', 'description'=>'Eliminar post'])->syncRoles([$role1, $role2]);
    }
}
