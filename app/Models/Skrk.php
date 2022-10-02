<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skrk extends Model
{
    use HasFactory;

    protected $primarykey = 'gid';

    protected $guarded = [];

    public $timestamps = false;

    // public $incrementing = false;

    protected $table = 'juli';
}
