<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Table name if not using the default plural form
    protected $table = 'roles';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'description',
        'permissions',
    ];

    // Casting JSON attributes to an array
    protected $casts = [
        'permissions' => 'array',
    ];

    // define relationships here if necessary (e.g., roles can belong to many users)
    public function users()
{
    return $this->belongsToMany(User::class);
}


}
