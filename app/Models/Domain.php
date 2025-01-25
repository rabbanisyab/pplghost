<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    // Table name if not using the default plural form
    protected $table = 'domains';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'user_id',
        'registration_date',
        'expiration_date',
        'status',
    ];

    // Casting attributes to specific types
    protected $casts = [
        'registration_date' => 'date',
        'expiration_date' => 'date',
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
