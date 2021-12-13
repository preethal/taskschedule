<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Quotes;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

         Quotes::create([
        'wishes' => 'Hi, Good Morning!',
        'best_quotes' => 'May you will get all your wishes but one, so you always have something to strive for." - An Irish blessing',
    ]);

        Quotes::create([
        'wishes' => 'Hi, Good Morning!',
        'best_quotes' => 'Good luck is a residue of preparation',
    ]);

        Quotes::create([
        'wishes' => 'Hello, Good Afternoon!',
        'best_quotes' => 'Keep your best wishes close to your heart and watch what happens',
    ]);

         Quotes::create([
        'wishes' => 'Hello, Good Morning!',
        'best_quotes' => 'You are smart, you are funny, you are more important than money. If I could have one wish, it is that your day be filled with bliss',
    ]);
    }
}
