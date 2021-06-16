<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Data extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "data";
    protected $primaryKey = "id"
    protected $fillable = [
        'id',
        'nim',
        'nama',
        'Jurusan',
        'ttl',
        'alamat',
        'orpil',
        'alasan',
        'statusform'
    ];
}
