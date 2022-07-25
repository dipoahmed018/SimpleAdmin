<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PDFDownload extends Model
{
    use HasFactory;

    protected $table = 'pdf_download';

    protected $fillable = ['title', 'file'];
}
