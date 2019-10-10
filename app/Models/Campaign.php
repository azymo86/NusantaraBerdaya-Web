<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    // protected $fillable = ['title', 'description'];  // protect whitelist
    protected $guarded = ['id', 'created_at', 'updated_at'];  // protect blacklist


}
