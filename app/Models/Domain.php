<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari default plural form
    protected $table = 'domains';

    // Kolom yang bisa diisi (mass assignment)
    protected $fillable = [
        'name',
        'user_id',
        'registration_date',
        'expiration_date',
        'status',
    ];

    // Casting atribut ke tipe data spesifik
    protected $casts = [
        'registration_date' => 'date',
        'expiration_date' => 'date',
    ];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Aktifkan timestamps jika menggunakan created_at dan updated_at
    public $timestamps = true;
}
