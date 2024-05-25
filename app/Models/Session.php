<?php
//app/Models/Session.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id', 'user_id', 'ip_address', 'user_agent', 'payload', 'last_activity',
    ];
}