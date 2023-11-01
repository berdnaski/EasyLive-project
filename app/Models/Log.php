<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Log extends Model
{
    protected $fillable = ['user_id', 'activity', 'realized_at', 'status', 'response'];
    use HasFactory;
}
