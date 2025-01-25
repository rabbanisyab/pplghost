<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Table name if not using the default plural form
    protected $table = 'transactions';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'user_id',
        'hosting_id',
        'amount',
        'type',
        'status',
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function hosting()
    {
        return $this->belongsTo(Hosting::class);
    }
}
