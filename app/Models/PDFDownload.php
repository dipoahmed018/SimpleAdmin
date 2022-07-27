<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class PDFDownload extends Model
{
    use HasFactory;

    protected $table = 'pdf_download';

    protected $fillable = ['title', 'file'];

    protected $appends = ['file_url'];

    public function fileUrl(): Attribute
    {
        return new Attribute(
            get: fn ($value) => Storage::disk('public')->url($this->file),
        );
    }
}
