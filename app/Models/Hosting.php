<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hosting extends Model
{
    use HasFactory;

    // Table name if not using the default plural form
    protected $table = 'hostings';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'price',
        'status',
        'user_id',
    ];

    // Enum cast for status
    protected $casts = [
        'status' => 'string',
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // If needed, define additional relationships (e.g., transactions related to hosting)
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
