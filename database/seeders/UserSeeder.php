<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UsuarioUnis;
use App\Actions\Fortify\CreateNewUser;
use App\Models\GrupoDocumentos;

class UserSeeder extends Seeder
{
    private $objUsuario;
    private $objGrupoDocumento;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Admin*/
        tap(User::create([
            'name' => 'Super Admin',
            'title' => 'Admin',
            'email' => 'admin@elementardev.com.br',
            'password' => bcrypt('admin'),
        ]), function (User $user) {
            (new CreateNewUser())->createTeam($user);
        });

        tap(User::create([
            'name' => 'Super Desenvolvedor',
            'title' => 'Desenvolvedor',
            'email' => 'developer@elementardev.com.br',
            'password' => bcrypt('developer'),
        ]), function (User $user) {
            (new CreateNewUser())->createTeam($user);
        });
    }
}
