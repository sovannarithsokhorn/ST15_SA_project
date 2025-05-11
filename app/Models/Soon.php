<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soon extends Model
{
    protected $table = 'soons';
    protected $fillable = ['title','description','picture'];
    use HasFactory;
}
