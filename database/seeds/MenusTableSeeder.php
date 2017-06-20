<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use AppSportswear\Menu;
class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            for ($i=0; $i < 10 ; $i++) { 
                # code...
                Menu::create(
                [
                    'name' => "menu$i"
                ]);
            }
           
       
    }
}
