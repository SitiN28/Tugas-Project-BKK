<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;
    protected $table = "lamaran";
    protected $PrimaryKey = "id";
    protected $guarded = [''];
    protected $KeyType ="string";
}
