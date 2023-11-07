<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Live extends Model
{
    protected $fillable = ['title', 'description', 'url', 'youtube_url'];
    protected $primaryKey = 'id';
    protected $table = 'live_streams';

    public function user(){
        return $this->belongsTo(User::class);
    }
}
