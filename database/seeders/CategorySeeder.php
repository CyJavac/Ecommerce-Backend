<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria_elec = new Category();
        $categoria_elec->name = 'Electrodomestico';
        $categoria_elec->description = "Esta es la descipcion";
        $categoria_elec->save();

        $categoria_2 = new Category();
        $categoria_2->name = 'Ropa';
        $categoria_2->description = "Esta es la descipcion de la ropa";
        $categoria_2->save();


    }
}
