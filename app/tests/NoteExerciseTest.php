<?php

use App\Note;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NoteExerciseTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_notes_summary_and_notes_details()
    {

        $text = "Begin of the note. Sint non commodi amet voluptatem doloremque ratione. Odio autem explicabo ut vero autem totam. Nostrum ducimus ut aut odio ab beatae et. Autem commodi consectetur voluptas quo deserunt et.";

        $text .= "End of the note";

        // La prueba desplegara un error si no se define en la vista si la nota tiene una categoria o no para esto realizamos una condicion
        $note = Note::create(['note' => $text]);

        $this->visit('notes')
                ->see('Begin of the note')
                // Verifica que en la vista los elementos con la clase label tengan el texto It does not have category
                ->seeInElement('.label', 'It does not have category')
                ->dontsee('End of the note')
                ->seeLink('View note')
                ->click('View note')
                ->see($text);

    }
}
