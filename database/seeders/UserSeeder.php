<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Assurez-vous d'importer la facade Hash
use App\Models\User; // Assurez-vous d'importer le modèle User

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // etudiant
            [
                'name' => 'nayrouz tarik',
                'username' => 'ntarik',
                'email' => 'ntarik@faculte.com',
                'password' => Hash::make('etudiant'),
                'role' => User::ROLE_ETUDIANT,
                'status' => 'active',
            ],

            // Prof
            [
                'name' => 'hajar fiqar',
                'username' => 'hfiqar',
                'email' => 'hfiqar@faculte.com',
                'password' => Hash::make('prof'),
                'role' => User::ROLE_PROFESSEUR,
                'status' => 'active',
            ],

            // delegue-Responsable de Filiere
            [
                'name' => 'omar taraki',
                'username' => 'otaraki',
                'email' => 'otaraki@faculte.com',
                'password' => Hash::make('delegue'),
                'role' => User::ROLE_RESPONSABLE_FILIERE,
                'status' => 'active',
            ],

            // Chef de Departement
            [
                'name' => 'jad tarik',
                'username' => 'jtarik',
                'email' => 'jtarik@faculte.com',
                'password' => Hash::make('chef'),
                'role' => User::ROLE_CHEF_DEPARTEMENT,
                'status' => 'active',
            ],

            // Responsable Service Pédagogique
            [
                'name' => 'anouar loukili',
                'username' => 'aloukili',
                'email' => 'aloukili@faculte.com',
                'password' => Hash::make('peda'),
                'role' => User::ROLE_RESPONSABLE_PEDAGOGIQUE,
                'status' => 'active',
            ],
        ]);
    }
}
