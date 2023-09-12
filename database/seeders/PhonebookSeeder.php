<?php

namespace Database\Seeders;

use App\Models\ProviderList;
use Illuminate\Database\Seeder;

class PhonebookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(Phonebook::class,10)->create();
        ProviderList::factory()->count(10)->create();
        //
    }
}
