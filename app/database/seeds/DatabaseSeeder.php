<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CategoryTableSeeder::class);
        // NoteTableSeeder::class se utiliza para incluir al namespace de la clase
        $this->call(NoteTableSeeder::class);

        Model::reguard();
    }
}
