<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\CallList;

class CallGroup extends Model
{
    //

    public function call_lists()
    {
        return $this->hasMany(CallList::class);
    }
}
