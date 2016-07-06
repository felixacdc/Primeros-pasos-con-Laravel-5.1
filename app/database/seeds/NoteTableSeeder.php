<?php

use Illuminate\Database\Seeder;

use App\Note;
use App\Category;

class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();

        // Cambiar make por create para crear los modelos, make retorna una coleccion de notas creado un arreglo
        $notes = factory(Note::class)->times(100)->make();

        foreach ($notes as $note) {
            // Selecciona una categoria aleatoriamente
            $category = $categories->random();
            // El metodo save permite guardar una nota asociandola a una categoria, este metodo save se puede utilizar devido a la relacion de categorias con notas (hasMany)
            // En eloquet cuando no utilizamos parentecis en las relaciones indicamos que queremos traer todos los datos asociados a la relacion, cuando se utilizan parentecis indicamos que queremos manipular la relacion en si
            $category->notes()->save($note);
            // Este metodo es equivalente a lo siguiente:
            /*
                $note->category_id = $category->id;
                $note->save()
            */

        }
    }
}
