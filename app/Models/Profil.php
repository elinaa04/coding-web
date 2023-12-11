<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{

    use HasFactory;
    protected $table = 'profileguru';
    protected $primaryKey = 'nip';
    protected $fillable = [
        'nip',
        'namaLengkap',
        'tanggalLahir',
        'jenisKelamin',
        'image',
    ];
    public $timestamps = false;
    
    public function User()
    {
        return $this->belongsTo(User::class, 'loginguru_nip');
    }
}
