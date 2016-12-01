<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('CategoryTableSeeder');

    }
}

class CategoryTableSeeder extends Seeder {
	public function run(){

		DB::table('categories')->insert(['name' => 'Arte']);
		DB::table('categories')->insert(['name' => 'Autoayuda y Espiritualidad']);
		DB::table('categories')->insert(['name' => 'Ciencias Humanas']);
		DB::table('categories')->insert(['name' => 'Ciencias Políticas y Sociales']);
		DB::table('categories')->insert(['name' => 'Ciencias']);
		DB::table('categories')->insert(['name' => 'Cocina']);
		DB::table('categories')->insert(['name' => 'Deportes y juegos']);
		DB::table('categories')->insert(['name' => 'Derecho']);
		DB::table('categories')->insert(['name' => 'Economia']);
		DB::table('categories')->insert(['name' => 'Empresa']);
		DB::table('categories')->insert(['name' => 'Fotografia']);
		DB::table('categories')->insert(['name' => 'Guías de viaje']);
		
		DB::table('categories')->insert(['name' => 'Historia']);
		DB::table('categories')->insert(['name' => 'Idiomas']);
		DB::table('categories')->insert(['name' => 'Infantil']);
		DB::table('categories')->insert(['name' => 'Informática']);
		DB::table('categories')->insert(['name' => 'Ingeniería']);
		DB::table('categories')->insert(['name' => 'Juvenil']);
		DB::table('categories')->insert(['name' => 'Libros de texto y Formación']);
		DB::table('categories')->insert(['name' => 'Literatura']);
		DB::table('categories')->insert(['name' => 'Manualidades']);
		DB::table('categories')->insert(['name' => 'Medicina']);
		DB::table('categories')->insert(['name' => 'Música']);
		DB::table('categories')->insert(['name' => 'Novela']);
		DB::table('categories')->insert(['name' => 'Psicología']);
		DB::table('categories')->insert(['name' => 'Romantica']);
		DB::table('categories')->insert(['name' => 'Salud']);
		DB::table('categories')->insert(['name' => 'Otros...']);
		/*DB::table('categories')->delete();
		Category::create(['name' => 'Arte']);
		Category::create(['name' => 'Autoayuda y Espiritualidad']);
		Category::create(['name' => 'Ciencias Humanas']);
		Category::create(['name' => 'Ciencias Políticas y Sociales']);
		Category::create(['name' => 'Ciencias']);
		Category::create(['name' => 'Cocina']);
		Category::create(['name' => 'Deportes y juegos']);
		Category::create(['name' => 'Derecho']);
		Category::create(['name' => 'Economia']);
		Category::create(['name' => 'Empresa']);
		Category::create(['name' => 'Fotografia']);
		Category::create(['name' => 'Guías de viaje']);
		
		Category::create(['name' => 'Historia']);
		Category::create(['name' => 'Idiomas']);
		Category::create(['name' => 'Infantil']);
		Category::create(['name' => 'Informática']);
		Category::create(['name' => 'Ingeniería']);
		Category::create(['name' => 'Juvenil']);
		Category::create(['name' => 'Libros de texto y Formación']);
		Category::create(['name' => 'Literatura']);
		Category::create(['name' => 'Manualidades']);
		Category::create(['name' => 'Medicina']);
		Category::create(['name' => 'Música']);
		Category::create(['name' => 'Novela']);
		Category::create(['name' => 'Psicología']);
		Category::create(['name' => 'Romantica']);
		Category::create(['name' => 'Salud']);
		Category::create(['name' => 'Otros...']);*/

	}
}
