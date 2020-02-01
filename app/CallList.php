<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CallGroup;

class CallList extends Model
{
    protected $fillable = ['level'];
    //
    // public function call_group()
    // {
    //     return $this->belongsTo(CallGroup::class);
    // }
}
