<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        Permission::create([
            'name' => 'admin.index',
            'description' => 'Ver dashboard'
        ])->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'users.index',
            'description' => 'Ver listado de usuarios'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'users.edit',
            'description' => 'Asignar un rol'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'users.destroy',
            'description' => 'Eliminar usuarios'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'categories.index',
            'description' => 'Ver listado de categorías'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'categories.create',
            'description' => 'Crear categorías'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'categories.edit',
            'description' => 'Editar categorías'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'categories.destroy',
            'description' => 'Eliminar categorías'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'tags.index',
            'description' => 'Ver listado de etiquetas'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'tags.create',
            'description' => 'Crear etiquetas'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'tags.edit',
            'description' => 'Editar etiquetas'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'tags.destroy',
            'description' => 'Eliminar etiquetas'
        ])->syncRoles([$role1]);

        Permission::create([
            'name' => 'posts.index',
            'description' => 'Ver listado de posts'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'posts.create',
            'description' => 'Crear nuevo post'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'posts.edit',
            'description' => 'Editar post'
        ])->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'posts.destroy',
            'description' => 'Eliminar post'
        ])->syncRoles([$role1, $role2]);



        Permission::create([
            'name' => 'roles.index',
            'description' => 'Ver listado de roles'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'roles.create',
            'description' => 'Crear roles'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'roles.edit',
            'description' => 'Editar roles'
        ])->syncRoles([$role1]);
        Permission::create([
            'name' => 'roles.destroy',
            'description' => 'Eliminar roles'
        ])->syncRoles([$role1]);
    }
}
