<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['nombre'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
