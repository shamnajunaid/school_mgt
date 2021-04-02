<?php

use Illuminate\Database\Seeder;
use App\Models\Term;
class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Term::insert([['title'=>"One"],['title'=>"Two"],['title'=>"Three"]]);
    }
}
