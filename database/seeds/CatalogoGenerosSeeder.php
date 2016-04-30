<?php

use Illuminate\Database\Seeder;
use App\Models\Catalogo\CatalogoGeneros;

class CatalogoGenerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Insertando - catalalogo generos');
        CatalogoGeneros::truncate();
        CatalogoGeneros::create(['titulo'=>'Masculino','clave'=>'male']);
        CatalogoGeneros::create(['titulo'=>'Femenino','clave'=>'female']);
    }
}
