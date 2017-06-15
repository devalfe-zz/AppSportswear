<?php

use Illuminate\Database\Seeder;
use AppSportswear\Menu;
use AppSportswear\Submenu;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        
        Menu::truncate();
        Submenu::truncate();

        $this->call(MenusTableSeeder::class);
        $this->call(SubmenusTableSeeder::class);
        
    }
}
