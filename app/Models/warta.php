<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warta extends Model
{
    use HasFactory;

    protected $table = 'tb_warta';

    public function penulis()
    {
        return $this->belongsTo(User::class, 'author');
    }
}
