<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class course extends Model
{
    use HasFactory;
    use HasApiTokens;

    protected $fillabe = [
        'name',
        'code'
    ];
    
    public function apprentices(){
        return $this->hasMany(Apprentices::class);
    }
}
