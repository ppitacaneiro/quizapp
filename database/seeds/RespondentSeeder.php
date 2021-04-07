<?php

use App\Respondent;
use Illuminate\Database\Seeder;

class RespondentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Respondent::class)->create();
        factory(App\Respondent::class, 50)->create()->each(function ($respondent) {
            $respondent->create();
        });
    }
}
