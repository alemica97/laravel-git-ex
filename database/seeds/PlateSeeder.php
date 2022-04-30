<?php

use App\Plate;
use Illuminate\Database\Seeder;

class PlateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plates = [
            [
                'title' => 'carbonara',
                'price' => 24.50,
                'description' => 'pasta, uova, guanciale, pecorino',
                'category' => 'primi',
            ],
            [
                'title' => 'amatriciana',
                'price' => 20.50,
                'description' => 'pasta, cipolla, guanciale, salsa,pecorino',
                'category' => 'primi',
            ],
            [
                'title' => 'tiramisù dorato',
                'price' => 20.50,
                'description' => 'savoiardi, caffè, mascarpone, uova, oro, cacao',
                'category' => 'dolci',
            ]
        ];

        foreach($plates as $plate){
            $new_plate = new Plate();

            $new_plate->title = $plate['title'];
            $new_plate->price = $plate['price'];
            $new_plate->description = $plate['description'];
            $new_plate->category = $plate['category'];
            
            $new_plate->save();
        }
    }
}
