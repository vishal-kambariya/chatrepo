<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Message extends Model
{
    use HasFactory;
    public $fillable=['message'];
    public function User()
    {  
        return $this->belongsTo(User::class);
    }
}
