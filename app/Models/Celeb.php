<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Celeb extends Model
{
    protected $table = 'celebs';
    protected $fillable = ['title','description','picture','stars'];
    use HasFactory;
}
