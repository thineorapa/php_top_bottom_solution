<?php

use Illuminate\Database\Seeder;

use App\CallGroup;

class CallGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CallGroup::create([
            'name' => 'Group 1'
        ]);
        CallGroup::create([
            'name' => 'Group 2'
        ]);
        CallGroup::create([
            'name' => 'Group 3'
        ]);
    }
}
