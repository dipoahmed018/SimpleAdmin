<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HTMLSnippet extends Model
{
    use HasFactory;

    protected $table = 'html_snippet';

    protected $fillable = ['title', 'description', 'snippet'];
}
