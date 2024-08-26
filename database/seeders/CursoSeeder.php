<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso = new Curso();

        $curso->name = 'Angular';
        $curso->description = 'El mejor framework del MUNDO';
        $curso->categoria = 'Desarrollo web';

        $curso->save();

        $curso2 = new Curso();

        $curso2->name = 'laravel';
        $curso2->description = 'El mejor framework de PHP';
        $curso2->categoria = 'Desarrollo web';

        $curso2->save();

        $curso3 = new Curso();

        $curso3->name = 'ReactJS';
        $curso3->description = 'El segundo mejor framework del MUNDO';
        $curso3->categoria = 'Desarrollo web';

        $curso3->save();
    }
}
