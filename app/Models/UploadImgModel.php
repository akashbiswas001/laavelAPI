<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadImgModel extends Model
{
    protected $table='image';
    public $timestamps = false;
    protected $fillable = [];
}
