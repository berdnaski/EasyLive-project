<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketGate extends Model
{
    use HasFactory;

    protected $table = 'ticket_gates';
    protected $fillable = ['email', 'phone', 'name', 'user_id'];
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
