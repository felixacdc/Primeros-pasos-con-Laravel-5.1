<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NotesTest extends TestCase
{
    // desactivar middleware;
    use WithoutMiddleware;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_notes_list()
    {
        // Partes de una prueba

        # Having
        Note::create(['note' => 'My first note']);
        Note::create(['note' => 'second note']);

        # When

        $this->visit('notes')
            # Then
            ->see('My first note')
            ->see('Second note');
    }

    public function test_create_note()
    {
        // $this->post('notes') es equivalente a Route::post('notes')
        // When
        $this->post('notes')
            // Then
            ->see('Creating a note');
    }
}
