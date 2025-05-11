<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cooming extends Model
{
    protected $table = 'coomings';
    protected $fillable = ['id','title','description','picture'];
    use HasFactory;
}
