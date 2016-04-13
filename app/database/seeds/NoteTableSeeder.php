<?php

use Illuminate\Database\Seeder;

use App\Note;

class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Note::class)->times(100)->create();
    }
}
