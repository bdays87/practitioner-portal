<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mycdp extends Model
{
    public function attachments(){
        return $this->hasMany(Mycdpattachment::class);
    }
}
