<?php

namespace Database\Seeders\rolPermission;

use App\Models\Persona;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // permisos
        $permissions = [
            // permisos del sistema 
            // roles
            'list-role',
            'create-role',
            'edit-role',
            'delete-role',
            // usuarios
            'list-user', // mostrar tablero de usuarios
            'create-user', // alta de usuario
            'edit-user', // modificacion de usuario
            'delete-user', // baja de usuario
            'credencial-digital-user',
            'gafete-user', // expedicion de gafete
            'afiliar-user',
            'reset-user',
            'reenviar-aceptacion',
            // recibos 
            'list-recibos',
            'reenviar-recibos',
            'cancel-recibos',
            // estadistico
            'list-estadistica',
            //congreso presencial
            'buscador-user',
            'cobrar-congreso',
            'conceptos-congreso',
            // becas.admin
            'list-becador',
            'create-becador',
            'edit-becador',
            'delete-becador',
            // becas.becador
            'list-becas',
            'assign-becas',
            'delete-becas',
        ];

        // iteracion para agregar los datos a la tabla de permisos
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // semillas roles
        //rol que tiene todos los permisos
        Role::create(['name' => 'Super Admin']);

        //rol que tiene todos los permisos a exepcion de rol
        // $admin = Role::create(['name' => 'Admin']);
        $adminOpera = Role::create(['name' => 'Admin Opera']);
        // $socioFundador = Role::create(['name' => 'Socio Fundador']);
        $mesaDirectiva = Role::create(['name' => 'Mesa Directiva']);
        $socio = Role::create(['name' => 'Socio']);
        $noSocio = Role::create(['name' => 'No Socio']);
        $adminContador = Role::create(['name' => 'Admin Contador']);
        // $supervisorUsuario = Role::create(['name' => 'Supervisor Usuarios']);
        $caja = Role::create(['name' => 'Caja']);
        $registro = Role::create(['name' => 'Registro']);
        $preregistro = Role::create(['name' => 'Preregistro']);
        $adminBecas = Role::create(['name' => 'Admin Becas']);
        $becador = Role::create(['name' => 'Becador']);

        $adminOpera->givePermissionTo([
            'list-user',
            'create-user',
            'edit-user',
            'delete-user',
            'credencial-digital-user',
            'gafete-user',
            'afiliar-user',
            'reset-user',
        ]);

        $socio->givePermissionTo([
            'credencial-digital-user',
            'gafete-user',
        ]);

        $noSocio->givePermissionTo([
            'credencial-digital-user',
            'gafete-user',
        ]);

        $adminContador->givePermissionTo([
            'list-user',
            'afiliar-user',
            'list-recibos',
            'reenviar-recibos',
            'cancel-recibos',
        ]);

        $caja->givePermissionTo([
            'buscador-user',
            'cobrar-congreso',
            'conceptos-congreso',
            'create-user',
            'edit-user',
        ]);

        $registro->givePermissionTo([
            'buscador-user',
            'gafete-user',
        ]);

        $preregistro->givePermissionTo([
            'buscador-user',
            'create-user',
            'edit-user',
            'conceptos-congreso'
        ]);

        $adminBecas->givePermissionTo([
            'list-becador',
            'create-becador',
            'edit-becador',
            'delete-becador',
        ]);

        $becador->givePermissionTo([
            'list-becas',
            'assign-becas',
            'delete-becas',
        ]);

        // semillas de cuentas
        $superAdmin = User::create([
            'name' => 'Super 1',
            'email' => 'super@mail.com',
            'password' => Hash::make('Opera123'),
            'persona_id' => null
        ]);
        $superAdmin->assignRole('Super Admin');

        $superAdmin = User::create([
            'name' => 'Super 2',
            'email' => 'developerjoseamadoferrer@hotmail.com',
            'password' => Hash::make('Opera123'),
            'persona_id' => null
        ]);
        $superAdmin->assignRole('Super Admin');

        $persona = Persona::create([
            'nombre' => 'Jose Amado',
            'paterno' => 'Ferrer',
            'materno' => 'Varela',
            'telefono' => '5515120398',
            'fecha_nac' => '2001-06-08',
            'afiliado' => 1,
            'cat_prefijo_id' => 1,
            'cat_genero_id' => 1,
            'cat_pais_id' => 1,
            'cat_categoria_id' => 1,
            'cat_estados_id' => 2,
            'estatus' => 1,
        ]);

        $user = User::create([
            'name' => 'Jose',
            'email' => 'itsesistemasdigitales@gmail.com',
            'password' => Hash::make('Opera123'),
            'persona_id' => $persona->id,
        ]);

        $user->assignRole('No socio');

        $persona = Persona::create([
            'nombre' => 'Jose Alberto',
            'paterno' => 'Velazquez',
            'materno' => 'Nava',
            'telefono' => '5522078654',
            'fecha_nac' => '2001-04-16',
            'afiliado' => 1,
            'cat_prefijo_id' => 1,
            'cat_genero_id' => 1,
            'cat_pais_id' => 1,
            'cat_categoria_id' => 1,
            'cat_estados_id' => 2,
            'estatus' => 1,
        ]);

        $user = User::create([
            'name' => 'Joss',
            'email' => 'j.velazquez@aiot.enterprises',
            'password' => Hash::make('Opera123'),
            'persona_id' => $persona->id,
        ]);

        $user->assignRole('No Socio');
    }
}
