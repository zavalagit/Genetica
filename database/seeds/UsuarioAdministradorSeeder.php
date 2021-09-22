<?php

use Illuminate\Database\Seeder;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'usuario' => 'Genetica',
            'nombre' => 'Administrador',
            'password' => bcrypt('123456')
        ]);

        DB::table('rol_usuario')->insert([
            'rol_id' => 13,
            'usuario_id' => 1,
            'estado' => 1
        ]);
    }
}
