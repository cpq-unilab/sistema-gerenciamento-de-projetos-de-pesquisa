<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'name' => 'Renato Paiva',
                'email' => 'renatopaiva@unilab.edu.br',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            ],
            [
                'name' => 'Ivanyele Costa',
                'email' => 'ivanyele@unilab.edu.br',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            ],
            [
                'name' => 'Allberson Dantas',
                'email' => 'allberson@unilab.edu.br',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            ],
            [
                'name' => 'Diego Castro',
                'email' => 'diegodsccastro@unilab.edu.br',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            ],
            [
                'name' => 'Lucas Maciel',
                'email' => 'lucasmaciel6690@gmail.com',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            ],
        ];

        foreach ($admins as $admin) {
            Admin::create($admin);
        }
    }
}
