<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        for ($i=0; $i < 3; $i++) { 
        	Book::create([
        	'name' 		=>	'Viaje al centro de la tierra'.$i,
        	'author'	=>	'Julio Verne'.$i,
        	'isbn'		=>	'14445884'.$i
        ]);
        }
        
    }
}
