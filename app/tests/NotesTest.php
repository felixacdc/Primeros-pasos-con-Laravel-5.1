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
        # Indicar el flujo de los paso de la accion para crear una NoRewindIterator
        # Indicamos que visitaremos la url notes
        $this->visit('notes')
        # Indicamos que aremos click en un boton llamado Add a note
            ->click('Add a note')
        # Indicamos que al dar click en el boton nos llevara a notes/create
            ->seePageIs('note/create')
        # Indica que dentro de la pagina abra un texto "Create a note"
            ->see('Create a note')
        # Indica que escribiremos mi primera nota en un campo llamado note
            ->type('A new note', 'note')
        # Indica que presionaremos un boton Create note
            ->press('Create note')
        # Indica que iremos a la url notes
            ->seePageIs('notes')
        # Indica que veremos My first note
            ->see('A new note')
        # Indica que se registrara la nota en la DB
            ->seeInDatabase('notes', [
                'note' => 'A new note'
            ]);
    }
}
