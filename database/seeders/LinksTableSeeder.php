<?php


//use Illuminate\Database\Eloquent\Factories\Factory;
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     \App\Models\Link::factory(5)->create();
    }
}
