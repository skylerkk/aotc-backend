<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anime extends Model
{
    use HasFactory;
    protected $table = 'anime';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
}
