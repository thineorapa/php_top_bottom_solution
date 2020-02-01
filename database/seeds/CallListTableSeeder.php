<?php

use Illuminate\Database\Seeder;
use App\CallList;

class CallListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CallList::create([
            'name' => 'Name 1',
            'level' => 1,
            'call_group_id' => 1
        ]);

        CallList::create([
            'name' => 'Name 2',
            'level' => 2,
            'call_group_id' => 1
        ]);

        CallList::create([
            'name' => 'Name 3',
            'level' => 3,
            'call_group_id' => 1
        ]);

        CallList::create([
            'name' => 'Name 4',
            'level' => 4,
            'call_group_id' => 1
        ]);
    }
}
