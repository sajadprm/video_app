<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=[
            'ورزشی'=>[
                'slug'=>'sport',
                'icon'=>'fas fa-futbol',

            ],
            'سینما'=>[
                'slug'=>'cinema',
                'icon'=>'fas fa-film',
            ],
            'گردشگری'=>[
                'slug'=>'suitcase',
                'icon'=>'fas fa-suitcase',
            ],
            'تکنولوژی'=>[
                'slug'=>'tech',
                 'icon'=>'fas fa-desktop'
            ]
        ];
        foreach($categories as $categoryName=>$details )
        {
           Category::create(
              [
                  'name'=>$categoryName,
                  'slug'=>$details['slug'],
                   'icon'=>$details['icon']
              ]
           );
        }
    }


}
