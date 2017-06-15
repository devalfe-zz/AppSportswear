<?php

use Illuminate\Database\Seeder;

class SubmenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $menus = Menu::all();
        foreach ($menus as $menu) {
            # code...
            $tr = rand(0,5);
            for ($i=0; $i < $tr ; $i++) { 
                # code...
                Submenu::create(
                [
                    'name' => "submenu $i";
                    'menu_id' => $menu->id;
                ]
                )
            }
           
        }
    }
}
