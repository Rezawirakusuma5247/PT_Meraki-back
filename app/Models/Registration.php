<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = ['pelatihan_id', 'name', 'email', 'number', 'social_media', 'role'];

    public function pelatihan()
    {
        return $this->belongsTo(Pelatihan::class);
    }
}
