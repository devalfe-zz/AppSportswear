<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use AppSportswear\Menu;
use AppSportswear\Submenu;
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
        $registro = 0;
        foreach ($menus as $menu) {
            # code...
            $tr = mt_rand(0,5);
            for ($i=0; $i < $tr ; $i++) { 
                $registro++;
                Submenu::create(
                [
                    'name' => "submenu $registro",
                    'menu_id' => $menu->id
                ]);
            }
           
        }
    }
}
