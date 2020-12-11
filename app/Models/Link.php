<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $table = '_link';
    protected $primaryKey = '_link_id';
    protected $fillable = [
        'name',
        'url'
    ];
}
