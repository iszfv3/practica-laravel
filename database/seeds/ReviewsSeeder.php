<?php

use Illuminate\Database\Seeder;
use App\Review;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i=0;$i<3;$i++){

    		Review::create([
        	'name' 				=>	'Vacas locas'.$i,
        	'votes'				=>	(33+$i),
        	'fulldescription'			=>	'lalala'.$i
        ]);
    	}
         
    }
}
