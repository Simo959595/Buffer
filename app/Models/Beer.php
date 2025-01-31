<?php

namespace App\Models;

use App\Models\Beer;
use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = ["name", "type", "cl", "nat", "description", "img"];
}
